<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aviva_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Aviva extends Controller
{
    public function index()
    {
        has_access(17);
        $this->data['rows'] = Aviva_model::orderBy('id', 'DESC')
            ->where('d_status', 0)
            ->get();

        foreach ($this->data['rows'] as $row) {
            $row->content_data = json_decode($row->content, true);
        }



        return view('admin.aviva.index', $this->data);
    }

    public function add(Request $request)
    {
        has_access(17);
        $input = $request->all();
        // pr($input);
        if ($input) {
            $content  = $request->all();






            if (!empty($input['status'])) {
                $content['status'] = 1;
            } else {
                $content['status'] = 0;
            }

            if (!empty($input['featured'])) {
                $content['featured'] = 1;
            } else {
                $content['featured'] = 0;
            }
            $content['meta_title'] = $input['meta_title'];
            $content['meta_description'] = $input['meta_description'];
            $content['meta_keywords'] = $input['meta_keywords'];
            $content['name'] = $input['name'];
            $content['title'] = $input['title'];
            // $data['heading'] = $input['heading'];
            // $data['delivery_time'] = $input['delivery_time'];
            // $data['description'] = $input['description'];
            // $data['about_return'] = $input['about_return'];



            // $data['price'] = $input['price'];
            // $data['qty'] = $input['qty'];

            $content['description'] = $input['description'];
            $data = [
                'slug' => checkSlug(Str::slug($content['name'], '-'), 'aviva'),
                'meta_title' => $input['meta_title'] ?? '',
                'meta_description' => $input['meta_description'] ?? '',
                'meta_keywords' => $input['meta_keywords'] ?? '',
                'name' => $input['name'] ?? '',
                'title' => $input['title'] ?? '',
                'description' => $input['description'] ?? '',
                'status' => !empty($input['status']) ? 1 : 0,
                'featured' => !empty($input['featured']) ? 1 : 0,


            ];

            for ($i = 1; $i <= 10; $i++) {
                $field = 'image' . $i;

                if ($request->hasFile($field)) {
                    $request->validate([
                        $field => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);

                    $image = $request->file($field)->store('public/aviva/');

                    if (!empty(basename($image))) {
                        $content[$field] = basename($image);

                        if ($i == 1) {
                            $data[$field] = basename($image);
                        }
                    }
                }
            }

            $data['content'] = json_encode($content);





            $id = Aviva_model::create($data)->id;
            $this->saveSpecificationRepeater($id, $input);
            $this->saveColourRepeater($id, $input);
            $this->saveDesignRepeater($id, $input);



            return redirect('admin/aviva/')
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['enable_editor'] = true;

        return view('admin.aviva.index', $this->data);
    }
    public function edit(Request $request, $id)
    {
        has_access(17);
        $product = Aviva_model::find($id);
        $input = $request->all();

        if ($input) {
            $content = json_decode($product->content, true) ?? [];

            for ($i = 1; $i <= 10; $i++) {
                $field = 'image' . $i;

                if ($request->hasFile($field)) {
                    $request->validate([
                        $field => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);

                    $image = $request->file($field)->store('public/aviva/');
                    $filename = basename($image);

                    if (!empty($image)) {
                      
                        if ($i == 1 || $i == 2) {
                            $oldImage = $product->$field ?? null;
                            if (!empty($oldImage)) {
                                removeImage("aviva/" . $oldImage);
                            }
                            $product->$field = $filename; 
                        } else {
                            $oldImage = $content[$field] ?? null;
                            if (!empty($oldImage)) {
                                removeImage("aviva/" . $oldImage);
                            }
                            $content[$field] = $filename; 
                        }
                    }
                }
            }

            $otherInputs = $request->except(array_map(fn($i) => 'image' . $i, range(1, 10)));

            $explicitFields = ['status', 'featured', 'meta_title', 'meta_description', 'meta_keywords', 'name', 'title', 'description'];
            foreach ($explicitFields as $field) {
                unset($otherInputs[$field]);
            }

            $content = array_merge($content, $otherInputs);

            $content['status'] = !empty($input['status']) ? 1 : 0;
            $content['featured'] = !empty($input['featured']) ? 1 : 0;
            $content['meta_title'] = $input['meta_title'] ?? '';
            $content['meta_description'] = $input['meta_description'] ?? '';
            $content['meta_keywords'] = $input['meta_keywords'] ?? '';
            $content['name'] = $input['name'] ?? '';
            $content['title'] = $input['title'] ?? '';
            $content['description'] = $input['description'] ?? '';

            $product->slug = checkSlug(Str::slug($content['name'], '-'), 'aviva', $product->id);

            $product->content = json_encode($content);
            $product->update();

            $this->saveSpecificationRepeater($product->id, $input);
            $this->saveColourRepeater($product->id, $input);
            $this->saveDesignRepeater($product->id, $input);

            return redirect('admin/aviva/edit/' . $id)
                ->with('success', 'Content Updated Successfully');
        }





        $this->data['row'] = $product;

        if (!empty($this->data['row']->content)) {
            $this->data['content'] = json_decode($this->data['row']->content, true);
        }

        $this->data['enable_editor'] = true;


        return view('admin.aviva.index', $this->data);
    }


    public function saveSpecificationRepeater($productId, $input)
    {
        $processedIds = [];

        if (!empty($input['cover_name'])) {
            foreach ($input['cover_name'] as $i => $cover_name) {
                $imageName = null;
                $coverId = $input['cover_id'][$i] ?? null;
                $detail = $input['detail'][$i] ?? null;

                if (isset($input['cover_image'][$i]) && $input['cover_image'][$i]->isValid()) {
                    $image = $input['cover_image'][$i];
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('aviva', $imageName, 'public');
                } elseif ($coverId) {
                    $existing = DB::table('aviva_specifications')->where('id', $coverId)->first();
                    $imageName = $existing->cover_image ?? null;
                }

                if ($coverId) {
                    DB::table('aviva_specifications')->where('id', $coverId)->update([
                        'title' => $cover_name,
                        'order_no' => $input['co_order_no'][$i] ?? 0,
                        'cover_image' => $imageName,
                        'detail' => $detail,
                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $coverId;
                } else {
                    $newId = DB::table('aviva_specifications')->insertGetId([
                        'product_id' => $productId,
                        'title' => $cover_name,
                        'order_no' => $input['co_order_no'][$i] ?? 0,
                        'cover_image' => $imageName,
                        'detail' => $detail,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $newId;
                }
            }
        }

        DB::table('aviva_specifications')
            ->where('product_id', $productId)
            ->whereNotIn('id', $processedIds)
            ->delete();
    }


    public function saveColourRepeater($productId, $input)
    {
        $processedIds = [];

        if (!empty($input['colour_name'])) {
            foreach ($input['colour_name'] as $i => $colour_name) {
                $imageName = null;
                $colourId = $input['colour_id'][$i] ?? null;

                // pr($colourId);


                if (isset($input['colour_image'][$i]) && $input['colour_image'][$i]->isValid()) {
                    $image = $input['colour_image'][$i];
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('aviva', $imageName, 'public');
                } elseif ($colourId) {
                    $existing = DB::table('aviva_colours')->where('id', $colourId)->first();
                    $imageName = $existing->colour_image ?? null;
                }

                if ($colourId) {
                    DB::table('aviva_colours')->where('id', $colourId)->update([
                        'title' => $colour_name,
                        'order_no' => $input['c_order_no'][$i] ?? 0,
                        'colour_image' => $imageName,

                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $colourId;
                } else {
                    $newId = DB::table('aviva_colours')->insertGetId([
                        'product_id' => $productId,
                        'title' => $colour_name,
                        'order_no' => $input['c_order_no'][$i] ?? 0,
                        'colour_image' => $imageName,

                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $newId;
                }
            }
        }

        DB::table('aviva_colours')
            ->where('product_id', $productId)
            ->whereNotIn('id', $processedIds)
            ->delete();
    }

    public function saveTypeRepeater($productId, $input)
    {
        $processedIds = [];

        if (!empty($input['type_name'])) {
            foreach ($input['type_name'] as $i => $colour_name) {
                $imageName = null;
                $colourId = $input['type_id'][$i] ?? null;

                // pr($colourId);




                if ($colourId) {
                    DB::table('product_type')->where('id', $colourId)->update([
                        'title' => $colour_name,
                        'order_no' => $input['order_no'][$i] ?? 0,

                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $colourId;
                } else {
                    $newId = DB::table('product_type')->insertGetId([
                        'product_id' => $productId,
                        'title' => $colour_name,
                        'order_no' => $input['order_no'][$i] ?? 0,

                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $newId;
                }
            }
        }

        DB::table('product_type')
            ->where('product_id', $productId)
            ->whereNotIn('id', $processedIds)
            ->delete();
    }


    public function saveDesignRepeater($productId, $input)
    {
        $processedIds = [];

        if (!empty($input['size_name'])) {
            foreach ($input['size_name'] as $i => $size_name) {
                $imageName = null;
                $sizeId = $input['size_id'][$i] ?? null;

                // pr($sizeId);


                if (isset($input['size_image'][$i]) && $input['size_image'][$i]->isValid()) {
                    $image = $input['size_image'][$i];
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('aviva', $imageName, 'public');
                } elseif ($sizeId) {
                    $existing = DB::table('aviva_designs')->where('id', $sizeId)->first();
                    $imageName = $existing->size_image ?? null;
                }

                if ($sizeId) {
                    DB::table('aviva_designs')->where('id', $sizeId)->update([
                        'title' => $size_name,
                        'order_no' => $input['s_order_no'][$i] ?? 0,
                        'size_image' => $imageName,

                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $sizeId;
                } else {
                    $newId = DB::table('aviva_designs')->insertGetId([
                        'product_id' => $productId,
                        'title' => $size_name,
                        'order_no' => $input['s_order_no'][$i] ?? 0,
                        'size_image' => $imageName,

                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $newId;
                }
            }
        }

        DB::table('aviva_designs')
            ->where('product_id', $productId)
            ->whereNotIn('id', $processedIds)
            ->delete();
    }


    public function delete($id)
    {
        has_access(17);
        $product = Aviva_model::find($id);
        $product->d_status = 1;
        // if (!empty($product->image)) {
        //     removeImage("products/" . $product->image);
        // }
        $product->update();
        return redirect('admin/aviva/')
            ->with('error', 'Content deleted Successfully');
    }
}

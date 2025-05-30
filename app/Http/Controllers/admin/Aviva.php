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
        $this->data['rows'] = Aviva_model::orderBy('id', 'DESC')->where('d_status', 0)->get();

        // foreach ($this->data['rows'] as $row) {
        //     $row->cat_name = $row->category_row->name;
        // }

        return view('admin.aviva.index', $this->data);
    }
    public function add(Request $request)
    {
        has_access(17);
        $input = $request->all();
        // pr($input);
        if ($input) {
            $data = array();



            for ($i = 1; $i <= 10; $i++) {
                $field = 'image' . $i;

                if ($request->hasFile($field)) {
                    $request->validate([
                        $field => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);

                    $image = $request->file($field)->store('public/aviva/');

                    if (!empty(basename($image))) {
                        $data[$field] = basename($image);
                    }
                }
            }



            if (!empty($input['status'])) {
                $data['status'] = 1;
            } else {
                $data['status'] = 0;
            }

            if (!empty($input['featured'])) {
                $data['featured'] = 1;
            } else {
                $data['featured'] = 0;
            }
            $data['meta_title'] = $input['meta_title'];
            $data['meta_description'] = $input['meta_description'];
            $data['meta_keywords'] = $input['meta_keywords'];
            $data['name'] = $input['name'];
            $data['title'] = $input['title'];
            // $data['heading'] = $input['heading'];
            // $data['delivery_time'] = $input['delivery_time'];
            // $data['description'] = $input['description'];
            // $data['about_return'] = $input['about_return'];



            // $data['price'] = $input['price'];
            // $data['qty'] = $input['qty'];
            $data['slug'] = checkSlug(Str::slug($data['name'], '-'), 'aviva');
            $data['description'] = $input['description'];
     



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
        // pr($input);
        if ($input) {
            $data = array();



            for ($i = 1; $i <= 10; $i++) {
                $field = 'image' . $i;

                if ($request->hasFile($field)) {

                    $request->validate([
                        $field => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);

                    $image = $request->file($field)->store('public/aviva/');

                    if (!empty($image)) {
                        // Old image delete karne ka logic
                        $oldImageField = 'image' . $i;
                        if (!empty($product->$oldImageField)) {
                            removeImage("products/" . $product->$oldImageField);
                        }

                        // New image assign karna
                        $product->$oldImageField = basename($image);
                    }
                }
            }



            if (!empty($input['status'])) {
                $product->status = 1;
            } else {
                $product->status = 0;
            }

            if (!empty($input['featured'])) {
                $product->featured = 1;
            } else {
                $product->featured = 0;
            }
            $product->meta_title = $input['meta_title'];
            $product->meta_description = $input['meta_description'];
            $product->meta_keywords = $input['meta_keywords'];
            $product->name = $input['name'];
            $product->title = $input['title'];
            // $product->heading = $input['heading'];
            // $product->delivery_time = $input['delivery_time'];
            $product->description = $input['description'];
            // $product->about_return = $input['about_return'];



            // $product->price = $input['price'];
            // $product->qty = $input['qty'];
            $product->slug = checkSlug(Str::slug($product->name, '-'), 'aviva', $product->id);
            // $product->detail = $input['detail'];


            // $product->category = $input['category'];


            $product->update();
            $this->saveSpecificationRepeater($product->id, $input);
            $this->saveColourRepeater($product->id, $input);
            $this->saveDesignRepeater($product->id, $input);




            return redirect('admin/aviva/edit/' . $request->segment(4))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Aviva_model::find($id);
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
                        'order_no' => $input['order_no'][$i] ?? 0,
                        'cover_image' => $imageName,
                        'detail' => $detail,
                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $coverId;
                } else {
                    $newId = DB::table('aviva_specifications')->insertGetId([
                        'product_id' => $productId,
                        'title' => $cover_name,
                        'order_no' => $input['order_no'][$i] ?? 0,
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
                        'order_no' => $input['order_no'][$i] ?? 0,
                        'colour_image' => $imageName,

                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $colourId;
                } else {
                    $newId = DB::table('aviva_colours')->insertGetId([
                        'product_id' => $productId,
                        'title' => $colour_name,
                        'order_no' => $input['order_no'][$i] ?? 0,
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
                        'order_no' => $input['order_no'][$i] ?? 0,
                        'size_image' => $imageName,

                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $sizeId;
                } else {
                    $newId = DB::table('aviva_designs')->insertGetId([
                        'product_id' => $productId,
                        'title' => $size_name,
                        'order_no' => $input['order_no'][$i] ?? 0,
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

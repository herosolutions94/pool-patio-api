<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Renaissance_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Renaissance extends Controller
{
    public function index()
    {
        has_access(17);
        $this->data['rows'] = Renaissance_model::orderBy('id', 'DESC')->where('d_status', 0)->get();

        // foreach ($this->data['rows'] as $row) {
        //     $row->cat_name = $row->category_row->name;
        // }

        return view('admin.renaissance.index', $this->data);
    }
    public function add(Request $request)
    {
        has_access(17);
        $input = $request->all();

        if ($input) {
            $data = array();



            for ($i = 1; $i <= 10; $i++) {
                $field = 'image' . $i;

                if ($request->hasFile($field)) {
                    $request->validate([
                        $field => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);

                    $image = $request->file($field)->store('public/renaissance/');

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
            $data['sec1_heading'] = $input['sec1_heading'];
            $data['sec2_heading'] = $input['sec2_heading'];
            // $data['heading'] = $input['heading'];
            // $data['delivery_time'] = $input['delivery_time'];
            // $data['description'] = $input['description'];
            // $data['about_return'] = $input['about_return'];



            // $data['price'] = $input['price'];
            // $data['qty'] = $input['qty'];
            $data['slug'] = checkSlug(Str::slug($data['name'], '-'), 'renaissance');
            $data['description'] = $input['description'];




            $id = Renaissance_model::create($data)->id;
            $this->saveGalleryRepeater($id, $input);
            $this->savefeatureRepeater($id, $input);
            $this->saveDesignRepeater($id, $input);



            return redirect('admin/renaissance/')
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['enable_editor'] = true;

        return view('admin.renaissance.index', $this->data);
    }
    public function edit(Request $request, $id)
    {
        has_access(17);
        $product = Renaissance_model::find($id);
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

                    $image = $request->file($field)->store('public/renaissance/');

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
            // $product->title = $input['title'];
            // $product->heading = $input['heading'];
            // $product->delivery_time = $input['delivery_time'];
            $product->description = $input['description'];
            $product->sec2_heading = $input['sec2_heading'];
            $product->sec1_heading = $input['sec1_heading'];
            // $product->about_return = $input['about_return'];



            // $product->price = $input['price'];
            // $product->qty = $input['qty'];
            $product->slug = checkSlug(Str::slug($product->name, '-'), 'renaissance', $product->id);
            // $product->detail = $input['detail'];


            // $product->category = $input['category'];


            $product->update();
            $this->saveGalleryRepeater($product->id, $input);
            $this->savefeatureRepeater($product->id, $input);
            $this->saveDesignRepeater($product->id, $input);




            return redirect('admin/renaissance/edit/' . $request->segment(4))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Renaissance_model::find($id);
        $this->data['enable_editor'] = true;

        return view('admin.renaissance.index', $this->data);
    }

    public function saveGalleryRepeater($productId, $input)
    {
        $processedIds = [];

        if (!empty($input['gallery_name'])) {
            foreach ($input['gallery_name'] as $i => $cover_name) {
                $imageName = null;
                $coverId = $input['gallery_id'][$i] ?? null;

                if (isset($input['gallery_image'][$i]) && $input['gallery_image'][$i]->isValid()) {
                    $image = $input['gallery_image'][$i];
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('renaissance', $imageName, 'public');
                } elseif ($coverId) {
                    $existing = DB::table('renaissance_gallery')->where('id', $coverId)->first();
                    $imageName = $existing->cover_image ?? null;
                }

                if ($coverId) {
                    DB::table('renaissance_gallery')->where('id', $coverId)->update([
                        'title' => $cover_name,
                        'order_no' => $input['g_order_no'][$i] ?? 0,
                        'cover_image' => $imageName,
                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $coverId;
                } else {
                    $newId = DB::table('renaissance_gallery')->insertGetId([
                        'product_id' => $productId,
                        'title' => $cover_name,
                        'order_no' => $input['g_order_no'][$i] ?? 0,
                        'cover_image' => $imageName,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $newId;
                }
            }
        }

        DB::table('renaissance_gallery')
            ->where('product_id', $productId)
            ->whereNotIn('id', $processedIds)
            ->delete();
    }


    public function savefeatureRepeater($productId, $input)
    {
        $processedIds = [];

        if (!empty($input['colour_name'])) {
            foreach ($input['colour_name'] as $i => $colour_name) {
                $imageName = null;
                $colourId = $input['colour_id'][$i] ?? null;
                $detail = $input['detail'][$i] ?? null;

                // pr($colourId);


                // if (isset($input['colour_image'][$i]) && $input['colour_image'][$i]->isValid()) {
                //     $image = $input['colour_image'][$i];
                //     $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                //     $image->storeAs('aviva', $imageName, 'public');
                // } elseif ($colourId) {
                //     $existing = DB::table('aviva_colours')->where('id', $colourId)->first();
                //     $imageName = $existing->colour_image ?? null;
                // }

                if ($colourId) {
                    DB::table('renaissance_feature')->where('id', $colourId)->update([
                        'title' => $colour_name,
                        'order_no' => $input['f_order_no'][$i] ?? 0,
                        'detail' => $detail,

                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $colourId;
                } else {
                    $newId = DB::table('renaissance_feature')->insertGetId([
                        'product_id' => $productId,
                        'title' => $colour_name,
                        'order_no' => $input['f_order_no'][$i] ?? 0,
                        'detail' => $detail,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $newId;
                }
            }
        }

        DB::table('renaissance_feature')
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
                        'order_no' => $input['d_order_no'][$i] ?? 0,

                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $colourId;
                } else {
                    $newId = DB::table('product_type')->insertGetId([
                        'product_id' => $productId,
                        'title' => $colour_name,
                        'order_no' => $input['d_order_no'][$i] ?? 0,

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
                    $image->storeAs('renaissance', $imageName, 'public');
                } elseif ($sizeId) {
                    $existing = DB::table('renaissance_designs')->where('id', $sizeId)->first();
                    $imageName = $existing->size_image ?? null;
                }

                if ($sizeId) {
                    DB::table('renaissance_designs')->where('id', $sizeId)->update([
                        'title' => $size_name,
                        'order_no' => $input['d_order_no'][$i] ?? 0,
                        'size_image' => $imageName,

                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $sizeId;
                } else {
                    $newId = DB::table('renaissance_designs')->insertGetId([
                        'product_id' => $productId,
                        'title' => $size_name,
                        'order_no' => $input['d_order_no'][$i] ?? 0,
                        'size_image' => $imageName,

                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                    $processedIds[] = $newId;
                }
            }
        }

        DB::table('renaissance_designs')
            ->where('product_id', $productId)
            ->whereNotIn('id', $processedIds)
            ->delete();
    }


    public function delete($id)
    {
        has_access(17);
        $product = Renaissance_model::find($id);
        $product->d_status = 1;
        // if (!empty($product->image)) {
        //     removeImage("products/" . $product->image);
        // }
        $product->update();
        return redirect('admin/renaissance/')
            ->with('error', 'Content deleted Successfully');
    }
}

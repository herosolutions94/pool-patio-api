<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial_model;
use Illuminate\Http\Request;

class Testimonials extends Controller
{
    public function index()
    {
        has_access(15);
        $this->data['rows'] = Testimonial_model::orderBy('id', 'DESC')->get();
        return view('admin.testimonials.index', $this->data);
    }
    public function add(Request $request)
    {
        has_access(15);
        $input = $request->all();
        if ($input) {
            $data = array();
            if ($request->hasFile('image')) {

                $request->validate([
                    'image' => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                ]);
                $image = $request->file('image')->store('public/testimonials/');
                if (!empty(basename($image))) {
                    $data['image'] = basename($image);
                }
            }
            if (!empty($input['status'])) {
                $data['status'] = 1;
            } else {
                $data['status'] = 0;
            }
            $data['name'] = $input['name'];
            $data['title'] = $input['title'];

            $data['designation'] = $input['designation'];
            // $data['ratings']=!empty($input['ratings']) ? floatval($input['ratings']) : 0;
            $data['message'] = $input['message'];
            // pr($data);
            $id = Testimonial_model::create($data);
            return redirect('admin/testimonials/')
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['enable_editor'] = true;
        return view('admin.testimonials.index', $this->data);
    }
    public function edit(Request $request, $id)
    {
        has_access(15);
        $testimonial = Testimonial_model::find($id);
        $input = $request->all();
        if ($input) {
            $data = array();
            if ($request->hasFile('image')) {

                $request->validate([
                    'image' => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                ]);
                $image = $request->file('image')->store('public/testimonials/');
                if (!empty($image)) {
                    $testimonial->image = basename($image);
                }
            }
            if (!empty($input['status'])) {
                $testimonial->status = 1;
            } else {
                $testimonial->status = 0;
            }
            $testimonial->name = $input['name'];
            $testimonial->title = $input['title'];

            $testimonial->designation = $input['designation'];
            // $testimonial->ratings=!empty($input['ratings']) ? floatval($input['ratings']) : 0;
            $testimonial->message = $input['message'];
            // pr($data);
            $testimonial->update();
            return redirect('admin/testimonials/')
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Testimonial_model::find($id);
        $this->data['enable_editor'] = true;
        return view('admin.testimonials.index', $this->data);
    }
    public function delete($id)
    {
        has_access(15);
        $testimonial = Testimonial_model::find($id);
        removeImage("testimonials/" . $testimonial->image);
        $testimonial->delete();
        return redirect('admin/testimonials/')
            ->with('error', 'Content deleted Successfully');
    }
}

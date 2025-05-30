<?php

namespace App\Http\Controllers\admin;

use App\Models\Sitecontent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Pages extends Controller
{

    public function home(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 10; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }

            $sec1['title'] = $input['sec1_title'] ?? '';
            $sec1['txt1'] = $input['sec1_txt1'] ?? '';
            $sec1['order_no'] = $input['sec1_order_no'] ?? '';
            $sec1Phto['pics'] = $input['sec1_pics'] ?? '';
            unset($input['sec1_pics'], $input['sec1_order_no'], $input['sec1_title'], $input['sec1_txt1']);
            DB::table('multi_text')->where('section', 'industries-section1')->delete();
            $sec1s = array('order_no' => $sec1['order_no'], 'title' => $sec1['title'], 'txt1' => $sec1['txt1']);
            // pr($sec1Phto);
            if (!empty($request->file('sec1_image')) || !empty($sec1Phto['pics'])) {
                saveMultiMediaFieldsImgs('public/images/', $request->file('sec1_image'), 'sec1_image', 'industries-section1', $sec1Phto['pics'], $sec1s);
            }
            unset($input['sec1_image']);


            // pr($input);
            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_home', $this->data);
    }

    public function aviva_pools(Request $request)
    {
        // has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();

            for ($i = 1; $i <= 20; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:70000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }


            $data = serialize(array_merge($content_row, $input));
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_aviva_pools', $this->data);
    }

    public function browse_jobs(Request $request)
    {
        // has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();

                 if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 1; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                } else {
                    // $input['image'.$i]='';
                }
            }
            // pr($input);

            $data = serialize(array_merge($content_row, $input));
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_browse_jobs', $this->data);
    }

    public function apply_job(Request $request)
    {
        // has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();

            $data = serialize(array_merge($content_row, $input));
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_apply_job', $this->data);
    }

    public function resources(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 10; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }

            $sec1['title'] = $input['sec1_title'] ?? '';
            // $sec1['txt1'] = $input['sec1_txt1'] ?? '';
            $sec1['order_no'] = $input['sec1_order_no'] ?? '';
            $sec1Phto['pics'] = $input['sec1_pics'] ?? '';
            unset($input['sec1_pics'], $input['sec1_order_no'], $input['sec1_title']);
            DB::table('multi_text')->where('section', 'resources-section1')->delete();
            $sec1s = array('order_no' => $sec1['order_no'], 'title' => $sec1['title']);
            // pr($sec1Phto);
            if (!empty($request->file('sec1_image')) || !empty($sec1Phto['pics'])) {
                saveMultiMediaFieldsImgs('public/images/', $request->file('sec1_image'), 'sec1_image', 'resources-section1', $sec1Phto['pics'], $sec1s);
            }
            unset($input['sec1_image']);


            // pr($input);
            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_resources', $this->data);
    }

    public function resource_details(Request $request)
    {
        // has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();

            $data = serialize(array_merge($content_row, $input));
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_resource_details', $this->data);
    }

    public function areas_experties(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 10; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }


            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_areas_experties', $this->data);
    }
    public function areas_experties_tab1(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 5; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }


            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_areas_experties_tab1', $this->data);
    }

    public function areas_experties_tab2(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 5; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }


            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_areas_experties_tab2', $this->data);
    }

    public function hire_talent(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 20; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }

            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_hire_talent', $this->data);
    }

    public function services_template(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 10; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }


            $sec1['title'] = $input['sec1_title'] ?? '';
            $sec1['txt1'] = $input['sec1_txt1'] ?? '';
            $sec1['order_no'] = $input['sec1_order_no'] ?? '';
            $sec1Phto['pics'] = $input['sec1_pics'] ?? '';
            unset($input['sec1_pics'], $input['sec1_order_no'], $input['sec1_title'], $input['sec1_txt1']);
            DB::table('multi_text')->where('section', 'services-template-section6')->delete();
            $sec1s = array('order_no' => $sec1['order_no'], 'title' => $sec1['title'], 'txt1' => $sec1['txt1']);
            // pr($sec1Phto);
            if (!empty($request->file('sec1_image')) || !empty($sec1Phto['pics'])) {
                saveMultiMediaFieldsImgs('public/images/', $request->file('sec1_image'), 'sec1_image', 'services-template-section6', $sec1Phto['pics'], $sec1s);
            }
            unset($input['sec1_image']);

            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_services_template', $this->data);
    }

    public function executive_search(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 20; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }


            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_executive_search', $this->data);
    }


    public function colors(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 13; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }


            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_colors', $this->data);
    }

    public function about_us(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 10; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }


            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        // pr($this->data['row']->code);
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_about_us', $this->data);
    }

    public function board_of_directors(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 7; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }


            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_board_of_directors', $this->data);
    }

    public function executive_group(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 10; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }


            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_executive_group', $this->data);
    }

    public function other_staff(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();

            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_other_staff', $this->data);
    }

    public function story_and_concept(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 10; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }


            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_story_and_concept', $this->data);
    }
    public function why_work_with_elios(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 15; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }


            $sec1['title'] = $input['sec1_title'] ?? '';
            $sec1['txt1'] = $input['sec1_txt1'] ?? '';
            $sec1['order_no'] = $input['sec1_order_no'] ?? '';
            $sec1Phto['pics'] = $input['sec1_pics'] ?? '';
            unset($input['sec1_pics'], $input['sec1_order_no'], $input['sec1_title'], $input['sec1_txt1']);
            DB::table('multi_text')->where('section', 'work-with-elios-section5')->delete();
            $sec1s = array('order_no' => $sec1['order_no'], 'title' => $sec1['title'], 'txt1' => $sec1['txt1']);
            // pr($sec1Phto);
            if (!empty($request->file('sec1_image')) || !empty($sec1Phto['pics'])) {
                saveMultiMediaFieldsImgs('public/images/', $request->file('sec1_image'), 'sec1_image', 'work-with-elios-section5', $sec1Phto['pics'], $sec1s);
            }
            unset($input['sec1_image']);

            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_why_work_with_elios', $this->data);
    }

    public function contact(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();

            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.site_contact', $this->data);
    }

    public function privacy_policy(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }

            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 1; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                } else {
                    // $input['image'.$i]='';
                }
            }
            // pr($input);
            $data = serialize(array_merge($content_row, $input));
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();;
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        $this->data['enable_editor'] = true;
        return view('admin.website_pages.site_privacy', $this->data);
    }

    public function terms_conditions(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {

            $content_row = unserialize($page->code);
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 1; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                } else {
                    // $input['image'.$i]='';
                }
            }
            $data = serialize(array_merge($content_row, $input));
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();;
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        $this->data['enable_editor'] = true;
        return view('admin.website_pages.site_terms_conditions', $this->data);
    }

    public function cta_section(Request $request)
    {
        has_access(12);
        $page = Sitecontent::where('ckey', $request->segment(3))->first();
        if (empty($page)) {
            $page = new Sitecontent;
            $page->ckey = $request->segment(3);
            $page->code = '';
            $page->save();
        }
        $input = $request->all();
        if ($input) {
            if (!empty($page->code)) {
                $content_row = unserialize($page->code);
            } else {
                $content_row = array();
            }
            if (!is_array($content_row))
                $content_row = array();
            for ($i = 1; $i <= 10; $i++) {
                if ($request->hasFile('image' . $i)) {

                    $request->validate([
                        'image' . $i => 'mimes:png,jpg,jpeg,svg,gif,webp|max:40000'
                    ]);
                    $image = $request->file('image' . $i)->store('public/images/');
                    if (!empty($image)) {
                        $input['image' . $i] = basename($image);
                    }
                }
            }

            // pr($input);
            $data = serialize(array_merge($content_row, $input));
            // pr($input);
            $page->ckey = $request->segment(3);
            $page->code = $data;
            $page->save();
            return redirect('admin/pages/' . $request->segment(3))
                ->with('success', 'Content Updated Successfully');
        }
        $this->data['row'] = Sitecontent::where('ckey', $request->segment(3))->first();
        if (!empty($this->data['row']->code)) {
            $this->data['sitecontent'] = unserialize($this->data['row']->code);
        } else {
            $this->data['sitecontent'] = array();
        }
        return view('admin.website_pages.cta_section', $this->data);
    }
}
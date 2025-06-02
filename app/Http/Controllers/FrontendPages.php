<?php

namespace App\Http\Controllers;

use App\Models\Agent_model;
use Illuminate\Support\Facades\DB;
use App\Models\Blog_model;
use App\Models\Blog_categories_model;
use App\Models\Leads_model;
use App\Models\Focus_model;
use App\Models\Job_opportunities_model;
use App\Models\Job_type_model;
use App\Models\Jobs_model;
use App\Models\Locations_model;
use App\Models\Member_model;
use App\Models\Reviews_model;
use App\Models\Service_model;
use App\Models\Specialization_model;
use App\Models\Team_model;
use App\Models\Testimonial_model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use PHPUnit\Util\Log\TeamCity;

class FrontendPages extends Controller
{

    public function home_page(Request $request)
    {
        $this->data['content'] = get_page('home');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
        $this->data['cta_section'] = get_page('cta_section');
        return view('frontend/pages/home',$this->data);
    }

    public function about_page(Request $request)
    {
        $this->data['content'] = get_page('about_us');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
        $this->data['cta_section'] = get_page('cta_section');
        $this->data['industries'] = getMultiText('industries-section1');
        $this->data['testimonials'] = Testimonial_model::orderBy('id', 'ASC')->where('status', '1')->get();
        return view('frontend/pages/about',$this->data);
    }

    public function aviva_pools_page(Request $request)
    {
        $this->data['content'] = get_page('aviva_pools');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
       
        return view('frontend/pages/aviva-pools',$this->data);


    }

    public function renaissance_patio_page(Request $request)
    {
        $this->data['content'] = get_page('renaissance_patio');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
       
        return view('frontend/pages/renaissance-patio',$this->data);


    }

    public function stick_built_page(Request $request)
    {
        $this->data['content'] = get_page('stick_built');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
                $this->data['cta_section'] = get_page('cta_section');

       
        return view('frontend/pages/stick-built',$this->data);


    }

    public function request_quote_page(Request $request)
    {
        $this->data['content'] = get_page('request_quote');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
                $this->data['cta_section'] = get_page('cta_section');

       
        return view('frontend/pages/request-quote',$this->data);


    }

    // public function browse_jobs_page(Request $request)
    // {
    //     $this->data['content'] = get_page('browse_jobs');
    //     $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
    //     $this->data['meta_desc'] = (object)[
    //         'meta_title' => $this->data['content']['meta_title'],
    //         'meta_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_title' => $this->data['content']['meta_title'],
    //         'og_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

    //     ];
    //     // $this->data['cta_section'] = get_page('cta_section');
    //     $this->data['locations'] = Locations_model::orderBy('city', 'ASC')->where('status', '1')->get();
    //     // $this->data['locations'] = Locations_model::with(['country', 'state'])
    //     //     ->orderBy('city', 'ASC')
    //     //     ->where('status', '1')
    //     //     ->get();
    //     $this->data['job_specializations'] = Specialization_model::orderBy('id', 'ASC')->where('status', '1')->get();
    //     $this->data['job_types'] = Job_type_model::orderBy('id', 'ASC')->where('status', '1')->get();
    //     // $this->data['all_jobs'] = Jobs_model::orderBy('id', 'DESC')->where('status', '1')->get();
    //     $this->data['all_jobs'] = Jobs_model::with(['city_row.country', 'city_row.state'])
    //         ->orderBy('id', 'DESC')
    //         ->where('status', '1')
    //         ->get();

    //     exit(json_encode($this->data));
    // }
    // public function job_details_page(Request $request, $slug)
    // {

    //     if (!empty($slug) && $this->data['job'] = Jobs_model::orderBy('id', 'DESC')->where('status', 1)->where('slug', $slug)->get()->first()) {
    //         $this->data['page_title'] = $this->data['job']->title . ' - ' . $this->data['site_settings']->site_name;
    //         $this->data['meta_desc'] = (object)[
    //             'meta_title' => $this->data['job']->meta_title,
    //             'meta_description' => $this->data['job']->meta_description,
    //             'meta_keywords' => $this->data['job']->meta_keywords,
    //             'meta_image' => get_site_image_src('company', $this->data['job']->image),
    //             'og_title' => $this->data['job']->meta_title,
    //             'og_description' => $this->data['job']->meta_description,
    //             'meta_keywords' => $this->data['job']->meta_keywords,
    //             'twitter_image' => get_site_image_src('company', $this->data['job']->image),
    //             'og_image' => get_site_image_src('company', $this->data['job']->image),
    //         ];

    //         $this->data['job']->type = !empty($this->data['job']->job_type_row) ? $this->data['job']->job_type_row->name : '';
    //         $this->data['job']->city = !empty($this->data['job']->city_row) ? $this->data['job']->city_row->city : '';
    //         $this->data['job']->country = !empty($this->data['job']->city_row->country_id) ? get_country_name($this->data['job']->city_row->country_id) : '';
    //         $this->data['job']->state = !empty($this->data['job']->city_row->state_id) ? get_state_name($this->data['job']->city_row->state_id) : '';


    //         $this->data['related_jobs'] = Jobs_model::with(['city_row.country', 'city_row.state'])->where('status', 1)
    //             ->where('id', '!=', $this->data['job']->id)
    //             ->where('company_name', $this->data['job']->company_name)
    //             ->orderBy('id', 'DESC')
    //             ->get();
    //     } else {
    //         $this->data['not_found'] = 1;
    //     }

    //     // if (!empty($slug) && $this->data['blog_post'] = Blog_model::orderBy('id', 'DESC')->where('status', 1)->where('slug', $slug)->get()->first()) {
    //     //     // $this->data['content'] = get_page('blog');
    //     //     $this->data['page_title'] = $this->data['blog_post']->title . ' - ' . $this->data['site_settings']->site_name;
    //     //     $this->data['blog_post']->cat_name = !empty($this->data['blog_post']->category_row) ? $this->data['blog_post']->category_row->name : '';
    //     //     $this->data['blog_post']->created_date = format_date($this->data['blog_post']->created_at, 'd M, Y');
    //     //     $this->data['cta_section'] = get_page('cta_section');
    //     // }

    //     exit(json_encode($this->data));
    // }

    // public function apply_job_page(Request $request)
    // {
    //     $this->data['content'] = get_page('apply_job');
    //     $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
    //     $this->data['meta_desc'] = (object)[
    //         'meta_title' => $this->data['content']['meta_title'],
    //         'meta_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_title' => $this->data['content']['meta_title'],
    //         'og_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

    //     ];
    //     $this->data['cta_section'] = get_page('cta_section');
    //     exit(json_encode($this->data));
    // }

    public function resources_page(Request $request)
    {
        $this->data['content'] = get_page('resources');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
        // $this->data['cta_section'] = get_page('cta_section');
        $this->data['careers'] = getMultiText('resources-section1');
        $this->data['insights_articles'] = Blog_model::orderBy('id', 'DESC')->where('status', '1')->get();
        $this->data['featured_articles'] = Blog_model::orderBy('id', 'DESC')->where('status', '1')->where('featured', 1)->get();
        exit(json_encode($this->data));
    }

    public function resource_details_page(Request $request, $slug)
    {

        if (!empty($slug) && $this->data['resource_post'] = Blog_model::orderBy('id', 'DESC')->where('status', 1)->where('slug', $slug)->get()->first()) {
            $this->data['content'] = get_page('resource_details');
            $this->data['page_title'] = $this->data['resource_post']->title . ' - ' . $this->data['site_settings']->site_name;
            $this->data['meta_desc'] = (object)[
                'meta_title' => $this->data['resource_post']->meta_title,
                'meta_description' => $this->data['resource_post']->meta_description,
                'meta_keywords' => $this->data['resource_post']->meta_keywords,
                'meta_image' => get_site_image_src('blog', $this->data['resource_post']->image),
                'og_title' => $this->data['resource_post']->meta_title,
                'og_description' => $this->data['resource_post']->meta_description,
                'meta_keywords' => $this->data['resource_post']->meta_keywords,
                'twitter_image' => get_site_image_src('blog', $this->data['resource_post']->image),
                'og_image' => get_site_image_src('blog', $this->data['resource_post']->image),
            ];
            $this->data['resource_post']->cat_name = !empty($this->data['resource_post']->category_row) ? $this->data['resource_post']->category_row->name : '';
            $this->data['related_posts'] = $this->data['related_posts'] = Blog_model::where('status', 1)
                ->where('id', '!=', $this->data['resource_post']->id)
                ->where('category', $this->data['resource_post']->category)
                ->orderBy('id', 'DESC')
                ->get();
        } else {
            $this->data['not_found'] = 1;
        }

        exit(json_encode($this->data));
    }

    public function faqs_page(Request $request)
    {
        $this->data['content'] = get_page('faqs');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
        
        $this->data['cta_section'] = get_page('cta_section');
        $this->data['job_opportunities'] = Job_opportunities_model::orderBy('id', 'ASC')->where('status', '1')->get();
        $this->data['testimonials'] = Testimonial_model::orderBy('id', 'ASC')->where('status', '1')->get();

                return view('frontend/pages/faqs',$this->data);
    }

    public function aox_details_page(Request $request, $slug)
    {
        if (!empty($slug) && $this->data['area'] = Job_opportunities_model::orderBy('id', 'DESC')->where('status', 1)->where('slug', $slug)->get()->first()) {
            $this->data['content'] = get_page('areas_experties');

            if (!empty($this->data['area']->content)) {
                $this->data['area_content'] = unserialize($this->data['area']->content);
            }

            $this->data['page_title'] = $this->data['area']->industry_title . ' - ' . $this->data['site_settings']->site_name;
            $this->data['meta_desc'] = (object)[
                'meta_title' => $this->data['area']->meta_title,
                'meta_description' => $this->data['area']->meta_description,
                'meta_keywords' => $this->data['area']->meta_keywords,
                'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
                'og_title' => $this->data['area']->meta_title,
                'og_description' => $this->data['area']->meta_description,
                'meta_keywords' => $this->data['area']->meta_keywords,
                'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
                'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            ];
        } else {
            $this->data['not_found'] = 1;
        }
        exit(json_encode($this->data));
    }

    public function hardscapes_page(Request $request)
    {
        $this->data['content'] = get_page('hardscapes');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
        $this->data['cta_section'] = get_page('cta_section');
        $this->data['job_opportunities'] = Job_opportunities_model::orderBy('id', 'ASC')->where('status', '1')->get();
        $this->data['insights_articles'] = Blog_model::orderBy('id', 'DESC')->where('status', '1')->get();
        $this->data['testimonials'] = Testimonial_model::orderBy('id', 'ASC')->where('status', '1')->get();

                return view('frontend/pages/hardscapes',$this->data);


    }

    public function services_template_page(Request $request)
    {
        $this->data['content'] = get_page('services_template');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
        $this->data['cta_section'] = get_page('cta_section');
        $this->data['hiring_process'] = getMultiText('services-template-section6');
        $this->data['job_opportunities'] = Job_opportunities_model::orderBy('id', 'ASC')->where('status', '1')->get();
        $this->data['testimonials'] = Testimonial_model::orderBy('id', 'ASC')->where('status', '1')->get();
        $this->data['services'] = Service_model::orderBy('id', 'ASC')->where('status', '1')->get();


        exit(json_encode($this->data));
    }

    public function service_details_page(Request $request, $slug)
    {
        if (!empty($slug) && $this->data['service'] = Service_model::orderBy('id', 'DESC')->where('status', 1)->where('slug', $slug)->get()->first()) {
            $this->data['content'] = get_page('services_template');

            if (!empty($this->data['service']->content)) {
                $this->data['service_content'] = unserialize($this->data['service']->content);
            }

            $this->data['page_title'] = $this->data['service']->title . ' - ' . $this->data['site_settings']->site_name;
            $this->data['meta_desc'] = (object)[
                'meta_title' => $this->data['service']->meta_title,
                'meta_description' => $this->data['service']->meta_description,
                'meta_keywords' => $this->data['service']->meta_keywords,
                'meta_image' => get_site_image_src('services', $this->data['service']->image),
                'og_title' => $this->data['service']->meta_title,
                'og_description' => $this->data['service']->meta_description,
                'meta_keywords' => $this->data['service']->meta_keywords,
                'twitter_image' => get_site_image_src('services', $this->data['service']->image),
                'og_image' => get_site_image_src('services', $this->data['service']->image),
            ];
            $this->data['testimonials'] = Testimonial_model::orderBy('id', 'ASC')->where('status', '1')->get();
            $this->data['job_opportunities'] = Job_opportunities_model::orderBy('id', 'ASC')->where('status', '1')->get();
        } else {
            $this->data['not_found'] = 1;
        }
        exit(json_encode($this->data));
    }

    // public function executive_search_page(Request $request)
    // {
    //     $this->data['content'] = get_page('executive_search');
    //     $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
    //     $this->data['meta_desc'] = (object)[
    //         'meta_title' => $this->data['content']['meta_title'],
    //         'meta_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_title' => $this->data['content']['meta_title'],
    //         'og_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

    //     ];
    //     $this->data['cta_section'] = get_page('cta_section');
    //     $this->data['job_opportunities'] = Job_opportunities_model::orderBy('id', 'ASC')->where('status', '1')->get();
    //     $this->data['executive_members'] = Team_model::orderBy('id', 'DESC')->where('status', '1')->where('ex_members', 1)->get();
    //     $this->data['testimonials'] = Testimonial_model::orderBy('id', 'ASC')->where('status', '1')->get();

    //     exit(json_encode($this->data));
    // }

    public function colors_page(Request $request)
    {
        $this->data['content'] = get_page('colors');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
        $this->data['cta_section'] = get_page('cta_section');
        $this->data['testimonials'] = Testimonial_model::orderBy('id', 'ASC')->where('status', '1')->get();

        return view('frontend/pages/colors',$this->data);
    }

    // public function about_us_page(Request $request)
    // {
    //     $this->data['content'] = get_page('about_us');
    //     $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
    //     $this->data['meta_desc'] = (object)[
    //         'meta_title' => $this->data['content']['meta_title'],
    //         'meta_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_title' => $this->data['content']['meta_title'],
    //         'og_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

    //     ];
    //     $this->data['cta_section'] = get_page('cta_section');
    //     exit(json_encode($this->data));
    // }

    // public function board_of_directors_page(Request $request)
    // {
    //     $this->data['content'] = get_page('board_of_directors');
    //     $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
    //     $this->data['meta_desc'] = (object)[
    //         'meta_title' => $this->data['content']['meta_title'],
    //         'meta_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_title' => $this->data['content']['meta_title'],
    //         'og_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

    //     ];
    //     $this->data['cta_section'] = get_page('cta_section');
    //     $this->data['board_of_directors'] = Team_model::orderBy('id', 'DESC')->where('status', '1')->where('bod_members', 1)->get();

    //     exit(json_encode($this->data));
    // }

    // public function executive_group_page(Request $request)
    // {
    //     $this->data['content'] = get_page('executive_group');
    //     $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
    //     $this->data['meta_desc'] = (object)[
    //         'meta_title' => $this->data['content']['meta_title'],
    //         'meta_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_title' => $this->data['content']['meta_title'],
    //         'og_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

    //     ];
    //     $this->data['cta_section'] = get_page('cta_section');
    //     $this->data['executive_members'] = Team_model::orderBy('id', 'DESC')->where('status', '1')->where('ex_members', 1)->get();

    //     exit(json_encode($this->data));
    // }
    // public function other_staff_page(Request $request)
    // {
    //     $this->data['content'] = get_page('other_staff');
    //     $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
    //     $this->data['meta_desc'] = (object)[
    //         'meta_title' => $this->data['content']['meta_title'],
    //         'meta_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_title' => $this->data['content']['meta_title'],
    //         'og_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

    //     ];
    //     $this->data['cta_section'] = get_page('cta_section');
    //     $this->data['other_members'] = Team_model::orderBy('id', 'DESC')->where('status', '1')->where('team', 1)->get();

    //     exit(json_encode($this->data));
    // }

    public function story_and_concept_page(Request $request)
    {
        $this->data['content'] = get_page('story_and_concept');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
        $this->data['cta_section'] = get_page('cta_section');
        exit(json_encode($this->data));
    }

    // public function why_work_with_elios_page(Request $request)
    // {
    //     $this->data['content'] = get_page('why_work_with_elios');
    //     $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
    //     $this->data['meta_desc'] = (object)[
    //         'meta_title' => $this->data['content']['meta_title'],
    //         'meta_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_title' => $this->data['content']['meta_title'],
    //         'og_description' => $this->data['content']['meta_description'],
    //         'meta_keywords' => $this->data['content']['meta_keywords'],
    //         'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
    //         'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

    //     ];
    //     $this->data['cta_section'] = get_page('cta_section');
    //     $this->data['working_adavantages'] = getMultiText('work-with-elios-section5');

    //     exit(json_encode($this->data));
    // }

    public function contact_page(Request $request)
    {
        $this->data['content'] = get_page('contact_us');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];

        $this->data['cta_section'] = get_page('cta_section');
        $this->data['job_specializations'] = Specialization_model::orderBy('id', 'ASC')->where('status', '1')->get();
        $this->data['job_opportunities'] = Job_opportunities_model::orderBy('id', 'ASC')->where('status', '1')->get();
        $this->data['services'] = Service_model::orderBy('id', 'ASC')->where('status', '1')->get();

        return view('frontend/pages/contact-us',$this->data);
    }

    
    public function terms_conditions_page(Request $request)
    {
        $this->data['content'] = get_page('terms_conditions');
        $this->data['page_title'] = $this->data['content']['page_title'] . ' - ' . $this->data['site_settings']->site_name;
        $this->data['meta_desc'] = (object)[
            'meta_title' => $this->data['content']['meta_title'],
            'meta_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'meta_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_title' => $this->data['content']['meta_title'],
            'og_description' => $this->data['content']['meta_description'],
            'meta_keywords' => $this->data['content']['meta_keywords'],
            'twitter_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),
            'og_image' => get_site_image_src('images', $this->data['site_settings']->site_thumb),

        ];
        $this->data['cta_section'] = get_page('cta_section');

        exit(json_encode($this->data));
    }

    public function blog_page(Request $request)
    {
        $token = $request->input('token', null);
        $member = $this->authenticate_verify_token($token);
        $this->data['content'] = get_page('blog');
        $this->data['page_title'] = $this->data['content']['page_title'];
        $this->data['featured_blog_posts'] = Blog_model::orderBy('id', 'DESC')->where('status', 1)->where('featured', 1)->get();
        foreach ($this->data['featured_blog_posts'] as $featured_blog_post) {
            $featured_blog_post->cat_name = !empty($featured_blog_post->category_row) ? $featured_blog_post->category_row->name : '';
            $featured_blog_post->created_date = format_date($featured_blog_post->created_at, 'd M, Y');
        }
        $this->data['blog_categories'] = Blog_categories_model::orderBy('id', 'DESC')->where('status', 1)->has('blog_posts')->get();
        foreach ($this->data['blog_categories'] as $key => $blog_category) {
            $blog_category->blog_posts = $blog_category->blog_posts;
            foreach ($blog_category->blog_posts as $blog_post) {
                $blog_post->cat_name = !empty($blog_post->category_row) ? $blog_post->category_row->name : '';
                $blog_post->created_date = format_date($blog_post->created_at, 'd M, Y');
            }
        }
        return view('frontend/pages/blog',$this->data);
    }
    public function blog_details_page(Request $request, $slug)
    {
        if (!empty($slug) && $this->data['blog_post'] = Blog_model::orderBy('id', 'DESC')->where('status', 1)->where('slug', $slug)->get()->first()) {
            $this->data['content'] = get_page('blog');
            $this->data['page_title'] = $this->data['blog_post']->title;
            $this->data['blog_post']->cat_name = !empty($this->data['blog_post']->category_row) ? $this->data['blog_post']->category_row->name : '';
            $this->data['blog_post']->created_date = format_date($this->data['blog_post']->created_at, 'd M, Y');
        }
        exit(json_encode($this->data));
    }
}
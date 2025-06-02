<?php

use App\Http\Controllers\Ajax;
use App\Http\Controllers\admin\Blog;
use App\Http\Controllers\admin\Faqs;
use App\Http\Controllers\admin\Index;
use App\Http\Controllers\admin\Pages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Contact;
use App\Http\Controllers\admin\Members;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\admin\Categories;
use App\Http\Controllers\admin\Sitecontent;
use App\Http\Controllers\admin\Subscribers;
use App\Http\Controllers\admin\Testimonials;
use App\Http\Controllers\admin\Faq_categories;
use App\Http\Controllers\admin\ContentPages;
use App\Http\Controllers\admin\Blog_categories;
use App\Http\Controllers\admin\Directors;
use App\Http\Controllers\admin\Emails;
use App\Http\Controllers\admin\Emails_content;
use App\Http\Controllers\admin\Executive;
use App\Http\Controllers\admin\Job_opportunities;
use App\Http\Controllers\admin\Job_type;
use App\Http\Controllers\admin\Jobs;
use App\Http\Controllers\admin\Locations;
use App\Http\Controllers\admin\Sub_admin;
use App\Http\Controllers\admin\Permissions;
use App\Http\Controllers\admin\Services;
use App\Http\Controllers\admin\Specialization;
use App\Http\Controllers\admin\Aviva;
use App\Http\Controllers\admin\Renaissance;
use App\Http\Controllers\admin\Hardscapes;
use App\Http\Controllers\admin\Built;
use App\Http\Controllers\admin\Color;
use App\Http\Controllers\admin\Team;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*==============================API POST  Routes =====================================*/
/*==============================Ajax Routes =====================================*/
// Route::post('newsletter', [Ajax::class,'newsletter']);
Route::get('get_states/{country_id}', [Ajax::class, 'get_states']);
Route::get('json_object', [Ajax::class, 'json_object']);
// Route::get('get_data', [Ajax::class,'get_data']);
Route::match(['GET', 'POST'], 'get_data', [Ajax::class, 'get_data']);
Route::match(['GET', 'POST'], 'upload-editor-image', [Ajax::class, 'upload_editor_image']);
Route::post('post_data', [Ajax::class, 'post_data']);
// Route::get('home_page', [ContentPages::class, 'home_page']);
// Route::match(['GET','POST'], '/get_data', [Ajax::class,'get_data']);
/*==============================Admin Routes =====================================*/
Route::controller(Index::class)->group(function () {
    Route::get('/admin/register', 'register');
    Route::post('/admin/register', 'store');
});
Route::get('/admin/login', [Index::class, 'admin_login'])->middleware('admin_logged_in');
Route::get('/admin/login', [Index::class, 'admin_login'])->middleware('admin_logged_in');
Route::post('/admin/login', [Index::class, 'login'])->middleware('admin_logged_in');
Route::get('/admin/logout', [Index::class, 'logout']);

Route::middleware(['is_admin'])->group(function () {
    Route::get('/admin/dashboard', [Dashboard::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/change-password', [Dashboard::class, 'change_password']);
    Route::get('/admin/site_settings', [Dashboard::class, 'settings']);
    Route::post('/admin/settings', [Dashboard::class, 'settings_update']);
    Route::get('/admin/sitecontent', [Sitecontent::class, 'index']);
    Route::get('/admin/emails_content', [Emails_content::class, 'index']);



    /*==============================Sub Admin Module =====================================*/
    Route::get('/admin/sub-admin', [Sub_admin::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/sub-admin/add', [Sub_admin::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/sub-admin/edit/{id}', [Sub_admin::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/sub-admin/permissions/{id}', [Sub_admin::class, 'permissions']);
    Route::match(['GET', 'POST'], '/admin/sub-admin/delete/{id}', [Sub_admin::class, 'delete']);
    /*==============================Permissions Module =====================================*/
    Route::get('/admin/permissions', [Permissions::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/permissions/add', [Permissions::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/permissions/edit/{id}', [Permissions::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/permissions/delete/{id}', [Permissions::class, 'delete']);

    /*==============================Testimonials Module =====================================*/
    Route::get('/admin/testimonials', [Testimonials::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/testimonials/add', [Testimonials::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/testimonials/edit/{id}', [Testimonials::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/testimonials/delete/{id}', [Testimonials::class, 'delete']);

    /*==============================FAQ Categories Module =====================================*/
    Route::get('/admin/faq_categories', [Faq_categories::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/faq_categories/add', [Faq_categories::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/faq_categories/edit/{id}', [Faq_categories::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/faq_categories/delete/{id}', [Faq_categories::class, 'delete']);
    /*==============================FAQs =====================================*/
    Route::get('/admin/faqs', [Faqs::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/faqs/add', [Faqs::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/faqs/edit/{id}', [Faqs::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/faqs/delete/{id}', [Faqs::class, 'delete']);

    /*==============================Categories Module =====================================*/
    Route::get('/admin/categories', [Categories::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/categories/add', [Categories::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/categories/orderAll', [Categories::class, 'orderAll']);
    Route::match(['GET', 'POST'], '/admin/categories/edit/{id}', [Categories::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/categories/delete/{id}', [Categories::class, 'delete']);

    


    /*==============================Locations =====================================*/
    Route::get('/admin/locations', [Locations::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/locations/add', [Locations::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/locations/edit/{id}', [Locations::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/locations/delete/{id}', [Locations::class, 'delete']);
    Route::get('/get-country-states', [Locations::class, 'get_states'])->name('get.states');

    /*==============================Specialization =====================================*/
    Route::get('/admin/specialization', [Specialization::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/specialization/add', [Specialization::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/specialization/edit/{id}', [Specialization::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/specialization/delete/{id}', [Specialization::class, 'delete']);

    /*==============================Job Type =====================================*/
    Route::get('/admin/job_type', [Job_type::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/job_type/add', [Job_type::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/job_type/edit/{id}', [Job_type::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/job_type/delete/{id}', [Job_type::class, 'delete']);
    /*==============================Jobs =====================================*/
    Route::get('/admin/jobs', [Jobs::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/jobs/add', [Jobs::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/jobs/edit/{id}', [Jobs::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/jobs/delete/{id}', [Jobs::class, 'delete']);
    // Route::get('/get-country-states', [Jobs::class, 'get_states'])->name('get.states');


    /*==============================BLOG Categories Module =====================================*/
    Route::get('/admin/blog_categories', [Blog_categories::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/blog_categories/add', [Blog_categories::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/blog_categories/edit/{id}', [Blog_categories::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/blog_categories/delete/{id}', [Blog_categories::class, 'delete']);

    /*==============================BLOG =====================================*/
    Route::get('/admin/blog', [Blog::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/blog/add', [Blog::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/blog/edit/{id}', [Blog::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/blog/delete/{id}', [Blog::class, 'delete']);

    /*==============================Executive =====================================*/
    Route::get('/admin/executive', [Executive::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/executive/add', [Executive::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/executive/edit/{id}', [Executive::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/executive/delete/{id}', [Executive::class, 'delete']);

    /*==============================Directors =====================================*/
    Route::get('/admin/directors', [Directors::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/directors/add', [Directors::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/directors/edit/{id}', [Directors::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/directors/delete/{id}', [Directors::class, 'delete']);

    /*==============================Team =====================================*/
    Route::get('/admin/team', [Team::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/team/add', [Team::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/team/edit/{id}', [Team::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/team/delete/{id}', [Team::class, 'delete']);

    /*==============================Job Opportunities =====================================*/
    Route::get('/admin/job_opportunities', [Job_opportunities::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/job_opportunities/add', [Job_opportunities::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/job_opportunities/edit/{id}', [Job_opportunities::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/job_opportunities/delete/{id}', [Job_opportunities::class, 'delete']);

    /*==============================Services =====================================*/
    Route::get('/admin/services', [Services::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/services/add', [Services::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/services/edit/{id}', [Services::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/services/delete/{id}', [Services::class, 'delete']);

    /*==============================Website Textual Pages =====================================*/

    Route::match(['GET', 'POST'], '/admin/pages/home', [Pages::class, 'home']);
    Route::match(['GET', 'POST'], '/admin/pages/cta_section', [Pages::class, 'cta_section']);
    Route::match(['GET', 'POST'], '/admin/pages/find_jobs', [Pages::class, 'find_jobs']);
    Route::match(['GET', 'POST'], '/admin/pages/browse_jobs', [Pages::class, 'browse_jobs']);
    Route::match(['GET', 'POST'], '/admin/pages/apply_job', [Pages::class, 'apply_job']);
    Route::match(['GET', 'POST'], '/admin/pages/resources', [Pages::class, 'resources']);
    Route::match(['GET', 'POST'], '/admin/pages/resource_details', [Pages::class, 'resource_details']);
    Route::match(['GET', 'POST'], '/admin/pages/areas_experties', [Pages::class, 'areas_experties']);
    Route::match(['GET', 'POST'], '/admin/pages/areas_experties_tab1', [Pages::class, 'areas_experties_tab1']);
    Route::match(['GET', 'POST'], '/admin/pages/areas_experties_tab2', [Pages::class, 'areas_experties_tab2']);
    Route::match(['GET', 'POST'], '/admin/pages/hire_talent', [Pages::class, 'hire_talent']);
    Route::match(['GET', 'POST'], '/admin/pages/services_template', [Pages::class, 'services_template']);
    Route::match(['GET', 'POST'], '/admin/pages/executive_search', [Pages::class, 'executive_search']);
    Route::match(['GET', 'POST'], '/admin/pages/how_we_work', [Pages::class, 'how_we_work']);
    Route::match(['GET', 'POST'], '/admin/pages/about_us', [Pages::class, 'about_us']);
    Route::match(['GET', 'POST'], '/admin/pages/board_of_directors', [Pages::class, 'board_of_directors']);
    Route::match(['GET', 'POST'], '/admin/pages/executive_group', [Pages::class, 'executive_group']);
    Route::match(['GET', 'POST'], '/admin/pages/other_staff', [Pages::class, 'other_staff']);
    Route::match(['GET', 'POST'], '/admin/pages/story_and_concept', [Pages::class, 'story_and_concept']);
    Route::match(['GET', 'POST'], '/admin/pages/why_work_with_elios', [Pages::class, 'why_work_with_elios']);
    Route::match(['GET', 'POST'], '/admin/pages/contact', [Pages::class, 'contact']);
    Route::match(['GET', 'POST'], '/admin/pages/privacy_policy', [Pages::class, 'privacy_policy']);
    Route::match(['GET', 'POST'], '/admin/pages/terms_conditions', [Pages::class, 'terms_conditions']);


    /*==============================Members =====================================*/
    Route::get('/admin/members', [Members::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/members/add', [Members::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/members/edit/{id}', [Members::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/members/delete/{id}', [Members::class, 'delete']);


    /*==============================Contact =====================================*/
    Route::get('/admin/contact', [Contact::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/contact/view/{id}', [Contact::class, 'view']);
    Route::match(['GET', 'POST'], '/admin/contact/delete/{id}', [Contact::class, 'delete']);

    /*==============================Subscribers =====================================*/
    Route::get('/admin/subscribers', [Subscribers::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/subscribers/view/{id}', [Subscribers::class, 'view']);
    Route::match(['GET', 'POST'], '/admin/subscribers/delete/{id}', [Subscribers::class, 'delete']);
    Route::match(['GET', 'POST'], '/admin/subscribers/csv_export', [Subscribers::class, 'csv_export']);

        /*==============================Aviva =====================================*/
    Route::get('/admin/aviva', [Aviva::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/aviva/edit/{id}', [Aviva::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/aviva/add', [Aviva::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/aviva/delete/{id}', [Aviva::class, 'delete']);


       /*==============================Aviva =====================================*/
    Route::get('/admin/renaissance', [Renaissance::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/renaissance/edit/{id}', [Renaissance::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/renaissance/add', [Renaissance::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/renaissance/delete/{id}', [Renaissance::class, 'delete']);

           /*==============================stick-built =====================================*/
    Route::get('/admin/stick-built', [Built::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/stick-built/edit/{id}', [Built::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/stick-built/add', [Built::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/stick-built/delete/{id}', [Built::class, 'delete']);

        /*==============================Aviva =====================================*/
    Route::get('/admin/colors', [Color::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/colors/edit/{id}', [Color::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/colors/add', [Color::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/colors/delete/{id}', [Color::class, 'delete']);


    
        /*==============================Hardscapes =====================================*/
    Route::get('/admin/hardscapes', [Hardscapes::class, 'index']);
    Route::match(['GET', 'POST'], '/admin/hardscapes/edit/{id}', [Hardscapes::class, 'edit']);
    Route::match(['GET', 'POST'], '/admin/hardscapes/add', [Hardscapes::class, 'add']);
    Route::match(['GET', 'POST'], '/admin/hardscapes/delete/{id}', [Hardscapes::class, 'delete']);
});

@extends('layouts.adminlayout')
@section('page_meta')
<meta name="description" content={{ !empty($site_settings) ? $site_settings->site_meta_desc : '' }}">
<meta name="keywords" content="{{ !empty($site_settings) ? $site_settings->site_meta_keyword : '' }}">
<meta name="author" content="{{ !empty($site_settings->site_name) ? $site_settings->site_name : 'Login' }}">
<title>Admin - {{ $site_settings->site_name }}</title>
@endsection
@section('page_content')
{!! breadcrumb('Website Pages') !!}
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap align-middle dataTable basic-datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Page Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0</td>
                            <td width="65%">CTA SECTION</td>
                            <td>
                                <a href="{{ url('admin/pages/cta_section') }}" class="btn btn-primary active">Edit
                                    Section</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td width="65%">Home</td>
                            <td>
                                <a href="{{ url('admin/pages/home') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td width="65%">Aviva Pools</td>
                            <td>
                                <a href="{{ url('admin/pages/aviva_pools') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td width="65%">Browse Jobs</td>
                            <td>
                                <a href="{{ url('admin/pages/browse_jobs') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td width="65%">Apply Job</td>
                            <td>
                                <a href="{{ url('admin/pages/apply_job') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td width="65%">Resources</td>
                            <td>
                                <a href="{{ url('admin/pages/resources') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td width="65%">Resource Details</td>
                            <td>
                                <a href="{{ url('admin/pages/resource_details') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td width="65%">Areas of Experties</td>
                            <td>
                                <a href="{{ url('admin/pages/areas_experties') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td width="65%">Hire Talent</td>
                            <td>
                                <a href="{{ url('admin/pages/hire_talent') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td width="65%">Services Template</td>
                            <td>
                                <a href="{{ url('admin/pages/services_template') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td width="65%">Executive Search</td>
                            <td>
                                <a href="{{ url('admin/pages/executive_search') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td width="65%">Colors</td>
                            <td>
                                <a href="{{ url('admin/pages/colors') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>13</td>
                            <td width="65%">About us</td>
                            <td>
                                <a href="{{ url('admin/pages/about_us') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td width="65%">Board Of Directors</td>
                            <td>
                                <a href="{{ url('admin/pages/board_of_directors') }}"
                                    class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>15</td>
                            <td width="65%">Executive Group</td>
                            <td>
                                <a href="{{ url('admin/pages/executive_group') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td width="65%">Other Staff</td>
                            <td>
                                <a href="{{ url('admin/pages/other_staff') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>17</td>
                            <td width="65%">Story And Concept</td>
                            <td>
                                <a href="{{ url('admin/pages/story_and_concept') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>18</td>
                            <td width="65%">Why Work With Elios</td>
                            <td>
                                <a href="{{ url('admin/pages/why_work_with_elios') }}"
                                    class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>19</td>
                            <td width="65%">Contact Us</td>
                            <td>
                                <a href="{{ url('admin/pages/contact') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>20</td>
                            <td width="65%">Privacy Policy</td>
                            <td>
                                <a href="{{ url('admin/pages/privacy_policy') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                        <tr>
                            <td>21</td>
                            <td width="65%">Terms & Conditions</td>
                            <td>
                                <a href="{{ url('admin/pages/terms_conditions') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
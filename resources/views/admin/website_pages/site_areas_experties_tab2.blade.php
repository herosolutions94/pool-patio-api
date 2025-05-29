@extends('layouts.adminlayout')
@section('page_meta')
    <meta name="description" content={{ !empty($site_settings) ? $site_settings->site_meta_desc : '' }}">
    <meta name="keywords" content="{{ !empty($site_settings) ? $site_settings->site_meta_keyword : '' }}">
    <meta name="author" content="{{ !empty($site_settings->site_name) ? $site_settings->site_name : 'Login' }}">
    <title>Admin - {{ $site_settings->site_name }}</title>
@endsection
@section('page_content')
    {!! breadcrumb('Areas of Experties Tab 2 Content') !!}
    <form class="form theme-form" method="post" action="" enctype="multipart/form-data" id="saveForm">
        @csrf
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('admin/pages/areas_experties') }}" class="btn btn-lg btn-danger">
                Cancel
            </a>
        </div>

        <div class="card">

            <div class="card-header">
                <h5>Section 1</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section1_heading1">Heading 1</label>
                                    <input class="form-control" id="section1_heading1" type="text"
                                        name="section1_heading1" placeholder=""
                                        value="{{ $sitecontent['section1_heading1'] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section1_text">Text</label>
                                    <textarea id="section1_text" name="section1_text" rows="4" class=" editor">{{ !empty($sitecontent['section1_text']) ? $sitecontent['section1_text'] : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section1_heading2">Heading 2</label>
                                    <textarea id="section1_heading2" name="section1_heading2" rows="4" class=" editor">{{ !empty($sitecontent['section1_heading2']) ? $sitecontent['section1_heading2'] : '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label" for="image1"> Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image1']) ? $sitecontent['image1'] : ' ') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image1" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php $section1 = 0; ?>
                            @for ($i = 1; $i <= 3; $i++)
                                <?php $section1 = $section1 + 1; ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Block {{ $section1 }}</h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="sec1_heading{{ $i }}">Heading
                                                            {{ $section1 }}</label>
                                                        <input class="form-control" id="sec1_heading{{ $i }}"
                                                            type="text" name="sec1_heading{{ $i }}"
                                                            placeholder=""
                                                            value="{{ !empty($sitecontent['sec1_heading' . $i]) ? $sitecontent['sec1_heading' . $i] : '' }}">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="sec1_text{{ $i }}">Text
                                                            {{ $section1 }}</label>
                                                        <textarea id="sec1_text{{ $i }}" name="sec1_text{{ $i }}" rows="8" class="form-control">{{ !empty($sitecontent['sec1_text' . $i]) ? $sitecontent['sec1_text' . $i] : '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        <div class="row">
                            <?php $section1_counter = 0; ?>
                            @for ($i = 4; $i <= 6; $i++)
                                <?php $section1_counter = $section1_counter + 1; ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Counter {{ $section1_counter }}</h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="section1_counter{{ $i }}">Count
                                                            {{ $section1_counter }}</label>
                                                        <input class="form-control"
                                                            id="section1_counter{{ $i }}" type="text"
                                                            name="section1_counter{{ $i }}" placeholder=""
                                                            value="{{ !empty($sitecontent['section1_counter' . $i]) ? $sitecontent['section1_counter' . $i] : '' }}">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="section1_counter_txt{{ $i }}">Heading
                                                            {{ $section1_counter }}</label>
                                                        <input class="form-control"
                                                            id="section1_counter_txt{{ $i }}" type="text"
                                                            name="section1_counter_txt{{ $i }}" placeholder=""
                                                            value="{{ !empty($sitecontent['section1_counter_txt' . $i]) ? $sitecontent['section1_counter_txt' . $i] : '' }}">
                                                    </div>
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">

            <div class="card-header">
                <h5>Section 2</h5>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="image2"> Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image2']) ? $sitecontent['image2'] : ' ') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image2" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label" for="section2_heading"> Heading</label>
                                    <input class="form-control" id="section2_heading" type="text"
                                        name="section2_heading" placeholder=""
                                        value="{{ $sitecontent['section2_heading'] ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="section2_text1">Text 1</label>
                                    <textarea id="section2_text1" name="section2_text1" rows="4" class="editor">{{ $sitecontent['section2_text1'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section2_text2">Text 2</label>
                                    <textarea id="section2_text2" name="section2_text2" rows="4" class=" editor">{{ $sitecontent['section2_text2'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section2_btn_txt">Button Text</label>
                                    <input class="form-control" id="section2_btn_txt" type="text"
                                        name="section2_btn_txt" placeholder=""
                                        value="{{ $sitecontent['section2_btn_txt'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section2_btn_link">Button Link URL</label>
                                    <select name="section2_btn_link" class="form-control" required>
                                        <option value="">Set URL</option>

                                        @foreach ($all_pages as $key => $page)
                                            <option value="{{ $key }}"
                                                {{ !empty($sitecontent['section2_btn_link']) && $sitecontent['section2_btn_link'] == $key ? 'selected' : '' }}>
                                                {{ $page }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>


        </div>


        <div class="col-12">
            <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                <button class="btn btn-primary" type="submit">Update Page</button>
            </div>
        </div>
    @endsection

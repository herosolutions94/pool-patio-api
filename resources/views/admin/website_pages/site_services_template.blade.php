@extends('layouts.adminlayout')
@section('page_meta')
    <meta name="description" content={{ !empty($site_settings) ? $site_settings->site_meta_desc : '' }}">
    <meta name="keywords" content="{{ !empty($site_settings) ? $site_settings->site_meta_keyword : '' }}">
    <meta name="author" content="{{ !empty($site_settings->site_name) ? $site_settings->site_name : 'Login' }}">
    <title>Admin - {{ $site_settings->site_name }}</title>
@endsection
@section('page_content')
    {!! breadcrumb('Services Template Page') !!}

    <form class="form theme-form" method="post" action="" enctype="multipart/form-data" id="saveForm">
        @csrf
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('admin/sitecontent') }}" class="btn btn-lg btn-danger">
                Cancel
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label" for="page_title">Page Title</label>
                                <input class="form-control" id="page_title" type="text" name="page_title" placeholder=""
                                    value="{{ $sitecontent['page_title'] ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label" for="meta_title">Meta Title</label>
                                <input class="form-control" id="meta_title" type="text" name="meta_title" placeholder=""
                                    value="{{ $sitecontent['meta_title'] ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label" for="site_meta_desc">Meta Description</label>
                                <textarea class="form-control" id="meta_description" rows="3" name="meta_description">{{ $sitecontent['meta_description'] ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label" for="meta_keywords">Meta Keywords</label>
                                <textarea class="form-control" id="meta_keywords" rows="3" name="meta_keywords">{{ $sitecontent['meta_keywords'] ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="card">

            <div class="card-header">
                <h5>Banner Section</h5>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="image8">Banner Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image8']) ? $sitecontent['image8'] : ' ') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image8" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label" for="banner_heading"> Heading</label>
                                    <input class="form-control" id="banner_heading" type="text" name="banner_heading"
                                        placeholder="" value="{{ $sitecontent['banner_heading'] ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="banner_text">Text</label>
                                    <textarea id="banner_text" name="banner_text" rows="4" class="editor">{{ $sitecontent['banner_text'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="banner_btn_txt">Button Text</label>
                                    <input class="form-control" id="banner_btn_txt" type="text" name="banner_btn_txt"
                                        placeholder="" value="{{ $sitecontent['banner_btn_txt'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="banner_btn_link">Button Link URL</label>
                                    <select name="banner_btn_link" class="form-control" required>
                                        <option value="">Set URL</option>

                                        @foreach ($all_pages as $key => $page)
                                            <option value="{{ $key }}"
                                                {{ !empty($sitecontent['banner_btn_link']) && $sitecontent['banner_btn_link'] == $key ? 'selected' : '' }}>
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


        <div class="card">

            <div class="card-header">
                <h5>Section 1</h5>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="image1">Image</label>
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

                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label" for="section1_heading"> Heading</label>
                                    <input class="form-control" id="section1_heading" type="text"
                                        name="section1_heading" placeholder=""
                                        value="{{ $sitecontent['section1_heading'] ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="section1_text">Text</label>
                                    <textarea id="section1_text" name="section1_text" rows="4" class="editor">{{ $sitecontent['section1_text'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section1_btn_txt">Button Text</label>
                                    <input class="form-control" id="section1_btn_txt" type="text"
                                        name="section1_btn_txt" placeholder=""
                                        value="{{ $sitecontent['section1_btn_txt'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section1_btn_link">Button Link URL</label>
                                    <select name="section1_btn_link" class="form-control" required>
                                        <option value="">Set URL</option>

                                        @foreach ($all_pages as $key => $page)
                                            <option value="{{ $key }}"
                                                {{ !empty($sitecontent['section1_btn_link']) && $sitecontent['section1_btn_link'] == $key ? 'selected' : '' }}>
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


        <div class="card">

            <div class="card-header">
                <h5>Section 2</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section2_heading">Heading</label>
                                    <input class="form-control" id="section2_heading" type="text"
                                        name="section2_heading" placeholder=""
                                        value="{{ $sitecontent['section2_heading'] ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section2_text">Text</label>
                                    <textarea id="section2_text" name="section2_text" rows="4" class=" editor">{{ !empty($sitecontent['section2_text']) ? $sitecontent['section2_text'] : '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row">
                            <?php $section2 = 0; ?>
                            @for ($i = 5; $i <= 7; $i++)
                                <?php $section2 = $section2 + 1; ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Block {{ $section2 }}</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="sec2_heading{{ $i }}">Heading
                                                            {{ $section2 }}</label>
                                                        <input class="form-control" id="sec2_heading{{ $i }}"
                                                            type="text" name="sec2_heading{{ $i }}"
                                                            placeholder=""
                                                            value="{{ !empty($sitecontent['sec2_heading' . $i]) ? $sitecontent['sec2_heading' . $i] : '' }}">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="sec2_text{{ $i }}">Text
                                                            {{ $section2 }}</label>
                                                        <textarea id="sec2_text{{ $i }}" name="sec2_text{{ $i }}" rows="8"
                                                            class="form-control">{{ !empty($sitecontent['sec2_text' . $i]) ? $sitecontent['sec2_text' . $i] : '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>

        <div class="card">

            <div class="card-header">
                <h5>Section 3</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section3_heading">Heading</label>
                                    <input class="form-control" id="section3_heading" type="text"
                                        name="section3_heading" placeholder=""
                                        value="{{ $sitecontent['section3_heading'] ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <a href="{{ url('admin/job_opportunities') }}" target="_blank"
                                        class="btn btn-sm btn-dark"> + Add Job Opportunites</a>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <h5>Highlights</h5>

                            <?php $section3 = 0; ?>
                            @for ($i = 8; $i <= 10; $i++)
                                <?php $section3 = $section3 + 1; ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Block {{ $section3 }}</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="sec3_heading{{ $i }}">Heading
                                                            {{ $section3 }}</label>
                                                        <input class="form-control" id="sec3_heading{{ $i }}"
                                                            type="text" name="sec3_heading{{ $i }}"
                                                            placeholder=""
                                                            value="{{ !empty($sitecontent['sec3_heading' . $i]) ? $sitecontent['sec3_heading' . $i] : '' }}">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="sec3_count{{ $i }}">Count
                                                            {{ $section3 }}</label>
                                                        <input class="form-control" id="sec3_count{{ $i }}"
                                                            type="number" name="sec3_count{{ $i }}"
                                                            placeholder=""
                                                            value="{{ !empty($sitecontent['sec3_count' . $i]) ? $sitecontent['sec3_count' . $i] : '' }}">
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

        {{-- <div class="card">

            <div class="card-header">
                <h5>Section 4</h5>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="image2">Image 1</label>
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
                            <div class="col-md-6">
                                <label class="form-label" for="image3">Image 2</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image3']) ? $sitecontent['image3'] : ' ') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image3" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section4_heading"> Heading</label>
                                    <input class="form-control" id="section4_heading" type="text"
                                        name="section4_heading" placeholder=""
                                        value="{{ $sitecontent['section4_heading'] ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section4_text">Text</label>
                                    <textarea id="section4_text" name="section4_text" rows="4" class="editor">{{ $sitecontent['section4_text'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div> --}}

        {{-- <div class="card">

            <div class="card-header">
                <h5>Section 5</h5>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="image4">Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image4']) ? $sitecontent['image4'] : ' ') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image4" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label" for="section5_heading"> Heading</label>
                                    <input class="form-control" id="section5_heading" type="text"
                                        name="section5_heading" placeholder=""
                                        value="{{ $sitecontent['section5_heading'] ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="section5_text">Text</label>
                                    <textarea id="section5_text" name="section5_text" rows="4" class="editor">{{ $sitecontent['section5_text'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div> --}}

        <div class="card">

            <div class="card-header">
                <h5>Section 4</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section6_heading">Heading</label>
                                    <input class="form-control" id="section6_heading" type="text"
                                        name="section6_heading" placeholder=""
                                        value="{{ $sitecontent['section6_heading'] ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Hiring Process</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap mb-0 newTable" id="newTable">
                                                <thead class="header-item">
                                                    <tr>
                                                        <th width="10%">Image/ Icon</th>
                                                        <th>Heading</th>
                                                        <th>Text</th>
                                                        <th width="12%">Order No.</th>
                                                        <th width="5%">

                                                            <div class="action-btn">

                                                                <a href="javascript:void(0)"
                                                                    class="text-primary edit addNewRowTbl"
                                                                    id="addNewRowTbl">
                                                                    <i class="ti ti-plus fs-6 fw-bold"></i>
                                                                </a>

                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- start row -->
                                                    @php
                                                        $sec1s = getMultiText('services-template-section6');
                                                    @endphp
                                                    @if (countlength($sec1s) > 0)
                                                        @php
                                                            $sec1s_count = 1;
                                                        @endphp
                                                        @foreach ($sec1s as $sec1)
                                                            <tr class="search-items">

                                                                <td>
                                                                    <div class="d-flex align-items-center" id="imgDiv">
                                                                        <input type="file" name="sec1_image[]"
                                                                            accept="image/*" id="newImgInput"
                                                                            style="display: none;" />
                                                                        <img src="{{ get_site_image_src('images', !empty($sec1->image) ? $sec1->image : '') }}"
                                                                            alt="avatar" class=""
                                                                            style="width: 100%; cursor: pointer;background:#ddd"
                                                                            id="newImg">
                                                                        <input type="hidden" name="sec1_pics[]"
                                                                            value="<?= $sec1->image ?>">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="sec1_title[]"
                                                                        id="sec1_title" value="<?= $sec1->title ?>"
                                                                        class="form-control" placeholder="Heading"
                                                                        required>
                                                                </td>
                                                                <td>
                                                                    <textarea name="sec1_txt1[]" id="sec_txt5" class="form-control" rows="3"><?= $sec1->txt1 ?></textarea>
                                                                </td>
                                                                <td>
                                                                    <input type="number" min="0"
                                                                        name="sec1_order_no[]" id="sec1_order_no"
                                                                        value="<?= $sec1->order_no ?>"
                                                                        class="form-control" placeholder="Order#"
                                                                        required>
                                                                </td>
                                                                <td>
                                                                    <div class="action-btn">
                                                                        @if ($sec1s_count >= 1)
                                                                            <a href="javascript:void(0)"
                                                                                class="text-primary edit delNewRowTbl"
                                                                                id="delNewRowTbl">
                                                                                <i class="ti ti-minus fs-5"></i>
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @php
                                                                $sec1s_count++;
                                                            @endphp
                                                        @endforeach
                                                    @else
                                                        <tr class="search-items">

                                                            <td>
                                                                <div class="d-flex align-items-center" id="imgDiv">
                                                                    <input type="file" name="sec1_image[]"
                                                                        accept="image/*" id="newImgInput"
                                                                        style="display: none;" />
                                                                    <img src="{{ asset('/images/no-image.svg') }}"
                                                                        alt="avatar"
                                                                        style="width: 100%; cursor: pointer;background:#ddd"
                                                                        id="newImg">

                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="sec1_title[]" id="sec1_title"
                                                                    value="" class="form-control"
                                                                    placeholder="Heading" required>
                                                            </td>
                                                            <td>
                                                                <textarea name="sec1_txt1[]" id="sec_txt1" class="form-control" rows="3"></textarea>
                                                            </td>
                                                            <td>
                                                                <input type="number" min="0"
                                                                    name="sec1_order_no[]" id="sec1_order_no"
                                                                    value="" class="form-control"
                                                                    placeholder="Order#" required>
                                                            </td>
                                                            <td>
                                                                <div class="action-btn">

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    <!-- end row -->

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        {{-- <div class="card">

            <div class="card-header">
                <h5>Section 7</h5>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="image5">Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image5']) ? $sitecontent['image5'] : ' ') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image5" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label" for="section7_heading"> Heading</label>
                                    <input class="form-control" id="section7_heading" type="text"
                                        name="section7_heading" placeholder=""
                                        value="{{ $sitecontent['section7_heading'] ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="section7_text">Text</label>
                                    <textarea id="section7_text" name="section7_text" rows="4" class="editor">{{ $sitecontent['section7_text'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>
                      


                    </div>

                </div>
            </div>


        </div> --}}

        <div class="card">

            <div class="card-header">
                <h5>Section 5</h5>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="section8_heading"> Heading</label>
                                    <input class="form-control" id="section8_heading" type="text"
                                        name="section8_heading" placeholder=""
                                        value="{{ $sitecontent['section8_heading'] ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="section8_text">Text</label>
                                    <textarea id="section8_text" name="section8_text" rows="4" class="editor">{{ $sitecontent['section8_text'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>


        {{-- <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <h6>You can edit CTA section from edit CTA section on mange pages</h6>

                    </div>
                </div>
            </div>


        </div> --}}


        <div class="col-12">
            <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                <button class="btn btn-primary" type="submit">Update Page</button>
            </div>
        </div>
    @endsection

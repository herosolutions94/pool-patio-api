@extends('layouts.adminlayout')
@section('page_meta')
    <meta name="description" content={{ !empty($site_settings) ? $site_settings->site_meta_desc : '' }}">
    <meta name="keywords" content="{{ !empty($site_settings) ? $site_settings->site_meta_keyword : '' }}">
    <meta name="author" content="{{ !empty($site_settings->site_name) ? $site_settings->site_name : 'Login' }}">
    <title>Admin - {{ $site_settings->site_name }}</title>
@endsection
@section('page_content')
    {!! breadcrumb('Why Work With Elios Page') !!}

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

                            <div class="col-md-12">
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
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label" for="section1_heading1"> Heading 1</label>
                                    <input class="form-control" id="section1_heading1" type="text"
                                        name="section1_heading1" placeholder=""
                                        value="{{ $sitecontent['section1_heading1'] ?? '' }}">
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
                                    <label class="form-label" for="section1_heading2"> Heading 2</label>
                                    <input class="form-control" id="section1_heading2" type="text"
                                        name="section1_heading2" placeholder=""
                                        value="{{ $sitecontent['section1_heading2'] ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php $how_works = 0; ?>
                            @for ($i = 1; $i <= 3; $i++)
                                <?php $how_works = $how_works + 1; ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Block {{ $how_works }}</h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="sec1_heading{{ $i }}">Heading
                                                            {{ $how_works }}</label>
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
                                                            {{ $how_works }}</label>
                                                        <textarea id="sec1_text{{ $i }}" name="sec1_text{{ $i }}" rows="8"
                                                            class="form-control">{{ !empty($sitecontent['sec1_text' . $i]) ? $sitecontent['sec1_text' . $i] : '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endfor
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

                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section2_heading"> Heading</label>
                                    <input class="form-control" id="section2_heading" type="text"
                                        name="section2_heading" placeholder=""
                                        value="{{ $sitecontent['section2_heading'] ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php $how_works = 0; ?>
                            @for ($i = 4; $i <= 6; $i++)
                                <?php $how_works = $how_works + 1; ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Block {{ $how_works }}</h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="sec2_heading{{ $i }}">Heading
                                                            {{ $how_works }}</label>
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
                                                            {{ $how_works }}</label>
                                                        <textarea id="sec2_text{{ $i }}" name="sec2_text{{ $i }}" rows="8"
                                                            class="form-control">{{ !empty($sitecontent['sec2_text' . $i]) ? $sitecontent['sec2_text' . $i] : '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endfor
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
                <h5>Section 3</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <?php $section4 = 0; ?>
                                    @for ($i = 7; $i <= 10; $i++)
                                        <?php $section4 = $section4 + 1; ?>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Counter {{ $section4 }}</h5>
                                                </div>
                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col">
                                                            <div
                                                                class="card w-100 border position-relative overflow-hidden">
                                                                <div class="card-body p-4">
                                                                    <div class="text-center">
                                                                        <div class="file_choose_icon"
                                                                            style="background-color: rgb(179, 179, 179)">
                                                                            <img src="{{ get_site_image_src('images', !empty($sitecontent['image' . $i]) ? $sitecontent['image' . $i] : '') }}"
                                                                                alt="matdash-img" class="img-fluid ">
                                                                        </div>
                                                                        <p class="mb-0">Allowed JPG, GIF or PNG. Max size
                                                                            of 800K
                                                                        </p>
                                                                        <input class="form-control uploadFile"
                                                                            name="image{{ $i }}"
                                                                            type="file" data-bs-original-title=""
                                                                            title="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-4">
                                                                <label class="form-label"
                                                                    for="sec3_heading{{ $i }}">Heading
                                                                    {{ $section4 }}</label>
                                                                <input class="form-control"
                                                                    id="sec3_heading{{ $i }}" type="text"
                                                                    name="sec3_heading{{ $i }}" placeholder=""
                                                                    value="{{ !empty($sitecontent['sec3_heading' . $i]) ? $sitecontent['sec3_heading' . $i] : '' }}">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-4">
                                                                <label class="form-label"
                                                                    for="sec3_text{{ $i }}">Text
                                                                    {{ $section4 }}</label>
                                                                <textarea id="sec3_text{{ $i }}" name="sec3_text{{ $i }}" rows="8"
                                                                    class="form-control">{{ !empty($sitecontent['sec3_text' . $i]) ? $sitecontent['sec3_text' . $i] : '' }}</textarea>
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
            </div>

        </div>



        <div class="card">

            <div class="card-header">
                <h5>Section 4</h5>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="section4_heading"> Heading</label>
                                    <input class="form-control" id="section4_heading" type="text"
                                        name="section4_heading" placeholder=""
                                        value="{{ $sitecontent['section4_heading'] ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="section4_text">Text</label>
                                    <textarea id="section4_text" name="section4_text" rows="4" class="editor">{{ $sitecontent['section4_text'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section4_btn_txt">Button Text</label>
                                    <input class="form-control" id="section4_btn_txt" type="text"
                                        name="section4_btn_txt" placeholder=""
                                        value="{{ $sitecontent['section4_btn_txt'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section4_btn_link">Button Link URL</label>
                                    <select name="section4_btn_link" class="form-control" required>
                                        <option value="">Set URL</option>

                                        @foreach ($all_pages as $key => $page)
                                            <option value="{{ $key }}"
                                                {{ !empty($sitecontent['section4_btn_link']) && $sitecontent['section4_btn_link'] == $key ? 'selected' : '' }}>
                                                {{ $page }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <?php $how_works = 0; ?>
                            @for ($i = 11; $i <= 14; $i++)
                                <?php $how_works = $how_works + 1; ?>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Block {{ $how_works }}</h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label"
                                                            for="sec4_heading{{ $i }}">Heading
                                                            {{ $how_works }}</label>
                                                        <input class="form-control" id="sec4_heading{{ $i }}"
                                                            type="text" name="sec4_heading{{ $i }}"
                                                            placeholder=""
                                                            value="{{ !empty($sitecontent['sec4_heading' . $i]) ? $sitecontent['sec4_heading' . $i] : '' }}">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="sec4_text{{ $i }}">Text
                                                            {{ $how_works }}</label>
                                                        <textarea id="sec4_text{{ $i }}" name="sec4_text{{ $i }}" rows="8"
                                                            class="form-control">{{ !empty($sitecontent['sec4_text' . $i]) ? $sitecontent['sec4_text' . $i] : '' }}</textarea>
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
                <h5>Section 5</h5>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
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

                        <div class="row ">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Advantages of Working With Us</h5>
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
                                                        $sec1s = getMultiText('work-with-elios-section5');
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

        <div class="card">

            <div class="card-header">
                <h5>Section 6</h5>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="image11"> Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image11']) ? $sitecontent['image11'] : ' ') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image11" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label" for="section6_heading"> Heading</label>
                                    <input class="form-control" id="section6_heading" type="text"
                                        name="section6_heading" placeholder=""
                                        value="{{ $sitecontent['section6_heading'] ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="section6_text">Text</label>
                                    <textarea id="section6_text" name="section6_text" rows="4" class="editor">{{ $sitecontent['section6_text'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section6_btn_txt">Button Text</label>
                                    <input class="form-control" id="section6_btn_txt" type="text"
                                        name="section6_btn_txt" placeholder=""
                                        value="{{ $sitecontent['section6_btn_txt'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section6_btn_link">Button Link URL</label>
                                    <select name="section6_btn_link" class="form-control" required>
                                        <option value="">Set URL</option>

                                        @foreach ($all_pages as $key => $page)
                                            <option value="{{ $key }}"
                                                {{ !empty($sitecontent['section6_btn_link']) && $sitecontent['section6_btn_link'] == $key ? 'selected' : '' }}>
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

        {{-- <div class="card">

            <div class="card-header">
                <h5>Section 5</h5>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
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

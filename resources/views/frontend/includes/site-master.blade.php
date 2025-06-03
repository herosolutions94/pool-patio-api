<!-- Dynamic Meta Tags -->
@if(!empty($meta_desc))
    <title>{{ $page_title }}</title>
    <meta name="description" content="{{ $meta_desc->meta_description }}">
    <meta name="keywords" content="{{ $meta_desc->meta_keywords }}">

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $meta_desc->og_title }}">
    <meta property="og:description" content="{{ $meta_desc->og_description }}">
    <meta property="og:image" content="{{ $meta_desc->og_image }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $meta_desc->og_title }}">
    <meta name="twitter:description" content="{{ $meta_desc->og_description }}">
    <meta name="twitter:image" content="{{ $meta_desc->twitter_image }}">
@endif

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('css/App.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/commonCss.css') }}">

<!-- Favicon -->
{{-- <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}"> --}}
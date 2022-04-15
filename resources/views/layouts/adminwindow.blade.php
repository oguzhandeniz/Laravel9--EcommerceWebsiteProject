<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{asset("assets/adminAssets")}}/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{asset("assets/adminAssets")}}/vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{asset("assets/adminAssets")}}/vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/adminAssets")}}/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/adminAssets")}}/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/adminAssets")}}/vendors/styles/style.css">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
    @yield('head')
</head>

<body>

<div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo"><img src="{{asset("assets/adminAssets")}}/vendors/images/deskapp-logo.svg" alt="">
        </div>
        <div class='loader-progress' id="progress_div">
            <div class='bar' id='bar1'></div>
        </div>
        <div class='percent' id='percent1'>100%</div>
        <div class="loading-text">
            Loading...
        </div>
    </div>
</div>


    <div class="container">
        @yield('content')
    </div>

    @include("admin.footer")
@section('footer')
@show


</body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Oguzhan Deniz">
    <link rel="icon" type="image/x-icon" href="@yield('icon')">


    <link href="{{asset("assets")}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset("assets")}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset("assets")}}/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{asset("assets")}}/css/price-range.css" rel="stylesheet">
    <link href="{{asset("assets")}}/css/animate.css" rel="stylesheet">
    <link href="{{asset("assets")}}/css/main.css" rel="stylesheet">
    <link href="{{asset("assets")}}/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset("assets")}}/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
    <script src="{{asset("assets")}}/js/html5shiv.js"></script>
    <script src="{{asset("assets")}}/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset("assets")}}/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset("assets")}}/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{asset("assets")}}/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{asset("assets")}}/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset("assets")}}/images/ico/apple-touch-icon-57-precomposed.png">
    @yield('head')
</head><!--/head-->
<body>

@include("home.header")


@section('slider')
@show


<!-- <div class="container"> -->
    @yield('content')
<!-- </div> -->

<!--SİDEBAR CONTENT İN İÇİNDE OLDUĞU İÇİN SİDEBAR KISMINI BURAYA YAZDIRMADIM.-->

@include("home.footer")
@section('footer')
@show
</body>
</html>




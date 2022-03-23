<html>
<head>
    <title>App Name - @yield('title')</title>
</head>

@yield('head')

<body>
@section('header')
    Header<br>
@show

@section('slider')
    Slider<br>
@show


@section('sidebar')
    Sidebar1<br>
@show


<div class="container">
    @yield('content')
</div>
@section('footer')
    Footer<br>
@show
</body>
</html>

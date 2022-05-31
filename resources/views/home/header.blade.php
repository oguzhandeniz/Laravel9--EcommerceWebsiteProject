<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +90 538 297 1885</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@oguzhandeniz.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{route('index')}}"><img src="{{asset("assets")}}/images/home/logo.png"  width="139" height="65" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                COUNTRY
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">

                                <li><a href="#">USA</a></li>
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                                <li><a href="#">Turkey</a></li>
                                <li><a href="#">Europa</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                Dollar
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Dollar</a></li>
                                <li><a href="#">Euro</a></li>
                                <li><a href="#">TL</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @auth()
                                <li><a href="{{route('userpanel.index')}}"><i class="fa fa-user"></i>{{Auth::user()->name}}</a></li>
                                <li><a href="/logoutuser"><i class="fa fa-lock"></i>Logout</a></li>
                            @endauth
                            @guest()
                                    <li><a href="/loginuser"><i class="fa fa-lock"></i> Login</a></li>
                                    <li><a href="/registeruser"><i class="fa fa-user"></i>Register</a></li>
                            @endguest
                            <li><a href="#"><i class="fa fa-star"></i>Favorites</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i>Check</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i>Cart</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">

                            <li><a href="{{route('index')}}" class="active">Home</a></li>

                            <li class="dropdown">
                                <a href="#">Services<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Description</a></li>
                                </ul>
                            </li>

                            <li><a href="{{route('about')}}">About</a></li>

                            <li><a href="{{route('contact')}}">Contact</a></li>

                            <li><a href="{{route('faq')}}">FAQ</a></li>

                            <li><a href="{{route('references')}}">References</a></li>


                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

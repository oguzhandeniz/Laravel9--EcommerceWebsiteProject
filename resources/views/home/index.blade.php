@extends('layouts.homebase')

@section('title','FizzBo.com')


@section('slider')
    @include('home.slider')
@endsection

@section('sidebar')
    @include('home.sidebar')
@endsection


@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>CATEGORY</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            ELECTRONIC
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Computer </a></li>
                                            <li><a href="#">Mobil Phone</a></li>
                                            <li><a href="#">TV</a></li>
                                            <li><a href="#">Game Consoles</a></li>
                                            <li><a href="#">Photography and Camera </a></li>
                                            <li><a href="#">Construction Materials</a></li>
                                            <li><a href="#">Electrical Appliances</a></li>
                                            <li><a href="#">Household Appliances</a></li>
                                            <li><a href="#">Electronic Parts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            CARS
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Alfa Romeo</a></li>
                                            <li><a href="#">Audi</a></li>
                                            <li><a href="#">BMW</a></li>
                                            <li><a href="#">Chevrolet</a></li>
                                            <li><a href="#">Ferrari</a></li>
                                            <li><a href="#">Fiat</a></li>
                                            <li><a href="#">Ford</a></li>
                                            <li><a href="#">Honda</a></li>
                                            <li><a href="#">Kia</a></li>
                                            <li><a href="#">Maserati</a></li>
                                            <li><a href="#">Mazda</a></li>
                                            <li><a href="#">Mercedes-Benz</a></li>
                                            <li><a href="#">Opel</a></li>
                                            <li><a href="#">Renault</a></li>
                                            <li><a href="#">Skoda</a></li>
                                            <li><a href="#">Tesla</a></li>
                                            <li><a href="#">Toyota</a></li>
                                            <li><a href="#">Volkswagen</a></li>
                                            <li><a href="#">Volvo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            REAL ESTATE
                                        </a>
                                    </h4>
                                </div>
                                <div id="womens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">House</a></li>
                                            <li><a href="#">Workplace</a></li>
                                            <li><a href="#">Land</a></li>
                                            <li><a href="#">Facility</a></li>
                                            <li><a href="#">For Rent</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">CHILDREN'S PRODUCTS</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">FASHION</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">FURNITURE</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">INTERIOR DESIGN</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">CLOTHES</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">ACCESSORY</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">SHOE</a></h4>
                                </div>
                            </div>
                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>LAST ADDED</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>CAR</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>MOBIL PHONE</a></li>
                                    <li><a href="#"> <span class="pull-right">(27)</span>REAL ESTATE</a></li>
                                    <li><a href="#"> <span class="pull-right">(32)</span>TABLET</a></li>
                                    <li><a href="#"> <span class="pull-right">(5)</span>APARTMENT FOR RENT</a></li>
                                    <li><a href="#"> <span class="pull-right">(9)</span>LAND</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="100000" data-slider-step="5" data-slider-value="[35000,70000]" id="sl2" ><br />
                                <b class="pull-left">0 ₺</b> <b class="pull-right">100000 ₺</b>
                            </div>
                        </div><!--/price-range-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{asset("assets")}}/images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">SHOWCASE</h2>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset("assets")}}/images/home/product1.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition1</p>
                                        <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                    </div>
                                    <!--
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                    -->
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to Favorites</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset("assets")}}/images/home/product2.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition2</p>
                                        <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                    </div>
                                    <!--
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                    -->
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to Favorites</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset("assets")}}/images/home/product3.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition3</p>
                                        <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                    </div>
                                    <!--
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                    -->
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to Favorites</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset("assets")}}/images/home/product4.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                    </div>
                                    <!--
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                        </div>
                                    </div>
                                    -->
                                    <img src="{{asset("assets")}}/images/home/new.png" class="new" alt="" />
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to Favorites</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset("assets")}}/images/home/product5.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                    </div>
                                     <!--
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                        </div>
                                    </div>
                                    -->
                                    <img src="{{asset("assets")}}/images/home/sale.png" class="new" alt="" />
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to Favorites</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset("assets")}}/images/home/product6.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                    </div>
                                    <!--
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                        </div>
                                    </div>
                                    -->
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to Favorites</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div><!--features_items-->

                    <div class="category-tab"><!--category-tab-->
                        <h2 class="title text-center">MOST LIKED</h2>
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tshirt" data-toggle="tab">CARS</a></li>
                                <li><a href="#blazers" data-toggle="tab">ELECTRONIC</a></li>
                                <li><a href="#sunglass" data-toggle="tab">REAL ESTATE</a></li>
                                <li><a href="#kids" data-toggle="tab">FASHION</a></li>
                                <li><a href="#poloshirt" data-toggle="tab">CLOTHES</a></li>
                                <li><a href="#poloshirt" data-toggle="tab">FURNITURE</a></li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tshirt" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery4.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="blazers" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery4.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="sunglass" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery4.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="kids" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery4.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="poloshirt" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery4.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/category-tab-->

                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">LAST ADDED PRODUCTS</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset("assets")}}/images/home/recommend1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset("assets")}}/images/home/recommend2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset("assets")}}/images/home/recommend3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset("assets")}}/images/home/recommend1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset("assets")}}/images/home/recommend2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset("assets")}}/images/home/recommend3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div><!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>
@endsection

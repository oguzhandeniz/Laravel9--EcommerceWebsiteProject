@extends('layouts.homebase')


@section('title',$category->title)
@section('description',$category->description)
@section('keywords',$category->keywords)
@section('author',$category->title)
@section('icon',\Illuminate\Support\Facades\Storage::url($category->icon))


@section('sidebar')
    @include('home.sidebar')
@endsection

@section('content')
    <section id="advertisement">
        <div class="container">
            <img src="{{asset("assets")}}/images/shop/advertisement.jpg" alt="">
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>CATEGORY</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#Books">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Books
                                        </a>
                                    </h4>
                                </div>
                                <div id="Books" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <ul>
                                            <a href="http://127.0.0.1:8000/categoryproducts/4/Story%20Books">Story Books</a>
                                        </ul>
                                        <ul>
                                            <a href="http://127.0.0.1:8000/categoryproducts/5/Computer%20Books">Computer Books</a>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#Cars">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Cars
                                        </a>
                                    </h4>
                                </div>
                                <div id="Cars" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <ul>
                                            <a href="http://127.0.0.1:8000/categoryproducts/6/Ford%20Cars">Ford Cars</a>
                                        </ul>
                                        <ul>
                                            <a href="http://127.0.0.1:8000/categoryproducts/7/Volkswagen%20Cars">Volkswagen Cars</a>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#Electronics">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Electronics
                                        </a>
                                    </h4>
                                </div>
                                <div id="Electronics" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <ul>
                                            <a href="http://127.0.0.1:8000/categoryproducts/8/Mobil%20Phone">Mobil Phone</a>
                                        </ul>
                                        <ul>
                                            <a href="http://127.0.0.1:8000/categoryproducts/9/Laptop">Laptop</a>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#RealEstate">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            RealEstate
                                        </a>
                                    </h4>
                                </div>
                                <div id="RealEstate" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <ul>
                                            <a href="http://127.0.0.1:8000/categoryproducts/11/House">House</a>
                                        </ul>
                                        <ul>
                                            <a href="http://127.0.0.1:8000/categoryproducts/12/Office">Office</a>
                                        </ul>
                                        <ul>
                                            <a href="http://127.0.0.1:8000/categoryproducts/13/Apartment">Apartment</a>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#Clothes">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Clothes
                                        </a>
                                    </h4>
                                </div>
                                <div id="Clothes" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <ul>
                                            <a href="http://127.0.0.1:8000/categoryproducts/15/Men%27s">Men's</a>
                                        </ul>
                                        <ul>
                                            <a href="http://127.0.0.1:8000/categoryproducts/16/Women%27s">Women's</a>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div><!--/category-products-->

                        <div class="brands_products">
                            <!--brands_products-->
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
                                <div class="slider slider-horizontal" style="width: 154px;"><div class="slider-track"><div class="slider-selection" style="left: 35%; width: 35%;"></div><div class="slider-handle round left-round" style="left: 35%;"></div><div class="slider-handle round" style="left: 70%;"></div></div><div class="tooltip top" style="top: -30px; left: 34.35px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">35000 : 70000</div></div><input type="text" class="span2" value="" data-slider-min="0" data-slider-max="100000" data-slider-step="5" data-slider-value="[35000,70000]" id="sl2" style=""></div><br>
                                <b class="pull-left">0 ₺</b> <b class="pull-right">100000 ₺</b>
                            </div>
                        </div><!--/price-range-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="http://127.0.0.1:8000/assets/images/home/shipping.jpg" alt="">
                        </div><!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <!--features_items-->
                    <div class="features_items">
                        <h2 class="title text-center">{{$category->title}}</h2>
                        @include('home.messages')
                        @foreach($products as $rs)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{Storage::url($rs->image)}}" style="width:268px; height:360px;"
                                                 alt=""/>
                                            <h2>${{$rs->price}}</h2>
                                            <p>{{$rs->title}}</p>

                                            <a href="{{route('product',['id'=>$rs->id])}}" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>

                                            <form action="{{route('user.shopcart.store',['id'=>$rs->id])}}" method="post">
                                                @csrf
                                                <input  name ="quantity" type="hidden" value="1">
                                                <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
                                            </form>
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
                        @endforeach


                    </div>
                    <ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">»</a></li>
                    </ul>
                    <!--features_items-->

                    <div class="category-tab"><!--category-tab-->
                        <h2 class="title text-center">MOST LIKED {{$category->title}}</h2>
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
                            <div class="tab-pane fade active in" id="tshirt">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery1.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery2.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery3.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery4.jpg" alt="">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="blazers">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery4.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery3.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery2.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery1.jpg" alt="">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="sunglass">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery3.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery4.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery1.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery2.jpg" alt="">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="kids">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery1.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery2.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery3.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery4.jpg" alt="">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="poloshirt">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery2.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery4.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery3.jpg" alt="">
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
                                                <img src="http://127.0.0.1:8000/assets/images/home/gallery1.jpg" alt="">
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
                        <h2 class="title text-center">LAST ADDED {{$category->title}}</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="http://127.0.0.1:8000/assets/images/home/recommend1.jpg" alt="">
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
                                                    <img src="http://127.0.0.1:8000/assets/images/home/recommend2.jpg" alt="">
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
                                                    <img src="http://127.0.0.1:8000/assets/images/home/recommend3.jpg" alt="">
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="http://127.0.0.1:8000/assets/images/home/recommend1.jpg" alt="">
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
                                                    <img src="http://127.0.0.1:8000/assets/images/home/recommend2.jpg" alt="">
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
                                                    <img src="http://127.0.0.1:8000/assets/images/home/recommend3.jpg" alt="">
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




@extends('layouts.homebase')


@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('author',$setting->title)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))


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
                        @php
                            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
                        @endphp
                        <h2>CATEGORY</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            @foreach($mainCategories as $rs)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#{{$rs->title}}">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                {{$rs->title}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="{{$rs->title}}" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            @if(count($rs->children))
                                                @include('home.categorytree',['children'=>$rs->children])
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="100000"
                                       data-slider-step="5" data-slider-value="[35000,70000]" id="sl2"><br/>
                                <b class="pull-left">0 ₺</b> <b class="pull-right">100000 ₺</b>
                            </div>
                        </div><!--/price-range-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{asset("assets")}}/images/home/shipping.jpg" alt=""/>
                        </div><!--/shipping-->

                    </div>
                </div>


                <div class="col-sm-9 padding-right">
                    <!--SHOWCASE-->
                    <div class="features_items">
                        <h2 class="title text-center">SHOWCASE</h2>

                        @foreach($productlist1 as $rs)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{Storage::url($rs->image)}}" style="width:268px; height:360px;"
                                                 alt=""/>
                                            <h2>${{$rs->price}}</h2>
                                            <p>{{$rs->title}}</p>
                                            <div>
                                                @php
                                                    $average=$rs->comment->average('rate')
                                                @endphp
                                                <div class="side">
                                                    <i class="fa fa-star  @if ($average<1)  fa fa-star-o @endif"></i>
                                                    <i class="fa fa-star  @if ($average<2)  fa fa-star-o @endif"></i>
                                                    <i class="fa fa-star  @if ($average<3)  fa fa-star-o @endif"></i>
                                                    <i class="fa fa-star  @if ($average<4)  fa fa-star-o @endif"></i>
                                                    <i class="fa fa-star  @if ($average<5)  fa fa-star-o @endif"></i>
                                                    ({{$rs->comment->count('id')}})
                                                </div>
                                            </div>
                                            <a href="{{route('product',['id'=>$rs->id])}}"
                                               class="btn btn-default add-to-cart">
                                                <i class="fa fa fa-eye"></i>View</a>
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


                    <div class="category-tab"><!--mostliked-tab-->
                        <!--NOTE : MOST LİKE TABLOSUNDA TAB KISMI YAPILMADI KONTROL ET.-->
                        @php
                            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
                        @endphp
                        <h2 class="title text-center">MOST LIKED</h2>
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                @foreach($mainCategories as $rs)
                                    <li><a href="#{{$rs->id}}" data-toggle="tab">{{$rs->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="{{$rs->id}}">
                                @foreach($productlist2 as $rs)
                                    @php
                                        $ort=$rs->comment->average('rate')
                                    @endphp
                                    @if($ort > 3)
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="{{Storage::url($rs->image)}}"
                                                             style="width:183px; height:160px;" alt=""/>
                                                        <h2>${{$rs->price}}</h2>
                                                        <p>{{$rs->title}}</p>
                                                        <div>
                                                            @php
                                                                $average=$rs->comment->average('rate')
                                                            @endphp
                                                            <div class="side">
                                                                <i class="fa fa-star  @if ($average<1)  fa fa-star-o @endif"></i>
                                                                <i class="fa fa-star  @if ($average<2)  fa fa-star-o @endif"></i>
                                                                <i class="fa fa-star  @if ($average<3)  fa fa-star-o @endif"></i>
                                                                <i class="fa fa-star  @if ($average<4)  fa fa-star-o @endif"></i>
                                                                <i class="fa fa-star  @if ($average<5)  fa fa-star-o @endif"></i>
                                                                ({{$rs->comment->count('id')}})
                                                            </div>
                                                        </div>
                                                        <a href="{{route('product',['id'=>$rs->id])}}"
                                                           class="btn btn-default add-to-cart"><i
                                                                class="fa fa fa-eye"></i>View</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div><!--/most-liked-tab-->


                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">LAST ADDED PRODUCTS</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset("assets")}}/images/home/recommend1.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html"
                                                       class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset("assets")}}/images/home/recommend2.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html"
                                                       class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset("assets")}}/images/home/recommend3.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html"
                                                       class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
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
                                                    <img src="{{asset("assets")}}/images/home/recommend1.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html"
                                                       class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset("assets")}}/images/home/recommend2.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html"
                                                       class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset("assets")}}/images/home/recommend3.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="product-details.html"
                                                       class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel"
                               data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel"
                               data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div><!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>
@endsection

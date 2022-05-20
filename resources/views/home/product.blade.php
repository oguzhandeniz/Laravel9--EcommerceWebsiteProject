@extends('layouts.homebase')

@section('title',$data->title)



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

                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{Storage::url($data->image)}}" alt="">
                                <h3>ZOOM</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner border">
                                    <div class="item active">
                                        <a href=""><img src="{{Storage::url($data->image)}}"
                                                        style="width:402px; height:402px;" alt="Image"></a>
                                    </div>
                                    @foreach($images as $rs)
                                        <div class="item">
                                            <a href=""><img src="{{Storage::url($rs->image)}}"
                                                            style="width:402px; height:402px;" alt="Image"></a>
                                        </div>
                                    @endforeach
                                </div>


                                <!--
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href=""><img src="{{Storage::url($data->image)}}" style="width: 84px; height: 84px" alt=""></a>
                                        @foreach($images as $rs)
                                    <a href=""> <img src="{{Storage::url($rs->image)}}" style="width: 84px; height: 84px" alt=""></a>



                                @endforeach
                                </div>
                                <div class="item">
                                    <a href=""><img src="{{Storage::url($data->image)}}" style="width: 84px; height: 84px" alt=""></a>
                                        @foreach($images as $rs)
                                    <a href=""><img src="{{Storage::url($rs->image)}}" style="width: 84px; height: 84px" alt=""></a>



                                @endforeach
                                </div>
                            </div>
-->

                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            @include('home.messages')
                            <div class="product-information"><!--/product-information-->
                                <img src="{{asset("assets")}}/images/product-details/new.jpg" class="newarrival" alt="">
                                <h2>{{$data->title}}</h2>
                                <p>Web ID: {{$data->id}}</p>
                                <div>
                                    @php
                                        $average=$data->comment->average('rate')
                                    @endphp

                                    <div class="side">
                                        {{number_format($average,2)}}
                                        <i class="fa fa-star  @if ($average<1)  fa fa-star-o @endif"></i>
                                        <i class="fa fa-star  @if ($average<2)  fa fa-star-o @endif"></i>
                                        <i class="fa fa-star  @if ($average<3)  fa fa-star-o @endif"></i>
                                        <i class="fa fa-star  @if ($average<4)  fa fa-star-o @endif"></i>
                                        <i class="fa fa-star  @if ($average<5)  fa fa-star-o @endif"></i>
                                    </div>
                                </div>
                                <span>
									<span>{{$data->price}}$</span>
									<label>Quantity:</label>
									<input type="text" value="">
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
                                <p><b>Availability:</b> In Stock({{$data->quantity}})</p>
                                <p><b>Condition:</b> New</p>
                                <p><b>Brand:</b> {{$data->title}}</p>
                                <a href=""><img src="{{asset("assets")}}/images/product-details/share.png"
                                                class="share img-responsive" alt=""></a>
                            </div>
                            <!--/product-information-->
                        </div>
                    </div>

                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
                                <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
                                <li><a href="#tag" data-toggle="tab">Tag</a></li>
                                <li><a href="#reviews" data-toggle="tab">Reviews ({{$data->comment->count('id')}})</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="details">
                                <p>{!! $data->detail !!}</p>
                            </div>

                            <div class="tab-pane fade" id="companyprofile">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery1.jpg" alt="">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery3.jpg" alt="">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery2.jpg" alt="">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery4.jpg" alt="">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tag">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery1.jpg" alt="">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery2.jpg" alt="">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery3.jpg" alt="">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset("assets")}}/images/home/gallery4.jpg" alt="">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="reviews">

                                @foreach($reviews as $rs)
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>{{$rs->user->name}}</a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>{{$rs->created_at}}</a></li>
                                    </ul>
                                    <div>
                                        <div class="side pull-right">
                                            <i class="fa fa-star  @if ($rs->rate<1)  fa fa-star-o @endif"></i>
                                            <i class="fa fa-star  @if ($rs->rate<2)  fa fa-star-o @endif"></i>
                                            <i class="fa fa-star  @if ($rs->rate<3)  fa fa-star-o @endif"></i>
                                            <i class="fa fa-star  @if ($rs->rate<4)  fa fa-star-o @endif"></i>
                                            <i class="fa fa-star  @if ($rs->rate<5)  fa fa-star-o @endif"></i>
                                        </div>
                                    </div>

                                    <strong>{{$rs->subject}}</strong>
                                    <p>{{$rs->review}}</p>

                                </div>
                                @endforeach


                                <div class="col-sm-12">
                                    <h2 class="title text-center">WRITE YOUR REVIEW</h2>
                                    <form action="{{route('storecomment')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" class="form-control"  value="{{$data->id}}">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="subject" class="form-control"  placeholder="Subject">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea type="text" name="review" class="form-control"  placeholder="Your Review"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                              <strong class="text-uppercase">Your Rating: </strong>
                                              <div class="stars">
                                                  <div class="rate">
                                                      <input type="radio" id="star5" name="rate" value="5" /><label for="star5">5 stars</label>
                                                      <input type="radio" id="star4" name="rate" value="4" /><label for="star4">4 stars</label>
                                                      <input type="radio" id="star3" name="rate" value="3" /><label for="star3">3 stars</label>
                                                      <input type="radio" id="star2" name="rate" value="2" /><label for="star2">2 stars</label>
                                                      <input type="radio" id="star1" name="rate" value="1" /><label for="star1">1 star</label>
                                                  </div>
                                              </div>
                                        </div>

                                        @auth()
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        @else
                                            <a href="/login" class="btn btn-default pull-right">Please Login</a>
                                        @endauth
                                    </form>
                                </div>


                            </div>

                        </div>
                    </div>

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



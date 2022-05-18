@extends('layouts.homebase')


@section('title' ,'References | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('author',$setting->title)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))


@section('sidebar')
    @include('home.sidebar')
@endsection


@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog-post-area">
                        <h2 class="title text-center">References</h2>
                        <div class="single-blog-post">
                            {!! $setting->references !!}
                            <a class="btn btn-primary" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <!--References-->
                    <div class="features_items">

                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/storage/images/Z5DBoZXpeIAhsqvtNjK3sxoF1gt7BPosdFhkrkdQ.jpg"
                                             style="width:268px; height:360px;" alt="">
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <p>
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                            </p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/storage/images/Z5DBoZXpeIAhsqvtNjK3sxoF1gt7BPosdFhkrkdQ.jpg"
                                             style="width:268px; height:360px;" alt="">
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <p>Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/storage/images/Z5DBoZXpeIAhsqvtNjK3sxoF1gt7BPosdFhkrkdQ.jpg"
                                             style="width:268px; height:360px;" alt="">
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <p>Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/storage/images/Z5DBoZXpeIAhsqvtNjK3sxoF1gt7BPosdFhkrkdQ.jpg"
                                             style="width:268px; height:360px;" alt="">
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <p>Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/storage/images/Z5DBoZXpeIAhsqvtNjK3sxoF1gt7BPosdFhkrkdQ.jpg"
                                             style="width:268px; height:360px;" alt="">
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <p>Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/storage/images/Z5DBoZXpeIAhsqvtNjK3sxoF1gt7BPosdFhkrkdQ.jpg"
                                             style="width:268px; height:360px;" alt="">
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <p>Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition
                                                Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa fa-eye"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--References-->
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.homebase')


@section('title' ,'About Us | '.$setting->title)
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
                        <h2 class="title text-center">About Us</h2>
                        <div class="single-blog-post">
                            {!! $setting->aboutus !!}
                            <a class="btn btn-primary" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

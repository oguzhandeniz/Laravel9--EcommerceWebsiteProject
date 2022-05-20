@extends('layouts.homebase')


@section('title' ,'Frequently Asked Questions | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('author',$setting->title)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))


@section('sidebar')
    @include('home.sidebar')
@endsection

@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog-post-area">
                        <h2 class="title text-center">Frequently Asked Questions</h2>
                        <div class="single-blog-post">
                            @foreach($datalist as $rs)
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                            <h3>{{$rs->question}}</h3>
                                        </a>
                                    </div>
                                    <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>{!!$rs->answer!!}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

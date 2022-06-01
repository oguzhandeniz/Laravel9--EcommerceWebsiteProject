@extends('layouts.homebase')


@section('title' ,'User Products Image')

@section('sidebar')
    @include('home.sidebar')
@endsection


@section('content')
    <div id="user-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">User Panel</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="contact-form">
                        <h2 class="title text-center">User Menu</h2>
                        @include('home.user.usermenu')
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="contact-info">
                        <h2 class="title text-center">User Products Image</h2>

                        <div class="page-header">

                            <form role="form" action="{{route('user.image.store',['pid'=>$product->id])}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf

                                <div align="center"><h3>{{$product->title}}</h3></div>
                                <hr>
                                <div class="form-group">
                                    <label>Title</label>

                                    <input class="form-control" type="text" name="title" placeholder="Title">

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Image File</label>
                                        </div>
                                        <div class="input-group-append">
                                            <input class="input-group-text" type="submit" value="Upload">

                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="pd-20 card-box mb-30">
                            <div class="clearfix mb-20">
                                <div class="pull-left">
                                    <h4 class="text-blue h4">Product Image List</h4>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($images as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if($rs->image)
                                                <div style="text-align:center"><img
                                                        src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"
                                                        width="100" height="100" alt></div>
                                            @endif
                                        </td>
                                        <td><a href="{{route('user.image.destroy', ['pid'=>$product->id,'id'=>$rs->id])}}"
                                               class="btn btn-danger btn-sm"
                                               onclick="return confirm('Deleting! Are you sure?')">Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="pd-20 card-box mb-30">
                            <div class="product-wrap">
                                <div class="product-list">
                                    <ul class="row">
                                        @foreach($images as $rs)
                                            <li class="col-lg-4 col-md-6 col-sm-12">
                                                <td>
                                                    {{$rs->title}}
                                                </td>
                                                <div class="product-box">

                                                    <div class="producct-img">

                                                        <td>
                                                            @if($rs->image)
                                                                <div style="text-align:center"><img
                                                                        src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"
                                                                        width="300" height="300" alt></div>
                                                            @endif
                                                        </td>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!--/#user-page-->
@endsection

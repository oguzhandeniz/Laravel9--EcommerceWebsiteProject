@extends('layouts.homebase')


@section('title' ,'User Products')

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
                        <h2 class="title text-center">User Products</h2>

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Category</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Image</th>
                                <th scope="col">Image Gallery</th>
                                <th scope="col">Status</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('home.messages')
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{\App\Http\Controllers\AdminPanel\AdminCategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->price}}</td>
                                    <td>{{$rs->quantity}}</td>
                                    <td>
                                        @if($rs->image)
                                            <div style="text-align:center"><img src="{{Storage::url($rs->image)}}" width="150" height="150" alt></div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('user.image.index',['pid'=>$rs->id])}}"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                            <img src="{{asset("assets/adminAssets")}}/vendors/images/gallery.png" alt="">
                                        </a>
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('user.product.edit', ['id'=>$rs->id])}}"
                                           class="btn btn-success btn-sm">Edit</a></td>
                                    <td><a href="{{route('user.product.destroy', ['id'=>$rs->id])}}"
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Deleting! Are you sure?')">Delete</a></td>
                                    <td><a href="{{route('user.product.show', ['id'=>$rs->id])}}"
                                           class="btn btn-success btn-sm">Show</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('user.product.create')}}"><button type="button" class="btn btn-success">Add Product</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!--/#user-page-->
@endsection

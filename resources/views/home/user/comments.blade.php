@extends('layouts.homebase')


@section('title' ,'User Comments & Reviews')

@section('sidebar')
    @include('home.sidebar')
@endsection


@section('content')
    <div id="user-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">User Comment</h2>
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
                        <h2 class="title text-center">User Comments & Reviews</h2>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Product</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Review</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Status</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->user->name}}</td>
                                    <td>
                                        <a href="{{route('product',['id'=>$rs->product_id])}}">{{$rs->product->title}} </a>
                                    </td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->review}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>

                                    <td><a href="{{route('userpanel.reviewdestroy', ['id'=>$rs->id])}}"
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Deleting! Are you sure?')">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!--/#user-page-->
@endsection

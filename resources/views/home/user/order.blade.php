@extends('layouts.homebase')


@section('title' ,'User Orders')

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
                        <h2 class="title text-center">User Orders</h2>

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Total</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('home.messages')
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>{{$rs->address}}</td>
                                    <td>${{$rs->total}}</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('user.order.show', ['id'=>$rs->id])}}" class="btn btn-success btn-sm">Show</a></td>
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

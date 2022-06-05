@extends('layouts.homebase')


@section('title' ,'User Sales')

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
                        <h2 class="title text-center">User Sales</h2>

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Note</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('home.messages')
                            @foreach($list as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->address}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>${{$rs->price}}</td>
                                        <td>{{$rs->quantity}}</td>
                                        <td>${{$rs->amount}}</td>
                                        <td>{{$rs->note}}</td>
                                        <td>{{$rs->created_at}}</td>
                                        <td>{{$rs->status}}</td>
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

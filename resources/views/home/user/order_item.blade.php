@extends('layouts.homebase')


@section('title' ,'Order Items')

@section('sidebar')
    @include('home.sidebar')
@endsection


@section('content')
    <section id="cart_items">
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
                        <h2 class="title text-center">Order Items</h2>
                        @include('home.messages')
                        <div class="table-responsive cart_info">
                            <table class="table table-condensed">
                                <thead>
                                <tr class="cart_menu">
                                    <td class="image">Image</td>
                                    <td class="description">Product</td>
                                    <td class="price">Price</td>
                                    <td class="quantity">Quantity</td>
                                    <td class="total">Total</td>
                                    <td class="total">Status</td>
                                    <td class="total">Note</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>
                                            @if($rs->product->image)
                                                <div style="text-align:center"><img
                                                        src="{{Storage::url($rs->product->image)}}" width="100"
                                                        height="100" alt></div>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('product',['id' => $rs->product->id,'slug' =>$rs->product->slug])}}">{{$rs->product->title}}</a>
                                        </td>
                                        <td>{{$rs->product->price}}$</td>
                                        <td>{{$rs->quantity}}</td>
                                        <td>{{$rs->amount}}$</td>
                                        <td>{{$rs->status}}</td>
                                        <td>{{$rs->note}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-10 pull-right">
                        <div class="total_area">
                            <ul>
                                <li>Cart Sub Total <span>${{$rs->order->total}}</span></li>
                                <li>Eco Tax <span>$2</span></li>
                                <li>Shipping Cost <span>Free</span></li>
                                <li>Total <span>${{$rs->order->total}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div><!--/#user-page-->
    </section>

@endsection

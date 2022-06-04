@extends('layouts.homebase')


@section('title' ,'Order Products')

@section('sidebar')
    @include('home.sidebar')
@endsection


@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="step-one">
                <h2 class="heading">Step1</h2>
            </div>
            <div class="checkout-options">
                <h3>New User</h3>
                <p>Checkout options</p>
                <ul class="nav">
                    <li>
                        <label><input type="checkbox"> Register Account</label>
                    </li>
                    <li>
                        <label><input type="checkbox"> Guest Checkout</label>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-times"></i>Cancel</a>
                    </li>
                </ul>
            </div><!--/checkout-options-->

            <div class="register-req">
                <p>Please use Register And Checkout to easily get access to your order history, or use Checkout as
                    Guest</p>
            </div><!--/register-req-->

            <form action="{{route('user.order.store')}}" method="post">
                @csrf
                <input type="hidden" name="total" value="{{$total}}">
                <div class="shopper-informations">
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="shopper-info">
                                <p>Order Detail</p>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}"
                                           placeholder="Name & Surname">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="email"
                                           value="{{ Auth::user()->email }}" placeholder="Email">
                                </div>
                                <div class="form-group">

                                    <input class="form-control" type="text" name="address"
                                           value="{{ Auth::user()->address }}" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone"
                                           value="{{ Auth::user()->phone }}" placeholder="Phone Number">
                                </div>


                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="shopper-info">
                                <p>Payment Details</p>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="cardname"
                                           value="{{ Auth::user()->name }}" placeholder="Card Name & Surname">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="number" name="cardnumber" value=""
                                           placeholder="Card Number">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="dates" value=""
                                           placeholder="Valid Dates mm/yy">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="key" value=""
                                           placeholder="Security Number">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="total_area">
                    <ul>
                        <li>Cart Sub Total <span>${{$total}}</span></li>
                        <li>Eco Tax <span>$2</span></li>
                        <li>Shipping Cost <span>Free</span></li>
                        <li>Total <span>${{$total}}</span></li>
                    </ul>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-default check_out">Complete Order</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
@endsection

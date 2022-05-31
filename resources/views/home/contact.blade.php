@extends('layouts.homebase')


@section('title' ,'Contact Us | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('author',$setting->title)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))


@section('sidebar')
    @include('home.sidebar')
@endsection


@section('content')
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Contact <strong>Us</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="contact-form">
                        <h2 class="title text-center">Get In Touch</h2>
                        @include('home.messages')
                        <form id="main-contact-form" action="{{route('storemessage')}}" class="contact-form row" name="contact-form" method="post">
                            @csrf
                            <div class="form-group col-md-12">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name & Surname">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="phone" class="form-control" required="required" placeholder="Phone Number">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Send Message">
                            </div>
                        </form>
                        <div class="social-networks">
                            <h2 class="title text-center">Social Networking</h2>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="contact-info">
                        <h2 class="title text-center">Contact Information</h2>

                               {!! $setting->contact !!}

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div><!--/#contact-page-->
@endsection

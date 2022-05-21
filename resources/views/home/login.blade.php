@extends('layouts.homebase')


@section('title' ,'Login')

@section('sidebar')
    @include('home.sidebar')
@endsection


@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                @include('auth.login')
            </div>
        </div>
    </section><!--/form-->
@endsection

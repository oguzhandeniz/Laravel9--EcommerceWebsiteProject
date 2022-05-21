@extends('layouts.homebase')


@section('title' ,'Register')

@section('sidebar')
    @include('home.sidebar')
@endsection


@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                @include('auth.register')
            </div>
        </div>
    </section><!--/form-->
@endsection

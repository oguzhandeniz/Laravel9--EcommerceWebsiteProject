@extends('layouts.mainlayout')

@section('title', 'Test Layout Page')

@section('header')
    <p>This is my body content.</p>
@endsection


@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.2</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection

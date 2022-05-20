@extends('layouts.adminbase')


@section('title','Show FAQ '.$data->title)


@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Show FAQ: {{$data->title}}</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Show FAQ</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown">
                                    January 2022
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Detail Data</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th style="width: 30px">ID</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px">Question</th>
                                <td>{{$data->question}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px">Answer</th>
                                <td>{!! $data->answer !!}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px">Status</th>
                                <td>{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px">Created Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px">Update Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>

                        </table>
                        <div class="pull-right">
                            <a class="btn btn-secondary" href="{{route('admin.faq.edit', ['id'=>$data->id])}}"
                               role="button" style="width: 100px">Edit</a>
                            <a class="btn btn-danger" onclick="return confirm('Deleting! Are you sure?')"
                               href="{{route('admin.faq.destroy', ['id'=>$data->id])}}" role="button"
                               style="width: 100px">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

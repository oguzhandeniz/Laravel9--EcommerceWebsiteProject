@extends('layouts.adminbase')


@section('title','Category List')


@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Category List</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Category List</li>
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
                            <h4 class="text-blue h4">Category List</h4>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Parent</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{\App\Http\Controllers\AdminPanel\AdminCategoryController::getParentsTree($rs,$rs->title)}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                        @if($rs->image)
                                        <div style="text-align:center"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"   width="150" height="150" alt ></div>
                                        @endif
                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.category.edit', ['id'=>$rs->id])}}" class="btn btn-primary btn-sm">Edit</a> </td>
                                <td><a href="{{route('admin.category.destroy', ['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                       onclick="return confirm('Deleting! Are you sure?')">Delete</a> </td>
                                <td><a href="{{route('admin.category.show', ['id'=>$rs->id])}}" class="btn btn-success btn-sm">Show</a> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{route('admin.category.create')}}"><button type="button" class="btn btn-success">Add Category</button></a>

        </div>
    </div>

@endsection

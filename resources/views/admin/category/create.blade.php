@extends('layouts.adminbase')


@section('title','Add Category')


@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Add Category</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Category</li>
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
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

                    <form role="form" action="{{route('admin.category.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Parent Category</label>
                                <div class="col-sm-12 col-md-10">
                                    <select class="form-control select2" name="parent_id">
                                        <option value="0" selected="selected">Main Category</option>
                                        @foreach($data as $rs)
                                            <option
                                                value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\AdminCategoryController::getParentsTree($rs, $rs->title)}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="title" placeholder="Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Keywords</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="keywords" placeholder="Keywords">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="description"
                                           placeholder="Description">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label" for="exampleInputFile">Image</label>
                                <div class="col-sm-12 col-md-10">
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose ??mage
                                            File</label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                                <div class="col-sm-12 col-md-10">
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection


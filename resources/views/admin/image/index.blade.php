@extends('layouts.adminwindow')


@section('title','Product Image Gallery')


@section('content')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">

                    <form  role="form" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div align="center"><h3>{{$product->title}}</h3></div>
                        <hr>
                        <div class="form-group">
                            <label>Title</label>

                                <input class="form-control" type="text" name="title" placeholder="Title">

                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose Image File</label>
                                </div>
                                <div class="input-group-append">
                                    <input class="input-group-text" type="submit" value="Upload">

                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Product Image List</h4>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                        @if($rs->image)
                                        <div style="text-align:center"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"   width="100" height="100" alt ></div>
                                        @endif
                                </td>
                                <td><a href="{{route('admin.image.destroy', ['pid'=>$product->id,'id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                       onclick="return confirm('Deleting! Are you sure?')">Delete</a> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.homebase')


@section('title' ,'User Edit Product')

@section('sidebar')
    @include('home.sidebar')
@endsection


@section('content')
    <div id="user-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">User Edit Product</h2>
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
                    <div class="contact-info">
                        <h2 class="title text-center">User Edit Product</h2>
                        <form role="form" action="{{route('user.product.update', ['id'=>$data->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Parent Category</label>
                                <div class="col-sm-12 col-md-10">
                                    <select class="form-control select2" name="category_id">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}"
                                                    @if($rs->id==$data->category_id) selected="selected"@endif>{{\App\Http\Controllers\AdminPanel\AdminCategoryController::getParentsTree($rs,$rs->title)}}</option>
                                        @endforeach
                                    </select>


                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="title" value="{{$data->title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Keywords</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="description"
                                           value="{{$data->description}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Price</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="number" name=price" value="{{$data->price}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Quantity</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="number" class="form-control" name="quantity" value="{{$data->quantity}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Minimum Quantity</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="number" class="form-control" name="minquantity"
                                           value="{{$data->minquantity}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tax %</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="number" class="form-control" name="tax" value="{{$data->tax}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Detail Info</label>
                                <div class="col-sm-12 col-md-10">
                                <textarea class="form-control" id="detail" name="detail">
                                    {{$data->detail}}
                                </textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#detail'))
                                            .then(editor=>{console.log(editor);})
                                            .catch(error=>{console.error(error);})
                                    </script>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label" for="exampleInputFile">Image</label>
                                <div class="col-sm-12 col-md-10">
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose İmage File</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                                <div class="col-sm-12 col-md-10">
                                    <select class="form-control" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!--/#user-page-->
@endsection

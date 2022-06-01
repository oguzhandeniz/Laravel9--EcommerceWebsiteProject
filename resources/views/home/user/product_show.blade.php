@extends('layouts.homebase')


@section('title' ,'User Product Show')

@section('sidebar')
    @include('home.sidebar')
@endsection


@section('content')
    <div id="user-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">User Product Show</h2>
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
                        <h2 class="title text-center">User Product Show</h2>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 30px">ID</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Category</th>
                                    <td>{{\App\Http\Controllers\AdminPanel\AdminCategoryController::getParentsTree($data->category,$data->category->title)}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Description</th>
                                    <td>{{$data->description}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Price</th>
                                    <td>{{$data->price}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Quantity</th>
                                    <td>{{$data->quantity}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Minimum Quantity</th>
                                    <td>{{$data->minquantity}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Tax %</th>
                                    <td>{{$data->tax}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Detail Info</th>
                                    <td>{!! $data->detail !!}</td>
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
                                <tr>
                                    <th style="width: 30px">Image</th>
                                    <td>
                                        @if($data->image)
                                            <div style="text-align:center"><img
                                                    src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}"
                                                    width="600" height="600" alt></div>
                                        @endif
                                    </td>
                                </tr>

                            </table>
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{route('admin.product.edit', ['id'=>$data->id])}}"
                                   role="button" style="width: 100px">Edit</a>
                                <a class="btn btn-danger" onclick="return confirm('Deleting! Are you sure?')"
                                   href="{{route('admin.product.destroy', ['id'=>$data->id])}}" role="button"
                                   style="width: 100px">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!--/#user-page-->
@endsection

@extends('layouts.adminwindow')


@section('title','Show Order '.$data->title)


@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="{{route('admin.comment.index')}}">Order</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Detail Order Data</h4>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <form role="form" action="{{route('admin.order.update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 30px">ID</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">User Name & Surname</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Name & Surname</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Address</th>
                                    <td>{{$data->address}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Phone</th>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Total</th>
                                    <td>${{$data->total}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">IP</th>
                                    <td>{{$data->IP}}</td>
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
                                    <th style="width: 30px">Admin's Note</th>
                                    <td><textarea name="note" rows="3" cols="15">{{ $data->note }}</textarea></td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Admin's Status</th>
                                    <td>
                                        <select name="status">
                                            <option selected> {{$data->status}} </option>
                                            <option>Accepted</option>
                                            <option>Canceled</option>
                                            <option>Shipping</option>
                                            <option>Completed</option>
                                        </select>
                                        <div class="pull-right">
                                            <a class="btn btn-danger"
                                               onclick="return confirm('Deleting! Are you sure?')"
                                               href="{{route('admin.order.destroy', ['id'=>$data->id])}}"
                                               role="button"
                                               style="width: 100px">Delete</a>
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary ">Update Order</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr class="cart_menu">
                                <td class="image">Image</td>
                                <td class="description">Product</td>
                                <td class="price">Price</td>
                                <td class="quantity">Quantity</td>
                                <td class="total">Total</td>
                                <td class="total">Status</td>
                                <td class="total">Note</td>
                                <td class="total">Update</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <form role="form" action="{{route('admin.order.itemupdate',['id'=>$rs->id])}}"
                                      method="post">
                                    @csrf
                                    <tr>
                                        <td>
                                            @if($rs->product->image)
                                                <div style="text-align:center"><img
                                                        src="{{Storage::url($rs->product->image)}}" width="100"
                                                        height="100" alt></div>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('product',['id' => $rs->product->id,'slug' =>$rs->product->slug])}}">{{$rs->product->title}}</a>
                                        </td>
                                        <td>{{$rs->product->price}}$</td>
                                        <td>{{$rs->quantity}}</td>
                                        <td>${{$rs->amount}}</td>
                                        <td>
                                            <select name="status">
                                                <option selected> {{$rs->status}} </option>
                                                <option>Accepted</option>
                                                <option>Canceled</option>
                                                <option>Shipping</option>
                                                <option>Completed</option>
                                            </select>
                                        </td>
                                        <td><textarea name="note" rows="3" cols="15">{{ $rs->note }}</textarea></td>
                                        <td>
                                            <button type="submit" value="update" class="btn btn-primary ">Update</button>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

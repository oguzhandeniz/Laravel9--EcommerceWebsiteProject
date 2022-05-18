@extends('layouts.adminbase')


@section('title','Show Message '.$data->title)


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
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.message.index')}}">Messages</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Detail Message Data</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th style="width: 30px">ID</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px">Name & Surname</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px">Phone Number</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px">E-mail</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px">Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px">Message</th>
                                <td>{{$data->message}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px">IP</th>
                                <td>{{$data->ip}}</td>
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
                                <th style="width: 30px">Admin's Note </th>
                                <td>
                                    <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <textarea class="form-control" id="note" name="note">{{$data->note}}</textarea>
                                        <button type="submit" class="btn btn-primary ">Update Note</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                        <div class="pull-right">
                            <a class="btn btn-danger" onclick="return confirm('Deleting! Are you sure?')"
                               href="{{route('admin.message.destroy', ['id'=>$data->id])}}" role="button"
                               style="width: 100px">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

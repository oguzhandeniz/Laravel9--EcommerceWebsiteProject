@extends('layouts.adminwindow')


@section('title','User '.$data->title)


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
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.message.index')}}">Users</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Detail Users Data</h4>
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
                                <th style="width: 30px">E-mail</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px">Roles</th>
                                <td>
                                    @foreach($data->roles as $role)
                                        {{$role->name}}
                                        <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}">
                                            <button type="button" class="btn btn-danger " onclick="return confirm('Are you sure to delete this role?')">X</button> </a>
                                    @endforeach
                                </td>
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
                                <th style="width: 30px">Add Role User </th>
                                <td>
                                    <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <select name="role_id">
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}} </option>
                                            @endforeach
                                        </select>
                                        <div class="pull-right">
                                        <button type="submit" class="btn btn-primary ">Add Role</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </table>
                        <div class="pull-right">
                            <a class="btn btn-danger" onclick="return confirm('Deleting! Are you sure?')"
                               href="{{route('admin.user.destroy', ['id'=>$data->id])}}" role="button"
                               style="width: 100px">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

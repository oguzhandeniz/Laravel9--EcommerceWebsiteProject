@extends('layouts.adminbase')


@section('title','Settings')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="min-height-200px">

                <!--header-->
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}"><h4>HOME</h4></a>
                                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
                                    </li>
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
                    <div class="tab">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link text-blue active" data-toggle="tab" href="#general" role="tab"
                                   aria-selected="true">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" data-toggle="tab" href="#smtpserver" role="tab"
                                   aria-selected="false">Smtp Server</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" data-toggle="tab" href="#socialmedial" role="tab"
                                   aria-selected="false">Social Medial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" data-toggle="tab" href="#aboutus" role="tab"
                                   aria-selected="false">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" data-toggle="tab" href="#contactpage" role="tab"
                                   aria-selected="false">Contact Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" data-toggle="tab" href="#references" role="tab"
                                   aria-selected="false">References</a>
                            </li>
                        </ul>

                        <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">

                            <div class="tab-content">
                                <div class="card-body">
                                    <div class="tab-pane fade active show" id="general" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" name="title" id="title"
                                                           placeholder="title" value="{{$data->title}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Keywords</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" id="keywords"
                                                           value="{{$data->keywords}}"
                                                           name="keywords" placeholder="Keywords"></div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control"
                                                           value="{{$data->description}}"
                                                           name="description"
                                                           id="description" placeholder="Description">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Company</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" value="{{$data->company}}"
                                                           name="company" id="company" placeholder="Company">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Address</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" value="{{$data->address}}"
                                                           name="address" id="address" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Phone Number</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" value="{{$data->phone}}"
                                                           name="phone"
                                                           id="phone" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">E-mail</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" value="{{$data->email}}"
                                                           name="email"
                                                           id="email" placeholder="E-mail">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Icon</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <div class="custom-file">
                                                        <input class="custom-file-input" type="file" name="icon">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose Icon File</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <select class="form-control" name="status" id="status"
                                                            value="{{$data->status}}">
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="smtpserver" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Smtp-Server</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" name="smtpserver"
                                                           id="smtpserver" placeholder="Smtp-Server"
                                                           value="{{$data->smtpserver}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Smtp-Email</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" id="smtpemail"
                                                           value="{{$data->smtpemail}}" name="smtpemail"
                                                           placeholder="Smtp-Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Smtp-Password</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="password" class="form-control"
                                                           value="{{$data->smtppassword}}" name="smtppassword"
                                                           id="smtppassword" placeholder="Smtp-Password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Smtp-Port</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="number" class="form-control"
                                                           value="{{$data->smtpport}}"
                                                           name="smtpport" id="smtpport" placeholder="Smtp-Port">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="socialmedial" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Fax</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" name="fax" id="fax"
                                                           placeholder="Fax" value="{{$data->fax}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Facebook</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" id="facebook"
                                                           value="{{$data->smtpemail}}" name="facebook"
                                                           placeholder="Facebook">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Twitter</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" value="{{$data->twitter}}"
                                                           name="twitter" id="twitter" placeholder="Twitter">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Instagram</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" value="{{$data->instagram}}"
                                                           name="instagram" id="instagram" placeholder="Instagram">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Youtube</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input type="text" class="form-control" value="{{$data->youtube}}"
                                                           name="youtube" id="youtube" placeholder="Youtube">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="aboutus" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">About Us</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <textarea class="form-control" id="about" name="aboutus">{{$data->aboutus}}</textarea>
                                                    <script>
                                                        ClassicEditor
                                                            .create(document.querySelector('#about'))
                                                            .then(editor=>{console.log(editor);})
                                                            .catch(error=>{console.error(error);})
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contactpage" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Contact Us</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <textarea class="form-control" id="contact" name="contact">{{$data->contact}}</textarea>
                                                    <script>
                                                        ClassicEditor
                                                            .create(document.querySelector('#contact'))
                                                            .then(editor=>{console.log(editor);})
                                                            .catch(error=>{console.error(error);})
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="references" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">References</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <textarea class="form-control" id="reference" name="references">{{$data->references}}</textarea>
                                                    <script>
                                                        ClassicEditor
                                                            .create(document.querySelector('#reference'))
                                                            .then(editor=>{console.log(editor);})
                                                            .catch(error=>{console.error(error);})
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary me-2">Update Setting</button>
                                <button class="btn btn-dark">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote"></script>
@endsection



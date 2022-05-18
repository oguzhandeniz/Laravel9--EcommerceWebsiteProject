@if($message=\Illuminate\Support\Facades\Session::get('success'))
    <div class="alert alert-success alert-block" >
        <button type="button" class="close" data-dismiss="alert"> x </button>
        <strong> {{$message}}</strong>
    </div>
@endif
@if($message=\Illuminate\Support\Facades\Session::get('error'))
    <div class="alert alert-danger alert-block" >
        <button type="button" class="close" data-dismiss="alert"> x </button>
        <strong> {{$message}}</strong>
    </div>
@endif
@if($message=\Illuminate\Support\Facades\Session::get('warning'))
    <div class="alert alert-warning alert-block" >
        <button type="button" class="close" data-dismiss="alert"> x </button>
        <strong> {{$message}}</strong>
    </div>
@endif
@if($message=\Illuminate\Support\Facades\Session::get('info'))
    <div class="alert alert-info alert-block" >
        <button type="button" class="close" data-dismiss="alert"> x </button>
        <strong> {{$message}}</strong>
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger" >
        <button type="button" class="close" data-dismiss="alert"> x </button>
        The provided credentials do not match our records...
    </div>
@endif

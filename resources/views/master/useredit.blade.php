@extends('layout.app')

@section('style')
@endsection

@section('script')
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data User</h3>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="{{asset('')}}update">
                    {{ csrf_field() }} 
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="hidden" class="form-control" name="txtid" value="{{$user->id}}">
                            <input type="text" class="form-control" name="txtnama" value="{{$user->namalengkap}}" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="txtemail" value="{{$user->email}}" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="txtuname" value="{{$user->uname}}" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="txtupass" value="{{$user->upass}}" placeholder="Password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<<<<<<< HEAD
@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('users.update', $row) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama User <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ old('name', $row->name) }}" />
            </div>
            <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="{{ old('email', $row->email) }}" />
            </div>
            <div class="form-group">
                <label>Sandi <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
                <p class="form-text">Kosongkan jika tidak ingin mengubah password.</p>
            </div>
            <div class="form-group">
                <label>Role <span class="text-danger">*</span></label>
                <select class="form-control" name="role" />
                @foreach($role as $key => $val)
                @if($key==old('role', $row->role))
                <option value="{{ $key }}" selected>{{ $val }}</option>
                @else
                <option value="{{ $key }}">{{ $val }}</option>
                @endif
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ route('users.index') }}">Kembali</a>
            </div>
        </form>
    </div>
</div>
=======

@extends('users.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>password:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $user->detail }}</textarea>
                </div>
            </div> -->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
@endsection
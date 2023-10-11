<<<<<<< HEAD
@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambahkan Buku</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('books.index') }}"> Kembali</a>
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

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kategori:</strong>
                    <select name="category_id" class="form-control">
                        <option value=""></option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User :</strong>
                    <select name="user_id" class="form-control">
                        <option value=""></option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="dokumen" class="form-label"><strong>Unggah File</strong></label>
            <div class="form-group">
                <input class="form-control" type="file" name="dokumen">
                @error('dokumen')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <p id="message"></p>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </form>

@endsection
=======
@extends('books.layout')
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    justify-content: center;
    align-items: center;
}

h1 {
    text-align: center;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    align-items: center;
    justify-content: center;
    text-align: center;
}

input[type="file"] {
    display: block;
    margin-bottom: 10px;
    justify-content: center;
    align-items: center;
}

button[type="submit"] {
    background-color: #007bff;
    align-items: center;
    justify-content: center;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}
</style>
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Books</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
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
   
<form action="{{ route('books.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="container">
        <h6><strong>Upload File:</strong></h6>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="file">Pilih file untuk diunggah:</label>
            <input type="file" name="file" id="file" accept=".txt, .pdf, .doc">
            <button type="submit" name="submit">Unggah</button>
        </form>
    </div>
    <p id="message"></p>
  </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="upload-form">
        <div class="upload-form">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9

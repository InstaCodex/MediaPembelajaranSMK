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
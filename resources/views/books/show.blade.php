<<<<<<< HEAD
@extends('layouts/backend')
=======
@extends('books.layout')
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
            </div>
        </div>
    </div>
<<<<<<< HEAD

=======
   
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $book->name }}
            </div>
        </div>
<<<<<<< HEAD
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>File:</strong>
                    {{ $book->dokumen }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Upload_by:</strong>
                    {{ $book->user ['name'] }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Categori:</strong>
                    {{ $book->category ['name']}}
                </div>
            </div>
        </div>
    @endsection
=======
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $book->detail }}
            </div>
        </div> -->
    </div>
@endsection
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9

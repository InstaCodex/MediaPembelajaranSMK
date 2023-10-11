<<<<<<< HEAD
@extends('layouts.backend')
=======
<<<<<<< HEAD
@extends('layouts/backend')
=======
@extends('books.layout')
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Buku</h2>
            </div>
        </div>
    </div>
<<<<<<< HEAD

=======
   
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $book->name }}
            </div>
        </div>
<<<<<<< HEAD
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>File:</strong>
                {{ $book->dokumen }}
=======
<<<<<<< HEAD
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>File:</strong>
                    {{ $book->dokumen }}
                </div>
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
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
<<<<<<< HEAD
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Diunggah oleh:</strong>
                {{ $book->user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori:</strong>
                {{ $book->category->name }}
            </div>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('books.index') }}"> Kembali</a>
    </div>
@endsection
=======
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
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68

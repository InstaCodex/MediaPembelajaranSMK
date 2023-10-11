<<<<<<< HEAD
@extends('layouts.backend')

=======
@extends('categories.layout')
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
<<<<<<< HEAD
                <h2>Lihat Buku</h2>
=======
<<<<<<< HEAD
                <h2> Show Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
            </div>
        </div>
    </div>

=======
                <h2> Show Categori</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
<<<<<<< HEAD
                <ul>
                    @foreach ($category->books as $book)
                        <li>Nama = {{ $book->name }}</li>
                        <li>Dokumen = {{ $book->dokumen }}</li>
                        <li>Diunggah oleh = {{ $book->user->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Kembali</a>
        </div>
    @endsection
=======
                {{ $category->name }}
            </div>
        </div>
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $category->detail }}
            </div>
        </div> -->
    </div>
@endsection
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9

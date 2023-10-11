@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lihat Buku</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
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

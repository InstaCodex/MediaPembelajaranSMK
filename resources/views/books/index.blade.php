@extends('layouts/backend')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Materi Pembelajaran SMA/SMK</h2>
            </div>
        </div>
    </div>
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <div class="card card-default">
        <div class="card-header">
            <form class="form-inline">
                <div class="form-group mr-1">
                    <input class="form-control" type="text" name="q" value="{{ $q }}"
                        placeholder="Pencarian..." />
                </div>
                <div class="form-group mr-1">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('books.create') }}">Tambahkan Buku</a>
                </div>
            </form>
        </div>
        <div class="card-body p-0 table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th width="50px">No</th>
                        <th>Nama</th>
                        <th>File</th>
                        <th width="250px">Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($books as $index => $book)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->dokumen }}</td>
                        <td style="text-align: center;">
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('books.show', $book->id) }}">Lihat</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

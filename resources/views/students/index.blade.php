<<<<<<< HEAD
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
                
            </form>
        </div>
        <div class="card-body p-0 table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th width="280px">Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
=======
@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Data Najy E-Learning</h2>
        </div>
    </div>
</div>
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="card card-default">
    <div class="card-header">
        <form class="form-inline">
            <div class="form-group mr-1">
                <input class="form-control" type="text" name="q" value="{{ $q}}" placeholder="Pencarian..." />
            </div>
            <div class="form-group mr-1">
                <button class="btn btn-success">Refresh</button>
            </div>
            <div class="form-group mr-1">
                <a class="btn btn-primary" href="{{ route('users.create') }}">Tambah</a>
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Created_At</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($rows as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->level }}</td>
                <td>
                    <form action="{{ route('users.destroy', $row->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('users.edit', $row->id) }}">Ubah</a>
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
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68

@extends('app')

@section('content')
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="card card-default">
    <div class="card-header">
        <form class="form-inline">
            <div class="form-group mr-1">
                <input class="form-control" type="text" name="q" value="{{ $q }}" placeholder="Pencarian..." />
            </div>
            <div class="form-group mr-1">
                <button class="btn btn-success">Refresh</button>
            </div>
            <div class="form-group mr-1">
                <a class="btn btn-primary" href="{{ route('lessons.create') }}">Tambah</a>
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Lama Waktu Pengerjaan (menit)</th>
                    <th>Guru</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @php $no = 1 @endphp
            @foreach($lessons as $lesson)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $lesson->name }}</td>
                <td>{{ $lesson->minutes }}</td>
                <td>{{ $lesson->user->name }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('lessons.edit', $lesson) }}">Ubah</a>
                    <form method="POST" action="{{ route('lessons.destroy', $lesson) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection

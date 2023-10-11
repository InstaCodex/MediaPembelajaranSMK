@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('lessons.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                </div>
                <div class="form-group">
                    <label>Lama Waktu Pengerjaan (menit) <span class="text-danger">*</span></label>
                    <input class="form-control" type="number" name="minutes" value="{{ old('minutes') }}" />
                </div>
                <div class="form-group">
                    <label>Guru <span class="text-danger">*</span></label>
                    <select class="form-control" name="user_id">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('lessons.index') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection

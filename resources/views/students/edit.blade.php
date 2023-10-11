
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('users.update', $row) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama Pengguna <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ old('name', $row->name) }}" />
            </div>
            <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="{{ old('email', $row->email) }}" />
            </div>
            <div class="form-group">
                <label>Sandi <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
                <p class="form-text">Kosongkan jika tidak ingin mengubah password.</p>
            </div>
            <div class="form-group">
                <label>Role <span class="text-danger">*</span></label>
                <select class="form-control" name="level">
                    @foreach($levels as $key => $val)
                    <option value="{{ $key }}" {{ old('level', $row->level) == $key ? 'selected' : '' }}>{{ $val }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
<<<<<<< HEAD
                <button class="btn btn-primary">Save</button>
                <a class="btn btn-danger" href="{{ route('students.index') }}">Kembali</a>
=======
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ route('users.index') }}">Kembali</a>
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
            </div>
        </form>
    </div>
</div>
@endsection

<<<<<<< HEAD
@extends('layouts/backend')
=======
@extends('books.layout')
 
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
<<<<<<< HEAD
                <h2>Data Buku E-Learning</h2>
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
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('books.create') }}">Creat New Books</a>
                </div>
            </form>
        </div>
        <div class="card-body p-0 table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>File</th>
                        <th>Upload_by</th>
                        <th>Created_at</th>
                        <th>Views</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($books as $index => $book)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->dokumen }}</td>
                        <td>{{ $book->user['name'] }}</td>
                        <td>{{ $book->created_at }}</td>
                        <td>{{ $book->Views }}</td>
                        <td>
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
=======
                <h2>Materi Pembelajaran SMA/SMK</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Books</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <!-- <th>Details</th> -->
            <th width="280px">Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $book->name }}</td>
            <!-- <td>{{ $book->detail }}</td> -->
            <td>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $books->links() !!}
      
@endsection
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9

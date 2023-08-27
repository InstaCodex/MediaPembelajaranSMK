@extends('categories.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categori Buku</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Categori</a>
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
        @foreach ($categories as $categori)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $categori->name }}</td>
            <!-- <td>{{ $categori->detail }}</td> -->
            <td>
                <form action="{{ route('categories.destroy',$categori->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('categories.show',$categori->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('categories.edit',$categori->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $categories->links() !!}
      
@endsection
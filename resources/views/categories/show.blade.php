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
                <h2> Show Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
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
                        <li>name = {{ $book->name }}</li>
                        <li>dokumen = {{ $book->dokumen }}</li>
                    @endforeach
                </ul>
            </div>
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

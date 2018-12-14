@extends('layouts.app')
@section('content')

<div class="container">
	
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif



<form action="{{ route('Books.store') }}" method="post">
	@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="title">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" placeholder="Description" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="Author">Author</label>
    <input type="text" class="form-control" id="Author" name="author" placeholder="author">
  </div>
  <a class="btn btn-warning" href="{{ route('Books.index') }}">Back</a>
  <button type="submit" class="btn btn-success">Guardar</button>
</form>


</div>

@endsection('content')
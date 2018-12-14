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



<form action="{{ route('Books.update', $info->id) }}" method="post">
	@csrf
  @method('PUT')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" value="{{ $info->title }}" name="title" placeholder="title">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" placeholder="Description" name="description" rows="3">
      {{ $info->description }}
    </textarea>
  </div>
  <div class="form-group">
    <label for="Author">Author</label>
    <input type="text" class="form-control" id="Author" value="{{ $info->author }}" name="author" placeholder="author">
  </div>
  <a class="btn btn-warning" href="{{ route('Books.index') }}">Back</a>
  <button type="submit" class="btn btn-success">Guardar</button>
</form>


</div>

@endsection('content')
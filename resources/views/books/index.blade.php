@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>List of books</h3>
		</div>
		<div class="col-sm-2">
			<a class="btn btn-sm btn-success" href="{{ route('Books.create') }}">New book</a>
		</div>
	</div>

	@if($message = Session::get('success'))
		<div class="alert alert-success">
			{{ $message }}
		</div>
	@endif

	<table class="table table-hover">
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Author</th>
			<th>Description</th>
			<th colspan="2"></th>
		</tr>
		@foreach($books as $book)
		<tr>
			<td>{{ $book->id }}</td>
			<td>{{ $book->title }}</td>
			<td>{{ $book->author }}</td>
			<td>{{ $book->description }}</td>
			<td>
				<form action="{{ route('Books.destroy', $book->id) }}" method="post">
					<a class="btn btn-info" href="{{ route('Books.show', $book->id) }}">Show</a>
					<a class="btn btn-primary" href="{{ route('Books.edit', $book->id) }}">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach()
	</table>

{!! $books->links() !!}
</div>


@endsection('content')
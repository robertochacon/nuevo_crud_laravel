@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row justify-content-">
		<div class="col-md-10">
			<div class="form-group">
				<h1>Titulo</h1>
				<h3>{{ $info->title }}</h3>
			</div>
		</div>
		<div class="col-md-10">
			<div class="form-group">
				<h1>Author</h1>
				<h5>{{ $info->author }}</h5>
			</div>
		</div>
		<div class="col-md-10">
			<div class="form-group">
				<h1>Description</h1>
				<h5>{{ $info->description }}</h5>
			</div>
		</div>
		<div class="col-md-10">
		<a class="btn btn-warning bg-sm" href="{{ route('Books.index') }}">Back</a>
		</div>
	</div>
</div>	

@endsection('content')
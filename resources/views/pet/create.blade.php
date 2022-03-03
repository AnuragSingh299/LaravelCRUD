@extends('layouts.app')
@section('content')
<h1 class="header">Add Pet</h1>
<div class="row m-3">
	<form method="post" action="{{ route('pet.store') }}">
		@csrf
		<div class="mb-3">
			<label class="form-label" for="name">Name</label>
			<input style="width: 50%" type="text" name="name" class="form-control" required>
			@error('name')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
        <div class="mb-3">
			<label class="form-label" for="phone">Category</label>
			<input style="width: 50%" type="text" name="category" class="form-control" required >
			@error('category')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
        
		<input type="submit" class="btn btn-success">
		<a href="{{ route('pet.index') }}" class="btn btn-warning">Back</a>
	</form>
</div>
@endsection
{{-- @extends('layouts.app')
@section('content')
<div class="row m-3">
	<form method="person" action="{{ route('person.update', $person->id) }}">
		@csrf
		@method('PATCH')
		<div class="mb-3">
			<label class="form-label" for="title">Name</label>
			<input type="text" name="title" value="{{ $person->title }}" class="form-control">
			@error('title')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label class="form-label" for="body">Body</label>
			<textarea name="body" class="form-control">{{ $person->body }}</textarea>
			@error('body')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<input type="submit" class="btn btn-success">
		<a href="{{ route('person.index') }}" class="btn btn-warning">Back</a>
	</form>
</div>
@endsection --}}

@extends('layouts.app')
@section('content')
<div class="row m-3">
	<form method="post" action="{{ route('person.update', $person->person_id) }}">
		@csrf
        @method('PATCH')

        @include('person.form')
		<input type="submit" class="btn btn-success">
		<a href="{{ route('person.index') }}" class="btn btn-warning">Back</a>
	</form>
</div>
@endsection
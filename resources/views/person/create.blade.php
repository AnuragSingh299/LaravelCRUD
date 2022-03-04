@extends('layouts.app')
@section('content')
<h1 class="header">Add Person</h1>
<div class="row m-3">
	{{-- <form method="post" action="{{ route('person.store') }}"> --}}
	{{ Form::open(['route'=>'person.store', 'method'=>'post']) }}
		@csrf
		@include('person.form')
		
		<input type="submit" class="btn btn-success">
		<a href="{{ route('person.index') }}" class="btn btn-warning">Back</a>
	{{-- </form> --}}
	{{ Form::close() }}
</div>
@endsection
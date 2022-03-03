@extends('layouts.app')
@section('content')
<div class="row">
	<div class="my-3">
		<ul class="list-group">
			<li class="list-group-item">Name: {{ $person->name }}</li>
			<li class="list-group-item">Phone No: {{ $person->phone_no }}</li>
            <li class="list-group-item">Birth Date: {{ $person->date_of_birth }}</li>
            <li class="list-group-item">Email: {{ $person->email }}</li>
            <li class="list-group-item">Gender: {{ $person->gender }}</li>
            <li class="list-group-item">Age: {{ $person->age }}</li>
            <li class="list-group-item">Description: {{ $person->description }}</li>
		</ul>
	</div>
	<div class="mt-3">
		<a href="{{ route('person.index') }}" class="btn btn-warning">Back</a>
	</div>
</div>
@endsection
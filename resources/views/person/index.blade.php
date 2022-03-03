@extends('layouts.app')
@section('content')
<div class="row m-3">
	<div class="mb-3">
		<a href="{{ route('person.create') }}" class="btn btn-success">Add new person</a>
	</div>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th scope="col">Person ID</th>
				<th scope="col">Name</th>
				<th scope="col">Phone</th>
				<th scope="col">Birth Date</th>
                <th scope="col">Email</th>
				<th scope="col">Age</th>
				<th scope="col">Gender</th>
				<th scope="col">Hobby</th>
                <th scope="col">Description</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@forelse ($persons as $person)
				<tr>
					{{-- <th scope="row">{{ $loop->index + 1 }}</th> --}}
					<td>{{ $person->person_id }}</td>
					<td>{{ $person->name }}</td>
					<td>{{ $person->phone_no }}</td>
                    <td style="width: 25%" >{{ $person->date_of_birth }}</td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->age }}</td>
                    <td>{{ $person->gender }}</td>
                    <td>{{ $person->hobby }}</td>
                    <td style="width: 75%" >{{ $person->description }}</td>
					<td>
						<a href="{{ route('person.show', $person->person_id) }}" class="btn btn-primary m-1">Show</a>
						<a href="{{ route('person.edit', $person->person_id) }}" class="btn btn-primary m-1">Edit</a>
						<a href="#" class="btn btn-danger m-1" onclick="document.getElementById('delete-person-{{ $person->person_id }}').submit();">Delete</a>
						<form method="post" action="{{ route('person.destroy', $person->person_id) }}" id="delete-person-{{ $person->person_id }}" style="display: none;">
							@csrf
							@method('DELETE')
						</form>
					</td>
				</tr>
			@empty
			    <tr>
			    	<td colspan="9" class="text-center">No person found.</td>
			    </tr>
			@endforelse
		</tbody>
	</table>
</div>
@endsection
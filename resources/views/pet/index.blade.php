@extends('layouts.app')
@section('content')
<div class="row m-3">
	<div class="mb-3">
		<a href="{{ route('pet.create') }}" class="btn btn-success">Add new pet</a>
	</div>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				{{-- <th scope="col">pet ID</th> --}}
				<th scope="col">Name</th>
				<th scope="col">Category</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@forelse ($pets as $pet)
				<tr>
					{{-- //<th scope="row">{{ $loop->index + 1 }}</th> --}}
					{{-- <td>{{ $pet->pet_id }}</td> --}}
					<td>{{ $pet->name }}</td>
                    <td>{{ $pet->category }}</td>
                    
					<td>
						<a href="{{ route('pet.show', $pet->id) }}" class="btn btn-primary m-1">Show</a>
						<a href="{{ route('pet.edit', $pet->id) }}" class="btn btn-primary m-1">Edit</a>
						<a href="#" class="btn btn-danger m-1" onclick="document.getElementById('delete-pet-{{ $pet->id }}').submit();">Delete</a>
						<form method="post" action="{{ route('pet.destroy', $pet->id) }}" id="delete-pet-{{ $pet->id }}" style="display: none;">
							@csrf
							@method('DELETE')
						</form>
					</td>
				</tr>
			@empty
			    <tr>
			    	<td colspan="9" class="text-center">No pet found.</td>
			    </tr>
			@endforelse
		</tbody>
	</table>
</div>
@endsection
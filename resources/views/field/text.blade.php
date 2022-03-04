@php
 //dump($attributes); 
@endphp


@if ($attributes['name'] == 'name')
     {{ Form::text('name', $person->name ?? "" , ['class' => 'form-control'] ) }}
@elseif ($attributes['name'] == 'phone_no')
     {{ Form::text('phone_no', $person->phone_no ?? "" , ['class' => 'form-control'] ) }}
@endif


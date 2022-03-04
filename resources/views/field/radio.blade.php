{{ Form::label('gender', 'Gender') }}
    {{ Form::radio('gender',  "male", ['class' => 'form-control']) }}
    {{ Form::label('gender', 'Male') }}
    {{ Form::radio('gender', "female", ['class' => 'form-control']) }}
    {{ Form::label('gender', 'Female') }}
    {{ Form::radio('gender', "other", ['class' => 'form-control']) }}
    {{ Form::label('gender', 'Other') }}
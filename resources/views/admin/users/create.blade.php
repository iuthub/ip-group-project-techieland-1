@extends('layouts.admin')



@section('content')


<h1>Create New User </h1>


{{----------Error Message--------------------------}}

@include('includes.form_error')


{{----------/Error Message--------------------------}}


{!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}

<div class="form-group">
    {!! Form::label('username','Username:') !!}
    {!! Form::text('username',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password','Password:') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('first_name','First Name:') !!}
    {!! Form::text('first_name',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('lastname','Last Name:') !!}
    {!! Form::text('last_name',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('phone_number','Phone Number:') !!}
    {!! Form::text('phone_number',null, ['class'=>'form-control']) !!}
</div>

<div class="form-froup">
    {!! Form::label('email','Email:') !!}
    {!! Form::email('email',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group" style="margin-top: 15px">
    {!! Form::label('role','Role:') !!}
    {!! Form::select('role',[''=>'Choose Options'] + $roles ,null, ['class'=>'form-control']) !!}
</div>

<div class="form-group" style="margin-top: 20px;">
    {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}






@endsection

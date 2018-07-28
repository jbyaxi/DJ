{{-- use 
@extends('Layout.master')

@section('title')
	<b> Signing UP </b>
@stop

@section('content')
		{{Form::open(array())}}

		<p>
			{{Form::label('UserName','UserName*')}}
			{{Form::text('username')}}
		</p>
		<p>
			{{Form::label('Password','Password*')}}
			{{Form::password('password')}}
		</p>
		<p>
			{{Form::label('Password-Repeat','Password_repaeat*')}}
			{{Form::password('Password-Repeat')}}
		</p>
		<p>
			{{Form::submit('Register')}}
		</p>

		{{Form::close()}}
@stop --}}
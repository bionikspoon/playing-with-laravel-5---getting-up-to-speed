@extends('app')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
				@include('errors.list')
				{!! Form::open(['method'=>'POST', 'action'=>'Auth\AuthController@getRegister']) !!}
					@include('auth.partial.form',['submitButtonText'=>'Register'])

				{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
@endsection

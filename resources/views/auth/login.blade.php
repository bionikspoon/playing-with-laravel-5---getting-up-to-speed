@extends('app')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@include('errors.list')
					{!! Form::open(['method'=>'POST', 'action'=>'Auth\AuthController@postLogin']) !!}
						@include('auth.partial.form',['submitButtonText'=>'Login'])
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>

@endsection

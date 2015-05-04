@if($submitButtonText=='Register')
<!-- Username Form Input -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>
@endif

<!-- Email Address Form Input -->
<div class="form-group">
    {!! Form::label('email', 'Email Address:') !!}
    {!! Form::email('email', NULL, ['class' => 'form-control']) !!}
</div>


<!-- Password Form Input -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

@if($submitButtonText=='Register')
<!-- Password Form Input -->
<div class="form-group">
    {!! Form::label('password_confirmation', 'Confirm Password:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>
@endif


@if($submitButtonText=='Login')
<!-- Remember Me Form Input -->
<div class="checkbox">
    <label for="remember">
        {!! Form::checkbox('remember') !!}
        Remember me?
    </label>
</div>
@endif

<!-- {{ $submitButtonText }} Form Input -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    @if($submitButtonText=='Login')
    {!! Html::linkAction('Auth\PasswordController@getEmail', 'Forgot Your Password?', NULL, ['class'=>'btn btn-link']) !!}
    @endif
</div>

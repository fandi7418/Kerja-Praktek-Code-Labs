@extends('appadmin')

@section('content')

<h1 style="font-family:bebas neue; letter-spacing:2px;">Login</h1>
<hr />

{!! Form::open(['class' => 'form-horizontal' ,'role' => 'form', 'url' => 'admin/login']) !!}

<div class="form-group">
    {!! Form::label('email', 'Email:', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('password', 'Password:', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::checkbox('remember') !!} Remember Me
    </div>
</div>

<hr />

<div class="form-group">
    <div style="font-family: bebas" class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Login', ['class' => 'btn btn-warning', 'style' => 'font-size:16px']) !!}
        <a href="/password/email" class="btn btn-default" style="font-family: bebas; font-size:16px">Forgot Password</a>

    </div>
</div>

{!! Form::close() !!}

@stop
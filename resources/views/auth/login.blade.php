@extends('layout.simple')

@section('headline', 'Remember This')
@section('title', 'Enter email and password to login')

@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong> {{ _('Whoops!') }} </strong><br /> {{ _('There were some problems with your input.') }}<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul> 
</div>
@endif

<div class="panel-body">
    {!! Form::open(array('url' => array('auth/login'), 'method' => 'POST')) !!}

    <fieldset>
        <div class="form-group">
            {{'You are in the process of logging into Remember This.'}}
        
        </div>

        <div class="form-group">
            {!! Form::label('email', _('Email')) !!} 
            {!! Form::text('email', null, array('placeholder' => _('E-mail'),'type' => 'email', 'class' => 'form-control')) !!}         
        </div>
        <div class="form-group">
            {!! Form::label('password', _('Password')) !!}
            {!! Form::password('password', array('placeholder' => _('Password'),'type' => 'password', 'class' => 'form-control')) !!}         
        </div>
        <button type="submit" class="btn btn-lg btn-success btn-block">{{ _('Login') }}</button>
        
    </fieldset>
    {!! Form::close() !!} 
</div> 


@endsection('content')
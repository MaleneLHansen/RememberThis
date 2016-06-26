@extends('layout.default')
@section('fantitle', _('Malene Lykke Hansen'))  

@if ($contact->id > 0)
@section('title', _('Edit Contact'))
@else
@section('title', _('New Contact')) 
@endif
@section('content')
@if ($contact->id > 0)
{!! Form::model(null, ['route' => array('contact.update', $contact->id), 'method' => 'PATCH', 'class' => 'form-horizontal col-md-6']) !!}

@else 
{!! Form::model(null, ['route' => array('contact.create'), 'method' => 'POST', 'class' => 'form-horizontal col-md-6']) !!}
@endif


@if ($errors->any())
<ul class="alert alert-danger mt-10">
    @foreach ($errors->all() as $error)
    <li class="ml-10"> {{ $error }} </li>
    @endforeach
</ul>
@endif

<div class="form-group required">
    {!! Form::label('name', _('Name'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('name', $contact->name, array('class' => 'form-control', 'required' => '')) !!}         
    </div>
</div>  

<div class="form-group required">
    {!! Form::label('email', _('Email'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('email', $contact->email, array('class' => 'form-control', 'required' => '')) !!}         
    </div>
</div>  

<div class="form-group required">
    {!! Form::label('phone', _('Phone'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('phone', $contact->phone, array('class' => 'form-control', 'required' => '')) !!}         
    </div>
</div>  


<button type="submit" class="btn btn-success pull-right"><i class="fa fa-fw fa-floppy-o"></i> {{ _('Save') }}</button>


{!! Form::close()!!} 



@endsection('content')
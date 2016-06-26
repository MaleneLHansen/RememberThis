@extends('layout.default')
@section('fantitle', _('Malene Lykke Hansen'))  

@if ($qoute->id > 0)
@section('title', _('Edit Qoute'))
@else
@section('title', _('New Qoute'))
@endif
@section('content')
@if ($qoute->id > 0)
{!! Form::model(null, ['route' => array('qoute.update', $qoute->id), 'method' => 'PATCH', 'class' => 'form-horizontal col-md-6']) !!}

@else 
{!! Form::model(null, ['route' => array('qoute.create'), 'method' => 'POST', 'class' => 'form-horizontal col-md-6']) !!}
@endif


@if ($errors->any())
<ul class="alert alert-danger mt-10">
    @foreach ($errors->all() as $error)
    <li class="ml-10"> {{ $error }} </li>
    @endforeach
</ul>
@endif

<div class="form-group required">
    {!! Form::label('text', _('Text'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('text', $qoute->text, array('class' => 'form-control', 'required' => '')) !!}         
    </div>
</div>  

<div class="form-group required">
    {!! Form::label('type', _('Type'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('type', ['warning' => _('Yellow'), 'info' => 'Light-blue', 'success' => 'Green', 'danger' => 'Red'], $qoute->type ,array('class' => 'form-control', 'required' => '')) !!}         
    </div>
</div> 


<button type="submit" class="btn btn-success pull-right"><i class="fa fa-fw fa-bomb"></i> {{ _('Save') }}</button>


{!! Form::close()!!} 

@endsection('content')
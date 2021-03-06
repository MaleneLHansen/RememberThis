@extends('layout.default')
@section('fantitle', _('Malene Lykke Hansen'))  

@if ($status->id > 0)
@section('title', _('Edit Status'))
@else
@section('title', _('New Status')) 
@endif
@section('content')
@if ($status->id > 0)
{!! Form::model($status, ['route' => array('status.update', $status->id), 'method' => 'PATCH', 'class' => 'form-horizontal col-md-6']) !!}

@else 
{!! Form::model(null, ['route' => array('status.create'), 'method' => 'POST', 'class' => 'form-horizontal col-md-6']) !!}
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
        {!! Form::text('name', null, array('class' => 'form-control', 'required' => '')) !!}         
    </div>
</div>  

<button type="submit" class="btn btn-success pull-right"><i class="fa fa-fw fa-floppy-o"></i> {{ _('Save') }}</button>


@endsection('content')
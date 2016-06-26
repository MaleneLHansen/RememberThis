@extends('layout.default')
@section('fantitle', _('Malene Lykke Hansen'))  

@if ($projecttype->id > 0)
@section('title', _('Edit Project Type'))
@else
@section('title', _('New Project Type')) 
@endif
@section('content')
@if ($projecttype->id > 0)
{!! Form::model(null, ['route' => array('projecttype.update', $projecttype->id), 'method' => 'PATCH', 'class' => 'form-horizontal col-md-6']) !!}

@else 
{!! Form::model(null, ['route' => array('projecttype.create'), 'method' => 'POST', 'class' => 'form-horizontal col-md-6']) !!}
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
        {!! Form::text('name', $projecttype->name, array('class' => 'form-control', 'required' => '')) !!}         
    </div>
</div>  


<button type="submit" class="btn btn-success pull-right"><i class="fa fa-fw fa-floppy-o"></i> {{ _('Save') }}</button>


{!! Form::close()!!} 



@endsection('content')
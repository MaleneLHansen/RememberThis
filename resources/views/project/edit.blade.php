@extends('layout.default')
@section('fantitle', _('Projects'))

@if ($project->id > 0)
@section('title', _('Edit Project') )
@else
@section('title', _('Create New Project') )
@endif
@section('content')

@if ($project->id > 0)
{!! Form::model(null, ['route' => array('project.update', $project->id), 'method' => 'PATCH', 'class' => 'form-horizontal col-md-6']) !!}

@else

{!! Form::model(null, ['route' => array('project.create'), 'method' => 'POST', 'class' => 'form-horizontal col-md-6']) !!}

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
        {!! Form::text('name', $project->name, array('class' => 'form-control', 'required' => '')) !!}         
    </div>
</div> 

<div class="form-group required">
    {!! Form::label('description', _('Description'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('description', $project->description, array('class' => 'form-control', 'required' => '')) !!}         
    </div>
</div> 



<div class="form-group required">
    {!! Form::label('beginDate', _('Start date'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        <div class='input-group date' id='startDatePicker'>
            {!! Form::text('beginDate', $project->beginDate->format('d/m/Y'), array('class' => 'form-control', 'required' => '', 'placeholder' => _('dd/mm/yyyy'))) !!}         
            <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
            </span>
        </div>
    </div>
</div>

<div class="form-group required">
    {!! Form::label('contact', _('Contact'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('contact', $contacts, $project->contact_id ,array('required' => '', 'id' => 'contacts')) !!}         
    </div>
</div> 


<div class="form-group required">
    {!! Form::label('type', _('Project Type'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('type', $types, $project->projecttype_id ,array('required' => '', 'id' => 'types')) !!}         
    </div>
</div> 

{!! Form::submit('Save', array('class' => 'btn btn-success pull-right'))!!}


{!! Form::close() !!}


<script>
	$('#startDatePicker').datetimepicker();
	$('#contacts').selectize({
    sortField: 'text'
	});
	
	$('#types').selectize({
    sortField: 'text'
	});

</script>

@endsection('content')
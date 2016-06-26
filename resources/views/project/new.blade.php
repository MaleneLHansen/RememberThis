@extends('layout.default')
@section('fantitle', _('Projects'))
@section('title', _('Projects') )
@section('content')

{!! Form::model(null, ['route' => array('project.create'), 'method' => 'POST', 'class' => 'form-horizontal col-md-6']) !!}


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

<div class="form-group required">
    {!! Form::label('name', _('Description'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('name', null, array('class' => 'form-control', 'required' => '')) !!}         
    </div>
</div> 



<div class="form-group required">
    {!! Form::label('startDate', _('Start date'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        <div class='input-group date' id='startDatePicker'>
            {!! Form::text('startDate', '', array('class' => 'form-control', 'required' => '', 'placeholder' => _('dd/mm/yyyy'))) !!}         
            <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
            </span>
        </div>
    </div>
</div>

<div class="form-group required">
    {!! Form::label('contact', _('Contact'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('contact', $contacts, null ,array('class' => 'form-control', 'required' => '', 'id' => 'contacts')) !!}         
    </div>
</div> 


<div class="form-group required">
    {!! Form::label('type', _('Project Type'),['class' => 'col-xs-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('type', $types,null ,array('class' => 'form-control', 'required' => '', 'id' => 'types')) !!}         
    </div>
</div> 


{!! Form::close() !!}


<script>
	$('#startDatePicker').datetimepicker();
	$('#contacts').selectize({
    sortField: 'text'
	});
	

</script>

@endsection('content')
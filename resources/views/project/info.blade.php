@extends('layout.default')
@section('fantitle', _('Projects'))
@section('title', $project->name)
@section('content')


<div class="col-md-8 col-sm-12">
<h4>{{_('Basis Information')}}</h4>
<hr>

<div class="col-md-6 col-sm-12">
	<label for="discription">{{_('Description')}}</label>
</div>
<div class="col-md-6 col-sm-12">
	{{$project->description}}
</div>
<div class="col-md-6 col-sm-12">
	<label for="discription">{{_('Start Date')}}</label>
</div>
<div class="col-md-6 col-sm-12">
	{{$project->beginDate->format('d-m-Y')}}
</div>
<div class="col-md-6 col-sm-12">
	<label for="discription">{{_('Contact')}}</label>
</div>
<div class="col-md-6 col-sm-12">
	{!! $project->contact->name . '<br>' . $project->contact->email . '<br>' . $project->contact->phone !!}
</div>
<div class="col-md-6 col-sm-12">
	<label for="discription">{{_('Project Type')}}</label>
</div>
<div class="col-md-6 col-sm-12">
	{{$project->projecttype->name}}
</div>
<div class="col-md-6 col-sm-12">
	<label for="discription">{{_('Status')}}</label>
</div>
<div class="col-md-6 col-sm-12">
	{{$project->status == 1 ? _('Active') : _('Completed')}}
</div>


</div>

@endsection('content')
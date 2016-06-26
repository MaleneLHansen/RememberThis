@extends('layout.default')
@section('fantitle', _('Malene Lykke Hansen')) 
@section('title',_('Qoutes')) 
@section('content')



@if(!empty($message))
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="alert alert-success">
            {{$message}}
        </div>
    </div>
</div>
@endif 


@foreach(\Auth::user()->qoutes as $qoute)


<div class="col-md-6 col-sm-12">

	<div class="panel panel-{{$qoute->type}}">

		<div class="panel-body">
		<p>{!!$qoute->text!!}</p>
		</div>
		<div class="panel-footer">
		
			<a href="{{route('qoute.delete', $qoute->id)}}" class="btn btn-danger"><i class="fa fa-fw fa-ban"></i> {{_('Delete')}}</a>
			
			<a href="{{route('qoute.edit', $qoute->id)}}" class="btn btn-primary pull-right" ><i class="fa fa-fw fa-pencil"></i> {{_('Edit')}}</a>
		</div>
	</div>
</div>


@endforeach


@endsection('content')
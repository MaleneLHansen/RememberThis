@extends('layout.default')
@section('fantitle', _('Malene Lykke Hansen'))
@section('title', _('Status') )
@section('content')

<table class="table table-striped">

<thead>
<tr>
	
	
	<th>{{_('Name')}}</th>
	<th>{{_('Actions')}}</th>
</tr>
	
</thead>

<tbody>
	
	@foreach($status as $stat)
		<tr>
			<td>
				{{$stat->name}}
			</td>
			<td>
				<a href="{{route('status.edit', $stat->id)}}" class="btn btn-primary"><i class="fa fa-fw fa-pencil"></i>{{_('Edit')}}</a>				
			</td>
		</tr>
	@endforeach

</tbody>

</table>

@endsection('content')
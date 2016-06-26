@extends('layout.default')
@section('fantitle', _('Project Types'))
@section('title', _('Project Types') )
@section('content')


<table class="table table-striped depotcats">
    @if(!empty($success))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                {{$success}}
            </div>
        </div>
    </div>
    @endif 

    <thead>
        <tr>
            <th>{{_('Name')}}</th>
            <th>{{_('Status')}}</th>
            <th>{{_('Actions')}}</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach (\Auth::user()->projecttypes as $type)
        <tr>
            <td>{{$type->name}}</td>
            <td>{{$type->status == 1 ? _('Active') : _('Deactivated') }}</td>
            
            <td>
                
                <a class="btn btn-primary" href="{{route('projecttype.edit', $type->id)}}"><i class="fa fa-fw fa-cog"></i> {{_('Edit') }}</a>
                <button name='deactivateDepotCategory' class="btn btn-warning" data-id = '{{$type->id}}'><i class="fa fa-fw fa-minus-circle"></i> {{_('Deactivate') }}</button>
                
                
                <button name='deleteDepotCategory' class="btn btn-danger" data-id = '{{$type->id}}'><i class="fa fa-fw fa-times"></i> {{_('Delete') }}</button>
                
            </td>
            
        </tr>
        @endforeach
        
    </tbody>
</table>

@endsection('content')
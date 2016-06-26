@extends('layout.default')
@section('fantitle', _('Projects'))
@section('title', _('Projects') )
@section('content')


<div id='stuck'>
    <div class="col-md-8">
        <div class="form-group">
            {!! Form::label('search', _('Search'),['class' => 'col-xs-3 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('search', null, array('class' => 'form-control', 'id' => 'search')) !!} 
            </div>
        </div> 
    </div>
</div>

<table class="table table-striped depotcats" id ="maintable">
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
            <th>{{_('Description')}}</th>
            <th>{{_('Start Date')}}</th>
            <th>{{_('Contact')}}</th>
            <th>{{_('Project Type')}}</th>
            <th>{{_('Status')}}</th>
            <th>{{_('Actions')}}</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($projects as $project)
        <tr>
            <td>{{$project->name}}</td>
            <td>{{$project->description}}</td>
            <td>{{$project->beginDate}}</td>
            <td>{{$project->contact->name . '<br>' . $project->contact->email }}</td>
            <td>{{$project->projectype->name}}</td>
            <td>{{$contact->status == 1 ? _('Active') : _('Deactivated') }}</td>
            
            <td>
                
                <a class="btn btn-primary" href="{{route('project.edit', $contact->id)}}"><i class="fa fa-fw fa-cog"></i> {{_('Edit') }}</a>
                <button name='deactivateDepotCategory' class="btn btn-warning" data-id = '{{$project->id}}'><i class="fa fa-fw fa-minus-circle"></i> {{_('Deactivate') }}</button>
                
                
                <button name='deleteDepotCategory' class="btn btn-danger" data-id = '{{$project->id}}'><i class="fa fa-fw fa-times"></i> {{_('Delete') }}</button>
                
            </td>
            
        </tr>
        @endforeach
        
    </tbody>
</table>

<script>
    $("#search").keyup(function () {
        _this = this;
        $.each($("#maintable tbody").find("tr"), function () {
            if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) == -1) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });
    
</script>

@endsection('content')
@extends('layout.default')
@section('fantitle', _('Malene Lykke Hansen')) 
@section('title',_('Welcome')) 
@section('content')

<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
            <div class="col-xs-3">
            <i class="fa fa-comments fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
            <div class="huge">{{$unfinishedCount}}</div>
            
            </div>
            </div>
            <a href="{{route('project.all.search', 'active')}}">
                <div class="panel-footer">
                <span class="pull-left">Unfinished Projects</span>
                
                <span class="pull-right"></span>
                <div class="clearfix"></div>
                </div>
            </a>

        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-yellow">
        <div class="panel-heading">
            <div class="row">
            <div class="col-xs-3">
            <i class="fa fa-comments fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
            <div class="huge">22</div>
            
            </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                <span class="pull-left">Unfinished tasks</span>
                
                <span class="pull-right"></span>
                <div class="clearfix"></div>
                </div>
            </a>

        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="row">
            <div class="col-xs-3">
            <i class="fa fa-comments fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
            <div class="huge">{{$finishedCount}}</div>
            </div>
            </div>
            <a href="{{route('project.all.search', 'completed')}}">
                <div class="panel-footer">
                <span class="pull-left">Finished projects</span>
                
                <span class="pull-right"></span>
                <div class="clearfix"></div>
                </div>
            </a>

        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-red">
        <div class="panel-heading">
            <div class="row">
            <div class="col-xs-3">
            <i class="fa fa-comments fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
            <div class="huge">26</div>
             
            </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                <span class="pull-left">Finished tasks</span>
                
                <span class="pull-right"></span>
                <div class="clearfix"></div>
                </div>
            </a>

        </div>
    </div>
</div>

<div class="col-md-12 col-sm-12">

<div class="col-md-12 col-sm-12">
<h4>{{_('Did you know?')}}</h4>
<hr>
</div>

@if (count($qoutes) == 0)
<div class="col-md-12 col-sm-12">
{{_("You currently don't have any qoutes saved")}}
</div>
<div class="form-group col-md-12 col-sm-12">
<a href="{{route('qoute.new')}}" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> {{_('Create new')}}</a>
</div>

@else

@foreach ($qoutes as $qoute)
<div class="col-md-3 col-sm-3">
    <div class="alert alert-{{$qoute->type}}">
    {!!$qoute->text!!}
    </div>
</div>

@endforeach

@endif

</div>



 
@endsection('content')
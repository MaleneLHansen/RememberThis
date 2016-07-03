@extends('layout.default')
@section('fantitle', _('Projects'))
@section('title', $project->name)
@section('content')

<div class="col-md-12">


</div>


<div class="col-md-4 col-sm-12">
<h4>{{_('Basis Information')}}<a href="{{route('project.edit', $project->id)}}" class="btn btn-circle btn-primary pull-right"><i class="fa fa-fw fa-pencil"></i></a></h4>
<hr>
<div class="col-md-5 col-sm-12">
	<label for="discription">{{_('Description')}}</label>
</div>
<div class="col-md-7 col-sm-12">
	<p>{{$project->description}}</p>
</div>

<div class="col-md-5 col-sm-12">
	<label for="discription">{{_('Start Date')}}</label>
</div>

<div class="col-md-7 col-sm-12">
	<p>{{$project->beginDate->format('d-m-Y')}}</p>
</div>
<div class="col-md-5 col-sm-12">
	<label for="discription">{{_('Contact')}}</label>
</div>
<div class="col-md-7 col-sm-12">
	<p>{{ $project->contact->name }}</p>
	<p><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$project->contact->email}}</p>
	<p><i class="fa fa-phone" aria-hidden="true"></i> {{$project->contact->phone}}</p>
</div>
<div class="col-md-5 col-sm-12">
	<label for="discription">{{_('Project Type')}}</label>
</div>
<div class="col-md-7 col-sm-12">
	<p>{{$project->projecttype->name}}</p>
</div>
<div class="col-md-5 col-sm-12">
	<label for="discription">{{_('Status')}}</label>
</div>
<div class="col-md-7 col-sm-12">
	<p>{{$project->status == 1 ? _('Active') : _('Completed')}}</p>
</div>
</div>
<div class="col-md-4 col-sm-12">

<h4>{{_('Comments')}}
<button id="newComment" type="button" class="btn btn-circle btn-success pull-right"><i class="fa fa-fw fa-plus"></i></button>
<button id="allComments" type="button" class="btn btn-circle btn-primary pull-right"><i class="fa fa-fw fa-comment"></i></button>
</h4>
<hr>

@foreach ($project->comments as $comment)

<div class="col-md-12 col-sm-12">
<div class="panel panel-success">
	<div class="panel-body">
	<div class="col-md-12 col-sm-12">
	<p>{{$comment->body}}</p>
	</div>
	
	</div>
		
</div>
</div>

@endforeach
</div>



<script type="text/javascript">
$(document).ready(function(){

	$("#newComment").on('click', function (){
		$('#createCommentModal').modal('show');
	});

	$("button[name='editComment']").on('click', function(){
		$("#commentId").val($(this).data('id'));
		$("#editCommentText").val($(this).data('body'));
		$('#editCommentModal').modal('show');

	});

	$("#allComments").on('click', function (){
		$("#allCommentModal").modal('show');
	});

	$("button[name='editCommentTable']").on('click', function(){

		$("#allCommentModal").modal('hide');
		$("#commentId").val($(this).data('id'));
		$("#editCommentText").val($(this).data('body'));
		$('#editCommentModal').modal('show');
	});

	$("button[name='deleteCommentTable']").on('click', function (){
		$("#allCommentModal").modal('hide');
		$('#commentDeleteId').val($(this).data('id'));
		$('#deleteComment').modal('show');
	});
});

</script>


<div class="modal" id="allCommentModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{_('Comments')}}</h4>
            </div>
            <div class="modal-body">

            <table class="table table-striped">
            <thead>
            	
            	<tr>
            		<th>{{_('Comment')}}</th>
            		<th>{{_('Action')}}</th>
            	</tr>

            </thead>
            <tbody>
            	@foreach($project->allcomments as $comment)
            	<tr>
            		<td>{{$comment->body}}</td>
            		<td><button id="editComment" name="editCommentTable" data-id="{{$comment->id}}" data-body="{{$comment->body}}" type="button" class="btn btn-circle btn-primary pull-right"><i class="fa fa-fw fa-pencil"></i></button>
            		<button id="deleteCommentTable" name="deleteCommentTable" data-id="{{$comment->id}}" type="button" class="btn btn-circle btn-danger pull-right"><i class="fa fa-fw fa-times"></i></button></td>
            	</tr>

            	@endforeach
            </tbody>
            </table>
           
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-success"><i></i>{{_('Close')}}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal" id="createCommentModal" role="dialog">
    {!! Form::model(null, ['route' => array('comment.project.new', $project->id), 'method' => 'POST', 'id' => 'specificemail']) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{_('New Comment')}}</h4>
            </div>
            <div class="modal-body">

            {!! Form::textarea('body', null, array('class' => 'form-control')) !!}
           
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary"><i></i>{{_('No')}}</button>
                <button name="yes" type="submit"  class="btn btn-success"><i></i>{{_('Yes')}}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    {!! Form::close() !!} 
</div><!-- /.modal -->

<div class="modal" id="deleteComment" role="dialog">
    {!! Form::model(null, ['route' => array('comment.delete'), 'method' => 'DELETE', 'id' => 'specificemail']) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{_('New Comment')}}</h4>
            </div>
            <div class="modal-body">

            {!! Form::hidden('commentDeleteId', null, array('id' => 'commentDeleteId')) !!}
            <p>{{_("You're deleting this comment. If you want it back you'll have to do it from the database. This will annoy you. Please be sure you don't want to see this comment again.")}}</p>
           
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary"><i></i>{{_('No')}}</button>
                <button name="yes" type="submit"  class="btn btn-success"><i></i>{{_('Yes')}}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    {!! Form::close() !!} 
</div><!-- /.modal -->

<div class="modal" id="editCommentModal" role="dialog">
    {!! Form::model(null, ['route' => array('comment.project.edit', $project->id), 'method' => 'PATCH', 'id' => 'specificemail']) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{_('New Comment')}}</h4>
            </div>
            <div class="modal-body">

            {!! Form::textarea('body', null, array('class' => 'form-control', 'id' => 'editCommentText')) !!}
            {!! Form::hidden('commentId',null, array('id' => 'commentId')) !!}
           
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary"><i></i>{{_('No')}}</button>
                <button name="yes" type="submit"  class="btn btn-success"><i></i>{{_('Yes')}}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    {!! Form::close() !!}
</div><!-- /.modal -->

@endsection('content')
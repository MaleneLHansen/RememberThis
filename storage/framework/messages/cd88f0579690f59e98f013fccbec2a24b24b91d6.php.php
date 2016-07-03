<?php $__env->startSection('fantitle', _('Projects')); ?>
<?php $__env->startSection('title', $project->name); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-12">


</div>


<div class="col-md-4 col-sm-12">
<h4><?php echo e(_('Basis Information')); ?><a href="<?php echo e(route('project.edit', $project->id)); ?>" class="btn btn-circle btn-primary pull-right"><i class="fa fa-fw fa-pencil"></i></a></h4>
<hr>
<div class="col-md-5 col-sm-12">
	<label for="discription"><?php echo e(_('Description')); ?></label>
</div>
<div class="col-md-7 col-sm-12">
	<p><?php echo e($project->description); ?></p>
</div>

<div class="col-md-5 col-sm-12">
	<label for="discription"><?php echo e(_('Start Date')); ?></label>
</div>

<div class="col-md-7 col-sm-12">
	<p><?php echo e($project->beginDate->format('d-m-Y')); ?></p>
</div>
<div class="col-md-5 col-sm-12">
	<label for="discription"><?php echo e(_('Contact')); ?></label>
</div>
<div class="col-md-7 col-sm-12">
	<p><?php echo e($project->contact->name); ?></p>
	<p><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo e($project->contact->email); ?></p>
	<p><i class="fa fa-phone" aria-hidden="true"></i> <?php echo e($project->contact->phone); ?></p>
</div>
<div class="col-md-5 col-sm-12">
	<label for="discription"><?php echo e(_('Project Type')); ?></label>
</div>
<div class="col-md-7 col-sm-12">
	<p><?php echo e($project->projecttype->name); ?></p>
</div>
<div class="col-md-5 col-sm-12">
	<label for="discription"><?php echo e(_('Status')); ?></label>
</div>
<div class="col-md-7 col-sm-12">
	<p><?php echo e($project->status == 1 ? _('Active') : _('Completed')); ?></p>
</div>
</div>
<div class="col-md-4 col-sm-12">

<h4><?php echo e(_('Comments')); ?>

<button id="newComment" type="button" class="btn btn-circle btn-success pull-right"><i class="fa fa-fw fa-plus"></i></button>
<button id="allComments" type="button" class="btn btn-circle btn-primary pull-right"><i class="fa fa-fw fa-comment"></i></button>
</h4>
<hr>

<?php foreach($project->comments as $comment): ?>

<div class="col-md-12 col-sm-12">
<div class="panel panel-success">
	<div class="panel-body">
	<div class="col-md-12 col-sm-12">
	<p><?php echo e($comment->body); ?></p>
	</div>
	
	</div>
		
</div>
</div>

<?php endforeach; ?>
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
});

</script>


<div class="modal" id="allCommentModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo e(_('Comments')); ?></h4>
            </div>
            <div class="modal-body">

            <table class="table table-striped">
            <thead>
            	
            	<tr>
            		<th><?php echo e(_('Comment')); ?></th>
            		<th><?php echo e(_('Action')); ?></th>
            	</tr>

            </thead>
            <tbody>
            	<?php foreach($project->allcomments as $comment): ?>
            	<tr>
            		<td><?php echo e($comment->body); ?></td>
            		<td><button id="editComment" name="editCommentTable" data-id="<?php echo e($comment->id); ?>" data-body="<?php echo e($comment->body); ?>" type="button" class="btn btn-circle btn-primary pull-right"><i class="fa fa-fw fa-pencil"></i></button></td>
            	</tr>

            	<?php endforeach; ?>
            </tbody>
            </table>
           
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-success"><i></i><?php echo e(_('Close')); ?></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal" id="createCommentModal" role="dialog">
    <?php echo Form::model(null, ['route' => array('comment.project.new', $project->id), 'method' => 'POST', 'id' => 'specificemail']); ?>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo e(_('New Comment')); ?></h4>
            </div>
            <div class="modal-body">

            <?php echo Form::textarea('body', null, array('class' => 'form-control')); ?>

           
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary"><i></i><?php echo e(_('No')); ?></button>
                <button name="yes" type="submit"  class="btn btn-success"><i></i><?php echo e(_('Yes')); ?></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    <?php echo Form::close(); ?> 
</div><!-- /.modal -->

<div class="modal" id="editCommentModal" role="dialog">
    <?php echo Form::model(null, ['route' => array('comment.project.edit', $project->id), 'method' => 'PATCH', 'id' => 'specificemail']); ?>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo e(_('New Comment')); ?></h4>
            </div>
            <div class="modal-body">

            <?php echo Form::textarea('body', null, array('class' => 'form-control', 'id' => 'editCommentText')); ?>

            <?php echo Form::hidden('commentId',null, array('id' => 'commentId')); ?>

           
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary"><i></i><?php echo e(_('No')); ?></button>
                <button name="yes" type="submit"  class="btn btn-success"><i></i><?php echo e(_('Yes')); ?></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    <?php echo Form::close(); ?>

</div><!-- /.modal -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('fantitle', _('Projects')); ?>

<?php if($project->id > 0): ?>
<?php $__env->startSection('title', _('Edit Project') ); ?>
<?php else: ?>
<?php $__env->startSection('title', _('Create New Project') ); ?>
<?php endif; ?>
<?php $__env->startSection('content'); ?>

<?php if($project->id > 0): ?>
<?php echo Form::model(null, ['route' => array('project.update', $project->id), 'method' => 'PATCH', 'class' => 'form-horizontal col-md-6']); ?>


<?php else: ?>

<?php echo Form::model(null, ['route' => array('project.create'), 'method' => 'POST', 'class' => 'form-horizontal col-md-6']); ?>


<?php endif; ?>

<?php if($errors->any()): ?>
<ul class="alert alert-danger mt-10">
    <?php foreach($errors->all() as $error): ?>
    <li class="ml-10"> <?php echo e($error); ?> </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>


<div class="form-group required">
    <?php echo Form::label('name', _('Name'),['class' => 'col-xs-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::text('name', $project->name, array('class' => 'form-control', 'required' => '')); ?>         
    </div>
</div> 

<div class="form-group required">
    <?php echo Form::label('description', _('Description'),['class' => 'col-xs-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::textarea('description', $project->description, array('class' => 'form-control', 'required' => '')); ?>         
    </div>
</div> 



<div class="form-group required">
    <?php echo Form::label('beginDate', _('Start date'),['class' => 'col-xs-4 control-label']); ?>

    <div class="col-sm-8">
        <div class='input-group date' id='startDatePicker'>
            <?php echo Form::text('beginDate', $project->beginDate->format('d/m/Y'), array('class' => 'form-control', 'required' => '', 'placeholder' => _('dd/mm/yyyy'))); ?>         
            <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
            </span>
        </div>
    </div>
</div>

<div class="form-group required">
    <?php echo Form::label('contact', _('Contact'),['class' => 'col-xs-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('contact', $contacts, $project->contact_id ,array('required' => '', 'id' => 'contacts')); ?>         
    </div>
</div> 


<div class="form-group required">
    <?php echo Form::label('type', _('Project Type'),['class' => 'col-xs-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('type', $types, $project->projecttype_id ,array('required' => '', 'id' => 'types')); ?>         
    </div>
</div> 

<?php echo Form::submit('Save', array('class' => 'btn btn-success pull-right')); ?>



<?php echo Form::close(); ?>



<script>
	$('#startDatePicker').datetimepicker();
	$('#contacts').selectize({
    sortField: 'text'
	});
	
	$('#types').selectize({
    sortField: 'text'
	});

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
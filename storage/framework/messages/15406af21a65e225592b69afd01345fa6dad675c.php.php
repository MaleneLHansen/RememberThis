<?php $__env->startSection('fantitle', _('Malene Lykke Hansen')); ?>  

<?php if($qoute->id > 0): ?>
<?php $__env->startSection('title', _('Edit Qoute')); ?>
<?php else: ?>
<?php $__env->startSection('title', _('New Qoute')); ?>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
<?php if($qoute->id > 0): ?>
<?php echo Form::model(null, ['route' => array('qoute.update', $qoute->id), 'method' => 'PATCH', 'class' => 'form-horizontal col-md-6']); ?>


<?php else: ?> 
<?php echo Form::model(null, ['route' => array('qoute.create'), 'method' => 'POST', 'class' => 'form-horizontal col-md-6']); ?>

<?php endif; ?>


<?php if($errors->any()): ?>
<ul class="alert alert-danger mt-10">
    <?php foreach($errors->all() as $error): ?>
    <li class="ml-10"> <?php echo e($error); ?> </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<div class="form-group required">
    <?php echo Form::label('text', _('Text'),['class' => 'col-xs-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::textarea('text', $qoute->text, array('class' => 'form-control', 'required' => '')); ?>         
    </div>
</div>  

<div class="form-group required">
    <?php echo Form::label('type', _('Type'),['class' => 'col-xs-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('type', ['warning' => _('Yellow'), 'info' => 'Light-blue', 'success' => 'Green', 'danger' => 'Red'], $qoute->type ,array('class' => 'form-control', 'required' => '')); ?>         
    </div>
</div> 


<button type="submit" class="btn btn-success pull-right"><i class="fa fa-fw fa-bomb"></i> <?php echo e(_('Save')); ?></button>


<?php echo Form::close(); ?> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
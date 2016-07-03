<?php $__env->startSection('fantitle', _('Malene Lykke Hansen')); ?> 
<?php $__env->startSection('title',_('Qoutes')); ?> 
<?php $__env->startSection('content'); ?>



<?php if(!empty($message)): ?>
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="alert alert-success">
            <?php echo e($message); ?>

        </div>
    </div>
</div>
<?php endif; ?> 


<?php foreach(\Auth::user()->qoutes as $qoute): ?>


<div class="col-md-6 col-sm-12">

	<div class="panel panel-<?php echo e($qoute->type); ?>">

		<div class="panel-body">
		<p><?php echo $qoute->text; ?></p>
		</div>
		<div class="panel-footer">
		
			<a href="<?php echo e(route('qoute.delete', $qoute->id)); ?>" class="btn btn-danger"><i class="fa fa-fw fa-ban"></i> <?php echo e(_('Delete')); ?></a>
			
			<a href="<?php echo e(route('qoute.edit', $qoute->id)); ?>" class="btn btn-primary pull-right" ><i class="fa fa-fw fa-pencil"></i> <?php echo e(_('Edit')); ?></a>
		</div>
	</div>
</div>


<?php endforeach; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
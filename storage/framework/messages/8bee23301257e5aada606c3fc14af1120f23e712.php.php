<?php $__env->startSection('fantitle', _('Malene Lykke Hansen')); ?> 
<?php $__env->startSection('title',_('Welcome')); ?> 
<?php $__env->startSection('content'); ?>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
            <div class="col-xs-3">
            <i class="fa fa-comments fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
            <div class="huge"><?php echo e($unfinishedCount); ?></div>
            
            </div>
            </div>
            <a href="<?php echo e(route('project.all.search', 'active')); ?>">
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
            <div class="huge"><?php echo e($finishedCount); ?></div>
            </div>
            </div>
            <a href="<?php echo e(route('project.all.search', 'completed')); ?>">
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
<h4><?php echo e(_('Did you know?')); ?></h4>
<hr>
</div>

<?php if(count($qoutes) == 0): ?>
<div class="col-md-12 col-sm-12">
<?php echo e(_("You currently don't have any qoutes saved")); ?>

</div>
<div class="form-group col-md-12 col-sm-12">
<a href="<?php echo e(route('qoute.new')); ?>" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> <?php echo e(_('Create new')); ?></a>
</div>

<?php else: ?>

<?php foreach($qoutes as $qoute): ?>
<div class="col-md-3 col-sm-3">
    <div class="alert alert-<?php echo e($qoute->type); ?>">
    <?php echo $qoute->text; ?>

    </div>
</div>

<?php endforeach; ?>

<?php endif; ?>

</div>



 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('headline', 'Remember This'); ?>
<?php $__env->startSection('title', 'Enter email and password to login'); ?>

<?php $__env->startSection('content'); ?>

<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
    <strong> <?php echo e(_('Whoops!')); ?> </strong><br /> <?php echo e(_('There were some problems with your input.')); ?><br><br>
    <ul>
        <?php foreach($errors->all() as $error): ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; ?>
    </ul> 
</div>
<?php endif; ?>

<div class="panel-body">
    <?php echo Form::open(array('url' => array('auth/login'), 'method' => 'POST')); ?>


    <fieldset>
        <div class="form-group">
            <?php echo e('You are in the process of logging into Remember This.'); ?>

        
        </div>

        <div class="form-group">
            <?php echo Form::label('email', _('Email')); ?> 
            <?php echo Form::text('email', null, array('placeholder' => _('E-mail'),'type' => 'email', 'class' => 'form-control')); ?>         
        </div>
        <div class="form-group">
            <?php echo Form::label('password', _('Password')); ?>

            <?php echo Form::password('password', array('placeholder' => _('Password'),'type' => 'password', 'class' => 'form-control')); ?>         
        </div>
        <button type="submit" class="btn btn-lg btn-success btn-block"><?php echo e(_('Login')); ?></button>
        
    </fieldset>
    <?php echo Form::close(); ?> 
</div> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.simple', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
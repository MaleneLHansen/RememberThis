<?php $__env->startSection('fantitle', _('Depotcategory')); ?>
<?php $__env->startSection('title', _('Contacts') ); ?>
<?php $__env->startSection('content'); ?>


<table class="table table-striped depotcats">
    <?php if(!empty($success)): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                <?php echo e($success); ?>

            </div>
        </div>
    </div>
    <?php endif; ?> 

    <thead>
        <tr>
            <th><?php echo e(_('Name')); ?></th>
            <th><?php echo e(_('Email')); ?></th>
            <th><?php echo e(_('Phone')); ?></th>
            <th><?php echo e(_('Status')); ?></th>
            <th><?php echo e(_('Actions')); ?></th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach(\Auth::user()->contacts as $contact): ?>
        <tr>
            <td><?php echo e($contact->name); ?></td>
            <td><?php echo e($contact->email); ?></td>
            <td><?php echo e($contact->phone); ?></td>
            <td><?php echo e($contact->status == 1 ? _('Active') : _('Deactivated')); ?></td>
            
            <td>
                
                <a class="btn btn-primary" href="<?php echo e(route('contact.edit', $contact->id)); ?>"><i class="fa fa-fw fa-cog"></i> <?php echo e(_('Edit')); ?></a>
                <button name='deactivateDepotCategory' class="btn btn-warning" data-id = '<?php echo e($contact->id); ?>'><i class="fa fa-fw fa-minus-circle"></i> <?php echo e(_('Deactivate')); ?></button>
                
                
                <button name='deleteDepotCategory' class="btn btn-danger" data-id = '<?php echo e($contact->id); ?>'><i class="fa fa-fw fa-times"></i> <?php echo e(_('Delete')); ?></button>
                
            </td>
            
        </tr>
        <?php endforeach; ?>
        
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
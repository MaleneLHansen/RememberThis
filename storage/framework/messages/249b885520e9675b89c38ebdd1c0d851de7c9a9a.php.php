<?php $__env->startSection('fantitle', _('Projects')); ?>
<?php $__env->startSection('title', _('Projects') ); ?>
<?php $__env->startSection('content'); ?>



<div class="col-md-8">
    <div class="form-group">
        <?php echo Form::label('search', _('Search'),['class' => 'col-xs-3 control-label']); ?>

        <div class="col-md-6">
            <?php echo Form::text('search', null, array('class' => 'form-control', 'id' => 'search')); ?> 
        </div>
    </div> 
</div>


<div class="col-md-12">
	<ul class="nav nav-tabs">
		<li role="presentation" class=<?php echo e($type == null ? "active" : ""); ?>><a href="<?php echo e(route('project.all')); ?>"><?php echo e('All'); ?></a></li>
  		<li role="presentation" class=<?php echo e($type == 'active' ? "active" : ""); ?>><a href="<?php echo e(route('project.all.search', 'active')); ?>"><?php echo e(_('Active')); ?> </a></li>
  		<li role="presentation" class=<?php echo e($type == 'completed' ? "active" : ""); ?>><a href="<?php echo e(route('project.all.search', 'completed')); ?>"> <?php echo e(_('Completed')); ?></a></li>
	</ul>
</div>

<table class="table table-striped depotcats" id ="maintable">
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
            <th><?php echo e(_('Description')); ?></th>
            <th><?php echo e(_('Start Date')); ?></th>
            <th><?php echo e(_('Contact')); ?></th>
            <th><?php echo e(_('Project Type')); ?></th>
            <th><?php echo e(_('Status')); ?></th>
            <th><?php echo e(_('Actions')); ?></th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach($projects as $project): ?>
        <tr>
            <td><?php echo e($project->name); ?></td>

            <td><?php echo e($project->description); ?></td>
            
            <td><?php echo e($project->beginDate->format('d-m-Y')); ?></td>
            
            <td><?php echo $project->contact->name . '<br>' . $project->contact->email; ?></td>
            
            <td><?php echo e($project->projecttype->name); ?></td>

            <td><?php echo e($project->status == 1 ? _('Active') : _('Deactivated')); ?></td>
            
            <td>
                
                <a class="btn btn-primary" href="<?php echo e(route('project.edit', $project->id)); ?>"><i class="fa fa-fw fa-cog"></i> <?php echo e(_('Edit')); ?></a>               
                
                <button name='deleteDepotCategory' class="btn btn-danger" data-id = '<?php echo e($project->id); ?>'><i class="fa fa-fw fa-times"></i> <?php echo e(_('Delete')); ?></button>
                <a class="btn btn-success" href="<?php echo e(route('project.info', $project->id)); ?>"><i class="fa fa-fw fa-bomb"></i> <?php echo e(_('See More')); ?></a>
            </td>
            
        </tr>
        <?php endforeach; ?>
        
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
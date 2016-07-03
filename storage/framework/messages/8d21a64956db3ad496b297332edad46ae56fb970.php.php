<div class="navbar-default sidebar" role="navigation" id='side-menu-whole'>
    <div class="sidebar-nav navbar-collapse"> 
        <ul class="nav" id="side-menu">


            <li>
                <a href="/"><i class="fa fa-fw fa-dashboard"></i> <?php echo e(_('Dashboard')); ?></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-certificate"></i> <?php echo e(_('Projects')); ?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo e(route('project.all')); ?>"><i class="fa fa-fw fa-list"></i> <?php echo e(_('Overview')); ?></a></li> 
                    <li><a href="<?php echo e(route('project.create')); ?>"><i class="fa fa-fw fa-plus"></i> <?php echo e(_('Create')); ?></a></li> 
                    
                    
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-cog"></i> <?php echo e(_('Settings')); ?><span class="fa arrow"></span></a>



                <ul class="nav nav-second-level">
                    <li><a href="<?php echo e(route('contact.all')); ?>"><i class="fa fa-fw fa-users"></i> <?php echo e(_('Contacts')); ?></a></li> 
                    <ul class="nav nav-third-level">
                    <li><a href="<?php echo e(route('contact.new')); ?>"><i class="fa fa-fw fa-plus"></i><?php echo e(_('New')); ?></a></li>
                    </ul>
                    <li><a href="<?php echo e(route('projecttype.all')); ?>"><i class="fa fa-fw fa-terminal"></i> <?php echo e(_('Project Type')); ?></a></li>
                    <ul class="nav nav-third-level">
                    <li><a href="<?php echo e(route('projecttype.new')); ?>"><i class="fa fa-fw fa-plus"></i><?php echo e(_('New')); ?></a></li>
                    </ul>
                    <li><a href="<?php echo e(route('qoute.all')); ?>"><i class="fa fa-fw fa-paragraph"></i> <?php echo e(_('Qoutes')); ?></a></li> 
                    <ul class="nav nav-third-level">
                    <li><a href="<?php echo e(route('qoute.new')); ?>"><i class="fa fa-fw fa-plus"></i><?php echo e(_('New')); ?></a></li>
                    </ul>
                </ul>
                

            </li>
            
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
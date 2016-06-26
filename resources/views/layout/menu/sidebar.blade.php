<div class="navbar-default sidebar" role="navigation" id='side-menu-whole'>
    <div class="sidebar-nav navbar-collapse"> 
        <ul class="nav" id="side-menu">


            <li>
                <a href="/"><i class="fa fa-fw fa-dashboard"></i> {{_('Dashboard')}}</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-certificate"></i> {{_('Projects')}}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{route('project.all')}}"><i class="fa fa-fw fa-list"></i> {{_('Overview')}}</a></li> 
                    <li><a href="{{route('project.create')}}"><i class="fa fa-fw fa-plus"></i> {{_('Create')}}</a></li> 
                    
                    
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-cog"></i> {{_('Settings')}}<span class="fa arrow"></span></a>



                <ul class="nav nav-second-level">
                    <li><a href="{{route('contact.all')}}"><i class="fa fa-fw fa-users"></i> {{_('Contacts')}}</a></li> 
                    <ul class="nav nav-third-level">
                    <li><a href="{{route('contact.new')}}"><i class="fa fa-fw fa-plus"></i>{{_('New')}}</a></li>
                    </ul>
                    <li><a href="{{route('projecttype.all')}}"><i class="fa fa-fw fa-terminal"></i> {{_('Project Type')}}</a></li>
                    <ul class="nav nav-third-level">
                    <li><a href="{{route('projecttype.new')}}"><i class="fa fa-fw fa-plus"></i>{{_('New')}}</a></li>
                    </ul>
                    <li><a href="{{route('qoute.all')}}"><i class="fa fa-fw fa-paragraph"></i> {{_('Qoutes')}}</a></li> 
                    <ul class="nav nav-third-level">
                    <li><a href="{{route('qoute.new')}}"><i class="fa fa-fw fa-plus"></i>{{_('New')}}</a></li>
                    </ul>
                </ul>
                

            </li>
            
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
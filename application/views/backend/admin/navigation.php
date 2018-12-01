        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                            </span> </div>
                    </li>
                    <hr>
                    <li> <a href="<?php echo base_url(); ?>index.php?admin/admin_dashboard" class="waves-effect"><i class="ti-dashboard"></i> <span class="hide-menu"><?php echo get_phrase('Dashboard');?></span></a>
                    </li>
                    

                    <li> <a href="<?php echo base_url(); ?>index.php?admin/pasien" class="waves-effect"><i class="fa fa-envelope"></i> <span class="hide-menu"><?php echo get_phrase('Pasien'); ?></span></a>
                    </li>

                    <li> <a href="<?php echo base_url(); ?>index.php?admin/list_rawat_jalan" class="waves-effect"><i class="ti-settings"></i> <span class="hide-menu"><?php echo get_phrase('System-Settings'); ?></span></a> </li>

                    <li> <a href="<?php echo base_url(); ?>index.php?admin/academic_settings" class="waves-effect"><i class="fa fa-graduation-cap"></i> <span class="hide-menu"><?php echo get_phrase('Academic-Settings'); ?></span></a> </li>
        </ul>
    </div>
</div>
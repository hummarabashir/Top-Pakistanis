<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url(); ?>uploads/logo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>    
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>superadmin/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>



        <!-- PARENTS -->
        
        
        <li class="<?php if ($page_name == 'category') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>superadmin/category">
                <i class="entypo-list"></i>
                <span><?php echo get_phrase('Category'); ?></span>
            </a>
             <ul>
                <li><a href="<?php echo base_url(); ?>superadmin/categoryadd">Add Category</a></li>
                <li><a href="<?php echo base_url(); ?>superadmin/category">View Category</a></li>
            </ul>
        </li>

        <li class="<?php if ($page_name == 'subcategory') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>superadmin/subcategory">
                <i class="entypo-list"></i>
                <span><?php echo get_phrase('SubCategory'); ?></span>
            </a>
             <ul>
                <li><a href="<?php echo base_url(); ?>superadmin/subcategoryadd">Add Subcategory</a></li>
                <li><a href="<?php echo base_url(); ?>superadmin/subcategory">View Subcategory</a></li>
            </ul>
        </li>

          


        <!-- Employer -->
        <li class="<?php
            if ($page_name == 'pending_payments' ||
                    $page_name == 'approved_payments')
                            echo 'opened active';
            ?> ">
                <a href="#">
                    <i class="entypo-users"></i>
                    <span><?php echo 'Employer'; ?></span>
                </a>
                <ul>
                    <li class="<?php if ($page_name == 'employers') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>superadmin/employers">
                            <span><i class="entypo-dot"></i><?php echo get_phrase('employers list'); ?></span>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'emp_packages') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>superadmin/emp_packages">
                            <span><i class="entypo-dot"></i><?php echo 'Payment Packages'; ?></span>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'pending_payments') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>superadmin/pending_payments">
                            <span><i class="entypo-dot"></i> <?php echo 'Pending Payments'; ?></span>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'approved_payments') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>superadmin/approved_payments">
                            <span><i class="entypo-dot"></i> <?php echo 'Approved Payments'; ?></span>
                        </a>
                    </li>
                </ul>
        </li>
        <!-- ... Employer .... -->


         <!-- jobseeker -->
        <li class="<?php
            if ($page_name == 'jpending_payments' ||
                    $page_name == 'japproved_payments')
                            echo 'opened active';
            ?> ">
                <a href="#">
                    <i class="entypo-users"></i>
                    <span><?php echo 'Employees'; ?></span>
                </a>
                <ul>
                    <li class="<?php if ($page_name == 'jobseekars') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>superadmin/jobseekars">
                            <span><i class="entypo-dot"></i><?php echo get_phrase('Employees list'); ?></span>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'jbs_packages') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>superadmin/jbs_packages">
                            <span><i class="entypo-dot"></i><?php echo 'Payment Packages'; ?></span>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'jpending_payments') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>superadmin/jpending_payments">
                            <span><i class="entypo-dot"></i> <?php echo 'Pending Payments'; ?></span>
                        </a>
                    </li>
                    
                    <li class="<?php if ($page_name == 'japproved_payments') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>superadmin/japproved_payments">
                            <span><i class="entypo-dot"></i> <?php echo 'Approved Payments'; ?></span>
                        </a>
                    </li>
                    
                </ul>
        </li>
        <!-- ... jobseekar .... -->


        

        

        <!-- jobs -->
        <li class="<?php
            if ($page_name == 'pending_jobs' ||
                    $page_name == 'approved_jobs')
                            echo 'opened active';
            ?> ">
                <a href="#">
                    <i class="entypo-lifebuoy"></i>
                    <span><?php echo 'Profiles'; ?></span>
                </a>
                <ul>
                    <li class="<?php if ($page_name == 'pending_jobs') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>superadmin/pending_jobs">
                            <span><i class="entypo-dot"></i> <?php echo 'Pending Profiles'; ?></span>
                        </a>
                    </li>
                    
                   
                    <li class="<?php if ($page_name == 'approved_jobs') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>superadmin/approved_jobs">
                            <span><i class="entypo-dot"></i> <?php echo 'Approved Profiles'; ?></span>
                        </a>
                    </li>
                    
                </ul>
        </li>
        <!-- ... jobs.... -->

        <!-- bank acount settings -->
        <li class="<?php if ($page_name == 'back_account_settings') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>superadmin/back_account">
                <i class="entypo-credit-card"></i>
                <span><?php echo 'Bank Acount Settings'; ?></span>
            </a>
        </li>

        <li class="<?php if ($page_name == 'admin') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>superadmin/admin">
                <i class="entypo-user"></i>
                <span><?php echo get_phrase('Admins'); ?></span>
            </a>
             <ul>
                <li><a href="<?php echo base_url(); ?>superadmin/adminadd">Add Admin</a></li>
                <li><a href="<?php echo base_url(); ?>superadmin/admin">View Admin</a></li>
            </ul>
        </li>

        <!-- SETTINGS -->
        <li class="<?php
        if ($page_name == 'system_settings' ||
                $page_name == 'manage_language' ||
                    $page_name == 'sms_settings')
                        echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-lifebuoy"></i>
                <span><?php echo get_phrase('settings'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>superadmin/system_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('general_settings'); ?></span>
                    </a>
                </li>
                
               
                <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>superadmin/manage_language">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('language_settings'); ?></span>
                    </a>
                </li>
                
            </ul>
        </li>

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>superadmin/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>

    </ul>

</div>
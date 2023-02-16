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
            <a href="<?php echo base_url(); ?>admin/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>


<li class="<?php if ($page_name == 'jobseekars') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/jobseekars">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('Employees'); ?></span>
            </a>
        </li>


        <!-- PARENTS -->
        <li class="<?php if ($page_name == 'employers') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/employers">
                <i class="entypo-user"></i>
                <span><?php echo get_phrase('Employers'); ?></span>
            </a>
        </li>
        
        <li class="<?php if ($page_name == 'category') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/category">
                <i class="entypo-tag"></i>
                <span><?php echo get_phrase('Category'); ?></span>
            </a>
            <ul>
                <li><a href="<?php echo base_url(); ?>admin/categoryadd">Add Category</a></li>
                <li><a href="<?php echo base_url(); ?>admin/category">View Category</a></li>
            </ul>
        </li>

        <li class="<?php if ($page_name == 'subcategory') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/subcategory">
                <i class="entypo-tag"></i>
                <span><?php echo get_phrase('SubCategory'); ?></span>
            </a>
            <ul>
                <li><a href="<?php echo base_url(); ?>admin/subcategoryadd">Add Subcategory</a></li>
                <li><a href="<?php echo base_url(); ?>admin/subcategory"> View Subcatgory</a></li>
            </ul>
        </li>


        <li class="<?php if ($page_name == 'subcategory') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/subcategory">
                <i class="entypo-tag"></i>
                <span><?php echo get_phrase('Skills'); ?></span>
            </a>
            <ul>
                <li><a href="<?php echo base_url(); ?>admin/skillsadd">Add Subcategory</a></li>
                <li><a href="<?php echo base_url(); ?>admin/subcategory"> View Subcatgory</a></li>
            </ul>
        </li>

        <li class="<?php if ($page_name == 'city') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/city">
                <i class="entypo-globe"></i>
                <span><?php echo get_phrase('City'); ?></span>
            </a>
            <ul>
                <li><a href="<?php echo base_url(); ?>admin/cityadd">Add City</a></li>
                <li><a href="<?php echo base_url(); ?>admin/city">View City</a></li>
            </ul>
        </li>
        
   <!--      <li class="<?php if ($page_name == 'comapnies') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/comapnies">
                <i class="entypo-leaf"></i>
                <span><?php echo 'Companies'; ?></span>
            </a>
            <ul>
                <li><a href="<?php echo base_url(); ?>admin/companyadd">Add Company</a></li>
                <li><a href="<?php echo base_url(); ?>admin/comapnies">View Company</a></li>
            </ul>
        </li> -->

     <!--    <li class="<?php if ($page_name == 'career_level') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/level">
                <i class="entypo-user"></i>
                <span><?php echo get_phrase('Career Level'); ?></span>
            </a>
            <ul>
                <li><a href="<?php echo base_url(); ?>admin/leveladd">Add Career Level</a></li>
                <li><a href="<?php echo base_url(); ?>admin/level">View Career Level</a></li>
            </ul>
        </li> -->

      <!--   <li class="<?php if ($page_name == 'benifits') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/benefits">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('Benefits'); ?></span>
            </a>
            <ul>
            <li><a href="<?php echo base_url(); ?>admin/benefitsadd">Add Benefits</a></li>
            <li><a href="<?php echo base_url(); ?>admin/benefits">View Benefits</a></li>
        </ul>
        </li> -->

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
                    <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/pending_jobs">
                            <span><i class="entypo-dot"></i> <?php echo 'Pending Profiles'; ?></span>
                        </a>
                    </li>
                    
                   
                    <li class="<?php if ($page_name == 'approved_jobs') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/approved_jobs">
                            <span><i class="entypo-dot"></i> <?php echo 'Approved Profiles'; ?></span>
                        </a>
                    </li>
                     <li class="<?php if ($page_name == 'featured_jobs') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>admin/featured_jobs">
                            <span><i class="entypo-dot"></i> <?php echo 'Featured Profiles'; ?></span>
                        </a>
                    </li>
                    
                </ul>
        </li>
        <!-- ... jobs.... -->
           <li class="<?php if ($page_name == 'blog') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/blog">
                <i class="entypo-book"></i>
                <span><?php echo get_phrase('Blog'); ?></span>
            </a>
            <ul>
                <li><a href="<?php echo base_url(); ?>admin/blogadd">Add Blog</a></li>
                <li><a href="<?php echo base_url(); ?>admin/blog">View Blog</a></li>
            </ul>
        </li>
        
        
        
                    <li class="<?php if ($page_name == 'careeradvisor') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/careeradvisor">
                <i class="entypo-book"></i>
                <span><?php echo get_phrase('Career Advisor'); ?></span>
            </a>
            <ul>
                <li><a href="<?php echo base_url(); ?>admin/careeradviceadd">Add CareerAdvisor</a></li>
                <li><a href="<?php echo base_url(); ?>admin/careeradvisor">View CareerAdvisor</a></li>
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
                    <a href="<?php echo base_url(); ?>admin/system_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('general_settings'); ?></span>
                    </a>
                </li>
                
               
                <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/manage_language">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('language_settings'); ?></span>
                    </a>
                </li>
                
            </ul>
        </li>

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>

    </ul>

</div>
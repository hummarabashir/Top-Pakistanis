

 <?php include('template/header.php'); ?>

    <!-- Header Wrapper End -->
    <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2> Change Password </h2>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->


    <!-- jp register wrapper start -->
 <div class="jp_blog_cate_main_wrapper">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
    <div class="panel panel-default sidenav" style="margin:0px;">
   <!--  <div class="panel-heading">
    <h2 class="panel-title">REPORT</h2>
    </div> -->
<div class="panel-body">
    <ul>
        <div class="col-md-2 col-xs-12">
      <li>
        <a href="<?php echo base_url().'users/userdashboard'?>" ><span class="fa fa-home" style="font-size:30px;"></span><br/>Dashboard</a>
      </li>
  </div>
  <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'users/profile'?>" class=""><span class="fa fa-user" style="font-size:30px;"></span><br/> My Profile</a></li>
    </div>
     <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'users/myprofileview'?>" class=""><span class="fa fa-users" style="font-size:30px;"></span><br/> View Profile </a></li>
    </div>
      <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'site/change_password'?>" class="new_active"><span class="fa fa-pencil" style="font-size:30px;"></span><br/> Change Password </a></li>
    </div>
      <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/employee_pricing'?>" class=""><span class="fa fa-money" style="font-size:30px;"></span><br/> Become PRO</a>
      </li> 
  </div>
  <div class="col-md-2 col-xs-12">
        <li><a href="#" class=""><span class="fa fa-eye" style="font-size:30px;"></span><br/> No. of Views</a></li>
    </div>
    </ul>
  </div>
</div>

</div>


  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-lg-offset-3">

    <!-- jp ad post Wrapper Start -->
	<div class="jp_adp_main_section_wrapper">
		<div class="">
			<div class="row">

                <div class="jp_adp_form_heading_wrapper">
                    <h2 style="text-align:center;">Change Password</h2>
                    </div>



                 <form method="post" action="<?php echo base_url('site/change_password_form'); ?>" role="form" enctype="multipart/form-data"  id="form1">
 

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span style="color: red;"><?php if(isset($error)){
                                                echo $error;
                                                } ?></span> 
         
					<!-- <div class="jp_adp_form_heading_wrapper">
						<h2>Personal Information </h2>
					</div> -->
					<div class="jp_adp_form_wrapper">
                        <label>New Password <span style="color:red;">*</span></label>
						<input type="password" placeholder="New Password" name="password" id="password" class="form-control" >
					</div>
                     <div class="jp_adp_form_wrapper">
                        <label>Confirm Password <span style="color:red;">*</span> <span id='message'></span> </label>
                        <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password"  required class="form-control">   
                    </div>

   <div class="jp_adp_form_wrapper">
                                             <button type="submit" class="btn btn-primary btn-block btn-lg" >Save</button>
                                        </div>
 </div>
</form>



</div>
</div>
</div>
</div>


</div>
</div>
</div>


<?php include 'jobseeker/template/modal.php'; ?>
  <?php include('template/footer.php'); ?>
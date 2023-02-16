

 <?php include('template/header.php'); ?>


    <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2> Saved Profile </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    



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
        <a href="<?php echo base_url().'users/recruiter_dashboard'?>" ><span class="fa fa-home" style="font-size:30px;"></span><br/>Dashboard</a>
      </li>
  </div>
        <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/profilesaved'?>" class="new_active"><span class="fa fa-tags" style="font-size:30px;"></span><br/>Saved Profiles</a>
      </li> 
  </div>
      <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/employer_pricing'?>" class=""><span class="fa fa-money" style="font-size:30px;"></span><br/>Pricing Plans</a>
      </li> 
  </div>
     <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/view_companies'?>" class=""><span class="fa fa-building" style="font-size:30px;"></span><br/>Promote a Company</a>
      </li> 
  </div>
  <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'users/add_personalinfo/load_profile'?>" class=""><span class="fa fa-users" style="font-size:30px;"></span><br/>Personal Profile</a></li>
    </div>
    <div class="col-md-2 col-xs-12">
        <li><a href="#" class=""><span class="fa fa-eye" style="font-size:30px;"></span><br/>Company Visits</a></li>
    </div>
    </ul>
  </div>
</div>

</div>
<div class="col-sm-12">
                                            <?php  
if (count($users) > 0 ) { ?>
  <?php foreach($users as $basicdetail){
             ?>  


                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo $basicdetail['picture_url']; ?>" alt="post_img" width="100%" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4 style="text-transform: capitalize;"><?php echo $basicdetail['first_name']; ?>   <?php echo $basicdetail['last_name']; ?></h4>
                                                                <p><?php echo $basicdetail['cat_name']; ?></p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; <?php echo $basicdetail['type']; ?></li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; <?php echo $basicdetail['city_name']; ?></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>

                                                                    <li><a href="javascript:;" onclick="confirm_modal('<?php echo base_url('users/delete_save_job/').$basicdetail['user_id'] ?>');"><i class="fa fa-trash-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                               <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                                      <?php 
  $id = $basicdetail['user_id'];
        $cvskill = $this->db->get_where('cv_skill', array('user_id' => $id))->result_array();
?>
                                                         <?php  foreach($cvskill as $skill){?>
                                                        <li><a href="#"><?php echo $skill['name']; ?></a></li>
                                                        <?php } ?>
                                                       <!--  <li><a href="#">developer,</a></li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                            <?php  } }else{ ?>
                                                                                 <div class="col-lg-12 job_section" >
        <div class="alert alert-success" role="alert">
          <strong>Sorry!</strong> No data found.
        </div>
    </div>
                                        <?php } ?>
                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                            <div class="pager_wrapper gc_blog_pagination">
                                             <?php echo $this->pagination->create_links(); ?>
                                            </div>
                                        </div>
                                             

                </div>
</div>
</div>
</div>






    <!-- jp downlord Wrapper End -->
    <!-- jp Newsletter Wrapper Start -->
    <?php include 'jobseeker/template/modal.php'; ?>
    <?php include('template/footer.php'); ?>


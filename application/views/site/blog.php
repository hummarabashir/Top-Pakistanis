
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
                            <h2>Blogs</h2>
                        </div>
                        <!--<div class="jp_tittle_breadcrumb_main_wrapper">-->
                        <!--    <div class="jp_tittle_breadcrumb_wrapper">-->
                        <!--        <ul>-->
                        <!--            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li>Blog</li>-->
                        <!--        </ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp blog_cate section Wrapper Start -->
    <div class="jp_blog_cate_main_wrapper">
        <div class="container">
            <div class="row">      
                                                    <?php  
if (count($users) > 0 ) { ?>
  <?php foreach($users as $basicdetail){
             ?>        
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_blog_cate_left_main_wrapper">
                                <div class="jp_first_blog_post_main_wrapper">
                                    <div class="jp_first_blog_post_img">
                                        <img src="<?php echo base_url('uploads/category/').$basicdetail['blog_image']; ?>" class="img-responsive" alt="blog_img" style="height: 300px; width: 100%;" />
                                    </div>
                                    <div class="jp_first_blog_post_cont_wrapper">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-calendar"></i> &nbsp;&nbsp;<?php echo $basicdetail['date_posted']; ?></a></li>
                                            <li><a href="#"><i class="fa fa-clone"></i> &nbsp;&nbsp;<?php echo $basicdetail['cat_name']; ?></a></li>
                                        </ul>
                                        <h3><a href="<?php echo base_url(); ?>site/singleblog/<?php echo $basicdetail['blog_id']; ?>"><?php echo $basicdetail['blog_name']; ?></a></h3>
                                        <p><?php echo word_limiter($basicdetail['description'], 30); ?></p>
                                    </div>
                                    <div class="jp_first_blog_bottom_cont_wrapper">
                                        <div class="jp_blog_bottom_left_cont">
                                            <ul>
                                                <li><img src="<?php echo base_url() ?>vendor/images/content/blog_small_img.jpg" alt="small_img" class="img-circle" />&nbsp;&nbsp; Admin</li>
                                            </ul>
                                        </div>
   
                                    </div>
                                </div>
                            </div>
                        </div>
                                  <?php  } } else{?>
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

                    </div>
            
        </div>
    </div>
    <!-- jp blog_cate section Wrapper End -->

     <?php include('template/footer.php'); ?>
<!--  <sript>
        // Magnific popup-video//
        	$('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
        
                fixedContentPos: false
            });
    </script> -->
    <!--main js file end-->


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
                            <h2>Blog Detail</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Blog Detail</li>
                                </ul>
                            </div>
                        </div>
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
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                          <?php foreach($users as $basicdetail){
            } ?>    
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_blog_cate_left_main_wrapper">
                                <div class="jp_first_blog_post_main_wrapper">
                                    <div class="jp_first_blog_post_img">
                                        <img src="<?php echo base_url('uploads/category/').$basicdetail['blog_image']; ?>" class="img-responsive" alt="blog_img" />
                                    </div>
                                    <div class="jp_first_blog_post_cont_wrapper">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-calendar"></i> &nbsp;&nbsp;<?php echo $basicdetail['date_posted']; ?></a></li>
                                            <li><a href="#"><i class="fa fa-clone"></i> &nbsp;&nbsp;<?php echo $basicdetail['cat_name']; ?></a></li>
                                        </ul>
                                        <h3><a href="#"><?php echo $basicdetail['blog_name']; ?></a></h3>
                                        <p><?php echo $basicdetail['description']; ?></p>
                                    </div>
                                   <!--  <div class="gc_blog_index_slider_post_wrapper gc_blog_single_index_slider_post_wrapper">
                                        <div class="gc_blog_letest_week_wrapper">
                                            <div class="gc_blog_quote_wrapper">
                                                <img src="<?php echo base_url() ?>vendor/images/content/quote.png" alt="quote" />
                                                <h3>" The Education of Tomorrow, Rooted in Tradition Invite You Learning Management System"</h3>
                                                <p>- by Jhon Doe</p>
                                            </div>
                                        </div>
                                    </div> -->
                          <!--           <div class="jp_blog_single_bottom_post_cont">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor lacinia pellentesque. Vivamus et tellus in urna faucibus porttitor. Sed auctor ut nunc in pulvinar. Fusce lacinia, velit vitae pharetra porttitor,
                                            nunc libero itdin odio, quis iaculis tortor ligula feugiat ex. Nam ut cursus mi. Nullam eu erat in justo euismod ultrices ut id enim. Mrbi non tempor ante, eget molestie mauris. Cras gravida, lacus nec sollicitn
                                            euismod, ipsum nisl tempor leo, in volutat sapien ex ac erat. In sit amet dolor ut erat fermentum tincidut. Maecenas sd pque ex.<br><br>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
                                            velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                            Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit
                                            mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                        <ul>
                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                            <li><a href="#">ui designer,</a></li>
                                            <li><a href="#">developer,</a></li>
                                            <li><a href="#">senior</a></li>
                                            <li><a href="#">it company,</a></li>
                                            <li><a href="#">design,</a></li>
                                            <li><a href="#">call center</a></li>
                                        </ul>
                                    </div> -->
                                    <div class="jp_first_blog_bottom_cont_wrapper">
                                        <div class="jp_blog_bottom_left_cont">
                                            <ul>
                                                <li><img src="<?php echo base_url() ?>vendor/images/content/blog_small_img.jpg" alt="small_img" class="img-circle" />&nbsp;&nbsp; ADMIN</li>
                                            </ul>
                                        </div>
                                        <div class="jp_blog_bottom_right_cont">
                                            <p class="hidden-xs"><a href="#comments" class="hidden-xs"><i class="fa fa-comments"></i></a></p>
                                            <ul>
                                                <li>SHARE :</li>
                                                                                     <li>   <div class="fb-share-button" data-href="<?php echo base_url('site/singleblog/').$basicdetail['blog_id'] ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.jobs360.com.pk%2Fjobs360_oldsite%2Fusers%2Fjob_detail%2F42&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div></li>
                    <!-- Place this tag where you want the share button to render. -->
<li><div class="g-plus" data-action="share" data-href="<?php echo base_url('site/singleblog/').$basicdetail['blog_id'] ?>"></div></li>
<li><a href="<?php echo base_url('site/singleblog/').$basicdetail['blog_id'] ?>" class="twitter-share-button"  data-count="vertical">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
                                              <!--   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  <!--       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_blog_single_client_main_wrapper">
                                <div class="jp_blog_single_client_main_section">
                                    <div class="jp_blog_single_client_img">
                                        <img src="<?php echo base_url() ?>vendor/images/content/blog_client_img.jpg" alt="blog_client" class="img-circle" />
                                    </div>
                                    <div class="jp_blog_single_client_cont">
                                        <h3>Admin : Jhon Doe</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor lacinia tesue. Vivamus et tellus in urna faucibus porttitor. Sed auctor ut nunc..</p>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_blog_single_comment_main_wrapper">
                                <div class="jp_blog_single_comment_main">
                                        <?php 
                                $this->db->where('blog_id', $basicdetail['blog_id']);
                                $totalcomments = $this->db->count_all_results('tbl_blog_comment');
                                ?>
                                    <h2>Comments (<?php echo $totalcomments; ?>)</h2>
                                </div>
                                   <div class="jp_blog_single_comment_box_wrapper">
                                    <div class="row">
                               
                                        <?php foreach($comment as $row) { ?>
                                      
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 50px;">
                                            <div class="jp_blog_comment_main_section_wrapper">
                                                <div class="jp_blog_sin_com_img_wrapper">
                                                    <img src="<?php echo $row['pic']; ?>" alt="blog_img" width="100%"/>
                                                </div>
                                                <div class="jp_blog_sin_com_cont_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-user"></i>&nbsp;&nbsp; <a href="#">by <?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></li>
                                                        <li><i class="fa fa-calendar"></i>&nbsp;&nbsp; <a href="#"><?php echo $row['date_posted']; ?></a></li>
                                                            <?php 
                                                        $user_id = $this->session->userdata('logged_id');
                                                        if($row['id'] == $user_id){
                                                     ?>
                                                      <li>&nbsp;&nbsp; <a href="<?php echo base_url().'site/delete_comment/'?><?php echo $row['comment_id']; ?>/<?php echo $row['blog_id']; ?>" title=""> <i class="fa fa-trash"></i></a></li> 
                                                      <?php } ?>
                                                    </ul>
                                                    <p><?php echo $row['desc']; ?></p>
                                                </div>
                                            </div>
                                        </div>


                                  
                                        <?php } ?>
                                          </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="comments">
                            <div class="jp_blog_single_form_main_wrapper">
                                <div class="jp_blog_single_form_heading">
                                    <h2>Leave A comment</h2>
                                </div>
                                        <?php
                                            $user_id = $this->session->userdata('logged_id');
                                            if(isset($user_id)){
                                            ?>
                                <form role="form"  id="form1" action="<?php echo base_url().'site/addcomment/add_new'?>" method="post">
                                <div class="jp_contact_form_box">
                                    <div class="row">
                                      <!--   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_contact_inputs_wrapper">
                                                <i class="fa fa-user"></i><input type="text" placeholder="Name *">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">
                                                <i class="fa fa-envelope"></i><input type="text" placeholder="Email *">
                                            </div>
                                        </div> -->
                                        <input type="hidden" name="blog_id" value="<?php echo $basicdetail['blog_id']; ?>">
                                            <?php
                                            $user_id = $this->session->userdata('logged_id');
                                            ?>
                                            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_contact_inputs_wrapper jp_contact_inputs4_wrapper">
                                                <i class="fa fa-text-height"></i><textarea rows="6" name="description" placeholder="Type Your Comment *"></textarea>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_contact_form_btn_wrapper">
                                                <ul>
                                                    <li><button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle"></i>&nbsp; SUBMIT</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php }else{ ?>
                               <div class="jp_contact_form_box">
                                <div class="">
                                            <a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?>site/loginaccount" style="float: left; padding: 10px 50px;">Login</a>
                                        </div>
                                    </div>
                                        <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 margin_top">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_blog_right_box_search">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Search</h4>
                                </div>
                                <div class="jp_blog_right_search_wrapper">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_blog_right_box">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Blogs by Category</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <ul>
                                                                                          <?php foreach($categories as $categorie){ ?>
    <?php 
$this->db->where(
  array(
    'cat_id' => $categorie['cat_id'],
    )
  );
 $cat_count = $this->db->count_all_results('tbl_blog');
    ?>
                                        <li><i class="fa fa-caret-right"></i> <a href="<?php echo base_url(); ?>site/blogcat/<?php echo $categorie['cat_id']; ?>"><?php echo $categorie['cat_name']; ?> <span>(<?php echo  $cat_count;  ?>)</span></a></li>

                                        <?php } ?>
                                    <!--     <li><i class="fa fa-caret-right"></i> <a href="#">Engineering Jobs <span>(514)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Mainframe Jobs <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Legal Jobs <span>(457)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">IT Jobs <span>(1254)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">R&D Jobs <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Government Jobs <span>(350)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">PSU Jobs <span>(221)</span></a></li> -->
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">View All Categories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_career_wrapper jp_blog_right_box">
                                <div class="jp_rightside_career_heading">
                                    <h4>Recent Blogs</h4>
                                </div>
                                <div class="jp_rightside_career_main_content">
                                        <?php  foreach($limit as $row) { ?>
                                    <div class="jp_rightside_career_content_wrapper">
                                        <div class="jp_rightside_career_img">
                                            <img src="<?php echo base_url('uploads/category/').$row['blog_image'] ;?>" alt="career_img" width="100%"/>
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4><?php echo $row['blog_name']; ?></h4>
                                            <p><i class="fa fa-calendar-o"></i> &nbsp;<?php echo $row['date_posted']; ?></p>
                                        </div>
                                    </div>
                                    <?php  } ?>
                               <!--      <div class="jp_rightside_career_content_wrapper">
                                        <div class="jp_rightside_career_img">
                                            <img src="images/content/career_img2.jpg" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Job Seekeks OCT - 2017</h4>
                                            <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_content_wrapper">
                                        <div class="jp_rightside_career_img">
                                            <img src="images/content/career_img3.jpg" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Job Seekeks OCT - 2017</h4>
                                            <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>
                                        </div>
                                    </div> -->
                                    <div class="jp_rightside_career_btn">
                                        <a href="#"><i class="fa fa-plus-circle"></i> View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <!--    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_spotlight_main_wrapper">
                                <div class="spotlight_header_wrapper">
                                    <h4>Job Spotlight</h4>
                                </div>
                                <div class="jp_spotlight_slider_wrapper">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="jp_spotlight_slider_img_Wrapper">
                                                <img src="images/content/spotlight_img.jpg" alt="spotlight_img" />
                                            </div>
                                            <div class="jp_spotlight_slider_cont_Wrapper">
                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                <p>Webstrot Technology Ltd.</p>
                                                <ul>
                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                </ul>
                                            </div>
                                            <div class="jp_spotlight_slider_btn_wrapper">
                                                <div class="jp_spotlight_slider_btn">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;APPLY NOW</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="jp_spotlight_slider_img_Wrapper">
                                                <img src="images/content/spotlight_img.jpg" alt="spotlight_img" />
                                            </div>
                                            <div class="jp_spotlight_slider_cont_Wrapper">
                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                <p>Webstrot Technology Ltd.</p>
                                                <ul>
                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                </ul>
                                            </div>
                                            <div class="jp_spotlight_slider_btn_wrapper">
                                                <div class="jp_spotlight_slider_btn">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;APPLY NOW</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="jp_spotlight_slider_img_Wrapper">
                                                <img src="images/content/spotlight_img.jpg" alt="spotlight_img" />
                                            </div>
                                            <div class="jp_spotlight_slider_cont_Wrapper">
                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                <p>Webstrot Technology Ltd.</p>
                                                <ul>
                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                </ul>
                                            </div>
                                            <div class="jp_spotlight_slider_btn_wrapper">
                                                <div class="jp_spotlight_slider_btn">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;APPLY NOW</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                       <!--  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_blog_right_box">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Jobs by Location</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <ul>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Jobs in Delhi <span>(214)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Jobs in Mumbai  <span>(514)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Jobs in Chennai  <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Jobs in Gurgaon <span>(457)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Jobs in Noida  <span>(1254)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Jobs in Kolkata <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Jobs in Hyderabad  <span>(350)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Jobs in Pune <span>(221)</span></a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">View All Categories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                  <!--       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_career_wrapper jp_best_deal_right_sec_wrapper">
                                <div class="jp_rightside_career_heading">
                                    <h4>Recent Resumes</h4>
                                </div>
                                <div class="jp_rightside_career_main_content">
                                    <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                                        <div class="jp_rightside_career_img">
                                            <img src="images/content/client_img1.jpg" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Akshay Handge</h4>
                                            <p><i class="fa fa-folder-open-o"></i> &nbsp;Developer</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                                        <div class="jp_rightside_career_img">
                                            <img src="images/content/client_img2.jpg" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Akshay Handge</h4>
                                            <p><i class="fa fa-folder-open-o"></i> &nbsp;UI Designer</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                                        <div class="jp_rightside_career_img">
                                            <img src="images/content/client_img3.jpg" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Jacklen Fandores</h4>
                                            <p><i class="fa fa-folder-open-o"></i> &nbsp;Web Designer</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_btn">
                                        <a href="#"><i class="fa fa-plus-circle"></i> View All</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                   <!--      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_add_resume_wrapper jp_blog_right_box">
                                <div class="jp_add_resume_img_overlay"></div>
                                <div class="jp_add_resume_cont">
                                    <img src="images/content/resume_logo.png" alt="logo" />
                                    <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp blog_cate section Wrapper End -->
    <!-- jp downlord Wrapper Start -->



   <?php include('template/footer.php'); ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Top Pakistanis</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Top Pakistanis" />
    <meta name="keywords" content="Top Pakistanis" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/responsive.css" />
    <!-- favicon links -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <script src="<?php echo base_url() ?>vendor/js/ckeditor/ckeditor.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>vendor/images/content/logo-pk.png" />
    <style type="text/css">
      #myList li{ display:none;
      }
      #myList1 li{ display:none;
      }
      #loadMore {
      color:#ffffff;
      font-weight: bold;
      font-size: 15px;
      cursor:pointer;
      margin-top: 20px;
      text-transform: uppercase;
      }
      #loadMore:hover {
      color:green;
      }
      #loadMore1 {
      color:#ffffff;
      font-weight: bold;
      font-size: 15px;
      cursor:pointer;
      margin-top: 20px;
      text-transform: uppercase;
      }
      #loadMore1:hover {
      color:green;
      }
      /*#showLess {
      color:red;
      cursor:pointer;
      display:none;
      float: right;
      }
      #showLess:hover {
      color:black;
      }*/
      .preloader-wrap {
      width: 100%;
      height: 100%;
      position: fixed;
      top: 0; 
      bottom: 0;
      background: rgba(0,0,0,1);
      z-index : 9999; 
      }
      .percentage {
      z-index: 100;
      border: 1px solid #ccc;
      text-align:center;
      color: #fff;
      line-height: 30px;
      font-size : 15px;
      }
      .loader,
      .percentage{
      height: 30px;
      max-width: 500px; 
      border: 2px solid ##ff6a00;
      border-radius: 20px;
      font-weight: 300;
      position: absolute; 
      top: 10%; 
      bottom: 0; 
      left: 0; 
      right: 0;
      margin : auto; 
      }
      .loader:after,
      .percentage:after {
      content: "";
      display: block;
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      }
      .trackbar {
      width: 100%;
      height: 100%;
      border-radius: 20px;
      color: #fff;
      text-align: center;
      line-height: 30px;
      overflow: hidden;
      position: relative;
      opacity: 0.99;
      }
      .loadbar {
      width: 0%;
      height: 100%;
      background: repeating-linear-gradient(
      45deg, 
      #008737, 
      #008737 10px, 
      #69AF23 10px,
      #69AF23 20px
      ); /* Stripes Background Gradient */
      box-shadow: 0px 0px 14px 1px #008737; 
      position: absolute;
      top: 0;
      left: 0;
      animation: flicker 5s infinite;
      overflow: hidden;
      }
      .glow {
      width: 0%;
      height: 0%;
      border-radius: 20px;
      box-shadow: 0px 0px 60px 10px #008737;
      position: absolute;
      bottom: -5px;
      animation: animation 5s infinite;
      }
      @keyframes animation {
      10% {
      opacity: 0.9;
      }
      30% {
      opacity: 0.86;
      }
      60% {
      opacity: 0.8;
      }
      80% {
      opacity: 0.75;
      }
      }
      .wrap { 
      background-image : url(http://4.bp.blogspot.com/-YkAi3Ags92E/TqKbU34wWDI/AAAAAAAA9iw/DSunXRq1ZoY/s1600/funny%2Bmonkey%2Bpictures%2B%252829%2529.jpg);
      background-position: left top; 
      background-repeat: no-repeat; 
      -webkit-background-size: cover; 
      -moz-background-size: cover; 
      -o-background-size: cover; 
      background-size: cover; 
      width: 100%; 
      height: 100%; 
      position: relative;  
      z-index : 1; 
      }
      .mportolio {
      float: left;
      width: 100%;
      position: relative;
      z-index: 0;
      margin-bottom: 30px;
      }
      .mportolio img {
      float: left;
      width: 100%;
      -webkit-border-radius: 8px;
      -moz-border-radius: 8px;
      -ms-border-radius: 8px;
      -o-border-radius: 8px;
      border-radius: 8px;
      }
      .mportolio:hover > a {
      opacity: 0.6;
      }
      .mportolio > a i {
      position: absolute;
      width: 100%;
      text-align: center;
      left: 0;
      top: 50%;
      color: #ffffff;
      font-size: 30px;
      line-height: 10px;
      margin-top: -5px;
      font-weight:bold;
      }
      .mportolio > a {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
      text-align: center;
      background: rgb(139,145,221);
      background: -moz-linear-gradient(45deg, rgba(139,145,221,1) 0%, rgba(70,209,91,1) 71%, rgba(16,25,93,1) 100%);
      background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,rgba(139,145,221,1)), color-stop(71%,rgba(70,209,91,1)), color-stop(100%,rgba(16,25,93,1)));
      background: -webkit-linear-gradient(45deg, rgba(139,145,221,1) 0%,rgba(70,209,91,1) 71%,rgba(16,25,93,1) 100%);
      background: -o-linear-gradient(45deg, rgba(139,145,221,1) 0%,rgba(70,209,91,1) 71%,rgba(16,25,93,1) 100%);
      background: -ms-linear-gradient(45deg, rgba(139,145,221,1) 0%,rgba(70,209, 1,1) 71%,rgba(16,25,93,1) 100%);
      background: linear-gradient(45deg, rgba(139,145,221,1) 0%,rgba(70,209,91,1) 71%,rgba(16,25,93,1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8b91dd', endColorstr='#10195d',GradientType=1 );
      -webkit-border-radius: 8px;
      -moz-border-radius: 8px;
      -ms-border-radius: 8px;
      -o-border-radius: 8px;
      border-radius: 8px;
      opacity: 0;
      }
      #contactform {  
      width: 400px;
      left: -400px;
      height: 620px;
      margin: 25px 0;
      position: fixed;
      box-shadow: 0 0 12px 0 #333;  
      z-index: 999;
      }
      #contact-button { 
      width: 12%;  
      padding: 7% 3%;  
      cursor: pointer;
      margin-left: 400px;
      margin-top: 100px;
      font-size: 23px; 
      color: white;  
      position: absolute;
      }
      #contactform, #contact-button {
      background-color: #39b54a;
      border-radius: 0 15px 15px 0; 
      border: 5px solid #39b54a; 
      border-left: none;
      }
      .rotated-text {
      display: inline-block;
      white-space: nowrap;
      /* this is for shity "non IE" browsers
      that dosn't support writing-mode */
      -webkit-transform: translate(1.1em,0) rotate(90deg);
      -moz-transform: translate(1.1em,0) rotate(90deg);
      -o-transform: translate(1.1em,0) rotate(90deg);
      transform: translate(1.1em,0) rotate(90deg);
      -webkit-transform-origin: 0 0;
      -moz-transform-origin: 0 0;
      -o-transform-origin: 0 0;
      transform-origin: 0 0;*/
      /* IE9+ */
      -ms-transform: none;
      -ms-transform-origin: none;
      /* IE8+ */
      -ms-writing-mode: tb-rl;
      /* IE7 and below */
      *writing-mode: tb-rl;
      }
      .rotated-text:before {
      content: "";
      float: left;
      margin-top: 100%;
      }
      form {
      width: 100%;
      padding: 20px;
      }
      form input {
      display: block;
      border: none;
      width: 100%;
      height: 45px; 
      /*margin: 15px 30px;  */
      }
      form textarea {
      width: 300px;
      margin: 40px 30px;
      height: 170px;
      }
      form label{
      color: #fff;
      }
      form textarea, form input { 
      /*border: 3px solid #666666;*/
      border-radius: 5px;
      background: #f2f2f2;  
      padding: 20px;
      }
      form button{
      /*margin: 35px 0px;*/
      width: 100%;
      }
      .fileUpload #logo-id {
      position: absolute;
      top: 0;
      right: 0;
      margin: 0;
      padding: 0;
      font-size: 33px;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0);
      }
      form .form-group{
      margin: 0px !important;
      }
    </style>
  </head>
  <body>
    <!-- preloader Start -->
    <!--<div id="preloader">-->
    <!--        <div id="status">-->
    <!--    <img src="<?php echo base_url() ?>vendor/images/content/logo-pk.png" id="preloader_image" alt="loader">-->
    <!--    </div>-->
    <!--</div>-->
    <div class="">
      <div class="preloader-wrap">
        <div id="status1" style="background-position: center center; background-repeat: no-repeat; height: auto; position: absolute; left: 50%; top: 35%; transform: translate(-50%,-50%); -webkit-transform: translate(-50%,-50%); -ms-transform: translate(-50%,-50%); -moz-transform: translate(-50%,-50%); -o-transform: translate(-50%,-50%);">
          <img src="<?php echo base_url() ?>vendor/images/content/logo-pk.png" id="preloader_image" alt="loader">
        </div>
        <div class="percentage" id="precent"></div>
        <div class="loader">
          <div class="trackbar">
            <div class="loadbar"></div>
          </div>
          <div class="glow"></div>
        </div>
      </div>
      <div class="wrap"></div>
    </div>
    <!-- Top Scroll End -->
    <!-- Header Wrapper Start -->
    <div class="jp_top_header_img_wrapper">
      <div class="jp_slide_img_overlay"></div>
      <div class="gc_main_menu_wrapper">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col-lg-offset-4 hidden-xs hidden-sm full_width jp_top_header_main_wrapper">
              <div class="jp_top_header_left_wrapper">
                <div class="jp_top_header_left_cont">
                  <p style="text-align:center; background-color:#39b54a; color:#fff;">This is Beta Version of Top Pakistanis !!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
              <div class="gc_header_wrapper">
                <div class="gc_logo">
                  <a href="<?php echo base_url(); ?>site/"><img src="<?php echo base_url() ?>vendor/images/content/logo-pk.png" alt="Logo" title="Top Pakistanis" class="img-responsive" width="100%"></a>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 center_responsive">
              <div class="header-area hidden-menu-bar stick" id="sticker">
                <!-- mainmenu start -->
                <div class="mainmenu">
                  <div class="gc_right_menu">
                    <ul>
                      <li id="search_button">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve">
                          <g>
                            <path id="search" d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z" fill="#23c0e9"/>
                          </g>
                        </svg>
                      </li>
                      <li>
                        <div id="search_open" class="gc_search_box">
                          <inut type="text" placeholder="Search here">
                          <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <ul class="float_left">
                    <!--   <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  Home&nbsp;<i class="fa fa-angle-down"></i></a>
                      <ul>
                          <li class="parent"><a href="index.html">Home1</a></li>
                          <li class="parent"><a href="index_II.html">Home2</a></li>
                      <li class="parent"><a href="index_map.html">Home3</a></li>
                      </ul>
                      </li> -->
                    <li class="has-mega gc_main_navigation">
                      <a href="<?php echo base_url(); ?>site/" class="gc_main_navigation">  Home&nbsp;</a>
                      <!--  <ul>
                        <li class="parent"><a href="index.html">Home1</a></li>
                        <li class="parent"><a href="index_II.html">Home2</a></li>
                        <li class="parent"><a href="index_map.html">Home3</a></li>
                        </ul> -->
                    </li>
                    <li class="has-mega gc_main_navigation">
                      <a href="<?php echo base_url() ?>users/findaprofile" class="gc_main_navigation">  Find Profiles&nbsp;</a>
                      <!-- mega menu start -->
                    </li>
                    <li class="has-mega gc_main_navigation">
                      <a href="<?php echo base_url() ?>site/about_us" class="gc_main_navigation">  About Us&nbsp;</a>
                      <!--   <ul>
                        <li class="parent"><a href="about.html">About-Us</a></li>
                        <li class="parent"><a href="404%20error.html">404</a></li>
                        <li class="parent"><a href="add_postin.html">Add-Posting</a></li>
                        <li class="parent"><a href="login.html">Login</a></li>
                        <li class="parent"><a href="register.html">Register</a></li>
                        <li class="parent"><a href="pricing.html">Pricing</a></li>
                        </ul> -->
                    </li>
                    <li class="has-mega gc_main_navigation">
                      <a href="<?php echo base_url() ?>site/blog" class="gc_main_navigation">  Blog&nbsp;</a>
                      <!--   <ul>
                        <li class="parent"><a href="blog_left.html">Blog-Left</a></li>
                        <li class="parent"><a href="blog_right.html">Blog-Right</a></li>
                        <li class="parent"><a href="blog_single_left.html">Blog-Single-Left</a></li>
                        <li class="parent"><a href="blog_single_right.html">Blog-Single-Right</a></li>
                        
                        </ul> -->
                    </li>
                    <li class="gc_main_navigation parent"><a href="<?php echo base_url() ?>users/contact_us" class="gc_main_navigation">Contact</a></li>
                  </ul>
                </div>
                <!-- mainmenu end -->
                <!-- mobile menu area start -->
                <header class="mobail_menu">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-6 col-sm-6">
                        <div class="gc_logo">
                          <a href="<?php echo base_url(); ?>site/"><img src="<?php echo base_url() ?>vendor/images/content/logo-pk.png" alt="Logo" title="Top Pakistanis" width="100%"></a>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-6">
                        <div class="cd-dropdown-wrapper">
                          <a class="house_toggle" href="#0">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                              <g>
                                <g>
                                  <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#ffffff"/>
                                </g>
                                <g>
                                  <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#ffffff"/>
                                </g>
                                <g>
                                  <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#ffffff"/>
                                </g>
                                <g>
                                  <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#ffffff"/>
                                </g>
                                <g>
                                  <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#ffffff"/>
                                </g>
                              </g>
                            </svg>
                          </a>
                          <nav class="cd-dropdown">
                            <h2><a href="#">Top<span>Pakistanis</span></a></h2>
                            <a href="#0" class="cd-close">Close</a>
                            <ul class="cd-dropdown-content">
                              <li>
                                <form class="cd-search">
                                  <input type="search" placeholder="Search...">
                                </form>
                              </li>
                              <li class="">
                                <a href="<?php echo base_url(); ?>site/">Home</a>
                                <!-- .cd-secondary-dropdown -->
                              </li>
                              <!-- .has-children -->
                              <!-- .has-children -->
                              <li class="">
                                <a href="<?php echo base_url() ?>users/findaprofile">Find Profiles</a>
                                <!-- .cd-secondary-dropdown -->
                              </li>
                              <!-- .has-children -->
                              <li class="">
                                <a href="<?php echo base_url() ?>site/about_us">About Us</a>
                                <!-- .cd-secondary-dropdown -->
                              </li>
                              <!-- .has-children -->
                              <li class="">
                                <a href="<?php echo base_url() ?>site/blog">Blog</a>
                                <!-- .cd-secondary-dropdown -->
                              </li>
                              <!-- .has-children -->
                              <!-- .has-children -->
                              <li>
                                <a href="<?php echo base_url() ?>users/contact_us">Contact</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url() ?>site/signup_employer">Sign Up</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url() ?>site/loginaccount">Login</a>
                              </li>
                            </ul>
                            <!-- .cd-dropdown-content -->
                          </nav>
                          <!-- .cd-dropdown -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- .cd-dropdown-wrapper -->
                </header>
              </div>
            </div>
            <!-- mobile menu area end -->
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
              <div class="jp_navi_right_btn_wrapper">
                <?php if ($this->session->userdata('logged_jobseekar') == 1) {
                  ?> 
                <ul class="account-btns">
                  <?php     $id = $this->session->userdata('logged_id'); 
                    $cvskill = $this->db->get_where('cv_contact_info', array('user_id' => $id))->result_array();
                    
                    ?>
                  <li class="sknav_bar dropdown page-scroll">
                    <a style="color: #fff; text-transform: capitalize; width:200px; background:transparent; border:none;" href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img src="<?php echo $cvskill[0]['picture_url']; ?>" style="height: 25px; padding-right: 8px;"> <?php echo $this->session->userdata('logged_name'); ?>
                    </a>
                    <ul class="dropdown-menu sknave-menue">
                      <li style="width:100%;"><a style="color: #000; border-radius:0px; width:100%; text-align:left; font-weight:bold;" href="<?php echo base_url().'users/userdashboard'; ?>">Dashboard</a></li>
                      <li class="topli" style="margin-left:0px; width:100%;"><a style="color: #000; border-radius:0px; width:100%; text-align:left; font-weight:bold;" class="page-scroll" href="<?php echo base_url().'site/logout'; ?>"> Logout</a></li>
                    </ul>
                  </li>
                </ul>
                <?php  } 
                  else if ($this->session->userdata('logged_recruiter') == 1) {
                  ?> 
                <ul class="account-btns">
                  <!-- <li></li> -->
                  <?php     $id = $this->session->userdata('logged_id'); 
                    $cvskill = $this->db->get_where('users', array('id' => $id))->result_array();
                    
                    ?>
                  <li class="sknav_bar dropdown page-scroll">
                    <a style="color: #fff; text-transform: capitalize; width:200px; background:transparent; border:none;" href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img src="<?php echo $cvskill[0]['picture_url']; ?>" style="height: 25px; padding-right: 8px;"> <?php echo $this->session->userdata('logged_name'); ?></a>
                    <ul class="dropdown-menu sknave-menue">
                      <li style="width:100%;"><a style="color: #000; border-radius:0px; width:100%; text-align:left; font-weight:bold;" href="<?php echo base_url().'users/recruiter_dashboard'; ?>">Dashboard</a></li>
                      <li class="topli" style="margin-left:0px; width:100%;"><a style="color: #000; border-radius:0px; width:100%; text-align:left; font-weight:bold;" class="page-scroll" href="<?php echo base_url().'site/logout'; ?>"> Logout</a></li>
                    </ul>
                  </li>
                </ul>
                <?php  } else{ ?>
                <ul>
                  <li><a href="<?php echo base_url() ?>site/signup_employer"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>
                  <li><a href="<?php echo base_url() ?>site/loginaccount"><i class="fa fa-sign-in"></i>&nbsp; LOGIN</a></li>
                </ul>
                <?php  } ?>
              </div>
            </div>
          </div>
        </div>
      </div>





















      <div class="jp_banner_heading_cont_wrapper">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="jp_job_heading_wrapper">
                <div class="jp_job_heading">
                  <h1><span>3,000+</span> Browse Profiles</h1>
                  <p>Find Profiles, Employment & Career Opportunities</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="jp_header_form_wrapper">
                <form method="post" action="<?php echo base_url()?>users/search_jobs" enctype="multipart/form-data">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <input type="text" placeholder="Keyword e.g. (Title, Description, Tags)" name="keyword">
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="jp_form_location_wrapper">
                    <i class="fa fa-dot-circle-o first_icon"></i>
                    <select name="city_id">
                      <optgroup>
                        <option value="">Select Location</option>
                      </optgroup>
                      <optgroup>
                        <?php foreach($cities as $city){ ?>
                    <option value="<?php echo $city['city_id']; ?>"><?php echo $city['city_name']; ?></option>
                        <?php } ?>
                      </optgroup>
                    </select>

                    <i class="fa fa-angle-down second_icon"></i>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="jp_form_exper_wrapper">
                    <i class="fa fa-dot-circle-o first_icon"></i>
                    <select name="category_id">
                      <optgroup>
                        <option value="">Select Category</option>
                      </optgroup>
                      <optgroup>
                        <?php foreach($categories as $categorie){ ?>
                        <option value="<?php echo $categorie['cat_id']; ?>"><?php echo $categorie['cat_name']; ?></option>
                        <?php } ?>
                      </optgroup> 
                    </select>
                    <i class="fa fa-angle-down second_icon"></i>
                  </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                  <div class="jp_form_btn_wrapper">
                    <ul>
                      <li><button type="submit" class="a"><i class="fa fa-search"></i> Search</button></li>
                    </ul>
                  </div>
                </div>

              </form>
              </div>
            </div>
          </div>
        </div>
      </div>






      <div class="jp_banner_jobs_categories_wrapper">
        <div class="container">
          <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom">
            <div class="jp_top_jobs_category">
              <i class="fa fa-code"></i>
              <h3><a href="<?php echo base_url(); ?>users/profileviewcat/1">Web Development</a></h3>
              <?php 
                $this->db->where(
                  array(
                    'cat_id' => '1',
                    )
                  );
                 $cat_count1 = $this->db->count_all_results('cv_contact_info');
                    ?>
              <p>(<?php echo $cat_count1; ?> profiles)</p>
            </div>
          </div>
          <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
            <div class="jp_top_jobs_category">
              <i class="fa fa-laptop"></i>
              <?php 
                $this->db->where(
                  array(
                    'cat_id' => '2',
                    )
                  );
                 $cat_count2 = $this->db->count_all_results('cv_contact_info');
                    ?>
              <h3><a href="<?php echo base_url(); ?>users/profileviewcat/2">Web Designing</a></h3>
              <p>(<?php  echo $cat_count2; ?> profiles)</p>
            </div>
          </div>
          <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
            <div class="jp_top_jobs_category">
              <i class="fa fa-android"></i>
              <h3><a href="<?php echo base_url(); ?>users/profileviewcat/3">Mobile Development</a></h3>
              <?php 
                $this->db->where(
                  array(
                    'cat_id' => '3',
                    )
                  );
                 $cat_count3 = $this->db->count_all_results('cv_contact_info');
                    ?>
              <p>(<?php  echo $cat_count3; ?> profiles)</p>
            </div>
          </div>
          <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_res">
            <div class="jp_top_jobs_category">
              <i class="fa fa-wordpress"></i>
              <h3><a href="<?php echo base_url(); ?>users/profileviewcat/4">Wordpress</a></h3>
              <?php 
                $this->db->where(
                  array(
                    'cat_id' => '4',
                    )
                  );
                 $cat_count4 = $this->db->count_all_results('cv_contact_info');
                    ?>
              <p>(<?php  echo $cat_count4; ?> profiles)</p>
            </div>
          </div>
          <div class="jp_top_jobs_category_wrapper">
            <div class="jp_top_jobs_category">
              <i class="fa fa-university"></i>
              <h3><a href="<?php echo base_url(); ?>users/profileviewcat/5">Content Writing</a></h3>
              <?php 
                $this->db->where(
                  array(
                    'cat_id' => '5',
                    )
                  );
                 $cat_count5 = $this->db->count_all_results('cv_contact_info');
                    ?>
              <p>(<?php echo $cat_count5; ?> profiles)</p>
            </div>
          </div>
          <div class="jp_top_jobs_category_wrapper">
            <div class="jp_top_jobs_category">
              <i class="fa fa-th-large"></i>
              <h3><a href="<?php echo base_url(); ?>users/findaprofile">All Profiles</a></h3>
              <?php 
                $cat_count_all = $this->db->count_all_results('cv_contact_info');
                ?>
              <p>(<?php echo $cat_count_all; ?>+ profiles)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header Wrapper End -->
    <div id="contactform">
      <div id="contact-button">
        <div class="rotated-text">Become a Career Advisor</div>
      </div>
      <form class="form-horizontal" role="form" method="post" enctype='multipart/form-data' action="<?php echo base_url().'users/addcareeradvisor/add_new'?>" style="overflow: scroll; height: 100%; overflow-x: hidden;">
        
        <h5 style="color: #fff;">All fields with * are required</h5>
        <br/>
        <div class="jp_adp_form_wrapper">
          <label>Full Name <span style="color: red;">*</span></label>
          <input type="text" placeholder="Full Name" name="ca_name" required>
        </div>
        <div class="jp_adp_form_wrapper">
          <label>Company Name</label>
          <input type="text" placeholder="Company Name" name="ca_comp">
        </div>
        <div class="jp_adp_form_wrapper">
          <label>Profile Image <span style="color: red;">*</span></label>
          <input type="file" name="userfile">
       <!--    <div class="form-group">
            <div class="input-group">
              <input id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled" style="height: auto; border-radius: 0px;">
              <div class="input-group-btn">
                <div class="fileUpload btn btn-danger fake-shadow">
                  <span><i class="glyphicon glyphicon-upload"></i> Upload Logo</span>
                  <input id="logo-id" name="userfile" type="file" class="attachment_upload">
                </div>
              </div>
            </div>
            <div class="main-img-preview">
              <img class="thumbnail img-preview" src="<?php if(!empty($profile_row['picture_url'])){echo $profile_row['picture_url'];}else{echo 'http://farm4.static.flickr.com/3316/3546531954_eef60a3d37.jpg';}?>" title="Preview Logo" width="100%" height="160">
            </div>
          </div> -->
        </div>
        <div class="jp_adp_textarea_main_wrapper">
          <label>Description <span style="color: red;">*</span></label>
          <textarea name="ca_description" id="editor2" rows="10" cols="80" placeholder="Description" required></textarea>
        </div>
        <div class="jp_adp_form_wrapper">
          <label>Email Address <span style="color: red;">*</span></label>
          <input type="text" placeholder="Contact Email" name="ca_email" required>
        </div>
        <div class="jp_adp_form_wrapper">
          <label>Country <span style="color: red;">*</span></label>
          <input  type="text" name="ca_country" required placeholder="Country">
        </div>
        <div class="jp_adp_form_wrapper">
          <label>City <span style="color: red;">*</span></label>
          <input  type="text" name="ca_city" required placeholder="City">
        </div>
        <div class="jp_adp_form_wrapper">
          <label>Phone Number <span style="color: red;">*</span></label>
          <input type="text" placeholder="Phone Number" name="ca_phone"  required >
        </div>
        <div class="jp_adp_form_wrapper">
          <label>Address <span style="color: red;">*</span></label>
          <input type="text" placeholder="Address" name="ca_address" required>
        </div>
        <div class="jp_adp_choose_resume_bottom_btn_post">
          <ul>
            <li><button type="submit" class="btn btn-primary btn-block btn-lg"><i class="fa fa-plus-circle"></i>&nbsp; Submit</button></li>
          </ul>
        </div>
      </form>
    </div>
    <!-- jp tittle slider Wrapper Start -->
    <div class="jp_tittle_slider_main_wrapper" style="float:left; width:100%; margin-top:30px;">
      <div class="container">
        <div class="jp_tittle_name_wrapper">
          <div class="jp_tittle_name">
            <h3>Trending</h3>
            <h4>Profiles</h4>
          </div>
        </div>
        <div class="jp_tittle_slider_wrapper">
          <div class="jp_tittle_slider_content_wrapper">
            <div class="owl-carousel owl-theme">
      
                  <div class="item">
                           <?php foreach($tprofiles as $profile){ ?>
                            <div class="jp_tittle_slides_one">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="<?php echo $profile['picture_url']; ?>" alt="tittle_img" style="width: 100%; height: 65px;" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4><?php echo $profile['first_name']; ?> <?php echo $profile['last_name']; ?></h4>
                                    <p><?php echo $profile['cat_name']; ?></p>
                                </div>
                            </div>
                            <?php } ?>
                            </div> 
  
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jp tittle slider Wrapper End -->
    <!-- jp first sidebar Wrapper Start -->
    <div class="jp_first_sidebar_main_wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_hiring_slider_main_wrapper">
                  <div class="jp_hiring_heading_wrapper">
                    <h2>New Companies</h2>
                  </div>
                  <div class="jp_hiring_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                      <?php foreach($companies as $basicdetail){
                          $now = time(); // or your date as well
                         //  $your_date = strtotime($basicdetail['updated_on']);
                         //  $datediff = $now - $your_date;
                         //  $final =  round($datediff / (60 * 60 * 24));

                         //  $promotion_limit = $basicdetail['promotion_limit'];
                         // if ($final<=$promotion_limit) {
                          
                        ?>

                      <div class="item">
                        <div class="jp_hiring_content_main_wrapper">
                          <div class="jp_hiring_content_wrapper">
                            <img src="<?php echo $basicdetail['logo_url']; ?>" alt="hiring_img" />
                            <h4 style="min-height: 60px;"><?php echo $basicdetail['comp_name']; ?></h4>
                            <p style="color: #fff;">(<?php echo $basicdetail['comp_city']; ?>)</p>
                            <ul>
                              <li><a href="<?php echo base_url()?>users/single_company1/<?php echo $basicdetail['comp_id'];  ?>">View Profile</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <?php   } ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cc_featured_product_main_wrapper">
                  <div class="jp_hiring_heading_wrapper jp_job_post_heading_wrapper">
                    <h2>Find Profiles</h2>
                  </div>
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">All Profiles</a></li>
                    <li role="presentation"><a href="#hot" aria-controls="hot" role="tab" data-toggle="tab">Freelancer</a></li>
                    <li role="presentation"><a href="#trand" aria-controls="trand" role="tab" data-toggle="tab">Part Time</a></li>
                    <li role="presentation"><a href="#full" aria-controls="full" role="tab" data-toggle="tab">Full Time </a></li>
                  </ul>
                </div>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="best">
                    <div class="ss_featured_products">
                      <div class="">
                        <div class="item" data-hash="">
                          <?php foreach($users as $basicdetail){
                            ?>  
                          <?php        if($this->user->check_profile($basicdetail['user_id'])){
                            ?>
                          <div class="mportolio jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                            <div class="jp_job_post_main_wrapper">
                              <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                  <div class="jp_job_post_side_img">
                                    <img src="<?php echo $basicdetail['picture_url']; ?>" alt="post_img" width="100%" height="100"/>
                                  </div>
                                  <div class="jp_job_post_right_cont">
                                    <h4 style="text-transform: capitalize;"><?php echo $basicdetail['first_name']; ?>  <?php echo $basicdetail['last_name']; ?> ( Exp: <?php echo $basicdetail['experience']; ?> )</h4>
                                    <p><?php echo $basicdetail['cat_name']; ?></p>
                                    <ul>
                                      <li><i class="fa fa-graduation-cap"></i>&nbsp; <?php echo $basicdetail['edulevel']; ?></li>
                                      <li><i class="fa fa-map-marker"></i>&nbsp; <?php echo $basicdetail['city_name']; ?></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                  <div class="jp_job_post_right_btn_wrapper">
                                    <ul>
                                      <li><a href="<?php echo base_url('users/save/').$basicdetail['user_id'].'/save'  ?>"><i class="fa fa-heart-o"></i></a></li>
                                      <li><a href="#"><?php echo $basicdetail['type']; ?></a></li>
                                      <li><a href="<?php echo base_url(); ?>users/profileview/<?php echo $basicdetail['user_id']; ?>">Profile</a></li>
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
                                        // $cvskill = $this->db->get_where('cv_skill', array('user_id' => $id))->result_array();
                                         $query = $this->db->select('*')
                                                ->from('cv_skill')
                                                ->where('user_id', $id)
                                                ->limit(4)
                                                ->get();
                                  
                                       $cvskill = $query->result_array();
                                  ?>
                                <?php  foreach($cvskill as $skill){?>
                                <li><a href="#"><?php echo $skill['name']; ?></a></li>
                                <?php } ?>
                                <!--    <li><a href="#">ui designer,</a></li>
                                  <li><a href="#">developer,</a></li>
                                  <li><a href="#">senior</a></li>
                                  <li><a href="#">it company,</a></li>
                                  <li><a href="#">design,</a></li>
                                  <li><a href="#">call center</a></li> -->
                              </ul>
                            </div>
                            <a href="<?php echo base_url(); ?>users/profileview/<?php echo $basicdetail['user_id']; ?>" title=""><i class="fa fa-search"> View Profile </i> </a>
                          </div>
                          <?php   } } ?>
                        </div>
                        <!--         <div class="item" data-hash="zero">
                          <div class="jp_job_post_main_wrapper_cont">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img1.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img2.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>Wordpress Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Full Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img3.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>PHP Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Freelance</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img4.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>IOS Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Contract</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img5.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>Android Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Full Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          </div>
                          <div class="item" data-hash="one">
                          <div class="jp_job_post_main_wrapper_cont">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img1.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>Drupal Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img2.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>Content Writer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Contract</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img3.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>Java Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img4.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>C# Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Freelance</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img5.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>Custom Software (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Full Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          </div>
                          <div class="item" data-hash="two">
                          <div class="jp_job_post_main_wrapper_cont">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img1.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>ERP (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img2.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>Web Design (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img3.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img4.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img5.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Full Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          </div> -->
                      </div>
                    </div>
                    <!--   <div class="video_nav_img_wrapper">
                      <div class="video_nav_img">
                          <ul>
                              <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                              <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                              <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                          </ul>
                      </div>
                      </div> -->
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="hot">
                    <div class="ss_featured_products">
                      <div class="">
                        <div class="item" data-hash="">
                          <?php foreach($users_freelance as $basicdetail){
                            ?>  
                          <?php        if($this->user->check_profile($basicdetail['user_id'])){
                            ?>
                          <div class="mportolio jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                            <div class="jp_job_post_main_wrapper">
                              <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                  <div class="jp_job_post_side_img">
                                    <img src="<?php echo $basicdetail['picture_url']; ?>" alt="post_img" width="100%" height="100"/>
                                  </div>
                                  <div class="jp_job_post_right_cont">
                                    <h4 style="text-transform: capitalize;"><?php echo $basicdetail['first_name']; ?> <?php echo $basicdetail['last_name']; ?></h4>
                                    <p><?php echo $basicdetail['cat_name']; ?></p>
                                    <ul>
                                      <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                      <li><i class="fa fa-map-marker"></i>&nbsp; <?php echo $basicdetail['city_name']; ?></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                  <div class="jp_job_post_right_btn_wrapper">
                                    <ul>
                                      <li><a href="<?php echo base_url('users/save/').$basicdetail['user_id'].'/save'  ?>"><i class="fa fa-heart-o"></i></a></li>
                                      <li><a href="#"><?php echo $basicdetail['type']; ?></a></li>
                                      <li><a href="<?php echo base_url(); ?>users/profileview/<?php echo $basicdetail['user_id']; ?>">Profile</a></li>
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
                                        // $cvskill = $this->db->get_where('cv_skill', array('user_id' => $id))->result_array();
                                         $query = $this->db->select('*')
                                                ->from('cv_skill')
                                                ->where('user_id', $id)
                                                ->limit(4)
                                                ->get();
                                  
                                       $cvskill = $query->result_array();
                                  ?>
                                <?php  foreach($cvskill as $skill){?>
                                <li><a href="#"><?php echo $skill['name']; ?></a></li>
                                <?php } ?>
                                <!--    <li><a href="#">ui designer,</a></li>
                                  <li><a href="#">developer,</a></li>
                                  <li><a href="#">senior</a></li>
                                  <li><a href="#">it company,</a></li>
                                  <li><a href="#">design,</a></li>
                                  <li><a href="#">call center</a></li> -->
                              </ul>
                            </div>
                            <a href="<?php echo base_url(); ?>users/profileview/<?php echo $basicdetail['user_id']; ?>" title=""><i class="fa fa-search"> View Profile</i></a>
                          </div>
                          <?php   } } ?>
                        </div>
                        <!--  <div class="item" data-hash="zero">
                          <div class="jp_job_post_main_wrapper_cont">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img1.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Contract</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img2.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Freelance</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img3.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Freelance</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img4.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Full Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img5.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          </div>
                          <div class="item" data-hash="one">
                          <div class="jp_job_post_main_wrapper_cont">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img1.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Freelance</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img2.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img3.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img4.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img5.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          </div>
                          <div class="item" data-hash="two">
                          <div class="jp_job_post_main_wrapper_cont">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img1.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img2.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img3.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img4.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                              <div class="jp_job_post_main_wrapper">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="jp_job_post_side_img">
                                              <img src="<?php echo base_url() ?>vendor/images/content/job_post_img5.jpg" alt="post_img" />
                                          </div>
                                          <div class="jp_job_post_right_cont">
                                              <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                              <p>Webstrot Technology Pvt. Ltd.</p>
                                              <ul>
                                                  <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                  <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="jp_job_post_right_btn_wrapper">
                                              <ul>
                                                  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                  <li><a href="#">Part Time</a></li>
                                                  <li><a href="#">Profile</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="jp_job_post_keyword_wrapper">
                                  <ul>
                                      <li><i class="fa fa-tags"></i>Keywords :</li>
                                      <li><a href="#">ui designer,</a></li>
                                      <li><a href="#">developer,</a></li>
                                      <li><a href="#">senior</a></li>
                                      <li><a href="#">it company,</a></li>
                                      <li><a href="#">design,</a></li>
                                      <li><a href="#">call center</a></li>
                                  </ul>
                              </div>
                          </div>
                          </div> -->
                      </div>
                    </div>
                    <!--    <div class="video_nav_img_wrapper">
                      <div class="video_nav_img">
                          <ul>
                              <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                              <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                              <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                          </ul>
                      </div>
                      </div> -->
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="trand">
                    <div class="ss_featured_products">
                      <div class="">
                        <div class="item" data-hash="">
                          <?php foreach($users_parttime as $basicdetail){
                            ?>  
                          <?php        if($this->user->check_profile($basicdetail['user_id'])){
                            ?>
                          <div class="mportolio jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                            <div class="jp_job_post_main_wrapper">
                              <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                  <div class="jp_job_post_side_img">
                                    <img src="<?php echo $basicdetail['picture_url']; ?>" alt="post_img" width="100%" height="100"/>
                                  </div>
                                  <div class="jp_job_post_right_cont">
                                    <h4 style="text-transform: capitalize;"><?php echo $basicdetail['first_name']; ?>  <?php echo $basicdetail['last_name']; ?></h4>
                                    <p><?php echo $basicdetail['cat_name']; ?></p>
                                    <ul>
                                      <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                      <li><i class="fa fa-map-marker"></i>&nbsp; <?php echo $basicdetail['city_name']; ?></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                  <div class="jp_job_post_right_btn_wrapper">
                                    <ul>
                                      <li><a href="<?php echo base_url('users/save/').$basicdetail['user_id'].'/save'  ?>"><i class="fa fa-heart-o"></i></a></li>
                                      <li><a href="#"><?php echo $basicdetail['type']; ?></a></li>
                                      <li><a href="<?php echo base_url(); ?>users/profileview/<?php echo $basicdetail['user_id']; ?>">Profile</a></li>
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
                                        // $cvskill = $this->db->get_where('cv_skill', array('user_id' => $id))->result_array();
                                         $query = $this->db->select('*')
                                                ->from('cv_skill')
                                                ->where('user_id', $id)
                                                ->limit(4)
                                                ->get();
                                  
                                       $cvskill = $query->result_array();
                                  ?>
                                <?php  foreach($cvskill as $skill){?>
                                <li><a href="#"><?php echo $skill['name']; ?></a></li>
                                <?php } ?>
                                <!--    <li><a href="#">ui designer,</a></li>
                                  <li><a href="#">developer,</a></li>
                                  <li><a href="#">senior</a></li>
                                  <li><a href="#">it company,</a></li>
                                  <li><a href="#">design,</a></li>
                                  <li><a href="#">call center</a></li> -->
                              </ul>
                            </div>
                            <a href="<?php echo base_url(); ?>users/profileview/<?php echo $basicdetail['user_id']; ?>" title=""><i class="fa fa-search"> View Profile </i></a>
                          </div>
                          <?php   } } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="full">
                    <div class="ss_featured_products">
                      <div class="">
                        <div class="item" data-hash="">
                          <?php foreach($users_fulltime as $basicdetail){
                            ?>  
                          <?php        if($this->user->check_profile($basicdetail['user_id'])){
                            ?>
                          <div class="mportolio jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                            <div class="jp_job_post_main_wrapper">
                              <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                  <div class="jp_job_post_side_img">
                                    <img src="<?php echo $basicdetail['picture_url']; ?>" alt="post_img" width="100%" height="100"/>
                                  </div>
                                  <div class="jp_job_post_right_cont">
                                    <h4 style="text-transform: capitalize;"><?php echo $basicdetail['first_name']; ?>  <?php echo $basicdetail['last_name']; ?></h4>
                                    <p><?php echo $basicdetail['cat_name']; ?></p>
                                    <ul>
                                      <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                      <li><i class="fa fa-map-marker"></i>&nbsp; <?php echo $basicdetail['city_name']; ?></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                  <div class="jp_job_post_right_btn_wrapper">
                                    <ul>
                                      <li><a href="<?php echo base_url('users/save/').$basicdetail['user_id'].'/save'  ?>"><i class="fa fa-heart-o"></i></a></li>
                                      <li><a href="#"><?php echo $basicdetail['type']; ?></a></li>
                                      <li><a href="<?php echo base_url(); ?>users/profileview/<?php echo $basicdetail['user_id']; ?>">Profile</a></li>
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
                                        // $cvskill = $this->db->get_where('cv_skill', array('user_id' => $id))->result_array();
                                         $query = $this->db->select('*')
                                                ->from('cv_skill')
                                                ->where('user_id', $id)
                                                ->limit(4)
                                                ->get();
                                  
                                       $cvskill = $query->result_array();
                                  ?>
                                <?php  foreach($cvskill as $skill){?>
                                <li><a href="#"><?php echo $skill['name']; ?></a></li>
                                <?php } ?>
                                <!--    <li><a href="#">ui designer,</a></li>
                                  <li><a href="#">developer,</a></li>
                                  <li><a href="#">senior</a></li>
                                  <li><a href="#">it company,</a></li>
                                  <li><a href="#">design,</a></li>
                                  <li><a href="#">call center</a></li> -->
                              </ul>
                            </div>
                            <a href="<?php echo base_url(); ?>users/profileview/<?php echo $basicdetail['user_id']; ?>" title=""><i class="fa fa-search"> View Profile </i></a>
                          </div>
                          <?php   } } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_register_section_main_wrapper">
                  <div class="jp_regis_left_side_box_wrapper">
                    <div class="jp_regis_left_side_box">
                      <img src="<?php echo base_url() ?>vendor/images/content/regis_icon.png" alt="icon" />
                      <h4>I’m an EMPLOYER</h4>
                      <p>Signed in as employer are able to create personal<br> profile, searching for profiles resume...</p>
                      <ul>
                        <li><a href="<?php echo base_url() ?>site/signup_employer"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER as Profile Finder</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="jp_regis_right_side_box_wrapper">
                    <div class="jp_regis_right_img_overlay"></div>
                    <div class="jp_regis_right_side_box">
                      <img src="<?php echo base_url() ?>vendor/images/content/regis_icon2.png" alt="icon" />
                      <h4>I’m an candidate</h4>
                      <p>Signed in as candidate are able to create new<br> profile resume, best matched profile...</p>
                      <ul>
                        <li><a href="<?php echo base_url() ?>site/signup_employer"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER Your Profile</a></li>
                      </ul>
                    </div>
                    <div class="jp_regis_center_tag_wrapper">
                      <p>OR</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="jp_first_right_sidebar_main_wrapper">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="jp_add_resume_wrapper">
                    <div class="jp_add_resume_img_overlay"></div>
                    <div class="jp_add_resume_cont">
                      <img src="<?php echo base_url() ?>vendor/images/content/logo-pk.png" alt="logo" width="100%" />
                      <h4>Get Best Matched Profile On your Email. Add Resume NOW!</h4>
                      <ul>
                        <li><a href="<?php echo base_url() ?>site/loginaccount"><i class="fa fa-plus-circle"></i> &nbsp;Register Profile</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="jp_spotlight_main_wrapper">
                      <div class="spotlight_header_wrapper">
                          <h4>Spotlight</h4>
                      </div>
                      <div class="jp_spotlight_slider_wrapper">
                          <div class="owl-carousel owl-theme">
                              <div class="item">
                                  <div class="jp_spotlight_slider_img_Wrapper">
                                      <img src="<?php echo base_url() ?>vendor/images/content/spotlight_img.jpg" alt="spotlight_img" />
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
                                              <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;View Profile</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="item">
                                  <div class="jp_spotlight_slider_img_Wrapper">
                                      <img src="<?php echo base_url() ?>vendor/images/content/spotlight_img.jpg" alt="spotlight_img" />
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
                                              <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;View Profile</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="item">
                                  <div class="jp_spotlight_slider_img_Wrapper">
                                      <img src="<?php echo base_url() ?>vendor/images/content/spotlight_img.jpg" alt="spotlight_img" />
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
                                              <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;View Profile</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div> -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="jp_rightside_job_categories_wrapper">
                    <div class="jp_rightside_job_categories_heading">
                      <h4>Profile by Category</h4>
                    </div>
                    <div class="jp_rightside_job_categories_content">
                      <ul id="myList">
                        <?php foreach($categories as $categorie){ ?>
                        <?php 
                          $this->db->where(
                            array(
                              'cat_id' => $categorie['cat_id'],
                              )
                            );
                           $cat_count = $this->db->count_all_results('cv_contact_info');
                              ?>
                        <li><i class="fa fa-caret-right"></i> <a href="<?php echo base_url(); ?>users/profileviewcat/<?php echo $categorie['cat_id']; ?>"><?php echo $categorie['cat_name']; ?> <span>(<?php echo  $cat_count;  ?>)</span></a></li>
                        <?php  } ?>
                        <div id="loadMore"><i class="fa fa-plus-circle"></i> View More</div>
                        <!-- <div id="showLess">Show less</div> -->
                        <!--   <li><i class="fa fa-caret-right"></i> <a href="#">PHP Developer <span>(514)</span></a></li>
                          <li><i class="fa fa-caret-right"></i> <a href="#">Bootstrap <span>(554)</span></a></li>
                          <li><i class="fa fa-caret-right"></i> <a href="#">Java Developer <span>(457)</span></a></li>
                          <li><i class="fa fa-caret-right"></i> <a href="#">Content Writer <span>(1254)</span></a></li>
                          <li><i class="fa fa-caret-right"></i> <a href="#">Web Designer <span>(554)</span></a></li>
                          <li><i class="fa fa-caret-right"></i> <a href="#">Codeigniter Developer <span>(350)</span></a></li>
                          <li><i class="fa fa-caret-right"></i> <a href="#">Wordpress Developer <span>(221)</span></a></li>
                          <li><i class="fa fa-plus-circle"></i> <a href="#">View All Categories</a></li> -->
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="jp_rightside_career_wrapper">
                    <div class="jp_rightside_career_heading">
                      <h4>Career Advisor</h4>
                    </div>
                    <div class="jp_rightside_career_main_content">
                      <?php foreach($careeradvisor as $basicdetail){ ?>
                      <div class="jp_rightside_career_content_wrapper">
                        <div class="jp_rightside_career_img">
                          <img src="<?php echo $basicdetail['logo_url']; ?>" alt="career_img" width="100%" />
                        </div>
                        <div class="jp_rightside_career_img_cont">
                          <a href="<?php echo base_url(); ?>site/singlecareeradvisor/<?php echo $basicdetail['ca_id']; ?>">
                            <h4><?php echo $basicdetail['ca_name']; ?></h4>
                          </a>
                          <p><i class="fa fa-calendar-o"></i> &nbsp;<?php echo $basicdetail['ca_city']; ?></p>
                        </div>
                      </div>
                      <?php  } ?>
                      <div class="jp_rightside_career_btn">
                        <a href="<?php echo base_url(); ?>site/careeradvisor"><i class="fa fa-plus-circle"></i> View All</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="jp_rightside_job_categories_wrapper">
                    <div class="jp_rightside_job_categories_heading">
                      <h4>Profile by City</h4>
                    </div>
                    <div class="jp_rightside_job_categories_content">
                      <ul id="myList1">
                        <?php foreach($cities as $city){ ?>
                        <?php 
                          $this->db->where(
                            array(
                              'city' => $city['city_id'],
                              )
                            );
                           $city_count = $this->db->count_all_results('cv_contact_info');
                              ?>
                        <li><i class="fa fa-caret-right"></i> <a href="<?php echo base_url().'users/profileviewcity/'.$city['city_id']?>"><?php echo $city['city_name']; ?> <span>(<?php echo $city_count; ?>)</span></a></li>
                        <?php  }  ?>
                        <div id="loadMore1"><i class="fa fa-plus-circle"></i> View More</div>
                        <!--    <li><i class="fa fa-caret-right"></i> <a href="#">PHP Developer <span>(514)</span></a></li>
                          <li><i class="fa fa-caret-right"></i> <a href="#">Game Developer <span>(554)</span></a></li>
                          <li><i class="fa fa-caret-right"></i> <a href="#">Web Designer <span>(457)</span></a></li>
                          <li><i class="fa fa-caret-right"></i> <a href="#">Content Writer <span>(1254)</span></a></li>
                          <li><i class="fa fa-plus-circle"></i> <a href="#">View All Categories</a></li> -->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jp first sidebar Wrapper End -->
    <!-- jp counter Wrapper Start -->
    <div class="jp_counter_main_wrapper">
      <div class="container">
        <div class="gc_counter_cont_wrapper">
          <div class="count-description">
            <?php 
              $profile_count= $this->db->count_all_results('cv_contact_info');
                 ?>
            <span class="timer"><?php echo $profile_count; ?></span><i class="fa fa-plus"></i>
            <h5 class="con1">Profiles Available</h5>
          </div>
        </div>
        <div class="gc_counter_cont_wrapper2">
          <div class="count-description">
            <?php 
              $this->db->where(
                array(
                  'method' => 'recruiter',
                  'verify' => '1',
                  )
                );
               $user_count = $this->db->count_all_results('users');
                  ?>
            <span class="timer"><?php  echo $user_count; ?></span><i class="fa fa-plus"></i>
            <h5 class="con2">Employers</h5>
          </div>
        </div>
        <div class="gc_counter_cont_wrapper3">
          <div class="count-description">
            <span class="timer">0</span><i class="fa fa-plus"></i>
            <h5 class="con3">Membership</h5>
          </div>
        </div>
        <div class="gc_counter_cont_wrapper4">
          <div class="count-description">
            <?php 
              $this->db->where(
                array(
                  'method' => 'recruiter',
                  'verify' => '1',
                  )
                );
               $company_count = $this->db->count_all_results('users');
                  ?>
            <span class="timer"><?php echo $company_count; ?></span><i class="fa fa-plus"></i>
            <h5 class="con4">Company</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- jp counter Wrapper End -->
    <!-- jp Best deals Wrapper Start -->
    <div class="jp_best_deals_main_wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="jp_best_deal_slider_main_wrapper">
              <div class="jp_best_deal_heading_wrapper">
                <h2>Offering the best Deals</h2>
              </div>
              <div class="jp_best_deal_slider_wrapper">
                <div class="owl-carousel owl-theme">
                  <div class="item">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="mportolio jp_best_deal_main_cont_wrapper">
                          <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-magnifying-glass"></i>
                          </div>
                          <div class="jp_best_deal_cont_sec">
                            <h4><a href="#">Search a Profile</a></h4>
                            <p>You can find and save best Matched Profiles here ...</p>
                          </div>
                          <a href="<?php echo base_url(); ?>users/findaprofile" title=""><i class="fa fa-search"></i></a>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="mportolio jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">
                          <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-users"></i>
                          </div>
                          <div class="jp_best_deal_cont_sec">
                            <h4><a href="#">Find a Good Profile</a></h4>
                            <p>You can find best eye-catching online profile ...</p>
                          </div>
                          <a href="<?php echo base_url(); ?>users/findaprofile" title=""><i class="fa fa-search"></i></a>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="mportolio jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                          <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-shield"></i>
                          </div>
                          <div class="jp_best_deal_cont_sec">
                            <h4><a href="#">Career Advice</a></h4>
                            <p>Find the best career advice and tips for finding better jobs...</p>
                          </div>
                          <a href="<?php echo base_url(); ?>users/findaprofile" title=""><i class="fa fa-search"></i></a>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="mportolio jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                          <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-notification"></i>
                          </div>
                          <div class="jp_best_deal_cont_sec">
                            <h4><a href="#">New Profile Notifications</a></h4>
                            <p>Upload your resume and  receive latest notifications ...</p>
                          </div>
                          <a href="<?php echo base_url(); ?>users/findaprofile" title=""><i class="fa fa-search"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--<div class="item">-->
                  <!--    <div class="row">-->
                  <!--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                  <!--            <div class="jp_best_deal_main_cont_wrapper">-->
                  <!--                <div class="jp_best_deal_icon_sec">-->
                  <!--                    <i class="flaticon-magnifying-glass"></i>-->
                  <!--                </div>-->
                  <!--                <div class="jp_best_deal_cont_sec">-->
                  <!--                    <h4><a href="#">Search a Profile</a></h4>-->
                  <!--                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>-->
                  <!--                </div>-->
                  <!--            </div>-->
                  <!--        </div>-->
                  <!--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                  <!--            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">-->
                  <!--                <div class="jp_best_deal_icon_sec">-->
                  <!--                    <i class="flaticon-users"></i>-->
                  <!--                </div>-->
                  <!--                <div class="jp_best_deal_cont_sec">-->
                  <!--                    <h4><a href="#">Apply a Good Job</a></h4>-->
                  <!--                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>-->
                  <!--                </div>-->
                  <!--            </div>-->
                  <!--        </div>-->
                  <!--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                  <!--            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">-->
                  <!--                <div class="jp_best_deal_icon_sec">-->
                  <!--                    <i class="flaticon-shield"></i>-->
                  <!--                </div>-->
                  <!--                <div class="jp_best_deal_cont_sec">-->
                  <!--                    <h4><a href="#">Job Security</a></h4>-->
                  <!--                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>-->
                  <!--                </div>-->
                  <!--            </div>-->
                  <!--        </div>-->
                  <!--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                  <!--            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">-->
                  <!--                <div class="jp_best_deal_icon_sec">-->
                  <!--                    <i class="flaticon-notification"></i>-->
                  <!--                </div>-->
                  <!--                <div class="jp_best_deal_cont_sec">-->
                  <!--                    <h4><a href="#">Job Notifications</a></h4>-->
                  <!--                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>-->
                  <!--                </div>-->
                  <!--            </div>-->
                  <!--        </div>-->
                  <!--    </div>-->
                  <!--</div>-->
                  <!--<div class="item">-->
                  <!--    <div class="row">-->
                  <!--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                  <!--            <div class="jp_best_deal_main_cont_wrapper">-->
                  <!--                <div class="jp_best_deal_icon_sec">-->
                  <!--                    <i class="flaticon-magnifying-glass"></i>-->
                  <!--                </div>-->
                  <!--                <div class="jp_best_deal_cont_sec">-->
                  <!--                    <h4><a href="#">Search a Jobs</a></h4>-->
                  <!--                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>-->
                  <!--                </div>-->
                  <!--            </div>-->
                  <!--        </div>-->
                  <!--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                  <!--            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">-->
                  <!--                <div class="jp_best_deal_icon_sec">-->
                  <!--                    <i class="flaticon-users"></i>-->
                  <!--                </div>-->
                  <!--                <div class="jp_best_deal_cont_sec">-->
                  <!--                    <h4><a href="#">Apply a Good Job</a></h4>-->
                  <!--                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>-->
                  <!--                </div>-->
                  <!--            </div>-->
                  <!--        </div>-->
                  <!--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                  <!--            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">-->
                  <!--                <div class="jp_best_deal_icon_sec">-->
                  <!--                    <i class="flaticon-shield"></i>-->
                  <!--                </div>-->
                  <!--                <div class="jp_best_deal_cont_sec">-->
                  <!--                    <h4><a href="#">Job Security</a></h4>-->
                  <!--                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>-->
                  <!--                </div>-->
                  <!--            </div>-->
                  <!--        </div>-->
                  <!--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                  <!--            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">-->
                  <!--                <div class="jp_best_deal_icon_sec">-->
                  <!--                    <i class="flaticon-notification"></i>-->
                  <!--                </div>-->
                  <!--                <div class="jp_best_deal_cont_sec">-->
                  <!--                    <h4><a href="#">Job Notifications</a></h4>-->
                  <!--                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>-->
                  <!--                </div>-->
                  <!--            </div>-->
                  <!--        </div>-->
                  <!--    </div>-->
                  <!--</div>-->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="jp_rightside_career_wrapper jp_best_deal_right_sec_wrapper">
              <div class="jp_rightside_career_heading">
                <h4>Recent Resumes</h4>
              </div>
              <div class="jp_rightside_career_main_content">
                <?php foreach($profiles as $profile){ ?>
                <?php        if($this->user->check_profile($profile['user_id'])){
                  ?>
                <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                  <div class="jp_rightside_career_img">
                    <img src="<?php echo $profile['picture_url']; ?>" alt="career_img" width="100%" height="85"/>
                  </div>
                  <div class="jp_rightside_career_img_cont">
                    <h4 style="text-transform: capitalize;"><?php echo $profile['first_name']; ?> <?php echo $profile['last_name']; ?></h4>
                    <p><i class="fa fa-folder-open-o"></i> &nbsp;<?php echo $profile['cat_name']; ?></p>
                  </div>
                </div>
                <?php  }} ?>
                <!--       <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                  <div class="jp_rightside_career_img">
                      <img src="<?php echo base_url() ?>vendor/images/content/client_img2.jpg" alt="career_img" />
                  </div>
                  <div class="jp_rightside_career_img_cont">
                      <h4>Akshay Handge</h4>
                      <p><i class="fa fa-folder-open-o"></i> &nbsp;UI Designer</p>
                  </div>
                  </div>
                  <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                  <div class="jp_rightside_career_img">
                      <img src="<?php echo base_url() ?>vendor/images/content/client_img3.jpg" alt="career_img" />
                  </div>
                  <div class="jp_rightside_career_img_cont">
                      <h4>Jacklen Fandores</h4>
                      <p><i class="fa fa-folder-open-o"></i> &nbsp;Web Designer</p>
                  </div>
                  </div> -->
                <div class="jp_rightside_career_btn">
                  <a href="<?php echo base_url() ?>users/findaprofile"><i class="fa fa-plus-circle"></i> View All</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jp Best deals Wrapper End -->
    <!-- jp Client Wrapper Start -->
    <div class="jp_client_slider_main_wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="jp_first_client_slider_wrapper">
              <div class="jp_first_client_slider_img_overlay"></div>
              <div class="jp_client_heading_wrapper">
                <h2>What Clients Say?</h2>
              </div>
              <div class="jp_client_slider_wrapper">
                <div class="owl-carousel owl-theme">
                  <div class="item">
                    <div class="jp_client_slide_show_wrapper">
                      <div class="jp_client_slider_img_wrapper">
                        <img src="<?php echo base_url() ?>vendor/images/content/2.jpg" alt="client_img" />
                      </div>
                      <div class="jp_client_slider_cont_wrapper">
                        <p>“Top Pakistanis has been a tremendous asset to our recruiting practices because it allows us to target candidates that are seeking remote positions like the ones we offer.Top Pakistanis does a nice job at matching serious job seekers with professional opportunities like ours”</p>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i><span>~ IBM &nbsp;<b>(CEO)</b></span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="jp_client_slide_show_wrapper">
                      <div class="jp_client_slider_img_wrapper">
                        <img src="<?php echo base_url() ?>vendor/images/content/1.jpg" alt="client_img" />
                      </div>
                      <div class="jp_client_slider_cont_wrapper">
                        <p>“Top Pakistanis has been an excellent platform for us to connect with candidates interested in working remotely while being supported by a global company. We have found very talented employees through Top Pakistanis. The Top Pakistanis system works great and is easy to use.”</p>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i><span>~ TECH360 &nbsp;<b>(Manager)</b></span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="jp_client_slide_show_wrapper">
                      <div class="jp_client_slider_img_wrapper">
                        <img src="<?php echo base_url() ?>vendor/images/content/3.jpg" alt="client_img" />
                      </div>
                      <div class="jp_client_slider_cont_wrapper">
                        <p>“We recently hired two people we found through Top Pakistanis. Top Pakistanis remains an important source for our recruiting activity as it is geared towards people who are seeking remote opportunities and, being a cloud-based company, that is exactly what we are looking for.”</p>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i><span>~ Architect Cube &nbsp;<b>(Managing Director)</b></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jp Client Wrapper End -->
    <!-- jp pricing Wrapper Start -->
    <!--<div class="jp_pricing_main_wrapper">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">-->
    <!--                <div class="pricing_box1_wrapper pricing_border_box1_wrapper">-->
    <!--                    <div class="box1_heading_wrapper">-->
    <!--                        <h4>Basic Plan</h4>-->
    <!--                    </div>-->
    <!--                    <div class="price_box1_wrapper">-->
    <!--                        <div class="price_box1">-->
    <!--                            <h1>$<span>29</span></h1>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="pricing_cont_wrapper">-->
    <!--                        <div class="pricing_cont">-->
    <!--                            <ul>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;5 Jobs Posting</li>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;2 Featured jobs</li>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renew Jobs</li>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;10 Days Duration</li>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Email Alert</li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="pricing_btn_wrapper">-->
    <!--                        <div class="pricing_btn1">-->
    <!--                            <ul>-->
    <!--                                <li><a href="#"><i class="fa fa-plus-circle"></i> Get Started</a></li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="jp_pricing_label_wrapper">-->
    <!--                        <i class="fa fa-star"></i>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">-->
    <!--                <div class="pricing_box1_wrapper pricing_border_box2_wrapper">-->
    <!--                    <div class="box1_heading_wrapper box2_heading_wrapper">-->
    <!--                        <h4>Premium Plan</h4>-->
    <!--                    </div>-->
    <!--                    <div class="price_box1_wrapper">-->
    <!--                        <div class="price_box2">-->
    <!--                            <h1>$<span>49</span></h1>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="pricing_cont_wrapper">-->
    <!--                        <div class="pricing_cont">-->
    <!--                            <ul>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;5 Jobs Posting</li>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;2 Featured jobs</li>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renew Jobs</li>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;10 Days Duration</li>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Email Alert</li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="pricing_btn_wrapper">-->
    <!--                        <div class="pricing_btn2">-->
    <!--                            <ul>-->
    <!--                                <li><a href="#"><i class="fa fa-plus-circle"></i> Get Started</a></li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="jp_pricing_label_wrapper">-->
    <!--                        <i class="fa fa-star"></i>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">-->
    <!--                <div class="pricing_box1_wrapper pricing_border_box3_wrapper">-->
    <!--                    <div class="box1_heading_wrapper box3_heading_wrapper">-->
    <!--                        <h4>Advanced Plan</h4>-->
    <!--                    </div>-->
    <!--                    <div class="price_box1_wrapper">-->
    <!--                        <div class="price_box3">-->
    <!--                            <h1>$<span>79</span></h1>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="pricing_cont_wrapper">-->
    <!--                        <div class="pricing_cont">-->
    <!--                            <ul>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;5 Jobs Posting</li>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;2 Featured jobs</li>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renew Jobs</li>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;10 Days Duration</li>-->
    <!--                                <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Email Alert</li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="pricing_btn_wrapper">-->
    <!--                        <div class="pricing_btn3">-->
    <!--                            <ul>-->
    <!--                                <li><a href="#"><i class="fa fa-plus-circle"></i> Get Started</a></li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="jp_pricing_label_wrapper">-->
    <!--                        <i class="fa fa-star"></i>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- jp pricing Wrapper End -->
    <!-- jp downlord Wrapper Start -->
    <!--<div class="jp_downlord_main_wrapper">-->
    <!--    <div class="jp_downlord_img_overlay"></div>-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">-->
    <!--                <div class="jp_down_mob_img_wrapper">-->
    <!--                    <img src="images/content/mobail.png" alt="mobail_img" />-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
    <!--                <div class="ss_download_wrapper_details">-->
    <!--                    <h1><span>Download</span><br>Job Portal App Now!</h1>-->
    <!--                    <p>Fast, Simple & Delightful. All it takes is 30 seconds to Download.</p>-->
    <!--                    <a href="#" class="ss_appstore"><span><i class="fa fa-apple" aria-hidden="true"></i></span> App Store</a>-->
    <!--                    <a href="#" class="ss_playstore"><span><i class="fa fa-android" aria-hidden="true"></i></span> Play Store</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 visible-sm visible-xs">-->
    <!--                <div class="jp_down_mob_img_wrapper">-->
    <!--                    <img src="images/content/mobail.png" class="img-responsive" alt="mobail_img" />-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- jp downlord Wrapper End -->
    <!-- jp Newsletter Wrapper Start -->
    <div class="jp_main_footer_img_wrapper">
      <div class="jp_newsletter_img_overlay_wrapper"></div>
      <div class="jp_newsletter_wrapper">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="jp_newsletter_text">
                <img src="<?php echo base_url() ?>vendor/images/content/news_logo.png" class="img-responsive" alt="news_logo" />
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <div class="jp_newsletter_field">
                <i class="fa fa-envelope-o"></i><input type="text" placeholder="Enter Your Email"><button type="submit">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- jp Newsletter Wrapper End -->
      <!-- jp footer Wrapper Start -->
      <div class="jp_footer_main_wrapper">
        <footer class="footer" id="footer" style="background-image: url(<?php echo base_url() ?>vendor/images/content/footer_bg.jpg)">
          <div class="container">
            <div class="row">
              <div class="clearfix footer-contents">
                <div class="col-md-4 col-sm-4 col-xs-12 quick-links">
                  <h5 class="green"><a href=""><strong>Profiles By Function</strong></a></h5>
                  <ul>
                    <?php foreach($fcategories as $categorie){ ?>
                    <li><a href="<?php echo base_url().'users/profileviewcat/'.$categorie['cat_id']?>">
                      <?php echo $categorie['cat_name']; ?></a>
                    </li>
                    <?php } ?>
                    <!--  <li><a href="">
                      Software Development </a></li>
                      <li><a href="">
                      Web Development</a></li>
                      <li><a href="">
                      Restaurant Management</a></li>
                      <li><a href="">
                      Online Marketing</a></li>
                      <li><a href="">
                      Marketing </a></li>
                      <li><a href="">
                      Executive Management</a></li>
                      <li><a href="">
                      Graphic Design</a></li>
                      <li><a href="">
                      Database Administrator</a></li>
                      <li><a href="">
                      Customer Support </a></li>
                      <li><a href="">
                      Content Writer</a></li>
                      <li><a href="">
                          Computer Networking</a></li>
                      <li><a href="">
                          Creative Design </a></li>
                      <li><a href="">
                          Management Consulting</a></li>
                      <li><a href="">
                          SEO </a></li>
                      <li><a href="">
                          Content Writer </a></li>
                      <li>
                      <a href="">
                          Testing and QA 
                      </a>
                      </li>
                      <li>
                      <a href="">
                          Teaching 
                      </a>
                      </li>
                      <li>
                      <a href="">
                          Digital &amp; Search Marketing 
                      </a>
                      </li>
                      <li>
                      <a href="">
                          Human Resources 
                      </a>
                      </li>
                      <li>
                      <a href="">
                          Quality Assurance  
                      </a>
                      </li>
                      <li>
                      <a href="">
                          Receptionist 
                      </a>
                      </li> -->
                  </ul>
                </div>
                <!--<div class="col-md-4 col-sm-4 col-xs-12 quick-links">-->
                <!--             <h5 class="green"><a href="https://www.careerz360.com/pakistan/jobs/industry/"><b>Jobs By Industry</b></a></h5>-->
                <!--             <ul>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/accounting-jobs/">-->
                <!--                     Accounting Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/architecture-jobs/">-->
                <!--                     Architecture Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/sales-business-development-jobs/">-->
                <!--                     Sales &amp; BD Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/call-center-jobs/">-->
                <!--                     Call Center Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/design-jobs/">-->
                <!--                     Design Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/digital-media-jobs/">-->
                <!--                     Digital Media Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/education-jobs/">-->
                <!--                     Education Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/finance-jobs/">-->
                <!--                     Finance Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/interior-design-jobs/">-->
                <!--                     Interior Design Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/technology-jobs/">-->
                <!--                     Technology Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/banking-jobs/">-->
                <!--                         Banking Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/electrical-engineering-jobs/">-->
                <!--                         Electrical Engineering Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/advertising-pr-jobs/">-->
                <!--                         Advertising &amp; Pr Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/media-communications-jobs/">-->
                <!--                         Media &amp; Communications Jobs</a></li>-->
                <!--                 <li><a href="https://www.careerz360.com/pakistan/jobs/management-jobs/">-->
                <!--                         Management Jobs</a></li>-->
                <!--                 <li>-->
                <!--                     <a href="https://www.careerz360.com/pakistan/jobs/hospitalitytourism-jobs/">-->
                <!--                         Hospitality And Tourism Jobs-->
                <!--                     </a>-->
                <!--                 </li>-->
                <!--                 <li>-->
                <!--                     <a href="https://www.careerz360.com/pakistan/jobs/medical-research-jobs/">-->
                <!--                         Healthcare And Medical Jobs-->
                <!--                     </a>-->
                <!--                 </li>-->
                <!--                 <li>-->
                <!--                     <a href="https://www.careerz360.com/pakistan/jobs/services-jobs/">-->
                <!--                         Trades And Services-->
                <!--                     </a>-->
                <!--                 </li>-->
                <!--                 <li>-->
                <!--                     <a href="https://www.careerz360.com/pakistan/jobs/administration-and-support-jobs/">-->
                <!--                         Administration And Support Jobs-->
                <!--                     </a>-->
                <!--                 </li>-->
                <!--                 <li>-->
                <!--                     <a href="">-->
                <!--                         Textile Jobs-->
                <!--                     </a>-->
                <!--                 </li>-->
                <!--                 <li>-->
                <!--                     <a href="">-->
                <!--                         Insurance Jobs-->
                <!--                     </a>-->
                <!--                 </li>-->
                <!--             </ul>-->
                <!--</div>-->
                <div class="col-md-3 col-sm-4 col-xs-12 quick-links">
                  <h5 class="green"><a href=""><b>Profiles by location</b></a></h5>
                  <ul>
                    <?php foreach($fcities as $city){ ?>
                    <li><a href="<?php echo base_url().'users/profileviewcity/'.$city['city_id']?>"> Profiles in
                      <?php echo $city['city_name']; ?></a>
                    </li>
                    <?php } ?>
                    <!--    <li><a href="">
                      Profiles in Karachi</a></li>
                      <li><a href="">
                      Profiles in Islamabad</a></li>
                      <li><a href="">
                      Profiles in Lahore</a></li>
                      <li><a href="">
                      Profiles in Peshawar</a></li>
                      <li><a href="">
                      Profiles in Rawalpindi</a></li>
                      <li><a href="">
                      Profiles in Multan</a></li>
                      <li><a href="">
                      Profiles in Gujranwala</a></li>
                      <li><a href="">
                      Profiles in Sialkot</a></li>
                      <li><a href="">
                      Profiles in Faisalabad</a></li>
                      <li><a href="">
                      Profiles in Quetta</a></li>
                      <li><a href="">
                      Profiles in Abbottabad</a></li>
                      <li><a href="">
                      Profiles In Sargodha</a></li>
                      <li><a href="">
                      Profiles In Bahawalpur</a></li>
                      <li><a href="">
                      Profiles In Hyderabad</a></li>
                      <li><a href="">
                      Profiles in Gujrat</a></li>
                      <li>
                      <a href="">
                          Profiles In Sahiwal
                      </a>
                      </li>
                      <li>
                      <a href="">
                          Profiles In Sukkur
                      </a>
                      </li>
                      <li>
                      <a href="">
                          Profiles in Sheikhupura
                      </a>
                      </li>
                      <li>
                      <a href="">
                          Profiles in Mansehra
                      </a>
                      </li>
                      <li>
                      <a href="">
                          Profiles in Chakwal
                      </a>
                      </li>
                      <li>
                      <a href="">
                          Profiles in Jhelum
                      </a>
                      </li> -->
                  </ul>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12 quick-links-genral">
                  <div class="col-md-6 col-sm-6 col-xs-12 quick-links-genral">
                    <h5 class="green"><strong>Employer</strong></h5>
                    <ul>
                      <li>
                        <a href="<?php echo base_url() ?>site/signup_employer">
                        Sign Up
                        </a>
                      </li>
                      <li>
                        <a href="">
                        Post A Free Profile
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo base_url() ?>site/about_us">
                        Why Top Pakistanis
                        </a>
                      </li>
                      <li>
                        <a href="">
                        Products &amp; Pricing
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="">
                        Advertisement
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="">
                        Payment Methods
                        </a>
                      </li>
                    </ul>
                    <br>  
                    <h5 class="green"><b>Contact Us</b></h5>
                    <ul>
                      <li style="color: #fff;font-size: 15px;"><i class="fa-map-marker" style="font-family: 'FontAwesome';color: #fff;padding-right: 11px;font-size: 21px;line-height: 25px;"></i> Lorem Ipsum Dolor set amit, Lorem Ipsum</li>
                      <li>
                        <i class="fa-envelope" style="font-family: 'FontAwesome';color: #fff;padding-right: 6px;font-size: 18px;"></i> <a href="mailto:info@toppakistanis.com"> info@toppakistanis</a>
                        <i class="fa-phone" style="font-family: 'FontAwesome';color: #fff;padding-right: 6px;font-size: 18px;"></i><a href="tel:+9200000000000">+92 00 0000000</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 quick-links-genral">
                    <h5 class="green"><strong>Quick Links</strong></h5>
                    <ul>
                      <li>
                        <a href="<?php echo base_url() ?>site/signup_employer">
                        Sign Up
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo base_url() ?>users/findaprofile">
                        Find A Profile
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="">
                        Sitemap
                        </a>
                      </li>
                      <li>
                        <a target="_blank" href="<?php echo base_url() ?>users/contact_us">
                        Help Center
                        </a>
                      </li>
                    </ul>
                    <br>
                    <h5 class="green"><b>General</b></h5>
                    <ul>
                      <li><a target="_blank" href="<?php echo base_url() ?>site/blog">
                        Blog</a>
                      </li>
                      <li><a target="_blank" href="<?php echo base_url() ?>users/contact_us">
                        Contact Us</a>
                      </li>
                      <li><a target="_blank" href="<?php echo base_url() ?>users/contact_us">
                        Feedback</a>
                      </li>
                      <li><a target="_blank" href="<?php echo base_url() ?>site/about_us">
                        About Us</a>
                      </li>
                      <li><a target="_blank" href="<?php echo base_url() ?>site/privacypolicy">
                        Privacy Policy</a>
                      </li>
                      <li><a target="_blank" href="<?php echo base_url() ?>site/terms_and_conditions">
                        Terms &amp; Conditions</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 quick-links-genral">
                  <div class="col-md-12 col-sm-12 col-xs-12 quick-links-genral contactus">
                    <h5 class="green"><b>Top Pakistanis</b>- Profiles in Pakistan</h5>
                    <ul>
                      <li style="color: #fff;font-size: 14px; margin-bottom:5px">Top Pakistanis drives top talent to companies that want to hire them. We do the heavy lifting for you. Our platform puts your best matching profiles in front of more recruiters than anyone else. We pair talented professionals with Industry leading employers. Top Pakistanis are are focused on bringing great people and great organizations together.</li>
                      <!--<li style="color: #fff;font-size: 12px;">Lorem Ipsum Dolor set amit Lorem Ipsum Dolor set amit Lorem Ipsum Dolor set amit Lorem Ipsum Dolor set amit -->
                      <!--Lorem Ipsum Dolor set amit Lorem Ipsum Dolor set amit Lorem Ipsum Dolor set amit Lorem Ipsum Dolor set amit Lorem Ipsum Dolor set amit Lorem Ipsum Dolor set amit -->
                      <!--Lorem Ipsum Dolor set amit Lorem Ipsum Dolor set amit Lorem Ipsum Dolor set amit Lorem Ipsum Dolor set amit</li>-->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="footer-bottom-contents">
                <ul class="right col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                  <li>2019 Top Pakistanis, All rights reserved. Use of this website constitutes acceptance of <span><a href="<?php echo base_url() ?>site/terms_and_conditions">Terms &amp; Conditions </a>&amp; <a href="<?php echo base_url() ?>site/privacypolicy">Privacy Policy</a></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jp footer Wrapper End -->
    <!--main js file start-->
    <script src="<?php echo base_url() ?>vendor/js/jquery_min.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/jquery.menu-aim.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/jquery.countTo.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/jquery.inview.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/owl.carousel.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/modernizr.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/custom.js"></script>
    <!--main js file end-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
      var width = 100,
      perfData = window.performance.timing, // The PerformanceTiming interface represents timing-related performance information for the given page.
      EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
      time = parseInt((EstimatedTime/1000)%60)*100;
      
      // Loadbar Animation
      $(".loadbar").animate({
      width: width + "%"
      }, time);
      
      // Loadbar Glow Animation
      $(".glow").animate({
      width: width + "%"
      }, time);
      
      // Percentage Increment Animation
      var PercentageID = $("#precent"),
          start = 0,
          end = 100,
          durataion = time;
          animateValue(PercentageID, start, end, durataion);
          
      function animateValue(id, start, end, duration) {
      
      var range = end - start,
        current = start,
        increment = end > start? 1 : -1,
        stepTime = Math.abs(Math.floor(duration / range)),
        obj = $(id);
      
      var timer = setInterval(function() {
          current += increment;
          $(obj).text(current + "%");
        //obj.innerHTML = current;
          if (current == end) {
              clearInterval(timer);
          }
      }, stepTime);
      }
      
      // Fading Out Loadbar on Finised
      setTimeout(function(){
      $('.preloader-wrap').fadeOut(300);
      }, time);
      
    </script>
    <script>
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace( 'editor2' );
    </script>
    <script type="text/javascript">
      /* easing functions from: https://github.com/gdsmith/jquery.easing/blob/master/jquery.easing.js
      */
      
      var easeOutBounce = function (x, t, b, c, d) {
        if ((t/=d) < (1/2.75)) {
          return c*(7.5625*t*t) + b;
        } else if (t < (2/2.75)) {
          return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
        } else if (t < (2.5/2.75)) {
          return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
        } else {
          return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
        }
      }
      
      function Animate(elem, propName, duration, start, end)  {
        var start_time = new Date().getTime();
        var interval = setInterval(function() {
          var current_time = new Date().getTime(),
            remaining = Math.max(0, start_time + duration - current_time),
            temp = remaining / duration || 0,
            percent = 1 - temp;
      
          if (start_time + duration < current_time) clearInterval(interval);
      
          var pos = easeOutBounce(null, duration * percent, 0, 1, duration),
            current = (end - start) * pos + start;
      
          elem.style[propName] = current + 'px';
        }, 1);
      }
      
      var elem = document.getElementById('contactform');
      var opened = false; 
      
      document.getElementById('contact-button').onclick = function() {
      if (opened) {
        Animate(elem, 'left', 800, 0, -400);    
        opened = false;
      } else {
        Animate(elem, 'left', 800, -400, 0);
        opened = true;  
      }  
      }
    </script>
    <?php if ($this->session->flashdata('flash_message') != ""):?>
    <script type="text/javascript">
      toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
    </script>
    <?php endif;?>
    <?php if ($this->session->flashdata('fail') != ""):?>
    <style type="text/css">
      p{
      font-size: 18px !important;
      color: #fff !important;
      }
    </style>
    <script type="text/javascript">
      toastr.error('<?php echo $this->session->flashdata("fail");?>');
    </script>
    <?php endif;?>
    <script type="text/javascript">
      $(document).ready(function () {
      size_li = $("#myList li").size();
      x=11;
      $('#myList li:lt('+x+')').show();
      $('#loadMore').click(function () {
          x= (x+5 <= size_li) ? x+5 : size_li;
          $('#myList li:lt('+x+')').show();
           $('#showLess').show();
          if(x == size_li){
              $('#loadMore').hide();
          }
      });
      // $('#showLess').click(function () {
      //     x=(x-5<0) ? 3 : x-5;
      //     $('#myList li').not(':lt('+x+')').hide();
      //     $('#loadMore').show();
      //      $('#showLess').show();
      //     if(x == 3){
      //         $('#showLess').hide();
      //     }
      // });
      });
      
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
      size_li1 = $("#myList1 li").size();
      xx=11;
      $('#myList1 li:lt('+xx+')').show();
      $('#loadMore1').click(function () {
          xx= (xx+5 <= size_li1) ? xx+5 : size_li1;
          $('#myList1 li:lt('+xx+')').show();
           $('#showLess1').show();
          if(xx == size_li1){
              $('#loadMore1').hide();
          }
      });
      // $('#showLess').click(function () {
      //     x=(x-5<0) ? 3 : x-5;
      //     $('#myList li').not(':lt('+x+')').hide();
      //     $('#loadMore').show();
      //      $('#showLess').show();
      //     if(x == 3){
      //         $('#showLess').hide();
      //     }
      // });
      });
    </script>
  </body>
</html>


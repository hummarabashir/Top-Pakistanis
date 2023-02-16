

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
                            <h2>Top Pakistanis Login</h2>
                        </div>
                        <!--<div class="jp_tittle_breadcrumb_main_wrapper">-->
                        <!--    <div class="jp_tittle_breadcrumb_wrapper">-->
                        <!--        <ul>-->
                        <!--            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li>Login</li>-->
                        <!--        </ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->

    <!-- jp register wrapper start -->
    <div class="register_section">
        <!-- register_form_wrapper -->
        <div class="register_tab_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                           <span style="color: red;"><?php if(isset($error)){
                                                echo $error;
                                                } ?></span> 
                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul id="tabOne" class="nav register-tabs">
                                <li class="active"><a href="#contentOne-1" data-toggle="tab">personal account <br> <span>i am looking for a job</span></a>
                                </li>
                                <li><a href="#contentOne-2" data-toggle="tab">company account <br> <span>We are hiring Employees</span></a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active register_left_form" id="contentOne-1" style="padding-top: 0px;">
									
                                 <!--    <div class="jp_regiter_top_heading">
                                        <p>Fields with * are mandatory </p>
                                    </div> -->
                                    <div class="login_wrapper">
                                         <form role="form" action="<?php echo base_url().'index.php/site/login/login_jbs'?>" method="post" class="login-form">
                         <!--    <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                    <a href="#" class="btn btn-primary"> <span>Login with Facebook</span> <i class="fa fa-facebook"></i> </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                    <a href="#" class="btn btn-primary google-plus"> Login  with Google <i class="fa fa-google-plus"></i> </a>
                                </div>
                            </div>  -->
                            <h2>Login Form</h2>
                            <br/>
                            <div class="formsix-pos">
                                <div class="form-group i-email">
                                    <input type="email" class="form-control" required="" name="email" id="email2" placeholder="Username*">
                                </div>
                            </div>
                            <div class="formsix-e">
                                <div class="form-group i-password">
                                    <input type="password" class="form-control" required="" name="password" id="password2" placeholder="Password *">
                                </div>
                            </div>
                            <div class="login_remember_box">
                                <label class="control control--checkbox">Remember me
                                    <input type="checkbox">
                                    <span class="control__indicator"></span>
                                </label>
                                <a href="#" class="forget_password" style="color: #fff;">
                                    Forgot Password
                                </a>
                            </div>
                            <div class="login_btn_wrapper">
                                <button type="submit" class="btn btn-primary btn-block btn-lg login_btn"> Login </button>
                            </div>
                            <div class="login_message">
                                <p>Don’t have an account ? <a href="<?php echo base_url().'site/signup_employer'?>"> Register Now </a> </p>
                            </div>
                        </form>
                        </div>

                                   <!--  <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                        <a href="#" class="btn btn-primary login_btn"> register </a>
                                    </div>
                                    <div class="login_message">
                                        <p>Already a member? <a href="#"> Login Here </a> </p>
                                    </div> -->
                                </div>

                                <div class="tab-pane fade register_left_form" id="contentOne-2" style="padding-top: 0px;">

                                 <!--    <div class="jp_regiter_top_heading">
                                        <p>Fields with * are mandatory </p>
                                    </div> -->
                                               <div class="login_wrapper">
                                                 <form role="form" action="<?php echo base_url().'index.php/site/login_emp/login_em' ?>" method="post" class="login-form">

                         <!--    <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                    <a href="#" class="btn btn-primary"> <span>Login with Facebook</span> <i class="fa fa-facebook"></i> </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                    <a href="#" class="btn btn-primary google-plus"> Login  with Google <i class="fa fa-google-plus"></i> </a>
                                </div>
                            </div> -->
                            <h2>Login Form</h2>
                            <br/>
                            <div class="formsix-pos">
                                <div class="form-group i-email">
                                    <input type="email" class="form-control" required="" name="email" id="email2" placeholder="Username*">
                                </div>
                            </div>
                            <div class="formsix-e">
                                <div class="form-group i-password">
                                    <input type="password" class="form-control" required="" name="password" id="password2" placeholder="Password *">
                                </div>
                            </div>
                            <div class="login_remember_box">
                                <label class="control control--checkbox">Remember me
                                    <input type="checkbox">
                                    <span class="control__indicator"></span>
                                </label>
                                <a href="#" class="forget_password" style="color: #fff;">
                                    Forgot Password
                                </a>
                            </div>

                            <div class="login_btn_wrapper">
                                <button type="submit" class="btn btn-primary btn-block btn-lg login_btn"> Login </button>
                            </div>
                            <div class="login_message">
                                <p>Don’t have an account ? <a href="<?php echo base_url().'site/signup_employer'?>"> Register Now </a> </p>
                            </div>
                        </form>
                        </div>

                                 <!--    <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                        <a href="#" class="btn btn-primary login_btn"> register </a>
                                    </div>
                                    <div class="login_message">
                                        <p>Already a member? <a href="#"> Login Here </a> </p>
                                    </div> -->

                                </div>

                            </div>
                           
                            <p class="btm_txt_register_form">In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp register wrapper end -->

    <!-- jp Newsletter Wrapper Start -->
    <?php include('template/footer.php'); ?>
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
                            <h2>Checkout</h2>
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
        <a href="<?php echo base_url().'users/recruiter_dashboard'?>"><span class="fa fa-home" style="font-size:30px;"></span><br/>Dashboard</a>
      </li>
  </div>
        <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/profilesaved'?>" class=""><span class="fa fa-tags" style="font-size:30px;"></span><br/>Saved Profiles</a>
      </li> 
  </div>
      <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/employer_pricing'?>" class="new_active"><span class="fa fa-money" style="font-size:30px;"></span><br/>Pricing Plans</a>
      </li> 
  </div>
     <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/view_companies'?>" class="" ><span class="fa fa-building" style="font-size:30px;"></span><br/>Promote a Company</a>
      </li> 
  </div>
  <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'users/add_personalinfo/load_profile'?>" class=""><span class="fa fa-users" style="font-size:30px;"></span><br/>Personal Profile</a></li>
    </div>
    <div class="col-md-2 col-xs-12">
        <li><a href="#'?>" class=""><span class="fa fa-eye" style="font-size:30px;"></span><br/>Company Visits</a></li>
    </div>
    </ul>
  </div>
</div>

</div>
<div class="col-sm-12 pull-md-right ">
  <div class="jp_pricing_main_wrapper">
<h2  style="font-size: 20px; font-weight: bold; color: #39b54a; text-transform: uppercase; padding-bottom: 30px; text-align: left;">Checkout</h2>
            <div class="already-registered clearfix" style="float: left;">
                <!-- <div class="pull-right"> -->
                   <!--  <button type="button" class="btn btn-info" id="btnAlreadyRegistered">
                        Already Registered?
                    </button> -->
                  <!--   <button type="button" class="btn btn-warning hidden" id="btnNewUserSignup">
                        Create a New Account
                    </button> -->
                <!-- </div> -->
                <p>Please enter your personal details and billing information to checkout.</p>
            </div>

            <br/>
            <br/>
            <form method="post" action="" name="orderfrm" id="frmCheckout">
            <!--     <div id="containerExistingUserSignin" class="hidden">

                    <div class="sub-heading">
                        <span>Existing Customer Login</span>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLoginEmail" class="field-icon">
                                    <i class="fas fa-envelope"></i>
                                </label>
                                <input type="text" name="loginemail" id="inputLoginEmail" class="field" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLoginPassword" class="field-icon">
                                    <i class="fas fa-lock"></i>
                                </label>
                                <input type="password" name="loginpassword" id="inputLoginPassword" class="field" placeholder="Password">
                            </div>
                        </div>
                    </div>

                                    </div> -->

                <div id="containerNewUserSignup">

                    <div>
                                            </div>

                    <div class="sub-heading">
                        <span>Personal Information</span>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputFirstName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="firstname" id="inputFirstName" class="field" placeholder="First Name" value="" autofocus="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLastName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="lastname" id="inputLastName" class="field" placeholder="Last Name" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputEmail" class="field-icon">
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <input type="email" name="email" id="inputEmail" class="field" placeholder="Email Address" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputPhone" class="field-icon hidden">
                                    <i class="fa fa-phone"></i>
                                </label>
                             
                            </div>
                        </div>
                    </div>

                    <div class="sub-heading">
                        <span>Billing Address</span>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputCompanyName" class="field-icon">
                                    <i class="fa fa-building"></i>
                                </label>
                                <input type="text" name="companyname" id="inputCompanyName" class="field" placeholder="Company Name (Optional)" value="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputAddress1" class="field-icon">
                                    <i class="fa fa-building"></i>
                                </label>
                                <input type="text" name="address1" id="inputAddress1" class="field" placeholder="Street Address" value="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputAddress2" class="field-icon">
                                    <i class="fa fa-map-marker-alt"></i>
                                </label>
                                <input type="text" name="address2" id="inputAddress2" class="field" placeholder="Street Address 2" value="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group prepend-icon">
                                <label for="inputCity" class="field-icon">
                                    <i class="fa fa-building"></i>
                                </label>
                                <input type="text" name="city" id="inputCity" class="field" placeholder="City" value="">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group prepend-icon">
                                <label for="state" class="field-icon" id="inputStateIcon">
                                    <i class="fa fa-map-signs"></i>
                                </label>
                                <label for="stateinput" class="field-icon" id="inputStateIcon">
                                    <i class="fa fa-map-signs"></i>
                                </label>
                                <input type="text" name="state" id="stateinput" class="field" placeholder="State" value="">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group prepend-icon">
                                <label for="inputPostcode" class="field-icon">
                                    <i class="fa fa-certificate"></i>
                                </label>
                                <input type="text" name="postcode" id="inputPostcode" class="field" placeholder="Postcode" value="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputCountry" class="field-icon" id="inputCountryIcon">
                                    <i class="fa fa-globe"></i>
                                </label>
                                <select name="country" id="inputCountry" class="field">
                                                                            <option value="AF">
                                            Pakistan
                                        </option>
                                                                            <option value="AX">
                                            USA
                                        </option>
                                                                            <option value="AL">
                                           Canada
                                        </option>
                                                                            <option value="DZ">
                                            UAE
                                        </option>
                                                                            <option value="AS">
                                           India
                                        </option>
                                     
                                                                    </select>
                            </div>
                        </div>
                                                    <div class="col-sm-12">
                                <div class="form-group prepend-icon">
                                    <label for="inputTaxId" class="field-icon">
                                        <i class="fa fa-building"></i>
                                    </label>
                                    <input type="text" name="tax_id" id="inputTaxId" class="field" placeholder="Tax ID (Optional)" value="">
                                </div>
                            </div>
                                            </div>

                                            <div class="sub-heading">
                            <span>Additional Required Information</span>
                        </div>
                        <div class="field-container">
                            <div class="row">
                                                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="customfield1">How did you find us?</label>
                                            <select name="customfield[1]" id="customfield1" class="form-control"><option value="">None</option><option value="Google">Google</option><option value="Bing">Bing</option><option value="Other Search Engine">Other Search Engine</option><option value="Web Hosting Talk">Web Hosting Talk</option><option value="Friend">Friend</option><option value="Advertisement">Advertisement</option><option value="Other">Other</option></select>
                                                                                    </div>
                                    </div>
                                                            </div>
                        </div>
                    
                </div>

                


                
                    <div id="containerNewUserSecurity">

                        <div class="sub-heading">
                            <span>Account Security</span>
                        </div>

                        <div id="containerPassword" class="row">
                            <div id="passwdFeedback" style="display: none;" class="alert alert-info text-center col-sm-12"></div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputNewPassword1" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                    <input type="password" name="password" id="inputNewPassword1" data-error-threshold="10" data-warning-threshold="55" class="field" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputNewPassword2" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                    <input type="password" name="password2" id="inputNewPassword2" class="field" placeholder="Confirm Password">
                                </div>
                            </div>
                        
                          
                        </div>
                        
                    </div>

                
                
                <div class="sub-heading">
                    <span>Payment Details</span>
                </div>

                <div class="alert alert-success text-center large-text" role="alert">
                    Total Due Today: &nbsp; <strong>2,000 PKR</strong>
                </div>

                                <div id="paymentGatewaysContainer" class="form-group">
                    <p class="small text-muted">Please choose your preferred method of payment.</p>

                    <div class="text-center">
                                                    <label class="radio-inline">
                                <div class="iradio_square-blue checked" style="position: relative;"><input type="radio" name="paymentmethod" value="banktransfer" class="payment-methods" checked="" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>
                                Bank Transfer MCB | Cash in Office
                            </label>
                                            </div>
                </div>

                <div class="alert alert-danger text-center gateway-errors hidden"></div>

                <div class="clearfix"></div>

              

                
                    <div class="sub-heading">
                        <span>Additional Notes</span>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="notes" class="field" rows="4" placeholder="You can enter any additional notes or information you want included with your order here..."></textarea>
                            </div>
                        </div>
                    </div>

                
                
                <div class="text-center">
                                            <p>
                            <label class="checkbox-inline">
                                <div class="icheckbox_square-blue" id="iCheck-accepttos" style="position: relative;"><input type="checkbox" name="accepttos" id="accepttos" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></div>
                                &nbsp;
                                I have read and agree to the
                                <a href="" target="_blank">Terms of Service</a>
                            </label>
                        </p>
                                                                <div class="text-center margin-bottom">
                                                    </div>
                    
                    <button type="submit" id="btnCompleteOrder" class="btn btn-primary btn-lg disable-on-click spinner-on-click" onclick="this.value='Please Wait...'">
                        Complete Order
                        &nbsp;<i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </form>

                            <div class="alert alert-warning checkout-security-msg">
                    <i class="fa fa-lock"></i>
                    This order form is provided in a secure environment and to help protect against fraud your current IP address (<strong>110.93.246.230</strong>) is being logged.
                    <div class="clearfix"></div>
                </div>



 
            </div>
        </div>
        </div>
    </div>
</div>












    <!-- jp Newsletter Wrapper Start -->
     <?php include('template/footer.php'); ?>
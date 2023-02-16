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
                            <h2>Pricing Plans</h2>
                        </div>
                        <!--<div class="jp_tittle_breadcrumb_main_wrapper">-->
                        <!--    <div class="jp_tittle_breadcrumb_wrapper">-->
                        <!--        <ul>-->
                        <!--            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li>Pricing Plans</li>-->
                        <!--        </ul>-->
                        <!--    </div>-->
                        <!--</div>-->
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
        <li><a href="<?php echo base_url().'site/change_password'?>"><span class="fa fa-pencil" style="font-size:30px;"></span><br/> Change Password </a></li>
    </div>
      <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/employee_pricing'?>" class="new_active"><span class="fa fa-money" style="font-size:30px;"></span><br/> Become PRO</a>
      </li> 
  </div>
  <div class="col-md-2 col-xs-12">
        <li><a href="#" class=""><span class="fa fa-eye" style="font-size:30px;"></span><br/> No. of Views</a></li>
    </div>
    </ul>
  </div>
</div>

</div>
<div class="col-sm-12">



    <!-- jp pricing Wrapper Start -->
    <div class="jp_pricing_main_wrapper">
        <div class="">
            <div class="row">
         <!--        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="pricing_box1_wrapper pricing_border_box1_wrapper">
                        <div class="box1_heading_wrapper">
                            <h4>Basic Plan</h4>
                        </div>
                        <div class="price_box1_wrapper">
                            <div class="price_box1">
                                <h1>$<span>29</span></h1>
                            </div>
                        </div>
                        <div class="pricing_cont_wrapper">
                            <div class="pricing_cont">
                                <ul>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;5 Jobs Posting</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;2 Featured jobs</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renew Jobs</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;10 Days Duration</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Email Alert</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing_btn_wrapper">
                            <div class="pricing_btn1">
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i> Get Started</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp_pricing_label_wrapper">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div> -->



             <?php foreach($emp_packages as $row):?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="pricing_box1_wrapper pricing_border_box2_wrapper">
                        <div class="box1_heading_wrapper box2_heading_wrapper">
                            <h4><?php echo $row['name'];?></h4>
                        </div>
                        <div class="price_box1_wrapper">
                            <div class="price_box2">
                                <h1>PKR<span><?php echo $row['price'];?></span></h1>
                            </div>
                        </div>
                        <div class="pricing_cont_wrapper">
                            <div class="pricing_cont">
                                <ul>
                        <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Featured Profile</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Free Resume Guide</li>
                                    <!--<li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renew Jobs</li>-->
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;<?php echo $row['duration'];?> Days Duration</li>
                                    <!--<li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Email Alert</li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="pricing_btn_wrapper">
                            <div class="pricing_btn2">
                                <ul>
                                    <li><a href="<?php echo base_url()?>users/job_payment_jbs/<?php echo $row['jbs_id'];?>"><i class="fa fa-plus-circle"></i> Buy Now</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp_pricing_label_wrapper">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
               


                <?php endforeach;?>













            </div>
        </div>
    </div>

    
    
    
    
    <!-- jp pricing Wrapper End -->
    <!-- jp pricing Info Start -->
    <!--<div class="jp_pricing_info_main_wrapper">-->
    <!--    <div class="">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
    <!--                <div class="jp_pricing_cont_heading">-->
    <!--                    <h2>Additional Information :</h2>-->
    <!--                </div>-->
    <!--                <div class="jp_pricing_cont_wrapper">-->
    <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor lacinia pellentesque. Vivamus et tellus in urna faucibus porttitor. Sed auctor ut nunc in pulvinar. Fusce lacinia, velit vitae pharetra porttitor, nunc libero-->
    <!--                        itdin odio, quis iaculis tortor ligula feugiat ex. Nam ut cursus mi. Nullam eu erat in justo euismod ultrices ut id enim. Mrbi non tempor ante, eget molestie mauris. Cras gravida, lacus nec sollicitn euismod, ipsum nisl tempor-->
    <!--                        leo, in volutat sapien ex ac erat. In sit amet dolor ut erat fermentum tincidut. Maecenas sd pque ex.<br><br>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem-->
    <!--                        quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>-->
    <!--                </div>-->
    <!--                <div class="jp_pricing_form_wrapper">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
    <!--                            <div class="jp_pricing_inputs_wrapper">-->
    <!--                                <i class="fa fa-user"></i><input type="text" placeholder="Name*">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
    <!--                            <div class="jp_pricing_inputs_wrapper jp_pricing_inputs2_wrapper">-->
    <!--                                <i class="fa fa-envelope"></i><input type="text" placeholder="Email*">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
    <!--                            <div class="jp_pricing_select_wrapper">-->
    <!--                                <i class="fa fa-usd first_icon"></i><select>-->
				<!--					<option>Select Plan</option>-->
				<!--					<option>Select Plan</option>-->
				<!--					<option>Select Plan</option>-->
				<!--					<option>Select Plan</option>-->
				<!--				</select><i class="fa fa-angle-down second_icon"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
    <!--                            <div class="jp_pricing_form_btn_wrapper">-->
    <!--                                <ul>-->
    <!--                                    <li><a href="#"><i class="fa fa-plus-circle"></i>&nbsp; BUY NOW!</a></li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- jp pricing Info End -->





</div>
</div>
</div>
</div>













<!-- 






<div class="container">
    <div class="row">
        <div class="col-md-9 pull-md-right">
                <div class="row">
                    <div class="col-md-8">
                        <form method="post" action="">
                            <div class="view-cart-items-header">
                                <div class="row">
                                    <div class="col-sm-7 col-xs-7">
                                        Product/Options
                                    </div>
                                    <div class="col-sm-4 col-xs-5 text-right">
                                        Price/Cycle
                                    </div>
                                </div>
                            </div>
                            <div class="view-cart-items">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <span class="item-title">
                                                    SMTP-1
                                                    <a href="" class="btn btn-link btn-xs">
                                                        <i class="fa fa-pencil-alt"></i>
                                                        Edit
                                                    </a>
                                                    <span class="visible-xs-inline">
                                                        <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="">
                                                            <i class="fa fa-times"></i>
                                                            Remove
                                                        </button>
                                                    </span>
                                                </span>
                                                <span class="item-group">
                                                    SMTP Servers
                                                </span>
                                            </div>
                                                <div class="col-sm-4 item-price">
                                                <span>1,000 PKR</span>
                                                <span class="cycle">Monthly</span>
                                                1,000 Setup Fee
                                               </div>
                                            <div class="col-sm-1 hidden-xs">
                                                <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                                <div class="empty-cart">
                                    <button type="button" class="btn btn-link btn-xs" id="btnEmptyCart">
                                        <i class="fas fa-trash-alt"></i>
                                        <span>Empty Cart</span>
                                    </button>
                                </div>
                        </form>
                        <div class="view-cart-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#applyPromo" aria-controls="applyPromo" role="tab" data-toggle="tab">Apply Promo Code</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active promo" id="applyPromo">
                                        <form method="post" action="">
                                            <div class="form-group prepend-icon ">
                                                <label for="cardno" class="field-icon">
                                                    <i class="fa fa-ticket-alt"></i>
                                                </label>
                                                <input type="text" name="promocode" id="inputPromotionCode" class="field" placeholder="Enter promo code if you have one" required="required">
                                            </div>
                                            <button type="submit" name="validatepromo" class="btn btn-block" value="Validate Code">
                                                Validate Code
                                            </button>
                                        </form>
                                    </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4" id="scrollingPanelContainer">

                        <div class="order-summary" id="orderSummary" style="margin-top: 0px;">
                            <div class="loader" id="orderSummaryLoader" style="display: none;">
                                <i class="fa fa-fw fa-sync fa-spin"></i>
                            </div>
                            <h2>Order Summary</h2>
                            <div class="summary-container">

                                <div class="subtotal clearfix">
                                    <span class="pull-left">Subtotal</span>
                                    <span id="subtotal" class="pull-right">2,000 PKR</span>
                                </div>
                                                                <div class="recurring-totals clearfix">
                                    <span class="pull-left">Totals</span>
                                    <span id="recurring" class="pull-right recurring-charges">
                                        <span id="recurringMonthly">
                                            <span class="cost">1,000 PKR</span> Monthly<br>
                                        </span>
                                      
                                    </span>
                                </div>

                                <div class="total-due-today total-due-today-padded">
                                    <span id="totalDueToday" class="amt">2,000 PKR</span>
                                    <span>Total Due Today</span>
                                </div>

                                <div class="text-right">
                                    <a href="" class="btn btn-success btn-lg btn-checkout" id="checkout">
                                        Checkout
                                        <i class="fa fa-arrow-right"></i>
                                    </a><br>
                                    <a href="" class="btn btn-link btn-continue-shopping" id="continueShopping">
                                        Continue Shopping
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>























<div class="container">
    <div class="row">
        <div class="col-md-9 pull-md-right">


            <div class="already-registered clearfix">
                <div class="pull-right">
                    <button type="button" class="btn btn-info" id="btnAlreadyRegistered">
                        Already Registered?
                    </button>

                </div>
                <p>Please enter your personal details and billing information to checkout.</p>
            </div>

            
            <form method="post" action="" name="orderfrm" id="frmCheckout">


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
                                            Afghanistan
                                        </option>
                                                                            <option value="AX">
                                            Aland Islands
                                        </option>
                                                                            <option value="AL">
                                            Albania
                                        </option>
                                                                            <option value="DZ">
                                            Algeria
                                        </option>
                                                                            <option value="AS">
                                            American Samoa
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
                            <div class="col-sm-6">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="passwordStrengthMeterBar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-center small text-muted" id="passwordStrengthTextLabel">Password Strength: Enter a Password</p>
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

                <div id="creditCardInputFields" class="hidden">
                                            <input type="hidden" name="ccinfo" value="new">
                                        <div id="newCardInfo" class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" id="cctype" name="cctype" value="Visa">
                                <div class="dropdown" id="cardType">
                                    <button class="btn btn-default dropdown-toggle field" type="button" id="creditCardType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span id="selectedCardType">
                                            <i class="
            fab fa-cc-visa
     fa-fw"></i>
                                            Visa
                                        </span>
                                        <span class="fa fa-caret-down fa-fw"></span>
                                    </button>
                                    <ul class="dropdown-menu" id="creditCardTypeDropDown" aria-labelledby="creditCardType">
                                                                                    <li>
                                                <a href="#">
                                                    <i class="
            fab fa-cc-visa
     fa-fw"></i>
                                                    <span class="type">Visa</span>
                                                </a>
                                            </li>
                                                                                    <li>
                                                <a href="#">
                                                    <i class="
            fab fa-cc-mastercard
     fa-fw"></i>
                                                    <span class="type">MasterCard</span>
                                                </a>
                                            </li>
                                                                                    <li>
                                                <a href="#">
                                                    <i class="
            fab fa-cc-discover
     fa-fw"></i>
                                                    <span class="type">Discover</span>
                                                </a>
                                            </li>
                                                                                    <li>
                                                <a href="#">
                                                    <i class="
            fab fa-cc-amex
     fa-fw"></i>
                                                    <span class="type">American Express</span>
                                                </a>
                                            </li>
                                                                                    <li>
                                                <a href="#">
                                                    <i class="
            fab fa-cc-jcb
     fa-fw"></i>
                                                    <span class="type">JCB</span>
                                                </a>
                                            </li>
                                                                                    <li>
                                                <a href="#">
                                                    <i class="
            fab fa-cc-diners-club
     fa-fw"></i>
                                                    <span class="type">EnRoute</span>
                                                </a>
                                            </li>
                                                                                    <li>
                                                <a href="#">
                                                    <i class="
            fab fa-cc-diners-club
     fa-fw"></i>
                                                    <span class="type">Diners Club</span>
                                                </a>
                                            </li>
                                                                            </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputCardNumber" class="field-icon">
                                    <i class="fa fa-credit-card"></i>
                                </label>
                                <input type="tel" name="ccnumber" id="inputCardNumber" class="field" placeholder="Card Number" autocomplete="cc-number">
                            </div>
                        </div>
                                                <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputCardExpiry" class="field-icon">
                                    <i class="fa fa-calendar-alt"></i>
                                </label>
                                <input type="tel" name="ccexpirydate" id="inputCardExpiry" class="field" placeholder="MM / YY" autocomplete="cc-exp">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputCardCVV" class="field-icon">
                                    <i class="fa fa-barcode"></i>
                                </label>
                                <input type="tel" name="cccvv" id="inputCardCVV" class="field" placeholder="CVV Security Number" autocomplete="cc-cvc">
                            </div>
                        </div>
                    </div>
                    <div id="existingCardInfo" class="row hidden">
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputCardCvvExisting" class="field-icon">
                                    <i class="fa fa-barcode"></i>
                                </label>
                                <input type="tel" name="cccvvexisting" id="inputCardCvvExisting" class="field" placeholder="CVV Security Number" autocomplete="cc-cvc">
                            </div>
                        </div>
                    </div>
                </div>

                
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
 -->







































    <!-- jp downlord Wrapper Start -->
 <!--    <div class="jp_downlord_main_wrapper">
        <div class="jp_downlord_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="jp_down_mob_img_wrapper">
                        <img src="images/content/mobail.png" alt="mobail_img" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="ss_download_wrapper_details">
                        <h1><span>Download</span><br>Job Portal App Now!</h1>
                        <p>Fast, Simple & Delightful. All it takes is 30 seconds to Download.</p>
                        <a href="#" class="ss_appstore"><span><i class="fa fa-apple" aria-hidden="true"></i></span> App Store</a>
                        <a href="#" class="ss_playstore"><span><i class="fa fa-android" aria-hidden="true"></i></span> Play Store</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 visible-sm visible-xs">
                    <div class="jp_down_mob_img_wrapper">
                        <img src="images/content/mobail.png" class="img-responsive" alt="mobail_img" />
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- jp downlord Wrapper End -->
    <!-- jp Newsletter Wrapper Start -->
     <?php include('template/footer.php'); ?>
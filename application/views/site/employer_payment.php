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

            
                  <?php 
      if ($user) {
        foreach ($user as $use) { ?>
        <div class="col-sm-12">
          <div class="tab-content">
            <div id="stripe" class="tab-pane fade in active">
              <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
              <!-- form start from here -->
              <form accept-charset="UTF-8"  class="require-validation" >


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
                                 <input   id="inputFirstName" class="field" value="<?php echo $use['first_name']?>" type='text' readonly="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLastName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                 <input   id="inputFirstName" class="field" type='text' value="<?php echo $use['last_name']?>" readonly="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputEmail" class="field-icon">
                                    <i class="fa fa-envelope"></i>
                                </label>
                              <input id="inputFirstName" class="field" type='text' value="<?php echo $use['email']?>" readonly="">
                            </div>
                        </div>
                            <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputEmail" class="field-icon">
                                    <i class="fa fa-map-marker"></i>
                                </label>
                             <input   id="inputFirstName" class="field" type='text' value="<?php echo $use['address']?>" readonly="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputPhone" class="field-icon">
                                    <i class="fa fa-phone"></i>
                                </label>
                                     <input   id="inputFirstName" class="field" type='text' value="<?php echo $use['phone']?>" readonly="">
                             
                            </div>
                        </div>
                    </div>

                    <div class="sub-heading">
                        <span>Billing Address</span>
                    </div>

                    <div class="row">
                      
             
             
                            
                     </div>
                </div>




<!-- 
                <div class='form-row'>
                </div>
                <div class='form-row'>
                  <div class='form-group card required'>
                    <label class='control-label'>First Name</label>
                    <input class='form-control' value="<?php echo $use['first_name']?>" type='text' readonly="">
                  </div>
                </div>
                <div class='form-row'>
                  <div class='form-group cvc required'>
                    <label class='control-label'>Last Name</label>
                    <input class='form-control' type='text' value="<?php echo $use['last_name']?>" readonly="">
                  </div>
                  <div class="form-row form-group">
                    <label>Email</label>
                    <input class='form-control' type='text' value="<?php echo $use['email']?>" readonly="">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Phone</label>
                      <input class='form-control' type='text' value="<?php echo $use['phone']?>" readonly="">
                  </div>
                   <div class='form-group'>
                    <label class='control-label'>Address</label>
                    <input class='form-control' type='text' value="<?php echo $use['address']?>" readonly="">
                    </div> 
                </div> -->
                  
              </form>
              </div>
              </div>    
            </div>
               <?php   } } ?>
  <!-- container end here for packages -->
  <hr class="featurette-divider">
  </hr>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="tab-content">
          <div id="stripe" class="tab-pane fade in">
            <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
            <!-- form start from here -->
            <form accept-charset="UTF-8" action="/your-charge-code" class="require-validation" data-cc-on-file="false"  id="payment-form" method="post">
              <input type="hidden" name="packages" data-stripe="packages" value="basic" class="packages">
              <input type="hidden" name="amount" data-stripe="amount"  value="<?php echo $emp_packages[0]['emp_basic']; ?>" class="paymentAmt">
              <br>
              <div class='form-row'>
              </div>
              <div class='form-row'>
                <div class='form-group card required'>
                  <label class='control-label'>Card Number</label>
                  <input autocomplete='off' maxlength="16" class='form-control card-number' size='20' type='text' data-stripe="number" required="">
                </div>
              </div>
              <div class='form-row'>
                <div class='form-group cvc required'>
                  <label class='control-label'>CVC</label>
                  <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='password' data-stripe="cvc">
                </div>
                <div class="form-row form-group">
                  <label>Expiration (MM)</label>
                  <input type="text" size="2" class="form-control" data-stripe="exp_month" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Expiration (YY)</label>
                  <input type="text" size="2" class="form-control" data-stripe="exp_year" required>
                </div>
                <!-- <div class='form-group'>
                  <label class='control-label'>Zip</label>
                  <input class='form-control' placeholder='zip' size='10' type='text' data-stripe="address_zip">
                  </div> -->
              </div>
              <div class='form-row'>
                <div class='form-group'>
                  <label class='control-label'></label>
                  <!-- stripe button --><input type="submit" id="hide-button" class="form-control btn btn-primary submit" name="submit" value="Pay Now" style="display: none;">
                  <!-- modal trigger -->
                  <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#myModal" id="mybtn">Continue</button>
                  <!-- <button class='form-control btn btn-primary' class="submit" type='submit'> </button> -->
            </form>
            </div>
            </div>    
          </div>
          <div class="alert alert-success" role="alert" id="success_alert" style="display: none;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <b>Thank You!</b>  Payment send Successfully.
          </div>
          <div id="paypal" class="tab-pane fade in active">

            <form enctype="multipart/form-data" action="<?php echo base_url()?>Stripe/payment/recruiter_bank_pay/<?php echo $this->uri->segment(3)?>" id="paypalForm" method="POST" >
              <!--
              <input type="hidden" name="packages" data-stripe="packages" value="basic" class="packages">
              <input type="hidden" name="amount" data-stripe="amount"  value="3500" class="paymentAmt">
            -->
           
              <div class="paypalResult">
                <!-- content will load here -->
              </div>
              <label>Bank Account Details:</label>
              <p>Use the below details to bank tranfer</p>
              <br>
              <label>Account Title:</label>
              <small>John</small><br>
              <label>Account No:</label>
              <small>001078654333</small><br>
              <label>Branch code:</label>
              <small>000002</small><br>
              <label>Please upload bank reciept here</label>
              <small></small>
              <br><br>
              <label>Recipt Image</label>
              <div class="text-center">
                <img src="" id="blah" class="avatar img-square" alt="" style="margin-bottom: 20px;">
                <input type="file"  accept="image/*" class="form-control" name="userfile" onchange="readURL(this);">
                <span>Maximum size 3 MB of a file.</span><br>
                <span>Allowed Types:jpg,png,gif.</span>
              </div>
              <button class='form-control btn btn-primary submit-button' type='submit'> Continue →</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
      <label class='control-label'></label><!-- spacing -->
      <div class="alert alert-info"">Please choose your method of payment and hit continue. You will then be sent down to pay using your selected payment option.</div>
      <br>
      <!--
      <div class="btn-group-vertical btn-block">
      <a class="btn btn-default" style="text-align: left;" data-toggle="tab" href="#stripe">Stripe/Credit Card</a>
      <a class="btn btn-default" style="text-align: left;" data-toggle="tab" href="#paypal">Pay By Bank</a>
      </div>-->
      <br><br><br>
      <div class="jumbotron jumbotron-flat">
      <div class="center"><h2><i>BALANCE DUE:</i></h2></div>
      <div ><span class="paymentAmt"><?php echo $emp_packages[0]['emp_basic']; ?></span> PKR</div>  
      </div>
      <br><br><br>
      </div>
    </div>
  </div>
  </div>
  </form>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
          </div> -->
        <div class="modal-body" align="center" style="padding: 30px 0px 0px;">
          <p>Are you sure you want to go to payment done?</p>
        </div>
        <div class="modal-footer" style="text-align: center;padding: 10px;">
          <button type="button" class="btn btn-primary" id="modal_btn" data-dismiss="modal">Continue</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
<?php include('template/footer.php'); ?>


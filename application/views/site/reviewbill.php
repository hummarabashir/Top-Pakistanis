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
                            <h2>Billing Review</h2>
                        </div>
                        <!--<div class="jp_tittle_breadcrumb_main_wrapper">-->
                        <!--    <div class="jp_tittle_breadcrumb_wrapper">-->
                        <!--        <ul>-->
                        <!--            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li>Billing Review</li>-->
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
     <h2 style="font-size: 20px; font-weight: bold; color: #39b54a; text-transform: uppercase; padding-bottom: 30px; text-align: left;">Review & Checkout</h2>

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
                                                    Lorem Ipsum Dolor
                                                    <a href="" class="btn btn-link btn-xs">
                                                        <i class="fa fa-edit"></i>
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
                                                    Lorem Ipsum
                                                </span>
                                            </div>
                                                <div class="col-sm-4 item-price">
                                                <span>00000 PKR</span>
                                                <span class="cycle">Monthly</span>
                                                00000 Setup Fee
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
                                        <i class="fa fa-trash"></i>
                                        <span>Empty Cart</span>
                                    </button>
                                </div>
                        </form>
                        <div class="view-cart-tabs">
                            <ul class="nav nav-tabs" role="tablist" style="border-top: none; border-bottom: 1px solid #ddd;">
                                <li role="presentation" class="active"><a href="#applyPromo" aria-controls="applyPromo" role="tab" data-toggle="tab" style="color: #555; cursor: default; background-color: #fff; border: 1px solid #ddd; border-bottom-color: rgb(221, 221, 221); border-bottom-color: transparent; border-radius: 0px;">Apply Promo Code</a></li>
                                <!--  <li role="presentation" ><a href="#applyPromo" aria-controls="applyPromo" role="tab" data-toggle="tab">Apply Promo Code</a></li> -->
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active promo" id="applyPromo" style="padding-top: 15px;">
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
                                    <span id="subtotal" class="pull-right">00000 PKR</span>
                                </div>
                                <div class="recurring-totals clearfix">
                                    <span class="pull-left">Totals</span>
                                    <span id="recurring" class="pull-right recurring-charges">
                                        <span id="recurringMonthly">
                                            <span class="cost">00000 PKR</span> Monthly<br>
                                        </span>
                                      
                                    </span>
                                </div>
                                <div class="total-due-today total-due-today-padded">
                                    <span id="totalDueToday" class="amt">00000 PKR</span>
                                    <span>Total Due Today</span>
                                </div>

                                <div class="text-right">
                                    <a href="<?php echo base_url().'site/checkout'?>" class="btn btn-success btn-lg btn-checkout" id="checkout">
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
    </div>
</div>



















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
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12 ">
                    <img src="<?php echo base_url(); ?>img/home/logofooter.png" class="img-responsive" alt="footer-logo">
                    <ul style="margin-top: 0px;">
                        <li>
                            <!-- <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Lorem ipsum <i class="fa fa-long-arrow-right"> </i> </button>
                            </div> -->
                            <p style="line-height: 20px"><small style="font-size: 80%;">It is  a long establishd fact that a reader will be distracted by the readable</small></p>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-12">
                    <h3> About </h3>
                    <ul>
                        <li> <a href="#"> Careers </a> </li>
                        <li> <a href="#">Internships</a> </li>
                        <li> <a href="#">Press</a> </li>
                        <li> <a href="#"> Blog </a> </li>
                        <li> <a href="#"> Contact </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-12">
                    <h3> Candidate </h3>
                    <ul>
                        <!-- <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li> -->
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-12">
                    <h3> Company </h3>
                    <ul>
                        <li> <a href="#"> Assessments </a> </li>
                        <li> <a href="#"> Pricing </a> </li>
                        <li> <a href="#"> Powered by Job360 </a> </li>
                        <li> <a href="#"> Help for Employers </a> </li>
                        <li> <a href="#"> Resources for Recruiters </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Popular </h3>
                    <ul>
                        <li> <a href="#"> Lahore Job Hiring </a> </li>
                        <li> <a href="#"> Karachi Job </a> </li>
                        <li> <a href="#"> Jobs In Islamabad </a> </li>
                        <li> <a href="#"> Hr Job Opening </a> </li>
                        <li> <a href="#"> Peshawar Job Hiring </a> </li>
                    </ul>
                </div>
                
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <p class=""> © 2017 Job360, Inc. Terms of use Privacy policy </p>
            <!-- <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div> -->
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url() ?>vendor/js/creative.min.js"></script>
     <!-- Javascript -->
        <!-- <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
        <script src="<?php echo base_url() ?>vendor/js/scripts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>vendor/js/intlTelInput.js"></script>
        <script src="<?php echo base_url() ?>vendor/js/js.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url() ?>vendor/js/toastr.js" type="text/javascript"></script>
<?php if ($this->session->flashdata('flash_message') != ""):?>




<script type="text/javascript">
  toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
</script>

<?php endif;?>



        <script>
            $("#phone").intlTelInput({
              // allowDropdown: false,
              // autoHideDialCode: false,
              // autoPlaceholder: "off",
              // dropdownContainer: "body",
              // excludeCountries: ["us"],
              // formatOnDisplay: false,
              // geoIpLookup: function(callback) {
              //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
              //     var countryCode = (resp && resp.country) ? resp.country : "";
              //     callback(countryCode);
              //   });
              // },
              // initialCountry: "auto",
              // nationalMode: false,
              // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
              // placeholderNumberType: "MOBILE",
              // preferredCountries: ['cn', 'jp'],
              // separateDialCode: true,
              utilsScript: "build/js/utils.js"
            });
          </script>

<!-- Report page -->
<script>
var tabsFn = (function() {
  
  function init() {
    setHeight();
  }
  
  function setHeight() {
    var $tabPane = $('.tab-pane'),
        tabsHeight = $('.nav-tabs').height();
    
    $tabPane.css({
      height: 100%
    });
  }
    
  $(init);
})();
</script>
<!-- Report page -->


</body>
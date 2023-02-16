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
                           <?php echo $categorie['cat_name']; ?></a></li>
                            <?php } ?>
                   <!--      <li><a href="">
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
                            Graphic Design </a></li>
                        <li><a href="">
                            Database Administrator</a></li>
                        <li><a href="">
                            Customer Support </a></li>
                        <li><a href="">
                            Content Writer </a></li>
                        <li><a href="">
                                Computer Networking </a></li>
                        <li><a href="">
                                Creative Design</a></li>
                        <li><a href="">
                                Management Consulting </a></li>
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
                                Human Resources Jobs
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Quality Assurance Jobs 
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Receptionist Jobs
                            </a>
                        </li> -->
                    </ul>
			    </div>



                <div class="col-md-3 col-sm-4 col-xs-12 quick-links">
                    <h5 class="green"><a href=""><b>Profiles by location</b></a></h5>
                    <ul>
                       <?php foreach($fcities as $city){ ?>
                        <li><a href="<?php echo base_url().'users/profileviewcity/'.$city['city_id']?>"> Profiles in
                           <?php echo $city['city_name']; ?></a></li>
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
                            <a href="">
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
                            <a href="">
                                Sign Up
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>users/findaprofile">
                                Find a Profile
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
                                Blog</a></li>
                            <li><a target="_blank" href="<?php echo base_url() ?>users/contact_us">
                                Contact Us</a></li>
                            <li><a target="_blank" href="<?php echo base_url() ?>users/contact_us">
                                Feedback</a></li>
                            <li><a target="_blank" href="<?php echo base_url() ?>site/about_us">
                                About Us</a></li>
                            <li><a target="_blank" href="<?php echo base_url() ?>site/privacypolicy">
                                Privacy Policy</a></li>
                            <li><a target="_blank" href="<?php echo base_url() ?>site/terms_and_conditions">
                                Terms &amp; Conditions</a></li>
                        </ul>
			    </div>
            
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 quick-links-genral">
                <div class="col-md-12 col-sm-12 col-xs-12 quick-links-genral contactus">
                <h5 class="green"><b>Top Pakistanis</b>- Profiles in Pakistan</h5>
                    <ul>
                        <li style="color: #fff;font-size: 14px; margin-bottom:5px">Top Pakistanis drives top talent to companies that want to hire them. We do the heavy lifting for you. Our platform puts your best matching profiles in front of more recruiters than anyone else. We pair talented professionals with Industry leading employers. Top Pakistanis are are focused on bringing great people and great organizations together.t</li>
                        
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
    <script src="<?php echo base_url() ?>vendor/js/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/custom_II.js"></script>







   <script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>vendor/bootstrap/js/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <!--<script src="<?php echo base_url() ?>assets/js/jquery-2.1.4.min.js"></script>-->

    <script src="<?php echo base_url() ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/multiselect.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
          <script type="text/javascript">
        $(document).ready(function(){       
  setTimeout(function() {
    $('#myModalonload').modal('show');
}, 5000);

setTimeout(function() {
    $('#myModalonload').modal('hide');
}, 15000);
    }); 
      </script>
            <script type="text/javascript">
      
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Password Match').css('color', 'green');
  } else 
    $('#message').html('Password Donot Match').css('color', 'red');
});
      </script>
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

      <script type="text/javascript">
        $(document).ready(function () {
  
  function setRating(rating) {
    $('#rating-input').val(rating);
    // fill all the stars assigning the '.selected' class
    $('.rating-star').removeClass('fa-star-o').addClass('selected');
    // empty all the stars to the right of the mouse
    $('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('selected').addClass('fa-star-o');
  }
  
  $('.rating-star')
  .on('mouseover', function(e) {
    var rating = $(e.target).data('rating');
    // fill all the stars
    $('.rating-star').removeClass('fa-star-o').addClass('fa-star');
    // empty all the stars to the right of the mouse
    $('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('fa-star').addClass('fa-star-o');
  })
  .on('mouseleave', function (e) {
    // empty all the stars except those with class .selected
    $('.rating-star').removeClass('fa-star').addClass('fa-star-o');
  })
  .on('click', function(e) {
    var rating = $(e.target).data('rating');
    setRating(rating);
  })
  .on('keyup', function(e){
    // if spacebar is pressed while selecting a star
    if (e.keyCode === 32) {
      // set rating (same as clicking on the star)
      var rating = $(e.target).data('rating');
      setRating(rating);
    }
  });
});
      </script>
      
    <script>
$(document).ready(function(){

$("#category").change(function(){

        var id = $(this).val();
        var datastring = 'id='+id;
        //alert(datastring);
    $.ajax
    ({
        type:"POST",
        url:"<?php echo base_url().'users/fetchSubCategories'; ?>",
        data:datastring,
        success:function(data){
            //console.log(data);
            $(".subcat_id").html(data);
        }
    });


});
});
</script>

<script>
$(document).ready(function(){
$("#category").change(function(){

        var id = $(this).val();
        var datastring = 'id='+id;
        //alert(datastring);
    $.ajax
    ({
        type:"POST",
        url:"<?php echo base_url().'users/fetchSkills1'; ?>",
        data:datastring,
        success:function(data){
            //console.log(data);
            $(".skill_id").html(data);
        }
    });


});
});
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
    Animate(elem, 'left', 800, 0, -500);    
    opened = false;
  } else {
    Animate(elem, 'left', 800, -500, 0);
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
    $(function() {
    $('.multiselect-ui').multiselect({
        includeSelectAllOption: true
    });
    });
    </script>

    <script>
$(document).ready(function(){

$("#category1").change(function(){

        var id = $(this).val();
        var datastring = 'id='+id;
        //alert(datastring);
    $.ajax
    ({
        type:"POST",
        url:"<?php echo base_url().'users/fetchSkills1'; ?>",
        data:datastring,
        success:function(data){
            //console.log(data);
            $(".skill_id").html(data);
        }
    });


});
});
</script>

  <script type='text/javascript'>
  // baseURL variable
  var baseURL= "<?php echo base_url();?>";
  $(document).ready(function(){
    // City change
    $('#sel_city').change(function(){
      var cat_id = $(this).val();
      // AJAX request
      $.ajax({
        url:'<?php echo base_url()?>users/getskills',
        method: 'post',
        data: {'cat_id': cat_id},
        dataType: 'json',
        success: function(response){
          // Remove options 
          //$('#sel_user').find('option').not(':first').remove();
          $('#sel_depart').find('option').not(':first').remove();
          // Add options
          $.each(response,function(index,data){
             $('#sel_depart').append('<option value="'+data['skill_id']+'">'+data['skill_name']+'</option>');
          });
        }
     });
     
  
   });
     }); 
   </script>



   
      <script>
        $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
    </script>

    <script type="text/javascript">
$(document).ready(function (){
  
$("#signup1-form").submit(function (e){ 

  e.preventDefault();
  $("#signup1-form-message").empty();
  $('#signup1-form-loading').fadeIn(400).html('Loading..');
   var url = $(this).attr('action');

    var method = $(this).attr('method')

  var data = $(this).serialize();

   $.ajax({ 
    url:url,
     type:method, 
     data:data,
     success: function(response) { 
        
           $('#signup1-form-loading').hide();
            $("#signup1-form-message").fadeIn().html(response);
              setTimeout(function(){ 
                $("#signup1-form-message").fadeOut("slow"); 
              },20000); 
           } 
   });
  });
});

</script>
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



     <script type="text/javascript">
CKEDITOR.replace('editor12');

$(document).ready(function(){

$.fn.modal.Constructor.prototype.enforceFocus = function () {
    modal_this = this
    $(document).on('focusin.modal', function (e) {
        if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
        // add whatever conditions you need here:
        &&
        !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
            modal_this.$element.focus()
        }
    })
};

});
        </script>

     <script type="text/javascript">
CKEDITOR.replace('editor13');

$(document).ready(function(){

$.fn.modal.Constructor.prototype.enforceFocus = function () {
    modal_this = this
    $(document).on('focusin.modal', function (e) {
        if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
        // add whatever conditions you need here:
        &&
        !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
            modal_this.$element.focus()
        }
    })
};

});
        </script>



     <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'editor1' );
        </script>
          <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'editor2' );
        </script>
          <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'editor3' );
        </script>
    <script type="text/javascript">
    $(function() {
    $('.multiselect-ui').multiselect({
        includeSelectAllOption: true
    });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
    var brand = document.getElementById('logo-id');
    brand.className = 'attachment_upload';
    brand.onchange = function() {
        document.getElementById('fakeUploadLogo').value = this.value.substring(12);
    };

    // Source: http://stackoverflow.com/a/4459419/6396981
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo-id").change(function() {
        readURL(this);
    });
});
</script>
    <script type="text/javascript">
    $(document).ready(function() {
    var brand = document.getElementById('logo-id1');
    brand.className = 'attachment_upload';
    brand.onchange = function() {
        document.getElementById('fakeUploadLogo1').value = this.value.substring(12);
    };

    // Source: http://stackoverflow.com/a/4459419/6396981
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.preview').attr('i', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo-id1").change(function() {
        readURL(this);
    });
});
</script>


   <script>
            function openfileDialog() {
        $("#fileLoader").click();
        }
        </script>

    <script>
        function initMap() {
            var uluru = {lat: -36.742775, lng:  174.731559};
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            scrollwheel: false,
            center: uluru
            });
            var marker = new google.maps.Marker({
            position: uluru,
            map: map
            });
            }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&amp;callback=initMap">
    </script>
        <script>
        function initMap() {
            var uluru = {lat: -36.742775, lng:  174.731559};
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            scrollwheel: false,
            center: uluru
            });
            var marker = new google.maps.Marker({
            position: uluru,
            map: map
            });
            }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&amp;callback=initMap">
    </script>
    <!--main js file end-->
    <!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <!-- $string = character_limiter($string, 400); -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobs360 Job-Board</title>
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500"> -->
    <style type="text/css">
      .btnsaved:active {
      outline: 0;
      background: #9ccb46;
      color: #fff;
      border: 1px solid #9ccb46;
      -moz-box-shadow: none;
      -webkit-box-shadow: none;
      box-shadow: none;
      }
      .btnsaved:hover {
      background: #9ccb46;
      color: #ffffff !important;
      border: 1px solid #9ccb46;
      }
      .btnsaved {
      height: 32px;
      margin: 0;
      padding: 0px 25px;
      vertical-align: middle;
      background: #fff;
      border: 1px solid #9ccb46 !important;
      font-family: 'Roboto', sans-serif;
      font-size: 20px;
      font-weight: 300;
      line-height: 31px;
      color: #9ccb46;
      margin: 5px;
      -moz-border-radius: 2px;
      -webkit-border-radius: 2px;
      border-radius: 2px;
      text-shadow: none;
      -moz-box-shadow: none;
      -webkit-box-shadow: none;
      box-shadow: none;
      -o-transition: all .3s;
      -moz-transition: all .3s;
      -webkit-transition: all .3s;
      -ms-transition: all .3s;
      transition: all .3s;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $("#target").click(function(event){
              event.preventDefault();
            var keywords =  $('#keywords').val();
            var location =  $('#autocomplete').val();
            var salary = $('#salary').val();
            var job_type = $('#job_type').val();
      
           $.ajax({
              type:"POST",
              url:"<?php echo base_url().'users/filter_front_index/'.$this->uri->segment('3'); ?>",
              data:{ keywords: keywords, location: location, salary: salary,checkbox_value:job_type},
              dataType: 'json',
            //   success:function(result){
            //        $('#test').html(result);
            // // console.log(result);
            //   }
      
      
      
      
           success: function(detail){                        
              try{        
             
      
      // for (i = 0; i < detail.length; i++) { 
      
      
       // document.getElementById("test").innerHTML+=detail[i]['jobs_id']+'<br>';
                                         
      // }
      
      document.getElementById("test").innerHTML=detail;
      
       $('#data').css({
                  'display' : 'none'
                
              });
      
      
      }catch(e) {     
                  alert('Exception while request..');
              }       
              },
              error: function(){                      
                  alert('Error while request..');
              }
      
      
      
          });
           });
          });      
    </script>
  </head>
  <body>
    <?php include 'template/header.php';  ?>
    <div class="container-fluid searc_cat_header" style="padding-left: 0px; padding-right: 0px;">
      <img src="<?php echo base_url('img/dream_job_upd.jpg'); ?>" class="img-responsive" alt="">
    </div>
    <!-- Top content -->
    <div class="top-content">
      <div class="inner-bg">
        <div class="container">
          <div class="form-top form-box" style="padding: 0px">
            <div class="form-top-left" style="padding: 0px;">
              <div class="row" style="margin-bottom: 2%;margin-top: 2%;">
                <div class="col-lg-12">
                  <!-- Start of Job Board Section -->
                  <div class="col-lg-12" style="padding: 0px;" id="jobboard">
                    <div class="row">
                      <div class="col-lg-12 col-sm-12" style="padding: 0px;">
                        <div class="col-lg-10 col-sm-10" style="padding: 0px;">
                          <div class="col-lg-4 login_form">
                            <input type="text" name="keywords" placeholder="Keywords (e.g java , php)" class="form-control" id="keywords">
                          </div>
                          <div class="col-lg-4 login_form">
                            <input type="text" class="form-control" required="" id="autocomplete"
                              onFocus="geolocate()"  placeholder="Location" id="location_name" name="job_location"/> 
                          </div>
                          <div class="col-lg-4 login_form">
                            <select name="salary" id="salary" class="form-control">
                              <option value="salary">Salary Range</option>
                              <option value="0,5000">0 - 5000</option>
                              <option value="5000,15000">5000 - 15000</option>
                              <option value="15000,30000">15000 - 30000</option>
                              <option value="30000,50000">30000 - 50000</option>
                              <option value="50000,100000">50000 - 100000</option>
                              <option value="100000,10000000">100000+</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-2 col-sm-2" style="padding: 0px;">
                          <a href="" id="target" class="btn btnsaved" style="text-transform: none;">Search a job <i class="glyphicon glyphicon-chevron-right" style="margin-left: 4%;margin-right: 4%;"></i></a>
                        </div>
                        <br/>
                        <div class="col-lg-3 login_form" style="margin-bottom: 2%;margin-top: 2%;">
                          <select name="job_type" id="job_type" class="form-control">
                            <option value="job">Employment Type</option>
                            <option value="full-time">Full-Time</option>
                            <option value="intership">Intership</option>
                            <option value="part-time">Part-Time</option>
                            <option value="per-diem">Per Diem</option>
                            <option value="seasonal">Seasonal</option>
                            <option value="temporary/contract">Temporary/Contract</option>
                            <option value="volunteer">Volunteer</option>
                            <option value="work-study">Work Study</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div id="test"></div>
                    <div id="data">
                      <?php 
                        $i=0; 
                        
                        if (count($detail) > 0 ) {
                        foreach($detail as $d)
                        { 
                          ?>
                      <div class="col-lg-12 job_section" style="border: 1px solid #CCCCCC;margin-bottom: 2%;background: #fff;">
                        <a href=<?php echo base_url('users/job_detail'); ?>/<?php echo $detail[$i]['jobs_id']; ?> >
                          <h3><?php echo $detail[$i]['job_title']; ?>
                            <small><?php echo $detail[$i]['job_location']; ?></small>
                        <a  href="<?php echo base_url('users/save/').$detail[$i]['jobs_id'].'/dashboard'  ?>"  data-toggle="tooltip"  title="Save Job">
                        <img src=<?php echo base_url('assets/images/save.png') ?> style="height=20px;width:20px;">
                        </a>
                        </h3>
                        </a>
                        <a href="#" style=""><?php echo $detail[$i]['job_shift']; ?></a>
                        <p><?php  $job_description = character_limiter( $detail[$i]['job_description'], 200);
                          echo $job_description; ?></p>
                        <p>
                          <span  style="color: #4f9688;"><?php echo $detail[$i]['job_location']; ?></span><span style="float: right;"><?php echo $detail[$i]['job_edate']; ?></span>
                        </p>
                      </div>
                      <?php 
                        $i++;
                         } 
                        } else { ?>
                      <div class="col-lg-12 job_section" >
                        <div class="alert alert-success" role="alert">
                          <strong>Sorry!</strong> No data found.
                        </div>
                      </div>
                      <?php }  ?>
                      <div class="col-lg-12" align=right>
                        <?php 
                          foreach ($links as $link) {
                             echo $link;
                           } ?>
                      </div>
                    </div>
                  </div>
                  <!-- End of Job Board Section -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!--[if lt IE 10]>
    <script src="assets/js/placeholder.js"></script>
    <![endif]-->
    <?php include 'template/footer.php'; ?>
    <!-- location -->
    <script>
      var cityname,statename,countryname;
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.
      
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      
      var placeSearch, autocomplete;
      var componentForm = {
      street_number: 'short_name',
      route: 'long_name',
      locality: 'long_name',
      administrative_area_level_1: 'short_name',
      country: 'long_name',
      postal_code: 'short_name'
      };
      
      function initAutocomplete() {
      // Create the autocomplete object, restricting the search to geographical
      // location types.
      autocomplete = new google.maps.places.Autocomplete(
          /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
          {types: ['geocode']});
      
      // When the user selects an address from the dropdown, populate the address
      // fields in the form.
      autocomplete.addListener('place_changed', fillInAddress);
      }
      
      function fillInAddress() {
      // Get the place details from the autocomplete object.
      var place = autocomplete.getPlace();
      
      console.log(place);
      var myselecteddata=place.address_components;
      console.log(myselecteddata);
      console.log(Object.keys(myselecteddata).length);    
      
      for (var component in componentForm) {
      //   document.getElementById(component).value = '';
      //     document.getElementById(component).disabled = false;
      }
      
      // Get each component of the address from the place details
      // and fill the corresponding field on the form.
      console.log( place.address_components.length);
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[i];
        console.log("adress");
        console.log(addressType);
        if (componentForm[addressType]) {
      console.log(place.address_components[i]);
      
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById(addressType).value = val;
        //  console.log(addressType);
        }
      }
      }
      
      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var geolocation = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
          var circle = new google.maps.Circle({
            center: geolocation,
            radius: position.coords.accuracy
          });
          autocomplete.setBounds(circle.getBounds());
        });
      }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCokm3B5kGgbJKmnO2dDUbgjixGiY2JCIw&libraries=places&callback=initAutocomplete"
      async defer></script>
    <!-- location ends -->
</html>


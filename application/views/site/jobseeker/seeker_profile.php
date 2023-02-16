<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jobs360</title>

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500"> -->
<style type="text/css">
   label::before {
        content: none !important;
      }
</style>

    </head>

    <body>
     <?php include ('template/mainheader.php'); ?>

<div class="container">

    <h2>Complete Your Profile</h2>
    <hr>
     <form class="form-horizontal" role="form" method="post" enctype='multipart/form-data' action="<?php echo base_url().'users/job_seeker_profile/create/'?> " >
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="<?php if(!empty($profile_row['picture_url'])){echo $profile_row['picture_url'];}else{echo '//placehold.it/100';}?>" id="blah" class="avatar img-circle" alt="avatar" style="width: 150px;height: 150px;">
          
          <input type="file"  accept="image/*" class="form-control" name="userfile" onchange="readURL(this);">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
      <h3>Personal info</h3>   
          <div class="form-group">
            <label class="col-lg-3 control-label">Select Category</label>
            <div class="col-lg-8">
             <div class="ui-select">
                <select id="cat" class="form-control" name="cat" required="">
                  <option value="">Select a Category</option>
                   <?php foreach ($category  as $value) { ?>
                  <option value="<?php echo $value['cat_id']?>"><?php echo $value['cat_name']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
            
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Location:</label>
            <div class="col-lg-8">
             <input type="text" class="form-control" required="" id="autocomplete"
             onFocus="geolocate()"  placeholder="Location"  name="location" required=""/> 
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Career Level:</label>
            <div class="col-lg-8">
              <select id="level" class="form-control" name="career_level" required="">
                  <option value="">Slect a Career</option>
                  <?php foreach ($clevel as $value) { ?>
                  <option value="<?php echo $value['clevel_id']?>"><?php echo $value['clevel_name']?></option>
                  <?php } ?>
                </select>
            </div>
          </div>

           <div class="form-group">
            <label class="col-lg-3 control-label">Experience Level:</label>
            <div class="col-lg-8">
              <select name="explevel" class="form-control" required=""  data-live-search="true">
              <option value="" >Select Experience Level</option>
              <option value="< 1 Year"> < 1 Year </option>
              <option value="1 Year"> 1 Year </option>
              <option value="2 Year"> 2 Year </option>
              <option value="3 Year"> 3 Year </option>
              <option value="4 Year"> 4 Year </option>
              <option value="5 Year"> 5 Year </option>
              <option value="> 5 Year"> > 5 Year </option>
          </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
              <select id="" class="form-control" name="gender" required="">
              <option value="">Select Gender</option>
               <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="other">Other</option>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">City:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="City" name="city" required="">
            </div>
          </div>
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Age:</label>
            <div class="col-lg-8">
              <input class="form-control" type="number" placeholder="Age" name="Age" required="">
            </div>
          </div>
           <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input class="form-control" type="number" placeholder="Phone" name="Phone" required="">
            </div>
          </div>
           <div class="form-group">
            <label class="col-lg-3 control-label">Mobile:</label>
            <div class="col-lg-8">
              <input class="form-control" type="number" placeholder="Mobile" name="Mobile" required="">
            </div>
          </div>
          

          
         
         
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
       
      </div>
      </form>
  </div>
   

<br>
<br>


<?php include 'template/footer.php'; ?>
 <script type="text/javascript">
               function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>

</script>

<script type="text/javascript">
    $('#autocomplete').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});
</script>
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
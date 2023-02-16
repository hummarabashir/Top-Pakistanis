<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jobs360</title>

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500"> -->


    </head>

    <body>
     <?php include ('template/mainheader.php'); ?>
  <div class="row" style="height: 100%">
  <h1 class="text-default text-center">Location</h1>
  <form action ="<?php echo base_url().'index.php/users/savelocation' ?>" method="post">
       <br><br>
        <div class="col-md-8 col-md-offset-2" style="padding-right: 3px;">
        
            <i class="fa fa-search" aria-hidden="true"  style="
    top: 10px;left: 30px;font-size: 24px;position: absolute;z-index: 3;"></i>
             <div class="input-group" id="adv-search" style="width: 100%;">
                
              
           
      <input type="text" class="form-control fa fa-search" id="autocomplete"
             onFocus="geolocate()" required=""  placeholder="Location" id="location_name" name="location_name" style="height: 50px; padding-left: 4%;"/>  

            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
  <p id="eroor" style="color: red"></p>
                        <input style="float: right;background-color: #9ccb46;color: #fff;padding-right: 2%;padding-left: 2%;" type="submit" align="right" id="save_value" name="save_value" value="Next Step" />
</div>
</form>
            </div>

        
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
        <?php include 'template/footer.php'; ?>
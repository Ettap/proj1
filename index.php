

<?php

include("functions.php");
include('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dating site Project1</title>
	 <!--Desing css all changes made in here -->
	<link href="css/design.css" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.0.0.js"></script>
  </head>
  <body>
	  <header></header>

	<div id="content">
    <h1>Find sexy singles in your area</h1>
  	<!-- body code goes here -->
	  <nav>
      <a href="login_page.php">Login page</a><br>
      <a href="sign_up_page.php">signup page WIP here</a><br>
      <a href="info.php" title='info'>View list of all profiles here</a><br>
      <a href='info.php?page=1' title='info'>View table of profiles (better ui)</a>
	  </nav>
  <div class="col-3">

    <?php

            if(isset($_GET['login'])){
              include ("login_page.php");
            } else {
    ?>

		<fieldset>

			<div id="listingsAll" class="col-12">
                <legend>Users</legend>
				<?php
					$q_users = "SELECT * FROM users";

					$r_people = mysqli_query($link, $q_users);

					while($row = mysqli_fetch_array($r_people)) {
				?>
                <div class="listings col-5">
					<h4><?php echo $row['username'];?> </h4>
					<p><a href="info.php?id=<?php echo $row['userID'];?>" title="info">Read more</a></p>

                </div>
				<?php
      }};
				?>





		</fieldset>
	</div>
	</div>
	
	<!--
//OK SO SOMETHING WORKS
//value of location-input is set to this location which currently works
//this at least works
//next, what happens if a new address is given
//almost works, page reloads and loses the information but it loooks like thew information is received, thus progress yay
//idea: value of input in submit = current location/last entered value
//since it's currently empty it seems to be clearing everything on submit, so everything breaks even if the data is received

//trying to force a location into input


-->



	<?php
//not sure if needed but doesn't seem to harm anything, also the $address variable could easily be used to grab the postal code of a user, which I think should then automatically get fed into the map but that's like magic so idk
$address = "";
	?>
	
	<!--
	so this is not the best solution obviously, but currently this just makes a little text box where you can type what you want the map to find
	-->
	  <div class="container">
    <h2 id="text-center">Enter Location: </h2>
    <form  method="get" id="location-form" action="index.php?loc">
      <input type="text" id="location-input" class="form-control form-control-lg" name="loc" value= <?php $address ?> >
      <br>
      <button type="submit" class="btn btn-primary btn-block" onclick="geocode( <?php $address ?> )">Submit</button>
    </form>
  </div>


<?php
//this stuff was probably a red herring
$address = $_GET['loc'];
$encodedAddress = urlencode($address);
echo "<p>$address</p>";
echo "<p>$encodedAddress</p>";
?>

<!-- this is the map, very important -->
  <div id="map"></div>
  
<!--
ideas
if location-form is set, map init function returns geocode location postal_code
url_encode an address variable filled with whatever is typed in, then geolocate it
that's great and all but why won't the map take it
ha ha it took it! 
I think encoded address and $address are useless, but I made it work so I won't mess with it now
-->
  
   <?php
if(!isset($_GET['loc'])){
  ?>
   
<script>

//straight from google, this navigator bit shows the user's location if no specific profile or address is entered (!isset GET loc)

      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
   </script>
   
   <?php
   //if not using the above map system (ie nothing isset), then use the below map system, which can be used to search for addresses or postal codes
   } else {
    ?>
      
      <script>
      
        //this makes a map for the geocode to put coordinates into I guess
       function initMap(query) {
      var coords = query;

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: coords
      });

      var marker = new google.maps.Marker({
        position: coords,
        map: map
      });
    }

    // Get location form
    var locationForm = document.getElementById('location-form');

    // Listen for submit
    locationForm.addEventListener('submit', geocode);
    
    //geocode returns coordinates of an address
    function geocode(e){
      console.log('Find this ' + query)
      
      //stop reloading gah
      e.preventDefault();
      
      var query = document.getElementById('location-input').value;
      axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
        params:{
          address:query,
          key:'AIzaSyDNmpl69hjanIRsZg5RLoclPSnIEGHCu5Q'
          
        }
      })
      
      .then(function(response){
        // Log full response
        console.log(response);
        
        var coords = response.data.results[0].geometry.location;
        initMap(coords);

      })
      .catch(function(error){
        console.log(error.response);
      });
    }

<?php
};
?>

</script>





<!--
needs to be here don't touch
-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNmpl69hjanIRsZg5RLoclPSnIEGHCu5Q&address=<?php$encodedAddress?>&callback=initMap"></script>

</body>
</html>

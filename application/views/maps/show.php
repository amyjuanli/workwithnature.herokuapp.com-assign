
<!-- pass PHP data from controller to javascript -->
<?php
if (!empty($donations)) {
  echo "<script type='text/javascript'>";
  echo "var donations = " . json_encode($donations) . "\n";
  echo "</script>";
}
?>

<script type="text/javascript">
  console.log(donations[0]);
</script>

<script type="text/javascript">
    function initialize() {
        spherical = google.maps.geometry.spherical;

        var point = new google.maps.LatLng(10.398671, -84.170756); 
        var myOptions = {
                zoom: 8,
              center: point,
              mapTypeId: 'satellite'
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
            console.log(donations);

        for(var i = 0; i < donations.length; i++) {
            var lat = Number(donations[i]['latitude']); 
            var lng = Number(donations[i]['longitude']);
            var rectangle = new google.maps.Rectangle({
            strokeColor: '#00FF00',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#00FF00',
            fillOpacity: 0.35,
            map: map,
            bounds: {
              north: lat + .1,
              south: lat - .1,
              east: lng + .1,
              west: lng - .1
            }
        }); 
        }
    }

  // add a rectangle on click 
 function addLating(event) {
          var lat = event.latLng.lat();
          var lng = event.latLng.lng();
          console.log("lat: " + lat + ", long: " + lng);
          var rectangle = new google.maps.Rectangle({
            strokeColor: '#00FF00',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#00FF00',
            fillOpacity: 0.35,
            map: map,
            bounds: {
              north: lat + .0001,
              south: lat - .0001,
              east: lng + .0001,
              west: lng - .0001
            }
        });
    }

    
</script>

<div class="left" style="float: left; width: 60%">
		<!-- <div class="container-fluid"> -->
			<div id="map_canvas"></div>
		<!-- </div> -->
	</div>
	<div class="right" style="float: left; width: 40%">
		<!-- <div class="container-fluid"> -->
		
                <h1>Hello 
                    <?php 
                    $donor = $this->session->userdata('emailDonor');
                    if(!empty($donor)) {
                        echo $donor['firstname'] . ' ' . $donor['insertion']. ' ' . $donor['lastname'];
                    } else {
                        echo 'World';
                    } ?>
                   </h1>
			<p class="lead">These are your pieces of adopted rainforest. Take a look:</p>
          <br>
          
                <?php 
                $i = 1;
                $donations = $this->session->userdata('donations');
                if(!empty($donations)) {
                    foreach ($donations as $donation) { ?>
                        <a class="coordstyling" href="/donation/show/<?= $donation['id'] ?>">
                          <?=$i . '.' ?>

                            <?=$donation['latitude'] . ", " ?>
                            <?=$donation['longitude'] ?>
                            </a>
                            <?php $i++; ?>
                            <br>
                <?php } ?>
                <?php } ?>
           
                <br>
                <br>
                <form action="/show" method="POST">
				<div class="sizing form-group">
				    <input type="text" class="form-control" id="email" name="email" placeholder="Your Email*">
				</div>
				<div class="find">
					<input class="button form-control" type="submit" name="find" value="Find">
				</div>		
            </form>
      

			<br>
			<br>

            <hr>
            <a href="https://work-with-nature.com/nl/">Take me to the Work With Nature homepage</a>
		<!-- </div>  end div class="container-fluid" -->


	</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq3kPPoW_ZkOIUKaFHTWhgeZXwi-k_8rg&callback=initialize"></script>
<?php
$this->load->view('maps/layout', [
        'content' => ob_get_clean(),
]);
?>




<!-- pass PHP data from controller to javascript -->
<?php
// var_dump($donation); die();
if (!empty($donation)) {
    echo "<script type='text/javascript'>";
    echo "var donation = " . json_encode($donation) . "\n";
    echo "</script>";
}

?>


<script type="text/javascript">
    function initialize() {
        spherical = google.maps.geometry.spherical;

        var point = new google.maps.LatLng(10.398671, -84.170756); 
        var myOptions = {
                zoom: 14,
              center: point,
              mapTypeId: 'satellite'
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);

            var lat = Number(donation['latitude']); 
            console.log('lat', lat);
            var lng = Number(donation['longitude']);
            var rectangle = new google.maps.Rectangle({
            strokeColor: '#00FF00',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#00FF00',
            fillOpacity: 0.35,
            map: map,
            bounds: {
              north: lat + .001,
              south: lat - .001,
              east: lng + .001,
              west: lng - .001
            }
        }); 
        
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
              north: lat + .001,
              south: lat - .001,
              east: lng + .001,
              west: lng - .001
            }
        });
    }

</script>



<div class="left">
		<div class="container-fluid">
			<div id="map_canvas"></div>
		</div>
	</div>
	<div class="right">
		<div class="container-fluid">
        <!-- show images -->
        <?=$donation['latitude'] ?> / <?=$donation['longitude'] ?>
        <p class="heading">PROTECTOR <br><?php
        $donor =$this->session->userdata('donor');
        if (!empty($donor)) {
            echo $donor['firstname'] . ' ' . $donor['insertion'] . ' ' . $donor['lastname'];
        }
        ?></p>
        <p class="heading"></p>SQUARE METERS<br><?=$donation['squaremeter']?></p>
        <p class="heading">ADOPTED A TOTAL OF <br><?=$donations['total'] ?>m<span style="text-transform: uppercase;">2</span></p>

                
			<br>
			<br>

			<hr>
		</div> <!-- end div class="container-fluid" -->


	</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq3kPPoW_ZkOIUKaFHTWhgeZXwi-k_8rg&callback=initialize"></script>
<?php
$this->load->view('maps/layout', [
        'content' => ob_get_clean(),
]);
?>



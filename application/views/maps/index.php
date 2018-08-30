<!-- function code in js -->
<script type="text/javascript">
    function initialize() {
        spherical = google.maps.geometry.spherical;

        var point = new google.maps.LatLng(10.398671, -84.170756); 
        var myOptions = {
                zoom: 10,
              center: point,
              mapTypeId: 'satellite'
        };
        map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
      }
</script>


<div class="left" style="float: left; width: 60%">
		<!-- <div class="container-fluid"> -->
			<div id="map_canvas"></div>
		<!-- </div> -->
	</div>
	<div class="right" style="float: left; width: 40%">
		<div class="container-fluid">
			<h1>Take a look at your piece of rainforest</h1>
			<p class="lead">Are you one of our heroes and adopted a square meter of Costa Rican rainforest? Fly to it and explore!</p>
		
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

			<form action="individualcontroller/donate_now" method="POST">
 				<div class="form-group">
				    <input type="submit" class="registration form-control" id="formGroupExampleInput" value="Adopt a square meter for only €2,50">
			  	</div>
		  	</form>
		</div> <!-- end div class="container-fluid" -->


	</div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq3kPPoW_ZkOIUKaFHTWhgeZXwi-k_8rg&callback=initialize"></script>
<script>
<?php

$this->load->view('maps/layout', [
        'content' => ob_get_clean(),
]);




<script type="text/javascript">
    function initialize() {
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

<div class="left" style="float: left; ">
		<!-- <div class="container-fluid"> -->
			<div id="map_canvas"></div>
		<!-- </div> -->
	</div>
	<div class="right" style="float: left;">
		<div class="container-fluid">
			<h1>Take a look at your piece of rainforest</h1>
			<p class="lead">Are you one of our heroes and adopted a square meter of Costa Rican rainforest? Fly to it and explore!</p>
		
			<form action="/show" method="POST">
				<div class="sizing form-group" style="text-align:center">
					<input type="text" class="form-control" id="email" name="email" placeholder="Your Email*">
				</div>		
				<br>
				<div class="find" >
					<input class="button form-control" type="submit" name="find" value="Find" >
				</div>

			</form>
			
			<br>
			<br>

			<hr>


	  				<!-- <div class="donatenow"> -->
						<a  class="btn button" role="button" href="/donate_now">Adopt a square meter for only €2,50</a>
					<!-- </div> -->
			</div>



		</div> <!-- end div class="container-fluid" -->


</div>
<?php
$this->load->view('maps/layout', [
        'content' => ob_get_clean(),
]);

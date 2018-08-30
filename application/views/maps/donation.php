
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


<!-- Image carrousel -->
<div class ="container-fluid">
        <div class="col-md-8 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div  style="height:600px;" id="map_canvas"></div>
                </div>
            </div>
            <a href="/show">Go Back!</a>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="row">
                <div id="myCarousel" style="height: 500px;" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                <div class="item active">
                    <img src="https://azfhakami.azureedge.net/~/media/17_images/late-availability/sherwood-forest-golden-oak.ashx?h=200&la=en&w=380" alt="Los Angeles" style="width:100%; height:  400px;">
                </div>

                <div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS93Y0FosA2ZBZT4NY98PbAI2-_7-omQj3Y0yaKL1T5BiIanUwhDg" alt="Chicago" style="width:100%; height:  400px;">
                </div>
                
                <div class="item">
                    <img src="https://foresteurope.org/wp-content/uploads/2016/09/103055DSC0172ssw2-1024x685.jpg" alt="New york" style="width:100%; height:  400px;">
                </div>
                <div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDhjlZhVJvg49blCd-WvSt0TQ4587JBxQ1poBLkyaGDjJf6wLf" alt="New york" style="width:100%; height:  400px;">
                </div>
                    <div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDhjlZhVJvg49blCd-WvSt0TQ4587JBxQ1poBLkyaGDjJf6wLf" alt="New york" style="width:100%; height:  400px;">
                </div>
                </div> <!-- closing div tag for carousel-inner-->

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

            </div>
        </div>

    <!-- donation -->
    <div class="row">

        
        <?=$donation['latitude'] ?> / <?=$donation['longitude'] ?>
        <p>PROTECTOR <br><?php
        $donor =$this->session->userdata('donor');
        if(!empty($donor)) {
            echo $donor['firstname'] . ' ' . $donor['insertion'] . ' ' . $donor['lastname'];
        }
        ?></p>
        <p>SQUARE METERS<br><?=$donation['squaremeter']?></p>
        <p>ADOPTED A TOTAL OF <br><?=$donations['total'] ?>m<span style="text-transform: uppercase;">2</span></p>
    </div>
</div>



        

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq3kPPoW_ZkOIUKaFHTWhgeZXwi-k_8rg&callback=initialize"></script>
<?php
$this->load->view('maps/layout', [
        'content' => ob_get_clean(),
]);
?>



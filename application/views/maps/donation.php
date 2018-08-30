
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
                zoom: 8,
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
              north: lat + .1,
              south: lat - .1,
              east: lng + .1,
              west: lng - .1
            }
        }); 
        
    }


</script>


<!-- Image carrousel -->
<!-- <div class ="container-fluid"> -->
        <div class="left" style="width: 60%; float:left">
            <!-- <div class="panel panel-default"> -->
                <!-- <div class="panel-body"> -->
                    <div id="map_canvas"></div>
                <!-- </div> -->
            <!-- </div> -->
         
        </div>

        <div class="donation" style="width: 40%; float:left">
        
        
            <div class="images" style="height: 400px" >
            <!-- <div class="row"> -->
                <div class="col-md-offset-1 col-md-10">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

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
                        <div class="item active" style="width:100%; height:  400px;">
                            <img src="https://i.imgur.com/53EcQEO.jpg" alt="Black Bird" style="width:100%; height:  400px;">
                        </div>
                        <div class="item" style="width:100%; height:  400px;">
                            <img src="https://i.imgur.com/MhzCiPU.jpg" alt="Toucan" style="width:100%; height:  400px;">
                        </div>
                        <div class="item" style="width:100%; height:  400px;">
                            <img src="https://i.imgur.com/oM8VBG1.jpg" alt="Raccoons" style="width:100%; height:  400px;">
                        </div>
                        <div class="item" style="width:100%; height:  400px;">
                            <img src="https://i.imgur.com/0yudIe3.jpg" alt="Toucan" style="width:100%; height:  400px;">
                        </div>
                        <div class="item" style="width:100%; height:  400px;">
                            <img src="https://i.imgur.com/E8erAJ2.jpg" alt="Monkeys" style="width:100%; height:  400px;">
                        </div>
                    </div> <!-- closing div tag for carousel-inner-->

                    <!-- Left and right controls -->
                    <a class="left carousel-control" style="height: 400px; width: 50px;" href="#myCarousel" data-slide="prev" role="button">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>

                    <a class="right carousel-control" style="height: 400px; width: 50px;" href="#myCarousel" data-slide="next" role="button">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div> <!-- div id mycarousel  -->
                <!--</div>  col md sm-->
                <!--</div>  div row -->
                </div><!-- end of div class images --> 
                </div> <!-- div right -->

    <!-- donation -->
    <br>
    <div class="row">

        
        <?= "<h1 style='text-decoration: underline'>" . $donation['latitude'] ?> / <?=$donation['longitude'] . "</h1>" ?>
        <h2>Protector</h2><h3><?php
        $donor =$this->session->userdata('donor');
        if(!empty($donor)) {
            echo $donor['firstname'] . ' ' . $donor['insertion'] . ' ' . $donor['lastname'];
        }
        ?></h3><hr>
        <h2>Square meters</h2><h3><?=$donation['squaremeter']?> <span>&nbsp;m<sup>2</sup></span></h3>
        <hr>
        <h2>Adopted a total of </h2><h3><?=$donations['total'] ?>&nbsp;m<sup>2</sup></h3>
    </div>
<br>
<br>
<br>
       <a href="/show" style="font-size: 25px">Go Back!</a>
</div>



        

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq3kPPoW_ZkOIUKaFHTWhgeZXwi-k_8rg&callback=initialize"></script>
<?php
$this->load->view('maps/layout', [
        'content' => ob_get_clean(),
]);
?>



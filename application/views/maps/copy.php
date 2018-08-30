<!-- function code in js -->
<script type="text/javascript">
    var spherical;
    var north, east, west, south;
    var coordsContainer = [];

    function initialize() {
        spherical = google.maps.geometry.spherical;

        var point = new google.maps.LatLng(10.398671, -84.170756); 
        var myOptions = {
                zoom: 10,
              center: point,
              mapTypeId: 'satellite'
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
   
        createMarker(map, point, "point");
       
        north = spherical.computeOffset(point, 5000, 0);
        createMarker(map, north, "north"); 
         coordsContainer.push({lat:north.lat(), lng:north.lng()})
        
        west  = spherical.computeOffset(point, 5000, -90);
        createMarker(map, west, "west");  
         coordsContainer.push({lat:west.lat(), lng:west.lng()})
        
        south = spherical.computeOffset(point, 5000, 180);
        createMarker(map, south, "south");  
         coordsContainer.push({lat:south.lat(), lng:south.lng()})


        east  = spherical.computeOffset(point, 5000, 90);
        createMarker(map, east, "east");  
         coordsContainer.push({lat:east.lat(), lng:east.lng()})

// draw the shape
var shapes = new google.maps.Polygon({
        paths: coordsContainer,
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.35
    });
   shapes.setMap(map); 
      }
        function createMarker(map, point, title) {
         return new google.maps.Marker({
            map: map,
            position: point,
            title: title
        });
    } 

// only to test if get the right coordinates     
    function test() {
    alert("north=" + north.lat());
    alert('east='+east);
    }       
</script>



<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6" id="map_canvas">
           <!-- display the map -->
        </div>
        <div class="col-lg-6" id="items">
            <!-- display the donation items -->
            <h1>Take a look at your piece of rainforest</h1>
            <p>Are you one of our heroes and adopted a square meter of costa rican rainforest? Fly to it and explore!</p>
            <form action="MapController/show" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" value="Enter your email">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">FIND</button>
                    </span>
                </div><!-- /input-group -->
            </form>
        </div>
    </div>
</div>

<button onclick="test();">Test</button>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq3kPPoW_ZkOIUKaFHTWhgeZXwi-k_8rg&callback=initialize"></script>
<script>
<?php

$this->load->view('maps/layout', [
        'content' => ob_get_clean(),
]);




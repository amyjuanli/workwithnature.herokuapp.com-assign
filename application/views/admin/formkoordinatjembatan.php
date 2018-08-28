<div class ="container-fluid">
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <div class="panel panel-default">
               <div class="panel-heading">
                   <h3 class="panel-title"><span class="glyphicon glypicon-globe"></span>Peta</h3>
                </div>
                <div class="panel-body">
                    <div  style="height:600px;" id="map-canvas"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glypicon-globe"></span>Form Marker</h3>
                </div>
                <div class="panel-body">
                    <form action="koordinatjembatan/storeCoords" method="post">
                        <div class="row">
                              <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="latitude">Latitude</label>
                                        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="">
                                  </div>
                              </div>
                            
                              <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="longitude">Longitude</label>
                                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="">
                                  </div>
                              </div>
                              
                                    <div class="form-group">
                                        <label for="jembatan_id">User Name </label><br>
                                        <input type="text" name="name" value="Name">
                                        
                                  </div>
                                  <div class="form-group">
                                        
                                      <button class="btn btn-primary" id="simpan" name="simpan">Send</button>
                                  </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq3kPPoW_ZkOIUKaFHTWhgeZXwi-k_8rg&callback=myMap"></script>
<script>
    var map;
    var markers = [];
    
    function initialize(){
        var mapOption = {
            zoom: 14,
            mapTypeId: 'satellite',
            center: new google.maps.LatLng(10.006919, -83.355426),
            };
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOption);
        
         google.maps.event.addListener(map, 'rightclick', addLating);
         google.maps.event.addListener(map, 'rightclick', function(event){
             
         var lat = event.latLng.lat();
         var lng = event.latLng.lng();
         $('#latitude').val(lat);
         $('#longitude').val(lng);
        });
    }
    
    function addLating(event) {
          var lat = event.latLng.lat();
          var lng = event.latLng.lng();
          var rectangle = new google.maps.Rectangle({
            strokeColor: '#00FF00',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#00FF00',
            fillOpacity: 0.35,
            map: map,
            bounds: {
              north: lat + .0000001,
              south: lat - .0000001,
              east: lng + .0000001,
              west: lng - .0000001
            }
        });
    }

    // function addLating(event){  # original function myo
    //     var marker = new google.maps.Marker({
    //         position: event.latLng,
    //         title:'simple GIS',
    //         map: map
    //     });
    //     markers.push(marker);
    // }
    google.maps.event.addDomListener(window,'load',initialize);

</script>




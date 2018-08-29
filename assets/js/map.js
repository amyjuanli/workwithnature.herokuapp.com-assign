// get coordinates
function getCoordinatesByDistance(meters) {
    var coords = [{lat: 10.398671, lng: -84.170756}];
    var initLat =coords[0]['lat'];
    var initLng = coords[0]['lng'];
    var earth = 6378.137;  //radius of the earth in kilometer

    coords.push(getCoordinate(initLat, initLng, 0, meters, earth));
    coords.push(getCoordinate(initLat, initLng, 90, meters, earth));
    coords.push(getCoordinate(initLat, initLng, 180, meters, earth));
    coords.push(getCoordinate(initLat, initLng, -90, meters, earth));
     
    return coords;
}

function getCoordinate(initLat, initLng,deg, meters, earth) {
    var m = (1 / ((2 * Math.PI / deg) * earth)) / 1000;  //1 meter in degree
    return {
        lat: initLat + meters * m,
        lng: initLng + (meters * m) / Math.cos(initLat * (Math.PI / 180)), 
    } 
}



function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
    var R = 6371; // Radius of the earth in km
    var dLat = deg2rad(lat2-lat1);  // deg2rad below
    var dLon = deg2rad(lon2-lon1); 
    var a = 
        Math.sin(dLat/2) * Math.sin(dLat/2) +
        Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
        Math.sin(dLon/2) * Math.sin(dLon/2)
        ; 
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
    var d = R * c; // Distance in km
    return d;
    }

    function deg2rad(deg) {
    return deg * (Math.PI/180)
    }


    function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        // center: {lat: 39.833, lng: -98.583},   
        center: {lat: 10.398671, lng: -84.170756},
        zoom: 100,
        mapTypeId: 'terrain'
    });

        // Define the LatLng coordinates for the polygon's path.
    var triangleCoords = [
    {lat: 10.398671, lng: -84.170756},
    {lat: 18.466, lng: -66.118},
    {lat: 32.321, lng: -64.757},
    {lat: 25.774, lng: -80.190}
    ];

    // Construct the polygon.
    var bermudaTriangle = new google.maps.Polygon({
    paths: triangleCoords,
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FF0000',
    fillOpacity: 0.35
    });
    bermudaTriangle.setMap(map);                        
}



var spherical;
var north, east, west, south;

function initialize() {
    spherical = google.maps.geometry.spherical;

    var point = new google.maps.LatLng(55.623151, 8.48215);
    var options = {
        zoom: 10,
        center: point,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"),
        options);

    createMarker(map, point, "point");

    north = spherical.computeOffset(point, 5000, 0);
    createMarker(map, north, "north");

    west = spherical.computeOffset(point, 5000, -90);
    createMarker(map, west, "west");

    south = spherical.computeOffset(point, 5000, 180);
    createMarker(map, south, "south");

    east = spherical.computeOffset(point, 5000, 90);
    createMarker(map, east, "east");
}

function createMarker(map, point, title) {
    return new google.maps.Marker({
        map: map,
        position: point,
        title: title
    });
}

function test() {
    alert("north=" + north);
    alert("west=" + west);
    alert("south=" + south);
    alert("east=" + east);
}
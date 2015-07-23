<!DOCTYPE html>
<html>
<head>
	<title>Map Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<style type="text/css">
	#map1 {
		width: 400px;
		height: 400px;
	}
	</style>
</head>
<body>

<div id="map1"></div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- <script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script> -->

<script type="text/javascript">

function initialize() {
	var mapProp = {
		center:new google.maps.LatLng(51.508742, -0.120850),
		zoom: 7,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(document.getElementById("map1"), mapProp);
};

// google.maps.event.addDomListener(window, 'load', initialize);


function loadScript() {
  var script = document.createElement("script");
  script.src = "http://maps.googleapis.com/maps/api/js?callback=initialize";
  document.body.appendChild(script);
}

window.onload = loadScript;

function searchLocations() {
  var address = document.getElementById("addressInput").value;
  var geocoder = new google.maps.Geocoder();
  geocoder.geocode({address: address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      searchLocationsNear(results[0].geometry.location);
    } else {
      alert(address + ' not found');
    }
  });
}



</script>
</body>
</html>
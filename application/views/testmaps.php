
<!DOCTYPE html>
<html>
<head>
	<title>Test Map</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<style type="text/css">
		

	</style>
</head>
<body>

<div class="container">
	<div class="row">
		<form method="get" action="http://maps.googleapis.com/maps/api/geocode/json" id="address_submit">
			<input type="text" id="address" placeholder="Address...">
			<input type="submit" class="btn btn-success" value="Search Address">
 		</form>

	</div>
	<div class="well">
		<p>This is your address and coordinates:</p>
		<p>Address: <span id="address"></span></p>
		<p>Latitute: <span id="lat"></span></p>
		<p>Longitude: <span id="long"></span></p>
	</div>

</div>
<br>
<p class="text-center">&copy; JAMM, Inc.</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<script type="text/javascript">
	$(document).ready(function() {

		$("form").submit(function() { 
			$.get("http://maps.googleapis.com/maps/api/geocode/json" ,
			function(res) {
				console.log($(this).serialize())
				//console.log("a:" + JSON.stringify(res, null, 4));
				$("#address").html(res.results[0].formatted_address);
				$("#lat").html(res.results[0].geometry.location.lat);
				$("#long").html(res.results[0].geometry.location.lng);
			}, "json");
			return false;
		});


	});


</script>
</body>
</html>
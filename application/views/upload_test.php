<!DOCTYPE html>
<html>
<head>
	<title>Upload Test</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<style type="text/css">
		
	</style>
<?php
	if ($error) {
		var_dump($error);
	}
?>

</head>
<body>
<br>
<br>
<br>
<div class="container">

<form method="post" action="uploads/do_upload" enctype="multipart/form-data">
	<input type="file" name="userfile" size="20" />

	<br /><br />

	<?php echo form_open_multipart('uploads/do_upload');?>

	<input type="submit" value="upload" name="submit">

</form>

</div>


<br>
<p class="text-center">&copy; JAMM, Inc.</p>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
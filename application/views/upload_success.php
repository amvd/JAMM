<!DOCTYPE html>
<html>
<head>
	<title>Upload Test</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<style type="text/css">
		#profilepic {
			max-height: 700px;
			max-width: 700px;
		}
	</style>
	
</head>
<body>
<br>
<br>
<br>
<div class="container">


<p>Your file was successfully uploaded.</p>

<!-- <ul>
<?php
	foreach ($upload_data as $item => $value) {
?>
	<li><?php echo $item;?>: <?php echo $value;?></li>
<?php
	}; ?>
</ul>  -->

<h1>Your New Profile Picture</h1>

<img id="profilepic" src="/assets/images/uploads/<?= $upload_data["file_name"]; ?>" alt="uploaded image">

<p><?php echo anchor('/uploads/index', 'Upload Another File!'); ?></p>

</div>



<br>
<p class="text-center">&copy; JAMM, Inc.</p>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
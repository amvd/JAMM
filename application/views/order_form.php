
<html>
<head>
	<title>Order</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<style type="text/css">
	img{
		display: inline-block;
		vertical-align: top;
		width: 50px;
		height: 50px;
	}
	h3{
		display: inline-block;
		vertical-align: top;
		/*font-style: italic;*/
	}
	.page-header{
		background-color: #FFFFCC;
	}
	p{
		font-weight: bold;
		font-style: italic;
	}
	</style>
</head>
	<body>
		<div class="container">
			<div class="page-header">
				<img src="/assets/JAMM_Logo.png">
    			<h3>Rock your tastebuds</h3>
			</div>
			<h3>Order Details:</h3>
			<table class="table table-striped">
				<tr>
					<td> </td>
					<td>Food Item</td>
					<td>Chef</td>
					<td>Size</td>
					<td>Quantity</td>
					<td>Pickup Date</td>
					<td>Price</td>
				</tr>
				<tr>
					<td><img src="http://goodtoknow.media.ipcdigital.co.uk/111/00000cb9d/9159/Red-Thai-chicken-bean-and-bamboo-curry.jpg" alt="FoodLogo"> </td>
					<td>Fried rice</td>
					<td>Jennifer</td>
					<td>M</td>
					<td>1</td>
					<td>07/22/2015</td>
					<td>$7.99</td>
				</tr>
				<tr>
					<td><img src="http://guiltykitchen.com/images/Red%20Thai%20Curry%207.jpg" alt="FoodLogo"> </td>
					<td>Fried plantain</td>
					<td>Jennifer</td>
					<td>M</td>
					<td>1</td>
					<td>07/22/2015</td>
					<td>$7.99</td>
				</tr>
				<td><img src="http://goodtoknow.media.ipcdigital.co.uk/111/00000cb9d/9159/Red-Thai-chicken-bean-and-bamboo-curry.jpg" alt="FoodLogo"> </td>
					<td>Fried rice</td>
					<td>Jennifer</td>
					<td>M</td>
					<td>1</td>
					<td>07/22/2015</td>
					<td>$7.99</td>
			</table>
			<h2>Customer Information</h2>
			<form class="form-horizontal" role="form">
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="first_name">First Name:</label>
			      <div class="col-sm-4">
			        <input type="text" class="form-control" id="first_name" placeholder="Enter first name... ">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="last_name">Last Name:</label>
			      <div class="col-sm-4">
			        <input type="text" class="form-control" id="last_name" placeholder="Enter last name... ">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="address1">Address:</label>
			      <div class="col-sm-4">
			        <input type="text" class="form-control" id="address1" placeholder="Enter address... ">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="address2">Address2:</label>
			      <div class="col-sm-4">
			        <input type="text" class="form-control" id="address2" placeholder="(Optional) ">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="city">City:</label>
			      <div class="col-sm-4">
			        <input type="text" class="form-control" id="city" placeholder="Enter City... ">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="zip">Zip:</label>
			      <div class="col-sm-4">
			        <input type="text" class="form-control" id="zip" placeholder="Enter ZIP... ">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="email">Email:</label>
			      <div class="col-sm-4">
			        <input type="email" class="form-control" id="email" placeholder="Enter email... ">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="phone">Phone:</label>
			      <div class="col-sm-4">
			        <input type="text" class="form-control" id="phone" placeholder="Enter phone... ">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="cc">Credit Card Number:</label>
			      <div class="col-sm-2">
			        <input type="text" class="form-control" id="cc" placeholder="Enter Credit Card number ">
			      </div>
			      
			      <div class="form-group">
			      <label class="control-label col-sm-1" for="security_code">CVV Code:</label>
			      <div class="col-sm-1">
			        <input type="text" class="form-control" id="security_code" placeholder="CVV no">
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="btn btn-primary">Place my order</button>
			      </div>
			    </div>
		    </form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>
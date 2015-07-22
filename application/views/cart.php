
<html>
<head>
	<title>Cart</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
	table img{
		display: inline-block;
		vertical-align: top;
		margin-right: 10px;
		width: 50px;
		height: 50px;
		border: 1 px solid gray;
		margin: 1px;
	}
	h3{
		display: inline-block;
		vertical-align: top;
		font-style: italic;
		color: red;
	}
	.page-header{
		background-color: #FFFFCC;
	}
	p{
		font-weight: bold;
		/*text-align: right;*/
		/*font-style: italic;*/
	}
	#instructions{
		display: inline-block;
		vertical-align: top;
	}
	#checkout{
		text-align: right;
		display: inline-block;
		vertical-align: top;
	}

	</style>
</head>
	<body>
	<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
	    	<div class="navbar-header">
	      		<a class="navbar-brand" href="/">
	        		<img alt="logo" src="/assets/images/logo.png" style="height: 150%">
	      		</a>
	    	</div>
	  	<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
		    	<input type="text" class="form-control" name="city" placeholder="City">
		  	</div>
		  	<div class="form-group">
		    	<input type="text" class="form-control" name="cuisine" placeholder="Cuisine">
		  	</div>
		  	<div class="form-group">
		    	<input type="text" class="form-control" name="chef" placeholder="Chef Name">
		  	</div>
		  	<button type="submit" class="btn btn-success">Search</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="user_profile">User Account</a></li>
			<li><a href="chef_profile">Chef Account</a></li>
        	<li><a href="login_reg">Login/Register</a></li>
        </ul>
		</div>
	</nav>
</div>

		<div class="container">
			
			<p>Your Cart:</p>
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
			</table>
			<div>
			<form role = "form">
				<div id="instructions" class="col-sm-4">
					  <label class="control-label ">Special instructions for the chef...</label>
				      <textarea class="form-control" rows = "3" id="instructions_text">
				      </textarea>
				      </div>
				
				<div id = "checkout" class="col-sm-8">
					<p>Subtotal (2 items): $15.98</p>
					<input type="submit" class="btn btn-warning" value="I'm ready to check out!">
				</div>
			</form>		
			</div>			
		</div>
	</body>
</html>
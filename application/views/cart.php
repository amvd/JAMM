
<html>
<head>
	<title>Cart</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
	img{
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
			<div class="page-header">
				<img src="/assets/JAMM_Logo.png">
    			<h3>Rock your tastebuds</h3>      
			</div>
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
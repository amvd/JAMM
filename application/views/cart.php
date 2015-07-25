<?php //var_dump($user_cart); die(); ?>
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
<?php
                if ($this->session->userdata('user_type') == "user") { ?>
                    <li><a href="/foods/display_cart/"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> (<?= $cart_qty['qty'] ?>)</a></li>
                    <li><a href="/users/user_profile/<?= $this->session->userdata('id') ?>">User Account</a></li>
                    <li><a href="/logins/logout">Logout</a></li>
<?php           } 
                elseif ($this->session->userdata('user_type') == "chef") { ?>
                    <li><a href=""><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> (<?= $cart_qty['qty'] ?>)</a></li>
                    <li><a href="/chefs/chef_profile/<?= $this->session->userdata('id') ?>">Chef Account</a></li> 
                    <li><a href="/logins/logout">Logout</a></li> 
<?php           } 
                else { ?>
                    <li><a href="/logins/login_page">Login/Register</a></li>
<?php           } ?>
                </ul>
        </div>
    </nav>
</div>

		<div class="container">
			
			<p>Your Cart:</p>
			<table class="table table-striped">

				
<?php 				foreach ($user_cart as  $value) {
?>					<form method="post" action="/food/delete">
					<tr>
						<input type="hidden" name="cart_item" value="<?= $value['cart.id']; ?>">
						<td><img src="http://goodtoknow.media.ipcdigital.co.uk/111/00000cb9d/9159/Red-Thai-chicken-bean-and-bamboo-curry.jpg" alt="FoodLogo"> </td>
						<td><?= $value['name']; ?></td>
						<td><?= $value['first_name']; ?></td>
						<td> 
							<select>	
									<option value="small">Small</option>
	  								<option value="medium">Medium</option>
	  								<option value="medium">Large</option>
							</select> 
						</td>
						<td><input type="number" id = "quantity_spinner" value = "1" name="quantity" min="1"></td>
						<td></td>
						<td>$7.99
						<button class="btn btn-primary">
						<a href="/main/show_product/<?= $value['cart.id']; ?>" name="show_link" value="<?= $value['cart.id']; ?>">Update</a>
						</button>
						<button type="submit" class="btn btn-danger">	<span class="glyphicon glyphicon-trash">	</span></button>
						</td>
					</tr>
					</form>	
<?php 				}
?>								
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
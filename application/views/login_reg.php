
<!DOCTYPE html>
<html>
<head>
	<title>Login/Registration</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<style type="text/css">
		.login-background {
			background: url(/kitchen.jpg) no-repeat center center;
			background-size: cover;
			padding: 200px 0;
		}

		.login-container {
			background-color: rgba(245, 245, 245, 0.8);
			padding: margin;
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


<div class="login-background">
	<div class="container">
		<div class="jumbotron login-container">
			<div class="row">
				<div class="col-md-5">
					<form action="/logins/login" method="post">
						<h1>Login</h1>
						<p><?= $this->session->flashdata('error'); ?></p>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
						</div>
						<div class="form-group">
							<label for="inputPassword">Password</label>
							<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
						</div>

						<div class="checkbox">
							<label><input type="checkbox" name='chef'> Login As Chef</label>
						</div>
						<button type="submit" class="button btn-success">Login</button>
					</form><!--LOGIN-->
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-5">
					<form action="/logins/registration" method='post'>
						<h1>Register</h1>
						<?= $this->session->flashdata('errors'); ?>
						<div class="form-group">
							<label for="inputFirstName">First Name</label>
							<input type="text" class="form-control" id="inputFirstName" placeholder="First Name" name="first_name">
						</div>
						<div class="form-group">
							<label for="inputLastName">Last Name</label>
							<input type="text" class="form-control" id="inputLastName" placeholder="Last Name" name="last_name">
						</div>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
						</div>
						<div class="form-group">
							<label for="inputPassword">Password</label>
							<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
						</div>
						<div class="form-group">
							<label for="confirmPassword">Confirm Password</label>
							<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="confirm_pw">
						</div>
						<div class="form-group">
							<label for="phoneNumber">Phone Number</label>
							<input type="text" class="form-control" id="phoneNumber" placeholder="### ### ####" name="phone">
						</div>
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" class="form-control" id="address" placeholder="123 Delicious Ave" name="address">
						</div>
						<div class="form-group">
							<label for="city">City</label>
							<input type="text" class="form-control" id="city" placeholder="San Jose" name="city">
						</div>
						<div class="form-group">
							<label for="state">State</label>
							<select class="form-control" id="state" name="state">
								<option>CA</option>
							</select>
						</div>
						<div class="form-group">
							<label for="zipCode">Zip Code</label>
							<input type="text" class="form-control" id="zipCode" placeholder="95616" name="zip_code">
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name='chef'> Register As Chef</label>
						</div>
						<button type="submit" class="button btn-success">Register</button>
					</form><!--REGISTER-->
				</div>


			</div>
		</div>
	</div>
</div>
<br>
<p class="text-center">&copy; JAMM, Inc.</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
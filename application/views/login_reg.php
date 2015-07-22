
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
			background: url(assets/images/kitchen.jpg) no-repeat center center;
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
	      		<a class="navbar-brand" href="#">
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


<div class="login-background">
	<div class="container">
		<div class="jumbotron login-container">
			<div class="row">
				<div class="col-md-5">
					<form action="/foods/login" method="post">
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
					<form action="/foods/registration" method='post'>
						<h1>Register</h1>
						<?= $this->session->flashdata('errors'); ?>
						<div class="form-group">
							<label for="inputFirstName">First Name</label>
							<input type="text" class="form-control" id="inputFirstName" placeholder="First Name" name="firstname">
						</div>
						<div class="form-group">
							<label for="inputLastName">Last Name</label>
							<input type="text" class="form-control" id="inputLastName" placeholder="Last Name" name="lastname">
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
							<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="confirm">
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

<html>
<head>
	<title>Review</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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
                    <li><a href="/users/user_profile/<?= $session_data['id'] ?>">User Account</a></li>
                    <li><a href="/logins/logout">Logout</a></li>
<?php           } 
                  elseif ($this->session->userdata('user_type') == "chef") { ?>
                    <li><a href="/chefs/chef_profile/<?= $session_data['id'] ?>">Chef Account</a></li> 
                    <li><a href="/logins/logout">Logout</a></li> 
<?php           
                } else {
?>
                    <li><a href="/logins/login_page">Login/Register</a></li>
<?php
                }
?>
                </ul>
		</div>
	</nav>
</div>

		<div class="container">
			
			
			<h2>Welcome, Mike!</h2>
			<h3>We're glad you decided to leave a review for your favorite chef. Your fellow JAMMers will thank you!</h3>
			<form class="form-horizontal" role="form">
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="rating">Your Rating:</label>
			      <div class="col-sm-4">
			        <input type="text" class="form-control" id="rating" placeholder="Rating... ">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="review_text">Your Review:</label>
			      <div class="col-sm-4">
			      <textarea class="form-control" rows = "5" id="review_text" placeholder="Enter review text... ">
			      </textarea>
			      </div>
			    </div>
			   
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="btn btn-primary">Submit Review</button>
			      </div>
			    </div>
		    </form>
		</div>
	</body>
</html>
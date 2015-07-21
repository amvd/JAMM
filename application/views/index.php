<!DOCTYPE html>
<html>
<head>
	<title>JAMM</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<style type="text/css">
		.main-jumbo {
			background-color: rgba(245, 245, 245, 0.8);
			
		}

		.jumbo-container {
			margin-top: 150px;
		}

/*		.intro-header {
			
			background: url(background.jpg) no-repeat center center;
			background-size: cover;
			max-width: 100%;
			height: auto;
			padding-bottom: 200px;
		}*/

		.navbar-brand img {
			height: 150%;
		}

		#nav { 
		    /*background: url(images/intro.png) 50% 0 fixed; */
		    height: auto;  
		    margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    /*padding: 100px 0;*/
		}
		#main { 
		    background: url(assets/images/background.jpg) 50% 0 fixed; 
/*		    height: auto;  */
		    margin: 0 auto; 
/*		    width: 100%; */
			background-size: cover;
		    position: relative; 
		    /*box-shadow: 0 0 50px rgba(0,0,0,0.8);*/
		    padding-top: 100px;
		    padding-bottom: 200px;
		}
		#rest { 
		   /* background: url(images/about.png) 50% 0 fixed; */
		    height: auto;
		    margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    /*padding: 100px 0;*/
		    color: #fff;
		}

	</style>
</head>
<body>

<div class="intro-header">
<section id="nav" data-speed="6" data-type="background">
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
	    	<div class="navbar-header">
	      		<a class="navbar-brand" href="#">
	        		<img alt="logo" src="assets/images/logo.png">
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
</section>
<section id="main" data-speed="5" data-type="background">
	<div class="container jumbo-container">
		<div class="jumbotron row  main-jumbo">
			<h1>JAMM || <small>Rock Your Tastebuds</small></h1>
			<br><br>
			<form class="mainform form-inline">
				<div class="form-group">
					<h3>Search By:</h3>
				</div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="City" aria-describedby="basic-addon1" name="city">
				</div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="Cuisine" aria-describedby="basic-addon2" name="cuisine">
				</div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="Chef Name" aria-describedby="basic-addon3" name="chef">
				</div>
				<div class="form-group">
					<button type="submit" value="Search" class="btn btn-success">Submit</button>
				</div>
				
			</form>
		</div>
	</div>
</div>
</section>

<section id="rest" data-speed="2" data-type="background">
<div class="container">
	<hr class="section-heading-spacer">
	<div class="row">
		<div class="col-md-4">
			<h2>Hungry?</h2>
			<p>JAMM hooks you up with the best home-cooked meals in your region, city, and even in your neighborhood.</p>
		</div>
		<div class="col-md-4">
			<h2>Do you love to cook?</h2>
			<p>Let JAMM find customers for your favorite hobby, or rather, let them find you.</p>
		</div>
		<div class="col-md-4">
			<h2>Know any good chefs?</h2>
			<p>Give them a chance to share their talents with the world! Take them to our website.</p>
		</div>
		<div class="clearfix"></div>
	</div>
	<hr class="section-heading-spacer">
</div>

<div class="container">
	<hr class="section-heading-spacer">
	<h1>Search a City Near You</h1>
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="assets/images/sanjose.jpg" alt="San Jose">
				<div class="caption">
					<h3>San Jose</h3>
					<p>San Jose is known for all the cats and dogs it cooks. Yummy cats and dogs. Yum ipsum custodes cow burgers. Yes all the cats and dogs are 100% organic. Yes. Yes.</p>
					<p><a href="#" class="btn btn-success">Check out San Jose</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="assets/images/losangeles.jpg" alt="Los Angeles">
				<div class="caption">
					<h3>Los Angeles</h3>
					<p>Los Angeles cooks no human flesh. None. Human flesh is the last thing anyone in Los Angeles will serve you, ever. Unless possibly if you ask very nicely.</p>
					<p><a href="#" class="btn btn-success">Check out Los Angeles</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="assets/images/sanfrancisco.jpg" alt="San Francisco">
				<div class="caption">
					<h3>San Francisco</h3>
					<p>Our chefs in San Francisco only eat Benedictine monks, so you have nothing to worry about. You're perfectly safe here, so feel free to stop by for a visit. (They know. Run.)</p>
					<p><a href="#" class="btn btn-success">Check out San Francisco</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<hr class="section-heading-spacer">
	<h1>Find Your Favorite Cuisine</h1>
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="assets/images/japanese.jpg" alt="Japanese Cuisine">
				<div class="caption">
					<h3>Japanese Cuisine</h3>
					<p>Fish have no feelings, and soon, neither will you.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="assets/images/italian.jpg" alt="Italian Cuisine">
				<div class="caption">
					<h3>Italian Cuisine</h3>
					<p>If you marry my daughter, we will celebrate by eating this goat.</p>
					<p>If you marry my goat, we will celebrate by eating my daughter.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="assets/images/asian.jpg" alt="Asian Cuisine">
				<div class="caption">
					<h3>Asian Cuisine</h3>
					<p>To respect our culture, you must eat our culture.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<hr class="section-heading-spacer">
	<h1>Find the Best Chefs Near You</h1>
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="assets/images/carly.jpg" alt="Chef Carly">
				<div class="caption">
					<h3>Carly Stanberg</h3>
					<p>"If all my strawberries aren't perfectly aligned, I will commit seppuku."</p>
					<p><a href="#" class="btn btn-success">See If Carly's Bluffing!</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="assets/images/steven.jpg" alt="Chef Steven">
				<div class="caption">
					<h3>Steven Miller</h3>
					<p>"Eat my food or I will eat you."</p>
					<p><a href="#" class="btn btn-success">Try to Eat Steven First!</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="assets/images/senpai.jpg" alt="Chef Senpai">
				<div class="caption">
					<h3>Senpai San</h3>
					<p>"If you notice my food, maybe I will notice you."</p>
					<p><a href="#" class="btn btn-success">Prove Your Worth to Senpai!</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<p class="text-center">&copy; JAMM, Inc.</p>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
   // cache the window object
   $window = $(window);
 
   $('section[data-type="background"]').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = $(this);
                     
      $(window).scroll(function() {
        // HTML5 proves useful for helping with creating JS functions!
        // also, negative value because we're scrolling upwards                             
        var yPos = -($window.scrollTop() / $scroll.data('speed')); 
         
        // background position
        var coords = '50% '+ yPos + 'px';
 
        // move the background
        $scroll.css({ backgroundPosition: coords });    
      }); // end window scroll
   });  // end section function
}); // close out script
</script>
</body>
</html>
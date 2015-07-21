
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
			<div class="page-header">
				<img src="/assets/JAMM_Logo.png">
    			<h3>Rock your tastebuds</h3>
			</div>
			
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
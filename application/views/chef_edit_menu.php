<!DOCTYPE html>
<html>
<head>
	<title>Chef Profile Update Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
    h1{
        margin: 30px 0;
        padding: 0 200px 15px 0;
        border-bottom: 1px solid #E5E5E5;
    }
	.bs-example{
    	margin: 20px;
    }

    #back_button
    {
        width: 140px;
    }
</style>
</head>
<body>

<div class="bs-example">
    <h1>Edit Your Menu</h1>
    <form class="form-horizontal" action="/chefs/chef_add_menu" method="post">

<?php
        for ($i=1; $i < 6; $i++) { 
            # code...
?>
        <div class="form-group">
            <label class="control-label col-xs-3">Menu #<?= $i ?>:</label>
            <div class="col-xs-9">
                <input name="menu<?= $i?>_name" type="text" class="form-control" placeholder="Name of Dish">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3">Cuisine:</label>
                <div class="col-xs-9">
                    <select name="menu<?= $i ?>_cuisine">
                        <option value="1">American</option>
                        <option value="2">Chinese</option>
                        <option value="3">Korean</option>
                        <option value="4">Japanese</option>
                        <option value="5">Thai</option>
                        <option value="6">Combodian</option>
                    </select>
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="postalAddress">Description</label>
            <div class="col-xs-9">
                <textarea rows="4" class="form-control" id="postalAddress" placeholder="Description of Dish" name="menu<?= $i ?>_description"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="postalAddress">Select image for Menu #<?= $i ?>:</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <br><br>
<?php
         }
?>
        
        <div class="form-group">
            <label class="control-label col-xs-3" for="postalAddress">Select Your Image Banner for Your Menu image to upload:</label>
    		<input type="file" name="fileToUpload" id="fileToUpload">
		</div>

        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <a href="/chefs/chef_grab_menu">
                <input type="button" class="btn btn-danger" value="Back" id="back_button">
                </a>
            </div>
        </div>
    </form>
</div>


</body>
</html>
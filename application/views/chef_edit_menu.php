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
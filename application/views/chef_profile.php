<?php //var_dump($chef);

    // var_dump($this->session->userdata('bio'));
// var_dump($chef['id']);

// var_dump($this->session->userdata('id'));
// var_dump($this->session->all_userdata());
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $chef['first_name']?>'s Profile</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <style type="text/css">
        .pagecontent {
            margin-top: 50px;
        }

        #edit_button
        {
            color: white;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
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

    <!-- Page Content -->
    <div class="container pagecontent">

        <!-- Portfolio Item Heading -->
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><?= $chef['first_name']?>'s Kitchen
                <form action="/">
                    <!-- <input type="button"> -->
                </form>
                    <small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-3">
                <img class="img-responsive" src="http://placehold.it/300x300" alt="">
            </div>

            <div class="col-md-9">
                <h3>Chef's Bio</h3>
<?php       if ($chef['id']== $this->session->userdata('id')) {
?>              
                <p><button type="submit" class="btn-xs btn-primary "><a href="/chefs/chef_edit_profile/<?=$chef['id'] ?>" id="edit_button">Edit Profile</a> </button></p>
<?php       }
?>                
                <p><?= $chef['bio'] ?></p>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">
	        <div class="col-lg-12">
	                <h3 class="page-header">
                        <a href="/chefs/chef_grab_menu">Menu of the Week </a>
                    </h3>
            </div>
	            <div class="col-md-12">
	                <a href="#">
	                    <img class="img-responsive" src="http://placehold.it/1200x400" alt="">
	                </a>
	            </div>

        </div>

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header"><a href="/chefs/get_chef_orders_this_week">Recent Customer Orders</a></h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header"><a href="/Chefs/chef_reviews_this_week">Recent Customer Reviews</a></h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
                <div class="ratings">
	                <p>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star-empty"></span>
	                </p>
                </div>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
                <div class="ratings">
	                <p>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star-empty"></span>
	                </p>
                </div>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
                <div class="ratings">
	                <p>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star-empty"></span>
	                </p>
                </div>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
                <div class="ratings">
	                <p>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star"></span>
	                    <span class="glyphicon glyphicon-star-empty"></span>
	                </p>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>

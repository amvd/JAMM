<?php // var_dump($this->session->all_userdata()); 
      $session_data = $this->session->all_userdata();
      // var_dump($session_data);
      // var_dump($user);
      ?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $session_data['first_name'] ?>'s Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    #edit_button
    {
        color: white;
    }
    </style>
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
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="
            </div>
        </div>
        <!-- /.row -->page-header"><?= $user['first_name'] . " " . $user['last_name'] ?>
                    <small></small>
                </h1>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-3">
                <img class="img-responsive" src="/assets/images/pics/<?= $user['profile_pic_url']; ?>" alt="">
            </div>

            <div class="col-md-9">
                <h3>About <?= $user['first_name'] ?></h3>
                <p><button type="submit" class="btn-xs btn-primary "><a href="/users/user_edit_profile/<?= $user['id']; ?>" id="edit_button">Edit Profile</a> </button></p>
                <p><?= $user['bio'] ?></p>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header"><a href="/Users/get_user_orders_this_week">Your Recent Orders</a></h3>
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
                <h3 class="page-header"><a href="/Users/user_reviews_this_week">Your Recent Reviews</a></h3>
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

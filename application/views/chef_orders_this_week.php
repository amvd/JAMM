<?php var_dump($this->session->all_userdata()); $session_data = $this->session->all_userdata();

    // var_dump($this->session->userdata('bio'));
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chef's Orders This Week</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <style type="text/css">
    .status_button
    {
        width: 230px;
        height: 50px;
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

    <!-- Page Content -->
    <div class="container">
<?=var_dump($orders) ?>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
<?php               foreach ($orders as $order) {
?>                       
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/300x300" alt="">
                            <div class="caption">
                                <h4><?= $order['name'] ?></h4>
                                <h4>$PRICE</h4>
                                <h4>Qty: <?= $order['qty'] ?></h4>
                                <h4>Size:<?= $order['size_id'] ?></h4>
                                <h4>Special Instructions: <p><?= $order['special_instructions'] ?></p></h4>
                                <h4>Order Date:<p><?= $order['created_at'] ?></p></h4>
                                <h4>Pick Up Date:<p><?= $order['pickup_date'] ?></p></h4>
<?php                                
                                    date_default_timezone_set('America/Los_Angeles');
                                    $date = date('Y/m/d h:i:s a', time());
    ?>
                                <h4>
<?php 
                                     echo "in view"; var_dump($order['id']);
                                    if ($order['fulfilled'] == 0)
                                    {
?>                  
                    <!-- <a href="/chefs/update_fulfilled_status/<?= $order['id'] ?>"> -->
                    <button type="button" class="btn btn-warning status_button">Pending</button>
                    </a>
<?php                               }
                                    else
                                    {
?>               
                    <button type="button" class="btn btn-success status_button">Picked Up</button>
                    </a>
<?php                               }
?>                              </h4>
                            </div>
                            
                        </div>
                    </div>
<?php               }
?>

                    

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>

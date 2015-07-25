<?php //var_dump($food_info); ?>
<?php //var_dump($this->session->all_userdata()); $session_data = $this->session->all_userdata();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Chefs</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="/assets/css/simple-sidebar.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    .img-responsive{
        height: 200px;
        width: 300px;
    }
    </style>

</head>

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

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper"> 
            <a href="/foods/all_food_by_city/<?= $this->session->userdata('city');?>"><h3> Browse all food </h3></a>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Welcome, <?= $this->session->userdata('first_name') ?></h1>
                        <h4>What are you craving today? Browse through to try something new.</h4>
                        <?php 
                            foreach ($all_chefs as $value) 
                            { 
                        ?>
                            <div class="col-md-4 portfolio-item">
                                <img class="img-responsive" src="http://img-aws.ehowcdn.com/615x200/ehow/images/a04/ge/30/start-home_based-catering-business-800x800.jpg" alt="">
                        <?php
                                    if ($value['kitchen_name'] ==NULL)
                                    {
                          ?>          
                                <h3>
                                    <a href="/chefs/chef_profile/<?= $value['chef_id']?>"> <?= $value['first_name'] ?>'s Kitchen</a>

                                </h3>     
                        <?php
                                    }
                                    else
                                    {        
                          ?>      
                                <h3>
                                    <a href="/chefs/chef_profile/<?=$value['chef_id'] ?>"><?= $value['kitchen_name'] ?></a>
                                </h3>  
                                <h4><?= $value['avg_rating'];?></h4>   
                            
                        <?php
                                     }
                                     ?>
                                </div> <!-- end column-->
                            <?php    }
                        ?>  
                             

                    </div>    
                </div>
            </div>    
         <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>   
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; JAMM 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>         
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->



</body>

</html>

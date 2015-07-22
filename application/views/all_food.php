<?php var_dump($food_info); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simple Sidebar - Start Bootstrap Template</title>

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
        <?php if ($this->session->userdata('user_type') == "user") { ?>
            <li><a href="/users/user_profile/<?= $this->session->userdata('id') ?>">User Account</a></li> <?php } 
          else { ?>
            <li><a href="/chefs/chef_profile/<?= $this->session->userdata('id') ?>">Chef Account</a></li> <?php } ?>
            <li><a href="/logins/logout">Logout</a></li> 
        </ul>
        </div>
    </nav>
</div>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                  <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                <li>
                    <a href="#">American</a>
                </li>
                <li>
                    <a href="#">Chinese</a>
                </li>
                <li>
                    <a href="#">Indian</a>
                </li>
                <li>
                    <a href="#">Japanese</a>
                </li>
                <li>
                    <a href="#">Korean</a>
                </li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Foods in <?= $food_info[0]['city']; ?></h1>
                        <h4>What are you craving today? Browse through to try something new.</h4>




            <?php foreach ($food_info as $food) { ?>
            <div class="col-md-4 portfolio-item">
                <img class="img-responsive" src="<?= $food['food_pic_url']; ?>" alt="">
                <h3>
                    <a href="#"><?= $food['name']; ?></a>
                </h3>
                <p><?= $food['description']; ?></p>
            </div>
            <?php }//foreach ?>

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

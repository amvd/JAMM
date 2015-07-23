<?php // var_dump($food_info); 
        //if ($all_foods_info) {var_dump($all_foods_info);}; 
//foreach ($food_info as $cuisine) { var_dump($cuisine['type']);} die();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simple Sidebar - Start Bootstrap Template</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
 -->    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="/assets/css/simple-sidebar.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- <script src="js/jquery.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function(){
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $('.img-responsive').on('shown.bs.modal', function () {
            $('.modal-responsive', this).focus()
         });
        });
    </script>

    <style>
        .modal-body img {
            width: 300px;
            display: inline-block;
        }
        .modal_order_food {
            display: inline-block;
            vertical-align: top;
        }
/*        .modal_order_food h2{
            margin-top: 0;
        }*/
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
                    <li><a href="/users/user_profile/<?= $this->session->userdata('id') ?>">User Account</a></li>
                    <li><a href="/logins/logout">Logout</a></li>
<?php           } 
                elseif ($this->session->userdata('user_type') == "chef") { ?>
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
            <ul class="sidebar-nav">
<!--                 <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                  <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                            </div>
                           
                </li> -->
                <li><h4>Search by Cuisines</h4></li>

                <?php foreach ($all_food as $cuisine) { ?>
                        <li><a href="/foods/all_food_by_cuisine/<?= $cuisine['type']?>/<?= $cuisine['city'] ?>"><?= $cuisine['type'] ?></a></li>
                <?php }//foreach ?>

                <li><a href="/foods/all_food_by_city/<?= $food_info[0]['city'] ?>">Clear Filters</a></li>
                <li><br><a href="/chefs/chef_profile/"><h6>View All Chefs</h6></a></li>
            </ul>
            
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <?php if ($food_info[0]['city']) { ?>
                        <h1>Foods in <?= $food_info[0]['city']; ?></h1>
                      <?php }
                      else { ?>
                         <h1>All Foods</h1>
                     <?php } ?>
                        <h4>What are you craving today? Browse through to try something new.</h4>
                        <h6><b>Click the photo to learn more about it!</b></h6>

            <?php foreach ($food_info as $food) { ?>
            <div class="col-md-4 portfolio-item">
                <img data-toggle="modal" data-target="#myModal-<?= $food["id"] ?>" class="img-responsive" src="<?= $food['food_pic_url']; ?>" alt="">
                <h3><?= $food['name']; ?></h3>
                <h5> by <a href="#">Chef <?= $food['first_name']; ?></a></h5>
                

                <!-- Modal -->
                <div class="modal fade" id="myModal-<?= $food["id"] ?>" class="modal-responsive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" class="myModalLabel"><?= $food['name']; ?> by Chef <?= $food['first_name']; ?></h4>
                      </div>
                      <div class="modal-body">
                        <img src="<?= $food['food_pic_url']; ?>" alt="">
                          <div class='modal_order_food'>
                            <h4>Cuisine: <?= $food['type'] ?></h4><br>
                            <h4>Description:</h4>
                            <p><?= $food['description'] ?></p>
                          </div><!--modal_order_food-->
                          <div class='modal_food_description'>
                            <h4><b>Allergens:</b></h4>
                            <p>Peanuts, Seafood</p>
                            <h2>Place Order</h2>
                            <form action="" method="post">
                                Qty:<input type='text' size='1' name='quantity'>
                                <select>
                                  <option>Size</option>
                                  <option>Small</option>
                                  <option>Medium</option>
                                  <option>Large</option>
                                </select>
                                $8.99
                            </form>            
                          </div>
                      </div><!--modal-body-->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!--END MODAL-->

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

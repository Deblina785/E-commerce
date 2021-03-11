<?php

include "includes/common.php"

?>

<!DOCTYPE html>



<html>

   

<head>

        <title>Watches | Time World</title>

        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

        

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->

    <link href="css/style.css" rel="stylesheet">

        <!-- jQuery -->

    <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->

    <script src="js/bootstrap.min.js"></script>

    

</head>

   

<body style="padding-top: 50px;">

            <!-- Header file -->

    <?php

        include 'includes/header.php';

        include 'includes/check-if-added.php';

        include 'includes/modal.php';

        ?>

    <br>

    <br>

    

    <div class="container">

        <!-- Jumbotron Header -->

            <div class="jumbotron home-spacer" id="products-jumbotron">

                <center><h1>Welcome to our Time World</h1>

                <p>We have the best Watches from Biggest Brands for you. No need to hunt around, we have all in one place.</p>

              </center>

            </div>

            <hr>

            <br>

            

        <div class="row">

            <div class="col-sm-3" >

               <div class="panel-group">

               

               <div class="panel panel-default">

                    <div class="panel-heading color">

                        <h3 style="color:orange">Categories</h3>

                    </div>

                    <div class="panel-body">

                       <div class="rmvb">

                           <p><a href="#analog"><span style="color:black">ANALOG WATCHES</span></a></p>

                           <p><a href="#digital"><span style="color:black">DIGITAL WATCHES</span></a></p>

                           <p><a href="#wall"><span style="color:black">WALL CLOCKS</span></a></p>

                            <p><a href="#fit"><span style="color:black">FITNESS TRACKERS</span></a></p>

                        </div>

                    </div>

                </div>

               <br>

                <div class="panel panel-default">

                    <div class="panel-heading  color">

                        <h3 style="color:orange">Warranty Period</h3>

                    </div>

                    

                    <div class="panel-body">

                       <div class="rmvb">

                            <p><a href="#digital"><span style="color:black">24 months</span></a></p>

                            <p><a href="#analog"><span style="color:black">18 months</span></a></p>

                        </div>

                    </div>

                </div>

                </div>

            </div>

            

            

            <div class="col-sm-9 text-center">

                <div class="panel-group">

                  <!----------------------------------------------------Women's Special----------------------------------->

                   <div class="panel panel-default">

                        <div class="panel-heading  color">

                            <h3 style="color:orange">Women's Special</h3>

                        </div>

                    

                    <div class="panel-body">

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/jaquet droz.jpg" alt="jaquet droz" >

                                    <div class="caption">

                                        <h3>Jaquet Droz</h3>

                                        <p>Price: Rs. 36000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/Blancpain.jpg" alt="Blancpain">

                                    <div class="caption">

                                        <h3>Blancpain</h3>

                                            <p>Price: Rs. 57000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/quartz.jfif" alt="quartz">

                                <div class="caption">

                                    <h3>Quartz</h3>

                                        <p>Price: Rs. 39000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/GUOU.jpg" alt="GUOU">

                                <div class="caption">

                                    <h3>GUOU</h3>

                                        <p>Price: Rs. 37000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    </div>

                </div>
                    <!----------------------------------------------------Analog Watches----------------------------------->

                <div class="panel panel-default">

                        <div class="panel-heading  color">

                            <h3 id="ios" style="color:orange">ANALOG WATCHES</h3>

                        </div>

                    

                    <div class="panel-body">

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/Eoniq.jfif" alt="Eoniq" >

                                    <div class="caption">

                                        <h3>Eoniq</h3>

                                        <p>Price: Rs. 45000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/Tissot.jpg" alt="Tissot">

                                    <div class="caption">

                                        <h3>Tissot</h3>

                                            <p>Price: Rs. 39000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/Hasani.jpg" alt="Hasani">

                                <div class="caption">

                                    <h3>Hasani</h3>

                                        <p>Price: Rs. 50000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/Baguette.jpg" alt="Baguette">

                                <div class="caption">

                                    <h3>Baguette</h3>

                                        <p>Price: Rs. 40000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

                   

                   <!----------------------------------------------------Digital----------------------------------->

                <div class="panel panel-default">

                        <div class="panel-heading  color">

                            <h3 id="samsung" style="color:orange">DIGITAL WATCHES</h3>

                        </div>

                    

                    <div class="panel-body">

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/Sanda.jfif" alt="Sanda" >

                                    <div class="caption">

                                        <h3>Sanda</h3>

                                        <p>Price: Rs. 32000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div> 

                    

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/daytona black pearl rolex.png" alt="daytona black pearl rolex">

                                    <div class="caption">

                                        <h3>Rolex</h3>

                                            <p>Price: Rs. 60000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/gucci.jpg" alt="gucci">

                                <div class="caption">

                                    <h3>Gucci</h3>

                                        <p>Price: Rs. 45000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/SMAEL.jpg" alt="SMAEL">

                                <div class="caption">

                                    <h3>SMAEL</h3>

                                        <p>Price: Rs. 30000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

                   

                   <!----------------------------------------------------wall clock----------------------------------->

                <div class="panel panel-default">

                        <div class="panel-heading  color">

                            <h3 id="oneplus" style="color:orange">WALL CLOCKS</h3>

                        </div>

                    

                    <div class="panel-body">

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/orologio da parete.jpg" alt="orologio da parete" >

                                    <div class="caption">

                                        <h3>Orologio Da Parete</h3>

                                        <p>Price: Rs. 23000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/roman skeleton.jpg" alt="roman skeleton">

                                    <div class="caption">

                                        <h3>Roman Skeleton</h3>

                                            <p>Price: Rs. 25000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/Eslabon.jpg" alt="Eslabon">

                                <div class="caption">

                                    <h3>Eslabon</h3>

                                        <p>Price: Rs. 25000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/TBEST.jpg" alt="TBEST">

                                <div class="caption">

                                    <h3>TBEST</h3>

                                        <p>Price: Rs. 28000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

                   

                   <!----------------------------------------------------fitness trackers----------------------------------->

                   <div class="panel panel-default">

                        <div class="panel-heading  color">

                            <h3 id="xiaomi" style="color:orange">FITNESS TRACKERS</h3>

                        </div>

                    

                    <div class="panel-body">

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/Apple.jpg" alt="Apple" >

                                    <div class="caption">

                                        <h3>Apple</h3>

                                        <p>Price: Rs. 36000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                        <div class="col-sm-4 home-feature">

                            <div class="thumbnail">

                                <img src="./img/Y6.jpg" alt="Y6">

                                    <div class="caption">

                                        <h3>Y6</h3>

                                            <p>Price: Rs. 55000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/Bozlun.jpg" alt="Bozlun">

                                <div class="caption">

                                    <h3>Bozlun</h3>

                                        <p>Price: Rs. 65000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    

                    <div class="col-sm-4 home-feature">

                        <div class="thumbnail">

                            <img src="./img/iPhone.jpg" alt="iPhone">

                                <div class="caption">

                                    <h3>iPhone</h3>

                                        <p>Price: Rs. 63000.00 </p>

                                                <?php if (!isset($_SESSION['email'])) { ?>

                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                                <?php

                                            } else {

                                            //We have created a function to check whether this particular product is added to cart or not.

                                            if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart != 0)

                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

                                           } else {

                                            ?>

                                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

                                            <?php

                                                }

                                            }

                                        ?>

                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

                    

                </div>

            </div>

        </div>

    </div>

    <?php include 'includes/footer.php'; ?>

</body>

</html>
<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <title>Welcome To Time World |The ultimate wold of watches</title>

        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">



          <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap Core CSS -->

          <link href="css/bootstrap.css" rel="stylesheet">
          

        <!-- Custom CSS -->

          <link href="./css/style.css" rel="stylesheet">
          
        <!--font style-->
        <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>

        <!-- jQuery -->

          <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->

          <script src="js/bootstrap.min.js"></script>

    </head>

    <body style="padding-top: 50px;">



        <!-- Header -->

        <?php

        include 'includes/header.php';

        ?>

        <!--Header end-->



        <div id="content">

            <!--Main banner image-->

            <div id = "banner_image">

                <div class="container">

                    <center>

                        <div id="banner_content">

                            <h1>Biggest Online Watch Store</h1>

                            <h4><p>Flat 30% OFF on premium brands</p></h4>

                            <br>

                            <br>

                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>

                        </div>

                    </center>

                </div>

            </div>

            <br>

            <br>

            <!--Main banner image end-->



            <!--Item categories listing-->

            <div class="container text-center">

                <div id="item_list">

                    <div class="panel panel-default">

                        <div class="panel-heading  color">

                            <h3 style="color:orange">Choose&nbsp;&nbsp;From&nbsp;&nbsp;different&nbsp;&nbsp;categories</h3>

                        </div>



                    <div class="panel-body">

                        <div class="col-sm-3">

                            <a href="products.php#analog">

                               <div class="thumbnail">

                                   <img src="./img/1.jpg" alt="analog watches" >

                                        <div class="caption">

                                            <h3>Analog Watches</h3>

                                        </div>

                                </div>

                            </a>

                        </div>



                         <div class="col-sm-3">

                            <a href="products.php#digital">

                               <div class="thumbnail">

                                   <img src="./img/2.jpg" alt="digital watches" >

                                        <div class="caption">

                                            <h3>Digital Watches</h3>

                                        </div>

                                </div>

                            </a>

                        </div>



                         <div class="col-sm-3">

                            <a href="products.php#wall">

                               <div class="thumbnail">

                                   <img src="./img/3.jpg" alt="wall clocks" >

                                        <div class="caption">

                                            <h3>Wall Clocks</h3>

                                        </div>

                                </div>

                            </a>

                        </div>


                          
                         <div class="col-sm-3">

                            <a href="products.php#fit">

                               <div class="thumbnail">

                                   <img src="./img/4.jfif" alt="fitbits" >

                                        <div class="caption">

                                            <h3>Fitness Trackers</h3>

                                        </div>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>







                </div>

            </div>



            <!--Item categories listing end-->

        </div>



        <!--Footer-->

        <?php

        include 'includes/footer.php';

        ?>

        <!--Footer end-->



    </body>

</html>
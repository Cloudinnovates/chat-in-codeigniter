
<!DOCTYPE HTML>
<html>
    <head>
        <title>Online Hospital</title>
        <link href="css/login_style.css" rel="stylesheet" type="text/css"  media="all" />
        <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/responsiveslides.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {

                // Slideshow 1
                $("#slider1").responsiveSlides({
                    maxwidth: 1600,
                    speed: 600
                });
            });
        </script>
        <style>
            .dropbtn {
                background-color: #3391e7;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color:#3391e7; color: white;}

            .dropdown:hover .dropdown-content {display: block;}

            .dropdown:hover .dropbtn {background-color: #185c98;}
        </style> 
    </head>
    <body>
        <!--start-wrap-->

        <!--start-header-->
        <div class="header">
            <div class="wrap">
                <!--start-logo-->
                <div class="logo">
                    <a href="index.html" style="font-size: 30px;">Online Hospital</a>
                </div>
                <!--end-logo-->
                <!--start-top-nav-->
                <div class="top-nav">
                    <div class="dropdown">
                        <button class="dropbtn">Sign Up</button>
                        <div class="dropdown-content">
                            <a href="<?php echo base_url(); ?>welcome/addPatient">Patient </a>
                            <a href="<?php echo base_url(); ?>welcome/addDoctor">Doctor</a>
                        </div>
                    </div>

                </div>
                <div class="clear"> </div>
                <!--end-top-nav-->
            </div>
            <!--end-header-->
        </div>
        <div class="clear"> </div>
        <!--start-image-slider---->
        <div class="image-slider">
            <!-- Slideshow 1 -->
            <ul class="rslides" id="slider1">
                <li><img src="images/slider-image1.jpg" alt=""></li>
                <li><img src="images/slider-image2.jpg" alt=""></li>
                <li><img src="images/slider-image1.jpg" alt=""></li>
            </ul>
            <!-- Slideshow 2 -->
        </div>
        <!--End-image-slider---->
        <div class="clear"> </div>
        <div class="content-grids">
            <div class="wrap">
                <div class="section group">


                    <div class="listview_1_of_3 images_1_of_3">
                        <div class="listimg listimg_1_of_2">
                            <img src="images/grid-img3.png">
                        </div>
                        <div class="text list_1_of_2">
                            <h3>Patients</h3>
                            <div class="button"><span><a href="<?php echo base_url(); ?>welcome/login/<?php echo 'patient' ?>"><img src="img/login.png" alt=""></a></span></div>
                        </div>
                    </div>	

                    <div class="listview_1_of_3 images_1_of_3">
                        <div class="listimg listimg_1_of_2">
                            <img src="images/grid-img1.png">
                        </div>
                        <div class="text list_1_of_2">
                            <h3>Doctors Login</h3>

                            <div class="button"><span><a href="<?php echo base_url(); ?>welcome/login/<?php echo 'doctor' ?>"><img src="img/login.png" alt=""></a></span></div>
                        </div>
                    </div>


                    <div class="listview_1_of_3 images_1_of_3">
                        <div class="listimg listimg_1_of_2">
                            <img src="images/grid-img2.png">
                        </div>
                        <div class="text list_1_of_2">
                            <h3>Admin Login</h3>

                            <div class="button"><span><a href="<?php echo base_url(); ?>welcome/login/<?php echo 'admin' ?>"><img src="img/login.png" alt=""></a></span></div>
                        </div>
                    </div>			
                </div>
            </div>
        </div>

        <!--end-wrap-->
    </body>
</html>


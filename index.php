<!DOCTYPE html>
<html lang="en" class="full-height">
<!-- This is a change three-->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="shortcut icon" href="image/favicon.ico" />
    <title>Barangay Electronic Portal</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Cool icons -->
    <link rel="stylesheet" href="css/bootstrap-social.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
   <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script src="js/sweetalert.min.js"></script>  



<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->

    
    <!-- Template styles -->
    <style>
        /* TEMPLATE STYLES */
        .flex-center {
            color: #fff;
        }
        .intro-1 {
            background: url("../ThesisFinal/image/mainbg.jpg")no-repeat center center;
            background-size: cover;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }

        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }

    </style>

</head>

<body>

    <header>
        

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark elegant-color-dark fixed-top">
            <div class="container" id="naviback">
                <a class="navbar-brand" href="#" ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Service</a>
                        </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#weather">Weather Forecast</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                      
                        
                    </ul>
                    <ul class="navbar-nav    right">
                        <li>                         <a class="nav-link" href="#">
                              <?php

echo "<span style='color:red;font-weight:bold;'>Date: </span>". date('F j, Y g:i:a  ');
?>
   
                            
                            </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->

        <!--Intro Section-->
        <section class="view intro-1 hm-black-strong" id="home">
            <div class="full-bg-img flex-center">
                <div class="container">
                    <ul>
                        <li>
                            <h1 class="h1-responsive font-bold wow fadeInDown" data-wow-delay="0.2s">Barangay Electronic Portal</h1></li>
                        <li>
                            <p class="lead mt-4 mb-5 wow fadeInDown">"Where the community interacts"</p>
                        </li>
                        <li>
                            <a data-toggle="modal" data-target="#modal" class="btn btn-primary btn-lg wow fadeInLeft" data-wow-delay="0.2s" rel="nofollow">Get Started!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </header>

    <!-- Main container-->
    <div class="container" id="about">

        <div class="divider-new pt-5">
            <h2 class="h2-responsive wow fadeIn" data-wow-delay="0.2s">About us</h2>
        </div>

        <!--Section: About-->
        <section id="about" class="text-center wow fadeIn" data-wow-delay="0.2s">

            <p>We are a group of aspiring researchers that aims to help integrate the works of the barangay. Our goal is to provide interaction within the barangay and its residents as we act as their means of communication  </p>

        </section>
        <!--Section: About-->

        <div class="divider-new pt-5" id="service">
            <h2 class="h2-responsive wow fadeIn">Our Target</h2>
        </div>

        <!--Section: Best features-->
        <section id="best-features">

            <div class="row pt-3">

                <!--First columnn-->
                <div class="col-lg-3 mb-r">

                    <!--Card-->
                    <div class="card wow fadeIn">

                        <!--Card image-->
                        <img class="img-fluid" src="../ThesisFinal/image/MEGAPHONE.png" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title text-center">Voice out concerns</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">This was website was created to hear out the voice of its residents that will furtherly help the community grow.</p>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->

                <!--Second columnn-->
                <div class="col-lg-3 mb-r">
                    <!--Card-->
                    <div class="card wow fadeIn" data-wow-delay="0.2s">

                        <!--Card image-->
                        <img class="img-fluid" src="../ThesisFinal/image/hands.png" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title text-center">Friendly Interaction</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">This provides direct interaction within the barangay official and its member via web service.
                                
                            </p>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Second columnn-->

                <!--Third columnn-->
                <div class="col-lg-3 mb-r">
                    <!--Card-->
                    <div class="card wow fadeIn" data-wow-delay="0.4s">

                        <!--Card image-->
                        <img class="img-fluid" src="../ThesisFinal/image/nrgy.png" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title text-center">Legitimate Website</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">This is a legitimate community website designed for its residents.
                            
                            </p>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Third columnn-->

                <!--First columnn-->
                <div class="col-lg-3 mb-r">
                    <!--Card-->
                    <div class="card wow fadeIn" data-wow-delay="0.6s">

                        <!--Card image-->
                        <img class="img-fluid" src="../ThesisFinal/image/wrench.png" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title text-center">24/7 Support</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Because our residents are our priority, we require ourselves to be in action 24/7.</p>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->
            </div>

        </section>
        <!--/Section: Best features-->
        
        <div class="divider-new" id="weather">
        <h2 class="h2-responsive wow fadeIn">Weather</h2>
        </div>
        <section id="contact pb-5">
        <div class="row">
 <a href="https://www.accuweather.com/en/ph/tanay/265790/weather-forecast/265790" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
</a><div id="awtd1507439223862" class="aw-widget-36hour"  data-locationkey="" data-unit="c" data-language="en-us" data-useip="true" data-uid="awtd1507439223862" data-editlocation="true"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
        
            </div>
        </section>
      

        <div class="divider-new" id="contact">
            <h2 class="h2-responsive wow fadeIn">Contact us</h2>
        </div>

        <!--Section: Contact-->
        <section id="contact pb-5">
            <div class="row">
                <!--First column-->
                <div class="col-md-8 mb-5">
                    <div id="map-container" class="z-depth-1 wow fadeIn" style="height: 300px"></div>
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4">
                    <ul class="text-center list-unstyled">
                        <li class="wow fadeIn" data-wow-delay="0.2s"><i class="fa fa-map-marker teal-text fa-lg"></i>
                            <p>Tanay, Rizal</p>
                        </li>

                        <li class="wow fadeIn mt-5 pt-2" data-wow-delay="0.3s"><i class="fa fa-phone teal-text fa-lg"></i>
                            <p>+63-9758795290</p>
                        </li>

                        <li class="wow fadeIn mt-5 pt-2" data-wow-delay="0.4s"><i class="fa fa-envelope teal-text fa-lg"></i>
                            <p>rhainayaka@yahoo.com</p>
                        </li>
                    </ul>
                </div>
                <!--/Second column-->
            </div>
        </section>
        <!--Section: Contact-->

    </div>
    <!--/ Main container-->
    
    
    <!--Modal: Login / Register Form-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2 light-blue lighten-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body-->
   
                        <form method="post" id="logform">
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" name="loguser" id="loguser" class="form-control">
                                <label for="form22">Your Username</label>
                            </div>

                            <div class="md-form form-sm">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" name="logpass" id="logpass" class="form-control">
                                <label for="form23">Your password</label>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info" type="submit" name="btn-login" id="login">Log in <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer display-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? Log in as<a href="#panel8" class="blue-text"> Anonymous</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">
                        <!--Body-->
                        <form action="../ThesisFinal/php/registration.php" method="post" id="regform">
                        <div class="modal-body">
                            <div class="md-form form-sm">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" name="reguname" id="reguname" class="form-control">
                                <label for="form24">Your Username</label>
                            </div>

                            <div class="md-form form-sm">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" name="regpass" id="form25" class="form-control">
                                <label for="form25">Your password</label>
                            </div>

                            <div class="md-form form-sm">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" name="regpwordlast" id="regpwordlast" class="form-control">
                                <label for="form26">Repeat password</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button type="submit" class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                            </div>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                    
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->

                                        

    <!--Footer-->
    <footer class="page-footer center-on-small-only elegant-color-dark">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-lg-3 col-md-6 ml-auto">
                    <h5 class="titles font-bold mt-3 mb-4">ABOUT US!</h5>
                    <p>We are a group of students that aims to help the community with what we know and what we can give back to the community.</p>

                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Second column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Our Projects</h5>
                    <ul>
                        <li><a href="#!">Put some idea here rhandall</a></li>
                        <li><a href="#!">Put some idea here rhandall</a></li>
                        <li><a href="#!">Put some idea here rhandall</a></li>
                        <li><a href="#!">Put some idea here rhandall</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Third column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Future Projects</h5>
                    <ul>
                        <li><a href="#!">Put some idea here rhandall</a></li>
                        <li><a href="#!">Put some idea here rhandall</a></li>
                        <li><a href="#!">Put some idea here rhandall</a></li>
                        <li><a href="#!">Put some idea here rhandall</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Fourth column-->
                <div class="col-lg-3 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Find me on</h5>
                    <ul>
                        
                               <li><a class="btn btn-block btn-social btn-twitter">
                              <span class="fa fa-twitter"></span>Follow us in Twitter
                               </a></li>
                        </br>
                               <li><a class="btn btn-block btn-social btn-facebook">
                              <span class="fa fa-facebook"></span>Follow us in Facebook
                               </a></li>
                        
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
 

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!--Google Maps-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhH0dklhKzOmG0X4uGSLU1X5vgmPIa8fs&callback=initMap"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    

    <script>
        function init_map() {

            var var_location = new google.maps.LatLng(14.5797, 121.3313);

            var var_mapoptions = {
                center: var_location,

                zoom: 40
            };

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "Tanay Rizal"
            });

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var_marker.setMap(var_map);

        }

        google.maps.event.addDomListener(window, 'load', init_map);
    </script>

    <!-- Animations init-->
    <script>
        new WOW().init();
    </script>
    <script src="js/scrolling.js"></script>
    
    <script>
        $(document).ready(function(){
                          $('#modal').modal();
                          })
    </script>
    <script src="js/jquery.login.js"></script>
    <script src="js/jquery.reg.js"></script>



</body>

</html>

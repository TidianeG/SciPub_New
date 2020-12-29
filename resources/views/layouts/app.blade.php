<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Welcome to SciPub</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!--===============================================================================================-->

    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Rapid - v2.0.0
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" style="background-color: white;">


        <div class="mr-2 ml-2" style="display: flex;">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->

                <a href="#header" class="scrollto"><img src="{{asset('assets/img/logo.JPG')}}" alt="" class="img-fluid" style="height=10px width = 10px;"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block pt-4">
                <ul class="d-flex justify-content-between">
                    <li class="menu"><a href="#intro"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li class="menu"><a href="#about">About Us</a></li>
                    <li class="menu "><a href="#services"><i class="fas fa-book-open"></i> Services</a>
                        
                    </li>
                    <li class="menu"><a href="#why-us">Why choose us ?</a></li>
                    <li class="menu"><a href="#portfolio">Portfolio</a></li>
                    <li class="menu"><a href="#pricing">Pricing</a></li>
                    <li class="menu">
                        <a href="#faq"> <i class="fas fa-question-circle"></i> FAQs</a>
                    </li>


                    <li class=" menu">
                        <a href="#footer"> <i class="fa fa-address-card"></i> Contact Us</a>
                    </li>
                    
                </ul>
            </nav>
            <!-- .main-nav -->
        </div>
    </header>
        @yield('content')
     <!-- ======= Footer ======= -->
     <footer id="footer " class="section-bg pt-5">
        <div class="footer-top ">
            <div class="container ">

                <div class="row ">

                    <div class="col-lg-6 ">

                        <div class="row ">

                            <div class="col-sm-6 ">

                                <div class="footer-info ">
                                    <img style="width: 100px; height: auto;" src="{{asset('assets/img/logo.JPG')}}">
                                    <p>Providing assistance to Academics for scientific publications.</p>
                                </div>
                            </div>

                            <div class="col-sm-6 ">
                                <div class="footer-links ">
                                    <h4 style="font-weight: bold;text-decoration: underline;">Contact Us</h4>
                                    <p>
                                        Xudong 2nd road, Wuhan, China
                                        <strong>Email:</strong> usinfo@scipub.com<br>
                                        <strong>QQ:</strong> 3216282335<br>
                                        <strong>Wechat:</strong> sonsam10<br>
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 ">

                        <div class="form ">

                            <h4 style="font-weight: bold;text-decoration: underline;">Send us a message</h4>
                            <p>Please fill in your information and send us your message. We will reply promptly !</p>

                            <form action="forms/contact.php " method="post " role="form " class="php-email-form ">
                                <div class="form-group ">
                                    <input type="text " name="name " class="form-control " id="name " placeholder="Your Name " data-rule="minlen:4 " data-msg="Please enter at least 4 chars " />
                                    <div class="validate "></div>
                                </div>
                                <div class="form-group ">
                                    <input type="email " class="form-control " name="email " id="email " placeholder="Your Email " data-rule="email " data-msg="Please enter a valid email " />
                                    <div class="validate "></div>
                                </div>
                                <div class="form-group ">
                                    <input type="text " class="form-control " name="subject " id="subject " placeholder="Subject " data-rule="minlen:4 " data-msg="Please enter at least 8 chars of subject " />
                                    <div class="validate "></div>
                                </div>
                                <div class="form-group ">
                                    <textarea class="form-control " name="message " rows="5 " data-rule="required " data-msg="Please write something for us " placeholder="Message "></textarea>
                                    <div class="validate "></div>
                                </div>

                                <div class="mb-3 ">
                                    <div class="loading ">Loading</div>
                                    <div class="error-message "></div>
                                    <div class="sent-message ">Your message has been sent. Thank you!</div>
                                </div>

                                <div class="text-center "><button type="submit " title="Send Message ">Send Message</button></div>
                            </form>

                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="container ">
            <div class="copyright ">
                &copy; Copyright <strong><label for="" style="color: darkred; font-weight: bolder;">S</label><label for="" style="color: black;font-weight: bolder;">ci</label><label for="" style="color: darkred;font-weight: bolder;">P</label><label for="" style="color: black;font-weight: bolder;">ub</label> 2010-2020</strong>.
                All Rights Reserved
            </div>
            <div class="credits ">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->
                Designed by <a href="https://bootstrapmade.com/ "><label for="" style="color: darkred; font-weight: bolder;">S</label><label for="" style="color: black;font-weight: bolder;">ci</label><label for="" style="color: darkred;font-weight: bolder;">P</label><label for="" style="color: black;font-weight: bolder;">ub</label></a>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <a href="# " class="back-to-top "><i class="fa fa-chevron-up "></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}} "></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}} "></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}} "></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}} "></script>
    <script src="{{asset('assets/vendor/counterup/counterup.min.js')}} "></script>
    <script src="{{asset('assets/vendor/venobox/venobox.min.js')}} "></script>
    <script src="{{asset('assets/vendor/mobile-nav/mobile-nav.js')}} "></script>
    <script src="{{asset('assets/vendor/wow/wow.min.js')}} "></script>
    <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}} "></script>
    <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}} "></script>
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}} "></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/animsition/js/animsition.min.js')}} "></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/bootstrap/js/popper.js')}} "></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}} "></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/select2/select2.min.js')}} "></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/daterangepicker/moment.min.js')}} "></script>
    <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}} "></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/countdowntime/countdowntime.js')}} "></script>
    <!--===============================================================================================-->
    <script src="{{asset('js/main.js')}} "></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}} "></script>

</body>

</html>
</body>
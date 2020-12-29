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
                    <li class="drop-down "><a href="#services"><i class="fas fa-book-open"></i> Services</a>
                        <ul>
                            <li class="drop-down "><a href="#">Scientific manuscript writing</a>
                                <ul>
                                    <li><a href="#">Full article writing</a></li>
                                    <li><a href="#">Writing up article section</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Scientific manuscript proofreading</a></li>
                            <li><a href="#">Scientific manuscript technical review</a></li>
                            <li><a href="#">Journal recommendation-submission</a></li>
                            <li><a href="#">Bioinformatic data analysis</a></li>
                            <li><a href="#">Plagiarism check</a></li>
                        </ul>
                    </li>
                    <li class="menu"><a href="#"><i class="fas fa-handshake"></i> Quality</a></li>
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
     <footer id="footer " class="section-bg ">
        <div class="footer-top ">
            <div class="container ">

                <div class="row ">

                    <div class="col-lg-6 ">

                        <div class="row ">

                            <div class="col-sm-6 ">

                                <div class="footer-info ">
                                    <h3>Rapid</h3>
                                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat
                                        consequat mauris nunc congue.</p>
                                </div>

                                <div class="footer-newsletter ">
                                    <h4>Our Newsletter</h4>
                                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                                    <form action=" " method="post ">
                                        <input type="email " name="email "><input type="submit " value="Subscribe ">
                                    </form>
                                </div>

                            </div>

                            <div class="col-sm-6 ">
                                <div class="footer-links ">
                                    <h4>Useful Links</h4>
                                    <ul>
                                        <li><a href="# ">Home</a></li>
                                        <li><a href="#about ">About us</a></li>
                                        <li><a href="# ">Services</a></li>
                                        <li><a href="# ">Terms of service</a></li>
                                        <li><a href="# ">Privacy policy</a></li>
                                    </ul>
                                </div>

                                <div class="footer-links ">
                                    <h4>Contact Us</h4>
                                    <p>
                                        A108 Adam Street <br> New York, NY 535022<br> United States <br>
                                        <strong>Phone:</strong> +1 5589 55488 55<br>
                                        <strong>Email:</strong> info@example.com<br>
                                    </p>
                                </div>

                                <div class="social-links ">
                                    <a href="# " class="twitter "><i class="fa fa-twitter "></i></a>
                                    <a href="# " class="facebook "><i class="fa fa-facebook "></i></a>
                                    <a href="# " class="instagram "><i class="fa fa-instagram "></i></a>
                                    <a href="# " class="linkedin "><i class="fa fa-linkedin "></i></a>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 ">

                        <div class="form ">

                            <h4>Send us a message</h4>
                            <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>

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
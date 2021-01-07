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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    
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
     <link rel="stylesheet" type="text/css" href="{{asset('css/scipub.css')}}">
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

<body style="max-height:auto;">

    <!-- ======= Header ======= -->
    <header id="header" style="background-color: white;">
        <div class="mr-2 ml-2" style="display: flex;">
            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->

                <a href="/" class="scrollto"><img src="{{asset('assets/img/logo.JPG')}}" alt="" class="img-fluid" style="height=10px width = 10px;"></a>
            </div>
            <nav class="main-nav float-right d-none d-lg-block pt-4">
                <ul class="d-flex justify-content-between">
                    <li class="menu"><a href="/"><i class="fas fa-home" ></i> Home</a></li>
                    <li class="menu"><a href="/about"><i class="fa fa-users mr-1"></i>About Us</a></li>
                    <li class="menu "><a href="/services"><i class="fas fa-book-open mr-1"></i> Services</a>   
                    </li>
                    <li class="menu"><a href="/Why_Choose_Us"><i class="fas fa-book mr-1"></i>Why choose us ?</a></li>
                    <li class="menu"><a href="/portfolio"><i class="fas fa-folder mr-1"></i>Portfolio</a></li>
                    <li class="menu"><a href="/pricing"><i class="fas fa-hand-holding-usd mr-1"></i>Pricing</a></li>
                    <li class="menu"><a href="/testimonials"><i class="fas fa-handshake mr-1"></i>Testimonials</a></li>
                    <li class="menu">
                        <a href="/FAQS"> <i class="fa fa-question-circle"></i> FAQs</a>
                    </li>
                    <li class=" menu">
                        <a href="#" data-toggle="modal" data-target="#myModal"> <i class="fa fa-address-card"></i> Contact Us</a>
                    </li>
                    
                </ul>
            </nav>
            <!-- .main-nav -->
        </div>
    </header>
    <div class="h-auto pt-5">
        @yield('content')
    </div>
        <!-- ======= Modal contact ======= -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('assets/img/logo.JPG')}}" width="100" height="50" alt="Logo"></a>
                            <button type="button" style="background:darkred;border-radius:15px;" class="close m-1 " data-dismiss="modal">&times;</button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body container">
                            <form action="{{route('contact.store')}}" method="post">
                            @csrf
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger">{{$error}}</div>
                                    @endforeach
                                @endif
                                <div class="form-group ">
                                    <input  name="name" class="form-control "  placeholder="Your Name " data-msg="Please enter at least 4 chars " />
                                    <div class="validate "></div>
                                </div>
                                <div class="form-group ">
                                    <input  class="form-control " name="email"  placeholder="Your Email " data-msg="Please enter a valid email " />
                                    <div class="validate "></div>
                                </div>
                                <div class="form-group ">
                                    <input  class="form-control " name="subjet"  placeholder="Subject " data-msg="Please enter at least 8 chars of subject " />
                                    <div class="validate "></div>
                                </div>
                                <div class="form-group ">
                                    <textarea class="form-control " name="message" rows="7 " data-msg="Please write something for us " placeholder="Message "></textarea>
                                    <div class="validate "></div>
                                </div>
                                <div class="d-flex justify-content-around">         
                                    <button type="submit" class="btn btn-success">Send message</button>
                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>      
                        <!-- Modal footer -->                
                    </div>
                </div>
            </div>
        <!-- ======= End modal contact ======= -->
     <!-- ======= Footer ======= -->
    <footer id="" class="pt-2">
        <div class="pl-2 pr-2">
            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="">
                        <img style="width: 100px; height: auto;" src="{{asset('assets/img/logo.JPG')}}">
                        <p>Providing assistance <br> to Academics for <br> scientific publications.</p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="">
                        <h4 style="font-weight: bold;text-decoration: underline;">Contact Us</h4>
                            <p>
                                <div>Xudong 2nd road, Wuhan, China</div> 
                                <strong>Email:</strong> usinfo@scipub.com<br>
                                <strong>QQ:</strong> 3216282335<br>
                                <strong>Wechat:</strong> sonsam10<br>
                            </p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class=" ">
                        <h4 style="font-weight: bold;text-decoration: underline;">Opening hours</h4>
                        <p>We are available 24 hours daily .</p>

                    </div>
                </div>
            </div>
        </div>
        <div class=" d-flex justify-content-between" style="background:#413e66;">
            <div class="copyright " style="color:white;">
                &copy; Copyright <strong><label for="" style="color: darkred; font-weight: bolder;">S</label><label for="" style="color: black;font-weight: bolder;">ci</label><label for="" style="color: darkred;font-weight: bolder;">P</label><label for="" style="color: black;font-weight: bolder;">ub</label> 2010-2020</strong>.
                All Rights Reserved
            </div>
            <div class="credits" style="color:white;">           
                Designed by <a href="https://bootstrapmade.com/ "><label for="" style="color: darkred; font-weight: bolder;">S</label><label for="" style="color: black;font-weight: bolder;">ci</label><label for="" style="color: darkred;font-weight: bolder;">P</label><label for="" style="color: black;font-weight: bolder;">ub</label></a>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <a href="# " class="back-to-top "><i class="fa fa-chevron-up "></i></a>

    <!-- Vendor JS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}} "></script>
    <script href=" https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}} "></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}} "></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}} "></script>
    <script src="{{asset('assets/vendor/counterup/counterup.min.js')}} "></script>
    <script src="{{asset('assets/vendor/venobox/venobox.min.js')}} "></script>
    <script src="{{asset('assets/vendor/mobile-nav/mobile-nav.js')}} "></script>
    <script src="{{asset('assets/vendor/wow/wow.min.js')}} "></script>
    
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
    <script src="{{asset('js/sci.js')}} "></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}} "></script>
    <script src="{{asset('assets/js/collapse.js')}} "></script>

</body>

</html>
</body>
@extends('layouts.app')
      @section('content')
<<<<<<< HEAD
<main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 mt-5">
                        <div class="about-img">
                            <img src="{{URL::asset('/images/contact.png')}}" height="400" width="230">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="about-content">
                            

                            
                             <div class="mt-2" style="">
                              <h2 style="color: darkred;text-align: center;text-decoration: underline;">Contact Us</h2>
                           
                            <form action="{{route('contact.store')}}" method="POST"  class="mt-5">
                                @csrf
                                @if($errors->any())
                                @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                                @endforeach
                                @endif
=======
        <section id="contact" class="clearfix pb-5 " >
            <div class="container d-flex h-100">
                <div class="row justify-content-center align-self-center">
                    <div class="premiere" style="">
                    <img class="img-premiere " src="{{asset('images/cont_us.jpg')}}" height="400px;" width="850px;">
                    </div>
                    <div class="col-12 intro-info mt-5">
                        <h2  style="font-size: 70px;text-align: center; font-weight: 700;">
                            <label for="" style="color: darkred;">S</label><label for="" style="color: black;">ci</label><label for="" style="color:darkred;">P</label><label for="" style="color: black;">ub </label>   <span class="">Contact</span>
                        </h2>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="mt-2" style=""> 
                            <form action="forms/contact.php " method="post " role="form " class="php-email-form  ">
>>>>>>> d27c3528bfebef6cb4e153019d7d1940d5fdb8a7
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
<<<<<<< HEAD

                                

                                <div class="text-center "><a href="/"><button type="submit " title="Send Message " class="btn btn-info">Send Message</button></div></a>
=======
                                <div class="text-center ">
                                    <button type="submit " title="Send Message " class="btn btn-info">Send Message</button>
                                </div>
>>>>>>> d27c3528bfebef6cb4e153019d7d1940d5fdb8a7
                            </form>

                        </div>

                            
                        
                    </div>
                </div>
            </div>
<<<<<<< HEAD
 
        </section>
        <!-- End About Section -->
       
      

























       @endsection
=======
        </section>  
     @endsection
>>>>>>> d27c3528bfebef6cb4e153019d7d1940d5fdb8a7

@extends('layouts.app')
      @section('content')
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

                                

                                <div class="text-center "><a href="/"><button type="submit " title="Send Message " class="btn btn-info">Send Message</button></div></a>
                            </form>

                        </div>

                            
                        
                    </div>
                </div>
            </div>
 
        </section>
        <!-- End About Section -->
       
      

























       @endsection
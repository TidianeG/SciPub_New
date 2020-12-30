@extends('layouts.app')
      @section('content')


      <section id="hero" class="clearfix mb-5 " >
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
            </div>

        </div>
    </section>
    <div class="col-lg-6 " style="left: 26%;top: -90px;" >

                        
                        <div class="mt-2" style="">

                           
                            <form action="forms/contact.php " method="post " role="form " class="php-email-form  ">
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

                                

                                <div class="text-center "><button type="submit " title="Send Message " class="btn btn-info">Send Message</button></div>
                            </form>

                        </div>

                    </div>

























       @endsection
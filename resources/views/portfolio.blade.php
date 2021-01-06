@extends('layouts.app')
      @section('content')
    <section id="portfolio" class="portfolio section-bg p-3">
            <div class="container">

                <header class="section-header mt-5">
                    <h3 class="section-title">Our Portfolio</h3>
                </header>
<<<<<<< HEAD

                
=======
>>>>>>> d27c3528bfebef6cb4e153019d7d1940d5fdb8a7
                <div class="row portfolio-container">
                    <div class="col-12 col-md-6 portfolio-item filter-app">
                        <li style="font-weight: bold;font-size: 21px;"><i class="ion-android-checkmark-circle"></i> <span style="color: darkred;text-decoration: underline;">University Parteners.</span></li>
                        <div class="portfolio-wrap mt-5">
                            <img src="{{asset('assets/img/university.jpg')}}"  class="img-fluid" alt="" style="height:58vh;">
                            <div class="portfolio-info">
                                <h4><a href="">App 1</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="{{asset('assets/img/university.jpg')}}" data-gall="portfolioGallery" title="App 1" class="link-preview venobox"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 portfolio-item filter-app">
                        <div>
                            
                            <li style="font-weight: bold;font-size: 21px;"><i class="ion-android-checkmark-circle"></i> <span style="color: darkred;text-decoration: underline;">Targeted Journals and Publishers</span></li>
                        </div>
                        <div class="portfolio-wrap mt-5">
                            <img src="{{asset('assets/img/journaux.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">App 1</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="{{asset('assets/img/journaux.jpg')}}" data-gall="portfolioGallery" title="App 1" class="link-preview venobox"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->
























       @endsection
@extends('layouts.app')
    @section('content')
        <section id="portfolio" class="portfolio section-bg p-3">
            <div class="container">
                <header class="section-header mt-5">
                    <h3 class="section-title">Our Portfolio</h3>
                </header>  
                <div class="row portfolio-container">
                    <div class="col-12 col-md-7 portfolio-item filter-app">
                        <li style="font-weight: bold;font-size: 21px;"><i class="ion-android-checkmark-circle"></i> <span style="color: darkred;text-decoration: underline;">University Parteners.</span></li>
                        <div class="portfolio-wrap mt-5">
                            <img src="{{asset('assets/img/university.jpg')}}"  class="img-fluid" alt="" style="height:50vh;">
                            <div class="portfolio-info">
                                <div>
                                    <a href="{{asset('assets/img/university.jpg')}}" data-gall="portfolioGallery" title="App 1" class="link-preview venobox"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 portfolio-item filter-app">
                        <div>
                            
                            <li style="font-weight: bold;font-size: 21px;"><i class="ion-android-checkmark-circle"></i> <span style="color: darkred;text-decoration: underline;">Targeted Journals and Publishers</span></li>
                        </div>
                        <div class="portfolio-wrap mt-5">
                            <img src="{{asset('assets/img/journaux.jpg')}}" class="img-fluid w-100" style="height:50vh;" alt="">
                            <div class="portfolio-info">
                                
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
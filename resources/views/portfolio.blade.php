@extends('layouts.app')
      @section('content')






    <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">Our Portfolio</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <div class="col-12 col-md-6 portfolio-item filter-app">
                        <div>
                            <h3 style="font-weight: bold;text-decoration: underline;">University partners</h3>
                        </div>
                        <div class="portfolio-wrap">
                            <img src="{{asset('assets/img/university.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">App 1</a></h4>
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
                            <h4 style="font-weight: bold;text-decoration: underline;">Targeted Journals and Publishers </h4>
                        </div>
                        <div class="portfolio-wrap">
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
@extends('layouts.app')
      @section('content')




       <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing section-bg wow fadeInUp">

            <div class="container">

                <header class="section-header mt-5">
                    <h1 style="color: darkred;text-align: center;">Pricing</h1>
                    <p style="font-size: 20px; font-weight: bold;">This is our pricing for our different services. <br>Please contact us directly for a formal price quotation .</p>
                </header>

                <div class="row flex-items-xs-middle flex-items-xs-center">
                    <!-- Manuscript Proofreading  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">$</span>200</h3>
                            </div>
                            <div class="card-block">
                                <h4 style="color: darkred;" class="card-title">
                                    Manuscript proofreading
                                </h4>
                                <p style="font-weight: bold;font-size: 15px;"> No matter the length of your manuscript, <br>we have a standard price .</p>
                

                            </div>
                        </div>
                    </div>

                    <!-- Technical review  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">$</span>300</h3>
                            </div>
                            <div class="card-block">
                                <h4 style="color: darkred;" class="card-title">
                                    Technical review
                                </h4>
                                <p style="font-weight: bold;font-size: 15px;"> No matter the length of your manuscript,<br> we have a standard price .</p>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Plagiarism Check  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">$</span>100</h3>
                            </div>
                            <div class="card-block">
                                <h4 style="color: darkred;" class="card-title">
                                    Plagiarism Check
                                </h4>
                                <p style="font-weight: bold;font-size: 15px;"> No matter the length of your manuscript, <br>we have a standard price .</p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Full manuscript writing  -->
                    <div style="padding-top: 10px;" class="col-xs-12 col-lg-4">
                        <div class=" card ">
                            <div class="card-header ">
                                <h3><span class="currency ">$</span>**</h3>
                            </div>
                            <div class="card-block ">
                                <h4 style="color: darkred;" class="card-title ">
                                    Full manuscript writing
                                </h4>
                                <p style="font-weight: bold;font-size: 15px;"> Please contact us to get a quotation.<br> Price depends on the target journal, <br>data analysis requested, complexity <br>of the study, etc.</p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Bioinformatic data analysis  -->
                    <div style="padding-top: 10px;" class="col-xs-12 col-lg-4 ">
                        <div class="card ">
                            <div class="card-header ">
                                <h3><span class="currency ">$</span>**</h3>
                            </div>
                            <div class="card-block ">
                                <h4 style="color: darkred;" class="card-title ">
                                    Bioinformatic data analysis
                                </h4>
                                <p style="font-weight: bold;font-size: 15px;"> Please contact us to get a quotation. <br>Price depends on the data analysis<br> requested, complexity of the<br> datasets, etc.</p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Journal recommendation-submission  -->
                    <div style="padding-top: 10px;" class="col-xs-12 col-lg-4 ">
                        <div class="card ">
                            <div class="card-header ">
                                <h3><span class="currency ">$</span>200</h3>
                            </div>
                            <div class="card-block ">
                                
                                <h4 style="color: darkred;" class="card-title ">
                                    Journal recommendation-submission
                                </h4>
                               <p style="font-weight: bold;font-size: 15px;"> it includes up to 5 journals suggestion,<br> cover letter drafting , manuscript <br>formatting and submission .</p>
                               
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- End Pricing Section -->
























       @endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about_usController extends Controller
{
    public function about(){
        return view('about');
     }
     public function services(){
        return view('service');
     }
      public function Why_Choose_Us(){
        return view('Why_Choose_Us');
     }
      public function Contact_Us(){
        return view('ContactUs');
     }
      public function pricing(){
        return view('pricing');
     }
      public function portfolio(){
        return view('portfolio');
     }
      public function 	faqs(){
        return view('FAQS');
     }
      public function Testimonials(){
        return view('Testimonials');
       }
}

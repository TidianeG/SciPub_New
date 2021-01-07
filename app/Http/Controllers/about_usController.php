<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;

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

       
   public function contact() {
      return view('ContactUs');
    }

    public function dashbord() {
      return view('my_message');
    }
       public function CreateForm(Request $request) {       
   
      $contact = new Contact();
      $data = $request->validate([
         'name'=>'required|min:3',
         'email' => 'required|min:4|email',
         'subjet' => 'required|max:1000000',
         'message' => 'required|min:3|max:1000000'  
     ]);       
    
     $contact->name = $request->input('name');
     $contact->email = $request->input('email');
      $contact->subjet = $request->input('subjet');
       $contact->message= $request->input('message');
     $contact->save();
     return redirect()->back()->with('success', 'Your message has send successfuly');
     }
}

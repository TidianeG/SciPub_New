<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    
    public $fillable = ['name','email','subjet','message'];

public function Contact(){
         return $this->belongsToMany("App\Contact");

     }
}
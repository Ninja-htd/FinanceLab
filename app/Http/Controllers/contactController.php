<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
class contactController extends Controller
{
    function contact(){
        return view('contact');
    }
    function ajout(Request $request){
contact::create([
  'email'=>$request->email,
  'message'=>$request->message,
]);
          
    }
}
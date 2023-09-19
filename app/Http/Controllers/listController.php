<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listController extends Controller
{
    function liste(){
        return view('welcome');
    }
}

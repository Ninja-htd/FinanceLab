<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Liste_des_projectsController extends Controller
{
    function liste(){
        return view('Liste_des_projects');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class ProjetController extends Controller
{
    function index() {
        return view('projects');
    }
    function ajout(Request $request){
        project::create([
            'type' =>$request->type,
            'nom' =>$request->nom,
            'secteur' =>$request->secteur,
            'description' =>$request->description,
            'budget' =>$request->budget,
        ]);
        return redirect()->back()->with('Succes', 'Projet enrégirtrer');
    }
    // function edit(Request $request){
    //     return view('edit',['project'=> $request]);
    // }

    // function delete(Request $request){
    //     $request->delete();
    //     return redirect()->back()->with('Succes', 'Project Supprimer !');
    // }
}

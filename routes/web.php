<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// for contact page
Route:: get('/contact', [\App\Http\Controllers\twitterController::class, 'youtube']);
Route:: post('/contact', [\App\Http\Controllers\contactController::class, 'ajout']);
// for liste page
Route::get('/welcome',[\App\Http\Controllers\homeController::class, 'liste']);
Route::get('/welcome',[\App\Http\Controllers\listController::class, 'liste']);
Route:: post('/projects',[ \App\Http\Controllers\ProjetController:: class, 'ajout']);
// for  home pages 
Route:: get('/Liste_des_projects',[ \App\Http\Controllers\Liste_des_projectsController:: class, 'liste']);
Route:: get('/contact',[ \App\Http\Controllers\contactController:: class, 'contact']);
Route:: get('/projects',[ \App\Http\Controllers\ProjetController:: class, 'index'])->name('info_projet');
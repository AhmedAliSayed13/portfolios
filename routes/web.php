<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/skills', [HomeController::class, 'skills'])->name('skills');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/experience', [HomeController::class, 'experience'])->name('experience');


Route::group(['prefix'=>'portfolio'], function(){
    Route::get('/Travel2Drive', [ProjectController::class, 'Travel2Drive'])->name('Travel2Drive');
    Route::get('/almaali', [ProjectController::class, 'almaali'])->name('almaali');
    Route::get('/apptriner', [ProjectController::class, 'apptriner'])->name('apptriner');
});
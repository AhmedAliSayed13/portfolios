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
    Route::get('/char', [ProjectController::class, 'char'])->name('char');
    Route::get('/forms', [ProjectController::class, 'forms'])->name('forms');
    Route::get('/jumeirah', [ProjectController::class, 'jumeirah'])->name('jumeirah');
    Route::get('/market', [ProjectController::class, 'market'])->name('market');
    Route::get('/moe', [ProjectController::class, 'moe'])->name('moe');
    Route::get('/pk', [ProjectController::class, 'pk'])->name('pk');
    Route::get('/lms', [ProjectController::class, 'lms'])->name('lms');
    Route::get('/ozone', [ProjectController::class, 'ozone'])->name('ozone');
    Route::get('/blue', [ProjectController::class, 'blue'])->name('blue');
    Route::get('/comax', [ProjectController::class, 'comax'])->name('comax');
    Route::get('/fourA', [ProjectController::class, 'fourA'])->name('fourA');
    Route::get('/smart', [ProjectController::class, 'smart'])->name('smart');
    Route::get('/housing', [ProjectController::class, 'housing'])->name('housing');
    Route::get('/cyper', [ProjectController::class, 'cyper'])->name('cyper');
    Route::get('/kpi', [ProjectController::class, 'kpi'])->name('kpi');
    Route::get('/school', [ProjectController::class, 'school'])->name('school');

});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\IndexController ;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\authcontroller;
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

// Route::get('/', function () {
//     return view('index');
// });


    
Route::get('/' , [IndexController::class , 'index'])->name('index');
Route::post('/index/store' , [IndexController::class , 'store'])->name('index-store');
Route::get('/index/contact' , [IndexController::class , 'contact'])->name('index-contact');
Route::DELETE('/index/destroy/{id}' , [IndexController::class , 'destroy'], function ($id) {
    return 'data '.$id;
})->name('index-destroy');
Route::get('/home', [App\Http\Controllers\HomeController::class ,'index']);


// auth 
Route::get('/login' , [authcontroller::class , 'login'])->name('login');
Route::post('/auth_login' , [authcontroller::class , 'auth_login'])->name('auth_login');
Route::get('/register' , [authcontroller::class , 'register'])->name('register');
Route::post('/at_register' , [authcontroller::class , 'at_register'])->name('at_register');
Route::post('/logout' , [authcontroller::class , 'logout'])->name('logout');


// Route::get('/destroy-skills' , [SkillsController::class , 'destroy'])->name('destroy-skills');

Route::prefix('admin')->middleware('auth')->group(function(){
    
    Route::resource('skills', SkillsController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('project', ProjectController::class);
});


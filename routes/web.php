<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SendMailController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


Route::get('index',[Controller::class,('show')])->name('index');

Route::get('About',[Controller::class,('about')])->name('About');

Route::get('guarder',[Controller::class,('guarder')])->name('guarder');

Route::get('service',[Controller::class,('service')])->name('service');

Route::get('contact',[Controller::class,('contact')])->name('contact');

Route::post('contactMail',[Controller::class,('contactMailSend')])->name('contactMail');

});

Route::get('test30',[Controller::class,('getSession')]);

Route::get('test50',[Controller::class,('createSession')]);

Route::get('test100',[Controller::class,('flashSession')]);







Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('test20',[LoginController::class,('createSession')]);





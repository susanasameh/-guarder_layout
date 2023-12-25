<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('index',[Controller::class,('show')])->name('index');

Route::get('About',[Controller::class,('about')])->name('About');

Route::get('guard',[Controller::class,('guard')])->name('guard');

Route::get('service',[Controller::class,('service')])->name('service');

Route::get('contact',[Controller::class,('contact')])->name('contact');




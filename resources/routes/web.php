<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\participantcontroller;
use App\Http\Controllers\planningController;


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
    return view('layout');
});

Route::get('/event.html', function () {
    return view('event');
});
Route::get('/planning.html', function () {
    return view('planning');
});
Route::get('/contact.html', function () {
    return view('Contact');
});
Route::get('/activite.html', function () {
    return view('activite');
});
Route::get('/client.php', function () {
    return view('client');
});


route::get('activite', [myController::class,'index']);
route::get('contact', [ContactController::class,'show']);
route::get('THE29', [HomeController::class,'show']);
route::get('evenements', [EventController::class,'index']);
route::get('planning', [planningController::class,'index']);
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::get("/participant",[participantcontroller::class,"index"]);
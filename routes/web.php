<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ReservationController;


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
  return view('cofeshop');
});

Route::get('/login', function () {
  return view('login');
});



Route::view('register','register');

Route::post('store',[RegisterController::class,'store']);

Route::view('reservation','reservation');

Route::post('authenticate',[LoginController::class,'authenticate']);



Route::get('logout',[LoginController::class,'logout']);


Route::post('/store1', [ReservationController::class, 'store1'])->name('reservation.store1');


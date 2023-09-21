<?php

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
    return view('layouts/main', ["title"=>"main"]);
});
Route::get('/home', function () {
    return view('home', ["title"=>"Home"]);
});

Route::get('/game', function () {
    return view('game', ["title"=>"Games"]);
});

Route::get('/register', function () {
    return view('register', ["title"=>"Register"]);
});
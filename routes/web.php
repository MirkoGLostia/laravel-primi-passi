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

    $data = [
        "utente" => 'user',
        "nomi" => ["mirko", "massimo"],
    ];

    return view('home', $data);
})->name('home');

Route::get('/another', function() {

    return view('another');
})->name('another');

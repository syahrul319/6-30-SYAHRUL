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



Route::get('/about', function () {
    return view('about', [
        "nama" => "Syahrul Romadhoni",
        "email"=> "3103120216@student.smktelkom-pwt.sch.id",
        "gambar" => "30_SYAHRUL ROMADHONI.jpg"
    ]);
});

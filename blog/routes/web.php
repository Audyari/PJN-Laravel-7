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
    return view('welcome');
});

Route::get('/test', function () {
    return "hello test";
});

Route::redirect('/', '/test'); 

Route::fallback(function () {
    return "Halaman Tidak Ditemukan";
});

Route::get("/hello", function () {
    return view("hello", [
        "name" => "Audyari",
        "age"=> "42",
        "alamat"=> "Jl. Raya"
    ]);
});

//Route::view("/hello", "hello", ["name" => "Audyari"]);

Route::get("/hello-world", function () {
    return view("hello.world", ['name'=> 'Audyari']);
});

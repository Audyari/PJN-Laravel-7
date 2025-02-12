<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\InputController;


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
})->name("test");

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
})->name("hello.world");

Route::get('/profile/{id?}/', function (string $id = '0', string $age = '0') {
    return view('profile', ['id' => $id, 'age' => $age]);
})->where('id', '[0-9]+')->where('age', '[0-9]+')->name('profile.name');


Route::get('/profile/{id?}/age/{age?}', function (string $id = '0', string $age = '0') {
    return view('profile', ['id' => $id, 'age' => $age]);
})->where('id', '[0-9]+')->where('age', '[0-9]+')->name('profile.name');


Route::get('/conflik/{name}', function (String $name = "audyari" ) {
    return view('conflik', ['name' => $name]);
});

Route::get('/conflik/Asep', function () {
    return "Asep";    
});

Route::get('/NamedRoute', function () {
    $link = route('test');
    return "Link: $link";
});

Route::get('/NamedRouteA', function () {
    return redirect()->route('test');
});


// penggunaan controlller
Route::get('/controler/hello', [HelloController::class, 'Hello'])->name('hello.world');

Route::get('/controler/helloService/{name}', [HelloController::class, 'helloService'])->name('hello.service');

Route::get('/request',[HelloController::class, 'request'])->name('hello.request');

Route::get('/input', [InputController::class, 'index'])->name('hello.index');

Route::post('/input',[InputController::class, 'input'])->name('hello.input');

Route::get('/nasted', [InputController::class, 'helloFirstName'])->name('hello.nasted');

Route::post('/nasted', [InputController::class, 'helloFirstName'])->name('hello.nastedPost');

Route::post('/greet', [InputController::class, 'helloInput'])->name('hello.greet');

Route::post('/input/type', [InputController::class, 'inputType'])->name('hello.inputType');

Route::post('/filter/only', [InputController::class, 'filterOnly'])->name('hello.filterOnly');

Route::post('/filter/except', [InputController::class, 'filterExcept'])->name('hello.filterExcept');

Route::post('/input/filter/merge', [InputController::class, 'filterMerge'])->name('hello.filterMerge');
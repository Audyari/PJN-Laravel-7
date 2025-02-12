<?php

namespace App\Http\Controllers;

use App\Service\HelloService;
use Illuminate\Http\Request;


class helloController extends Controller
{

    public $helloService;


    public function __construct(HelloService $helloService)
    {
        $this->helloService = $helloService;
    }

    public function Hello()
    {
        return "hello from controller";
    }
   
    public function helloService($name)
    {
        $interface = $this->helloService->hello($name);
        $interface2 = $this->helloService;
        $interface3 = $this->helloService;
        dump($interface);
        dump($interface2);
        dump($interface3);
        return $interface;
      
    }

    public function request(Request $request)
    {
         // Menampilkan URL lengkap dari permintaan
    dump($request->url());

    // Menampilkan path dari permintaan
    dump($request->path());

    // Menampilkan metode HTTP yang digunakan (GET, POST, dll)
    dump($request->method());

    // Menampilkan semua input yang diterima
    dump($request->all());

    // Menampilkan input tertentu
    dump($request->input('key')); // ganti 'key' dengan nama input yang ingin ditampilkan

    // Menampilkan data query string
    dump($request->query());

    // Menampilkan header dari permintaan
    dump($request->headers->all());

    // Menampilkan alamat IP pengguna
    dump($request->ip());

    // Menampilkan user agent
    dump($request->userAgent());

    // Menampilkan sesi (jika ada)
    dump($request->session()->all());

        return "hello from request";
    }
}

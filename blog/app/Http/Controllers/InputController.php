<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{

    public function index(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        return view('input', [
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
    }

    public function input(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        return view('input', [
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
    }

    public function helloFirstName(Request $request)

    {
        $name = $request->input('name.first');        
        $lastName = $request->input('name.last');

        return view('nasted', [
            'name' => $name,
            'last' => $lastName
        ]);
    }

    public function nasted()

    {
        return view('nasted');
    }

    public function helloInput(Request $request)
    {
        //$name = $request->input();
        $names = $request->input("products.*.name");
        //$prices = $request->input("products.*.price");
     
        return $names;
    }



}

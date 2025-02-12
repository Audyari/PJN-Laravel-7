<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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

    public function inputType(Request $request)
    {
        
        $name = $request->input('name');
        $married = $request->boolean('marrige');
        $birtDate = Carbon::createFromFormat('Y-m-d', $request->input('birtDate'));
       
       
    
        return json_encode([
            'name' => $name,
            'married' => $married,
            'birtDate' => $birtDate ? $birtDate->toDateString() : null
           
           
        ]);
    }

    public function filterOnly(Request $request)
    {
        //$name = $request->only(['name.first', 'name.last']);
        $name = $request->only(['name.first', 'name.last']);

        return json_encode($name);
    }

    public function filterExcept(Request $request)

    {
        $user = $request->except(['admin']);
        return json_encode($user);

    }

    public function filterMerge(Request $request)
    {
        $request->merge([
            'admin' => true,
            'name' => [
                'first' => "Audyari", 
                'last' => "Wiyono"  
            ]
        ]);
    

        $user = $request->input();
        return json_encode($user);

    }
}

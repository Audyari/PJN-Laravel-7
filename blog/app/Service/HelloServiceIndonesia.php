<?php

namespace App\Service;
use App\Entity\User;
use App\Service\HelloService;

class HelloServiceIndonesia implements HelloService
{
    public function hello(String $name ):String
    {
        return "Halo nama kamu $name";
    }

  
}
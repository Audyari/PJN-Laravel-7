<?php

namespace App\Data;

class Person
{

    public $firstName; // Deklarasikan properti
    public $lastName;  // Deklarasikan properti
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName; // Inisialisasi properti
        $this->lastName = $lastName;   // Inisialisasi properti
    }
}


?>
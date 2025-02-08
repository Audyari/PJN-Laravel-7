<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


// php artisan test tests/Feature/ConfigurationTest.php
class ConfigurationTest extends TestCase
{
   public function testConfig(){

    $firtName = config("contoh.name.first");
    $lastName = config("contoh.name.last");
    $email = config("contoh.email");
    $web = config("contoh.web");

    dump($firtName);
    dump($lastName);
    dump($email);
    dump($web);

    self::assertEquals("Audyari", $firtName);
    self::assertEquals("Wiyono", $lastName);
    self::assertEquals("audyari.wiyono@ui.ac.id", $email);
    self::assertEquals("https://github.com/audyariw", $web);

   }
}

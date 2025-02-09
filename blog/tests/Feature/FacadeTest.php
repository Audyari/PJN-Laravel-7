<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

// php artisan test tests/Feature/FacadeTest.php
class FacadeTest extends TestCase
{
       public function testFacade()
    {
       $firtName = Config::get("contoh.name.first");
       $lastName = Config::get("contoh.name.last");
       $email = Config::get("contoh.email");
       $web = Config::get("contoh.web");

       $config = config("contoh");

       dump($firtName);
       dump($lastName);
       dump($email);
       dump($web);

       dump($config);

       Log::info("Audyari");
       Log::info("Wiyono");
    }


    // php artisan test tests/Feature/FacadeTest.php --filter testConfigDependecy
    public function testConfigDependecy()
    {
        $config = $this->app->make("config");

        $firstName = $config->get("contoh.name.first");
        $lastName = $config->get("contoh.name.last");

        dump($firstName ." ". $lastName);

    }

    // php artisan test tests/Feature/FacadeTest.php --filter testConfigMock
    public function testConfigMock()
    {
        Config::shouldReceive("get")
        ->with("contoh.name.first")
        ->andReturn("Audyari Mocking");

        Config::shouldReceive("get")
        ->with("contoh.name.last")
        ->andReturn("Wiyono Mocking");

        $firstName = Config::get("contoh.name.first");
        $lastName = Config::get("contoh.name.last");

        dump($firstName ." ". $lastName);
    }
}

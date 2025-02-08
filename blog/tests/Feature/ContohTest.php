<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tests\Traits\CreateUser;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Env;

// php artisan test tests/Feature/ContohTest.php

class ContohTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAnother()
    {
       
        $appName1 = config('app.name');
        $appUrl = config('app.url');
        $response = $this->get('/');

        dump($appName1);

        Config::set('app.name', 'Laravel123');

        $appName1 = config('app.name');

        dump($appName1);

        $appName1 = Env::get('APP_NAME');

        dump($appName1);


        // $appName1 = env('APP_NAME', 'Laravel');
        // $appUrl = env('APP_URL', 'http://localhost');
    

        // dump($appName1); 
        // dump($appUrl);

        // $this->assertEquals('Laravel', $appName1);
        // $this->assertEquals('http://localhost', $appUrl);

    
    }
}

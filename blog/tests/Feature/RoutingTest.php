<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


// php artisan test tests/Feature/RoutingTest.php
class RoutingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    
     // php artisan test tests/Feature/RoutingTest.php --filter testGet
    public function testGet()
    {
       $this->get('/test')
       ->assertStatus(200)
       ->assertSeeText('hello test');
      
    }

    // php artisan test tests/Feature/RoutingTest.php --filter testRedirect
    public function testRedirect()
    {
        $this->get('/')
        ->assertStatus(302)
        ->assertRedirect('/test');
    }

    // php artisan test tests/Feature/RoutingTest.php --filter testRouteNotFound
    public function testRouteNotFound()
    {
        $this->get('/halaman-tidak-ditemukan')
        ->assertStatus(200)
        ->assertSeeText('Halaman Tidak Ditemukan');
    }

    // php artisan test tests/Feature/RoutingTest.php --filter testRouteParameter
    public function testRouteParameter()
    {
        $this->get('/profile/1')
        ->assertSeeText('Profile 1');

      
        $this->get('/profile/1/age/42')
        ->assertSeeText('Profile 1, age 42');

    }

    // php artisan test tests/Feature/RoutingTest.php --filter testRouteParameterRegex
    public function testRouteParameterRegex()
    {
        $this->get('/profile/Audyari/age/42')
        ->assertSeeText('Profile Audyari, age 42');

    }

}

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
  

}

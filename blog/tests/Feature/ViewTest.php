<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    // php artisan test tests/Feature/ViewTest.php --filter testView
    public function testView()
    {
  
        $this->get('hello')
         ->assertSee('Nama Kamu : Audyari');
    
     $this->get('hello/world')
         ->assertSee('Nama Kamu : Audyari');
    
    
    }

    // php artisan test tests/Feature/ViewTest.php --filter testView2
    public function testView2()
    {
        $response = view('hello', [
            'name' => 'Audyari',
            'age' => 20,
            'alamat' => 'Bandung',]);
        
        $this->assertStringContainsString('Nama Kamu : Audyari', $response->render());
    }

}

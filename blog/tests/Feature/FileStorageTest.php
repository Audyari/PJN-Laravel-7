<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;

class FileStorageTest extends TestCase
{
  
    // php artisan test tests/Feature/FileStorageTest.php --filter testStorage
    public function testStorage()
    {
        $filesystem = Storage::disk('public');    
        $filesystem->put('test.txt', 'Coba data lain');
        dump($filesystem->get('test.txt'));   
    }
}

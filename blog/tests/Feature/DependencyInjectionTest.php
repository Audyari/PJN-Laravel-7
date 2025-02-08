<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Data\Foo;
use App\Data\Bar;

// php artisan test tests/Feature/DependencyInjectionTest.php
class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $foo = new Foo();
        $bar = new Bar($foo);

        dump( $foo->foo() );
        dump( $bar->bar() );

        //$this->assertSame(" Ini Foo", $bar->bar());
    }
}

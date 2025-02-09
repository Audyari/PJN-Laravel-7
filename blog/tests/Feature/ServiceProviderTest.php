<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Data\Foo;
use App\Data\Bar;
use App\Service\HelloService;




class ServiceProviderTest extends TestCase
{

  
    // php artisan test tests/Feature/ServiceProviderTest.php --filter testServiceProvider
       public function testServiceProvider()
    {
       $foo1 = $this->app->make(Foo::class);
       $bar1 = $this->app->make(Bar::class);
       $foo2 = $this->app->make(Foo::class);
       $bar2 = $this->app->make(Bar::class);

       dump($foo1);
       dump($foo2);
       dump($bar1);
       dump($bar2);

   
    }

    // php artisan test tests/Feature/ServiceProviderTest.php --filter testPropertySingleton
    public function testPropertySingleton()

    {
      
      $interface1 = $this->app->make(HelloService::class);
      $interface2 = $this->app->make(HelloService::class);

      dump($interface1);
      dump($interface2);

      $this->assertSame($interface1, $interface2);
    }

    // php artisan test tests/Feature/ServiceProviderTest.php testEmpty
    public function testEmpty()
    {
      $this->assertTrue(true);
    }
}

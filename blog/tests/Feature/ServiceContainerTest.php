<?php

namespace Tests\Feature;

use App\Data\Foo;
use Tests\TestCase;
use App\Data\Person;
use App\Data\Bar;
use App\Service\HelloServiceIndonesia;
use App\Service\HelloService;


// php artisan test tests/Feature/ServiceContainerTest.php
class ServiceContainerTest extends TestCase
{

    //php artisan test tests/Feature/ServiceContainerTest.php --filter testCreateDependency
    public function testCreateDependency(){

        $foo = $this->app->make(Foo::class);
        $foo1 = $this->app->make(Foo::class);

        dump($foo);
        dump($foo1);
    }

    //php artisan test tests/Feature/ServiceContainerTest.php --filter testBind
    public function testBind(){

        //$person = $this->app->make(Person::class);

        // Binding Bar ke Foo
        $this->app->bind(Bar::class, function ($app) {
            return new Bar($app->make(Foo::class));
        });

        $this->app->bind(Person::class, function ($app) {
            return new Person("Audyari", "Wiyono");
        });

        $person = $this->app->make(Person::class);
        $bar = $this->app->make(Bar::class);
        $person1 = $this->app->make(Person::class);

        dump($person);
        dump($bar);
        dump($person1);

    }

    // php artisan test tests/Feature/ServiceContainerTest.php --filter testSingleton
    public function testSingleton(){

        $this->app->singleton(Bar::class, function ($app) {
            return new Bar($app->make(Foo::class));
        });

        $this->app->singleton(Person::class, function ($app) {
            return new Person("Audyari", "Wiyono");
        });

        $person = $this->app->make(Person::class);
        $bar = $this->app->make(Bar::class);
        $person1 = $this->app->make(Person::class);

        dump($person);
        dump($person1);
        dump($bar);
      
    }

    // php artisan test tests/Feature/ServiceContainerTest.php --filter testInstance

    public function testInstance(){

        $person = new Person("Audyari","Wiyono");
        $this->app->instance(Person::class, $person);

        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);

        dump($person1);
        dump($person2);

        $bar = new Bar(new Foo());
        $this->app->instance(Bar::class, $bar);

        $bar1 = $this->app->make(Bar::class);
        $bar2 = $this->app->make(Bar::class);

        dump($bar);
        dump($bar1);
        dump($bar2);
        dump($bar1->bar());
        dump($bar2->bar());
    }

    // php artisan test tests/Feature/ServiceContainerTest.php --filter testDependenctInjetion
    public function testDependenctInjetion()
    {
        $this->app->singleton(Foo::class, function ($app) {
            return new Foo();
        });

        $this->app->singleton(Bar::class, function ($app) {
            return new Bar($app->make(Foo::class));
        });

        $foo = $this->app->make(Foo::class);
        $bar1 = $this->app->make(Bar::class);
        $bar2 = $this->app->make(Bar::class);

        dump($foo);
        dump($bar1);
        dump($bar2);
    }


    // php artisan test tests/Feature/ServiceContainerTest.php --filter testInterface
    public function testInterface()
    {

        //$this->app->singleton(HelloService::class, HelloServiceIndonesia::class);

        $this->app->singleton(HelloService::class, function ($app) {
            return new HelloServiceIndonesia();
        });

        $interface1 = $this->app->make(HelloService::class);
        $interface2 = $this->app->make(HelloService::class);

        dump($interface1);
        dump($interface2);

        dump($interface1->hello("Audyari"));
        dump($interface2->hello("Audyari"));
        dump($interface1->hello(""));
       
    }
}
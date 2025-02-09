<?php

namespace App\Providers;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use App\Data\Foo;
use App\Data\Bar;
use App\Service\HelloService;
use App\Service\HelloServiceIndonesia;

class FooBarServiceProvider extends ServiceProvider implements DeferrableProvider

{
    public $singletons = [
        HelloService::class => HelloServiceIndonesia::class,
    ];

    public function register()
    {

        //echo " Test Panggil Register FooBarServiceProvider" . PHP_EOL;
       
        $this->app->singleton(Foo::class, function () {
            return new Foo();
        });

        $this->app->singleton(Bar::class, function ($app) {
            return new Bar($app->make(Foo::class));
        });

        //$this->app->singleton(HelloService::class, HelloServiceIndonesia::class);


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    public function provides()
    {
        return [Foo::class, Bar::class, HelloService::class, HelloServiceIndonesia::class];
      
    }
}

<?php

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Support\Facades\App;


// php artisan test tests/Feature/EnvironmentTest.php

class EnvironmentTest extends TestCase
{
   public function testEnvironment()
   {

          dump(App::environment());

         if (App::environment("testing") ) {
            dump("hasil nya true") ;
         }else {
            dump("hasil nya false") ;
         }
   }
}



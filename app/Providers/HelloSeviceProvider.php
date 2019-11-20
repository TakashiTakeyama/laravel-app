<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloSeviceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function boot() {
        View::composer(
            'hello.index', function($view) {
                $view->with('view_message', 'composer message!');
            }
        );
    }
    public function register()
    {
        
    }
}

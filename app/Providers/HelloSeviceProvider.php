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
        // View::composer(
        //     'hello.index', function($view) {
        //         $view->with('view_message', 'composer message!');
        //     }
        // );
        // View::composer(
        //     'hello.index', 'App\Http\Composers\HelloComposer'
        // );

        // $validator = $this->app['validator'];
        // $validator->resolver(function($translator, $data, $rules, $message) {
        //     return new HelloValidator($translator, $data, $rules, $message);
        // });

        validator::extend('hello', function($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
    }
    public function register()
    {

    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Example;
use \App\Components\Example\ExampleService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('pdf-service', function() {
            return new \Mpdf\Mpdf();
        });

        // app()->bind()
        // Singleton - returns instance only once 
        // $this->app->singleton('example', function() {
        //     // $collaborator = new App\Collaborator();
        //     // $token = config('services.my_token');
        
        //     return new Example( );
        // });

        // BIND - returns new instance every time we call resolve('example')
        // $this->app->bind('example', function() {
        //     $collaborator = new App\Collaborator();
        //     $token = config('services.my_token');
        //     $userInput = request('user-input');
        
        //     return new Example( $collaborator, $token);
        // });

        // app()->bind('pdf-generator', function() {
        //     // return new \Mpdf\Mpdf(); 
        //     $tempDir =  config('services.pdf_generator_temp_dir');
        //     return new \Mpdf\Mpdf([$tempDir]);
        // });

        // singelton
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

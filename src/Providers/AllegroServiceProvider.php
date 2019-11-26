<?php
namespace CNetic\Allegro\Providers;

use Illuminate\Support\ServiceProvider;

/**
* Allegro service provider
*
* @author    Piotr Sędek
* @copyright 2019 CNetic Software
*/
class AllegroServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        include __DIR__ . '/../Http/routes.php';
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'allegro');
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'allegro');
    }

    /**
    * Register services.
    *
    * @return void
    */
    public function register()
    {

    }
}
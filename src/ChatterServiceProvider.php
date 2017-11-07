<?php

namespace WEBNinja\Chatter;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ChatterServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
    	$this->publishes([
		    __DIR__.'/config.php' => config_path('chatter.php')
	    ]);

    	$this->loadMigrationsFrom(__DIR__.'/../database/migrations');

    	$options = [
		    'prefix' => config('chatter.route_prefix', 'chatter'),
		    'namespace' => '\WEBNinja\Chatter\Http\Controllers'
	    ];

    	if(!empty($middleware = config('chatter.route_middleware', ''))){
    		$options['middleware'] = $middleware;
	    }

	    $callback = function ($router) {
		    $router->all();
	    };

	    Route::group($options, function ($router) use ($callback) {
		    $callback(new RouteRegistrar($router));
	    });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
	    $this->app->bind('chatter', function(){
		    return new Chatter;
	    });
    }
}
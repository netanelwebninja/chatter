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
    	$config_source =  __DIR__.'/config.php';
    	$this->publishes([
		   $config_source => config_path('chatter.php')
	    ]);

    	$this->mergeConfigFrom($config_source, 'chatter');

    	$this->loadMigrationsFrom(__DIR__.'/../database/migrations');

    	$options = [
		    'prefix' => config('chatter.api.route_prefix', 'chatter'),
		    'namespace' => '\WEBNinja\Chatter\Http\Controllers'
	    ];

    	if(!empty($middleware = config('chatter.api.route_middleware', ''))){
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
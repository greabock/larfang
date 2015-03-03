<?php namespace App\User\Providers;

use Illuminate\Support\ServiceProvider;
use Route;

class MiddlewareServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

	}


	public function boot()
	{
		Route::middleware('auth', 'App\User\Http\Middleware\Authenticate');
		Route::middleware('guest', 'App\User\Http\Middleware\RedirectIfAuthenticated');
	}

}
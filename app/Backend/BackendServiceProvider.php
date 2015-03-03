<?php namespace App\Backend;

use App\Backend\Providers\RouteServiceProvider;
use App\Backend\Providers\ViewServiceProvider;
use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider{

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->register(RouteServiceProvider::class);
		$this->app->register(ViewServiceProvider::class);
	}
}
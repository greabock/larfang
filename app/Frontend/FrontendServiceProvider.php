<?php namespace App\Frontend;

use App\Frontend\Providers\RouteServiceProvider;
use App\Frontend\Providers\ViewServiceProvider;
use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider{

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
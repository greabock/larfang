<?php namespace App\User;

use App\User\Providers\DatabaseServiceProvider;
use App\User\Providers\MiddlewareServiceProvider;
use App\User\Providers\RegistrarServiceProvider;
use App\User\Providers\RouteServiceProvider;
use App\User\Providers\ViewServiceProvider;
use App\User\Providers\WidgetServiceProvider;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->register(RouteServiceProvider::class);
		$this->app->register(RegistrarServiceProvider::class);
		$this->app->register(MiddlewareServiceProvider::class);
		$this->app->register(DatabaseServiceProvider::class);
		$this->app->register(ViewServiceProvider::class);
		$this->app->register(WidgetServiceProvider::class);
	}
}
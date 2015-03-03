<?php namespace App\Core;

use App\Core\Providers\BusServiceProvider;
use App\Core\Providers\ConfigServiceProvider;
use App\Core\Providers\DatabaseServiceProvider;
use App\Core\Providers\EventServiceProvider;
use App\Core\Providers\InstallerProvider;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->register(BusServiceProvider::class);
		$this->app->register(ConfigServiceProvider::class);
		$this->app->register(EventServiceProvider::class);
		$this->app->register(InstallerProvider::class);
		$this->app->register(DatabaseServiceProvider::class);
	}

}
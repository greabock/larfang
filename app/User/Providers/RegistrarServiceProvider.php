<?php namespace App\User\Providers;

use Illuminate\Support\ServiceProvider;
use App\User\Services\Registrar;
use Illuminate\Contracts\Auth\Registrar as RegistrarInterface;

class RegistrarServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			RegistrarInterface::class,
			Registrar::class
		);
	}

}
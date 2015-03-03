<?php namespace App\Core\Providers;

use App\Core\Services\InstallerCollection;
use Illuminate\Support\ServiceProvider;

class InstallerProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

		$installers = $this->app->make(InstallerCollection::class);

		$this->app->instance(InstallerCollection::class, $installers);
	}

}
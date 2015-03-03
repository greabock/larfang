<?php namespace App\User\Providers;

use Illuminate\Support\ServiceProvider;
use App\User\Console\Commands\UserCommand;
use App\Core\Services\InstallerCollection;

class DatabaseServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

		$this->app->bind('larfang:user', function ()
		{
			return $this->app->make(UserCommand::class);
		});

		$this->commands(['larfang:user']);

		$this->app->make(InstallerCollection::class)->add('larfang:user');

	}

}
<?php namespace App\Core\Providers;

use App\Core\Console\Commands\CoreCommand;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('larfang:core', function ($app)
		{
			return $app->make(CoreCommand::class);
		});

		$this->commands(['larfang:core']);
	}

}
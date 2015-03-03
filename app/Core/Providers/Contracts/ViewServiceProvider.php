<?php namespace App\Core\Providers\Contracts;

use Illuminate\Support\ServiceProvider;

abstract class ViewServiceProvider extends ServiceProvider{

	/**
	 * @var string
	 */
	protected $dir;

	/**
	 * @var string
	 */
	protected $package;

	/**
	 * @var string
	 */
	protected $pathFrom;

	/**
	 * @var string
	 */
	protected $pathTo;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->pathFrom = $this->dir . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'views';

		$this->pathTo = base_path('resources/views/vendor/'. $this->package);
	}


	/**
	 * Boot the service provider
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom($this->pathFrom, $this->package);

		$this->publishes([ $this->pathFrom => $this->pathTo ]);
	}

}
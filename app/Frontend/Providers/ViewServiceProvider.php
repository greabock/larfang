<?php namespace App\Frontend\Providers;

use  App\Core\Providers\Contracts\ViewServiceProvider as ServiceProvider;


class ViewServiceProvider extends ServiceProvider {

	protected $dir = __DIR__;

	/**
	 * @var string
	 */
	protected $package = 'larfang/frontend';

}
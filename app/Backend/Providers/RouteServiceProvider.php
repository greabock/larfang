<?php namespace App\Backend\Providers;

use App\Core\Providers\Contracts\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Backend\Http\Controllers';


	protected $path = 'Backend/Http/routes.php';

}
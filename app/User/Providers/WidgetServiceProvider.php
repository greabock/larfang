<?php namespace App\User\Providers;

use Illuminate\Support\ServiceProvider;
use Widget;
use App\User\Widgets\BackendUserBarWidget;

class WidgetServiceProvider extends ServiceProvider{

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

	}

	public function boot()
	{
		Widget::register(BackendUserBarWidget::class, 'backend-user-bar', 'right-top-bar', 1);
	}
}
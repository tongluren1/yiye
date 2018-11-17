<?php

namespace Admin\Yiye;

use Illuminate\Support\ServiceProvider;

class YiyeServiceProvider extends ServiceProvider
{

    /**
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . 'views', 'yiye');
		$this->publishes([
			__DIR__.'/views' => base_path('resources/views/vendor/yiye'),
			__DIR__.'/config/yiye.php' => config_path('yiye.php'),
		]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('yiye', function($app) {
			return new Yiye($app['session'], $app['config']);
		});
    }

	public function provides()
	{
		return ['yiye'];
	}
}

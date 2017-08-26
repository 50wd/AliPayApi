<?php namespace Wlkj\AliPayApi;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AliPayApiServiceProvider extends ServiceProvider {

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		
		
	}

	
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{        
        $this->app['AliPayApi'] = new \Wlkj\WeixinApi\WeixinApi();
	}

}

<?php namespace Wlkj\AliPayApi\Facades;

use Illuminate\Support\Facades\Facade;

class AliPayApi extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'AliPayApi';
	}
}

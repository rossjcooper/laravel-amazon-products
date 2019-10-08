<?php

namespace Rossjcooper\LaravelAmazonProducts\Facades;

use Illuminate\Support\Facades\Facade;

class API extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'Rossjcooper\LaravelAmazonProducts\API';
	}
}

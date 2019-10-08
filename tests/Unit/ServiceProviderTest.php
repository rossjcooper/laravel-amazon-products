<?php

namespace Rossjcooper\LaravelAmazonProducts\Tests\Unit;

use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\api\DefaultApi;
use Rossjcooper\LaravelAmazonProducts\API;
use Rossjcooper\LaravelAmazonProducts\Facades\API as APIFacade;
use Rossjcooper\LaravelAmazonProducts\Tests\TestCase;

class ServiceProviderTest extends TestCase {
	
	public function test_service_provider_bindings()
	{
		$api = app(API::class);

		$this->assertInstanceOf(DefaultApi::class, $api);
	}

	public function test_facade_resolves()
	{
		$api = APIFacade::getFacadeRoot();

		$this->assertInstanceOf(DefaultApi::class, $api);
	}
}


<?php

namespace Rossjcooper\LaravelAmazonProducts;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Amazon\ProductAdvertisingAPI\v1\Configuration;
use GuzzleHttp\Client;

class ServiceProvider extends BaseServiceProvider
{
	/**
	 * Register the service provider.
	 */
	public function register()
	{
		//Bind the HubSpot wrapper class
		$this->app->singleton('Rossjcooper\LaravelAmazonProducts\API', function ($app) {
			$config = new Configuration();
			$config->setAccessKey(config('amazon_products.access_key', env('AMAZON_PRODUCTS_ACCESS_KEY')));
			$config->setSecretKey(config('amazon_products.secret_key', env('AMAZON_PRODUCTS_SECRET_KEY')));
			$config->setHost(config('amazon_products.host', 'webservices.amazon.com'));
			$config->setRegion(config('amazon_products.region', 'us-east-1'));
			$client = new Client();

			return new API($client, $config);
		});
	}

	/**
	 * Perform post-registration booting of services.
	 */
	public function boot()
	{
		// config
		$this->publishes([
			__DIR__.'/../config/amazon_products.php' => config_path('amazon_products.php'),
		], 'config');
	}
}

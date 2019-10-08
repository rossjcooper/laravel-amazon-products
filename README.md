# Amazon Products API SDK Wrapper for Laravel

[![Build Status](https://travis-ci.org/rossjcooper/laravel-amazon-products.svg?branch=master)](https://travis-ci.org/rossjcooper/laravel-amazon-products)

This is a wrapper for the [rossjcooper/paapiphpsdk](https://github.com/rossjcooper/paapiphpsdk) package and gives the user a Service Container binding and facade a configured instance of the `Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\api\DefaultApi` class.

## Installation
1. `composer require rossjcooper/laravel-amazon-products`
2. Laravel 5.4 or earlier, in your `config/app.php` file:
    - Add `Rossjcooper\LaravelAmazonProducts\ServiceProvider::class` to your providers array in `config/app.php`.
    - Add `'AmazonProductsAPI' => Rossjcooper\LaravelAmazonProducts\Facades\API::class` to your aliases array in `config/app.php`.
3. `php artisan vendor:publish --provider="Rossjcooper\LaravelAmazonProducts\ServiceProvider" --tag="config"` will create a `config/amazon_products.php` file.
4. Add your Amazon access and secret keys into the your `.env` file: 
```
AMAZON_PRODUCTS_ACCESS_KEY=youAccessKey
AMAZON_PRODUCTS_PRIVATE_KEY=youPrivateKey
```

For more info on using the actual SDK see the main repo [rossjcooper/paapiphpsdk](https://github.com/rossjcooper/paapiphpsdk)

## Testing

We're using the brilliant [Orchestra Testbench](https://github.com/orchestral/testbench) v4 to run unit tests in a Laravel based environment.

## Issues
Please only report issues relating to the Laravel side of things here, main API issues should be reported [here](https://github.com/rossjcooper/paapiphpsdk/issues)
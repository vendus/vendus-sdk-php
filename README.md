# Vendus SDK for PHP

The Vendus SDK for PHP is a library with powerful features that enable PHP developers to easily integrate with [Vendus API](https://www.vendus.pt/ws/), made available by [Vendus](https://www.vendus.pt/), an online invoicing software. 

By using this API, users can easily integrate third party software with Vendus.

## Sign up for a Vendus account
Before starting, please signup for a [Vendus](https://www.vendus.pt/) account, if you haven't already, and retrieve your *API KEY*.

## Minimum requirements
To run the SDK, your system will need to meet some minimum requirements, including having **PHP >= 5.4**.

We highly recommend having it compiled with the cURL extension and cURL 7.16.2+ compiled with a TLS backend (e.g., NSS or OpenSSL).

## Install the SDK
Using [Composer](http://getcomposer.org) is the recommended way to install the Vendus SDK for PHP. 

The SDK is available via [Packagist](http://packagist.org) under the [`vendus/vendus-sdk-php`](https://packagist.org/packages/vendus/vendus-sdk-php) package. 

Run this command:
```sh
composer require vendus/vendus-sdk-php
```

## Using the SDK
The best way to become familiar with how to use the SDK is to read the [Documentation](./docs/). 

We also have some [Examples](./docs/examples/) that may help you become familiar with the basic concepts.

## Disclaimer

This SDK is currenly being developed and should not be used in production. It will be ready in a couple of days.

## Opening Issues

If you encounter a bug with `vendus-sdk-php` we would like to hear about it. 

Search the existing issues and try to make sure your problem doesn’t already exist before opening a new issue.
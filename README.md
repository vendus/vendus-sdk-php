# Vendus SDK for PHP

Vendus SDK for PHP is an opensource library that enables PHP developers to integrate with [Vendus API](https://www.vendus.pt/ws/), made available by [Vendus](https://www.vendus.pt/), an online invoicing software. 

By using this API, users can easily integrate third party software with Vendus.

## Sign up for a Vendus account
Before starting, please signup for a [Vendus](https://www.vendus.pt/) account, if you haven't already, and retrieve your *API KEY*.

## System requirements

- Curl installed
- PHP 5.4 or greater with curl and openssl enabled
- [Composer](https://getcomposer.org/) *(optional)*

## Additional requirements for Windows
If you get errors like "SSL certificate error: unable to get local issuer certificate", you should follow these steps:
- Download bundle certificate: https://curl.haxx.se/ca/cacert.pem.
- Copy cacert.pem to a local folder - eg: c:\wamp\
- Open your php.ini and add the following lines at the end

```
curl.cainfo="C:/wamp/cacert.pem"
openssl.cafile="C:/wamp/cacert.pem"
```

- If your are using Wamp, besides editing the php.ini acessible through icon tray, also edit the file located at c:\wamp\bin\php\phpX.x.x\
- Restart all services.

## Install the SDK
Using [Composer](http://getcomposer.org) is the recommended way to install the Vendus SDK for PHP. 

The SDK is available via [Packagist](http://packagist.org) under the [`vendus/vendus-sdk-php`](https://packagist.org/packages/vendus/vendus-sdk-php) package. 

Run this command:
```sh
composer require vendus/vendus-sdk-php
```

## Using the SDK
The best way to become familiar with how to use the SDK is to read the [Documentation](./docs/). 

We also have some [Examples](./docs/examples/) that may help you become familiar with all the concepts.

Basically, you instantiate `Vendus\Api` and then, while specifying an endpoind, you issue one of the methods available: `list`, `get`, `create` or `update`.

A basic example on how to get a list of documents:

```php
<?php

require 'vendor/autoload.php';

$vendus    = new Vendus\Api('YOUR_API_KEY');
$documents = $vendus->documents->list();

?>
```

## Opening Issues

If you encounter a bug with `vendus-sdk-php` we would like to hear about it. 

Search the existing issues and try to make sure your problem doesn’t already exist before opening a new issue.
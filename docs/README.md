# Vendus SDK for PHP - Documentation

The Vendus SDK for PHP is a library with powerful features that enable PHP developers to easily integrate with [Vendus API](https://www.vendus.pt/ws/), an API made available by [Vendus](https://www.vendus.pt/), an online invoicing software. By using this API, users can easily integrate third party software with Vendus.

---

Whether you're developing an online shop, creating a Vendus Canvas app or Page tab, the Vendus SDK for PHP does all the heavy lifting for you making it as easy as possible to deeply integrate into the Vendus platform.

# Examples

We've prepared some fully functional [examples](./examples) to let you get started faster.

## Autoloading & namespaces

The Vendus SDK for PHP is coded in compliance with [PSR-4](http://www.php-fig.org/psr/psr-4/). This means it relies heavily on namespaces so that class files can be loaded for you automatically.

It would be advantageous to familiarize yourself with the concepts of [namespacing](http://php.net/manual/en/language.namespaces.rationale.php) and [autoloading](http://php.net/manual/en/function.spl-autoload-register.php) if you are not already acquainted with them.

## System requirements

- PHP 5.4 or greater
- [Composer](https://getcomposer.org/) *(optional)*

## Installing the Vendus SDK for PHP

There are two methods to install the Vendus SDK for PHP. The recommended installation method is by using [Composer](#installing-with-composer-recommended). If are unable to use Composer for your project, you can still [install the SDK manually](#manually-installing) by downloading the source files and including the autoloader.

## Installing with Composer (recommended)

[Composer](https://getcomposer.org/) is the recommended way to install the Vendus SDK for PHP. Simply run the following in the root of your project.

```
composer require vendus/vendus-sdk-php
```

Once you do this, composer will edit your `composer.json` file and download the latest version of the SDK and put it in the `/vendor/` directory.

Make sure to include the Composer autoloader at the top of your script.

```php
require_once __DIR__ . '/vendor/autoload.php';
```

## Manually installing

First, download the source code and unzip it wherever you like in your project.

Then include the autoloader provided in the SDK at the top of your script.

```php
require_once __DIR__ . '/path/to/vendus-php-sdk/src/autoload.php';
```

The autoloader should be able to auto-detect the proper location of the source code.

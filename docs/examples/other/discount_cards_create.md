# Creating Discount Cards

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/discountcards.doc).

## Simple Call
You just have to specify a `code`, a `type`and an `amount`.

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params = array(
    'code'   => '1-123456/AB',  
    'type'   => 'money', 
    'amount' => 10, 

);

$discountcard = $vendus->discountcards->create($params);
```

## Retrieving printable output

You may ask for a specific output like `html`, `pdf`or `escpos`.

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params  = array(
    ...
    'output' => 'html', 

);

$discountcard = $vendus->discountcards->create($params);
```

## Limiting to just on category of products

Just send a category id on `category`.

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params = array(
    ...
    'category' => 8762762, 

);

$discountcard = $vendus->discountcards->create($params);
```

## Setting an expiration date

Just send a date on `date_expire`.

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params  = array(
    ...
    'date' => '2018-12-01', 

);

$discountcard = $vendus->discountcards->create($params);
```
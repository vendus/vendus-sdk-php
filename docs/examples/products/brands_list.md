# Listing Brands

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/products/brands.doc).

## Simple Call

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$brands = $vendus->products->brands->list();

?>
```

## Specifying pagination params

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$brands = $vendus->products->brands->list([
    'page'     => 2, 
    'per_page' => 5,
]);

?>
```

## Searching brands

You may search brands using `title`. You may also filter brands by current `status`, being `on` or `off`.

```php
<?php

$vendus  = new Vendus\Api('YOUR_API_KEY');
$filters = [
    'title'  => 'Food',
    'status' => 'on',
];

$brands = $vendus->products->brands->list($filters);

?>
```
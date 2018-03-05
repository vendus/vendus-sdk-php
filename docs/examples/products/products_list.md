# Listing Products

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/products.doc).

## Simple Call

```php
<?php

$vendus  = new Vendus\Api('YOUR_API_KEY');
$products = $vendus->products->list();

?>
```

## Specifying pagination params

```php
<?php

$vendus  = new Vendus\Api('YOUR_API_KEY');
$products = $vendus->products->list([
    'page'     => 2, 
    'per_page' => 5,
]);

?>
```

## Searching products

You may search products using `title`, `barcode`, `reference` or you can send `q` containing any of them. You may also filter products by `store_id`, `category_id`, `brand_id` or current `status`, being `on` or `off`.

```php
<?php

$vendus    = new Vendus\Api('YOUR_API_KEY');
$filters   = [
    'barcode' => '6920702798897',
    'status'  => 'on',
];

$products = $vendus->products->list($filters);

?>
```
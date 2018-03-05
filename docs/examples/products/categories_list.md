# Listing Categories

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/products/categories.doc).

## Simple Call

```php
<?php

$vendus     = new Vendus\Api('YOUR_API_KEY');
$categories = $vendus->products->categories->list();

?>
```

## Specifying pagination params

```php
<?php

$vendus     = new Vendus\Api('YOUR_API_KEY');
$categories = $vendus->products->categories->list([
    'page'     => 2, 
    'per_page' => 5,
]);

?>
```

## Searching categories

You may search categories using `title`. You may also filter categories by `store_id` or current `status`, being `on` or `off`.

```php
<?php

$vendus  = new Vendus\Api('YOUR_API_KEY');
$filters = [
    'title'  => 'Food',
    'status' => 'on',
];

$categories = $vendus->products->categories->list($filters);

?>
```
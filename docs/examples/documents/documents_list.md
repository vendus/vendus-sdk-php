# Listing Documents

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/documents.doc).

## Simple Call

```php
<?php

$vendus    = new Vendus\Api('YOUR_API_KEY');
$documents = $vendus->documents->list();

?>
```

## Specifying pagination params

```php
<?php

$vendus    = new Vendus\Api('YOUR_API_KEY');
$documents = $vendus->documents->list([
    'page'     => 2, 
    'per_page' => 5,
]);

?>
```

## Filtering documents

```php
<?php

$vendus    = new Vendus\Api('YOUR_API_KEY');
$filters   = [
    'since'  => '2018-01-01',
    'until'  => '2018-01-31',
    'status' => 'N',
    'type'   => 'FT',
];

$documents = $vendus->documents->list($filters);

?>
```
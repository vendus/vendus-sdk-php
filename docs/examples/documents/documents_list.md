# Listing Documents

## Simple Call

```php
<?php

$apiKey    = 'PUT_YOUR_API_KEY_HERE';
$vendus    = new Vendus\Api($apiKey);
$documents = $vendus->documents->list();

?>
```

## Specifying pagination params

```php
<?php

$apiKey    = 'PUT_YOUR_API_KEY_HERE';
$vendus    = new Vendus\Api($apiKey);
$documents = $vendus->documents->list(['page' => 2, 'per_page' => 5]);

?>
```

## Filtering documents

```php
<?php

$apiKey    = 'PUT_YOUR_API_KEY_HERE';
$vendus    = new Vendus\Api($apiKey);
$filters   = [
    'since'  => '2018-01-01',
    'until'  => '2018-01-31',
    'status' => 'N',
    'type'   => 'FT',
];

$documents = $vendus->documents->list($filters);

?>
```
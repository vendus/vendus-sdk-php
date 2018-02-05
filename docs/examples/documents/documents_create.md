# Creating Documents

## Simple Call

```php
<?php

$apiKey = 'PUT_YOUR_API_KEY_HERE';
$vendus = new Vendus\Api($apiKey);
$params = [
    'items' => [
        [
            'title'       => 'Coffee',
            'qty'         => 2,
            'gross_price' => 0.75, 
        ]
    ],
];

$document = $vendus->documents->create($params);

?>
```
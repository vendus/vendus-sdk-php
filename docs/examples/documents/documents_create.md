# Creating Documents

## Simple Call

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
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
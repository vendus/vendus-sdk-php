# Creating Documents

Below you will find a list of examples for common scenarios. To learn about all params available, please check our [API Reference](https://www.vendus.pt/ws/documents.doc).

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
# Canceling payments

To cancel a customer's payment you just need to change the document status to `A`.

```php
<?php

$vendus     = new Vendus\Api('YOUR_API_KEY');
$documentId = 198738322;
$params     = [
    'status' => 'A',
];

$document = $vendus->documents->update($documentId, $params);

?>
```
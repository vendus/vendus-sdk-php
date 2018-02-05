# Working with Payment Methods

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/v1.1/documents/types.doc).

## Listing

```php
<?php

$vendus         = new Vendus\Api('YOUR_API_KEY');
$paymentMethods = $vendus->documents->paymentmethods->list();

?>
```

## Getting a specific Payment Method
Assuming there is a payment method with id `123`

```php
<?php

$vendus        = new Vendus\Api('YOUR_API_KEY');
$paymentMethod = $vendus->documents->paymentmethods->get(123);

?>
```
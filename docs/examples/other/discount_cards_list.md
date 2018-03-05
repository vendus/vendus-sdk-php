# Listing Discount Cards

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/discountcards.doc).

## Simple Call

```php
<?php

$vendus        = new Vendus\Api('YOUR_API_KEY');
$discountcards = $vendus->discountcards->list();

?>
```


## Searching Discount Cards

You may filter discount cards by `category` or current `status`, being `pending` or `done`.

```php
<?php

$vendus  = new Vendus\Api('YOUR_API_KEY');
$filters = [
    'title'  => 'Food',
    'status' => 'on',
];

$discountcards = $vendus->discountcards->list($filters);

?>
```
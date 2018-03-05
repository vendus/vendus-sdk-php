# Fetching Discount cards

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/discountcards.doc).

## Simple Call

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$cardId = 18169199;
$card   = $vendus->discountcards->get($cardId);

?>
```

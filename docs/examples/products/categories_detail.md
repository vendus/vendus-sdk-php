# Fetching Categories

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/products/categories.doc).

## Simple Call

```php
<?php

$vendus     = new Vendus\Api('YOUR_API_KEY');
$categoryId = 18169199;
$category   = $vendus->products->categories->get($categoryId);

?>
```

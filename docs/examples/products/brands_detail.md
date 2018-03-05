# Fetching Brands

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/products/brands.doc).

## Simple Call

```php
<?php

$vendus  = new Vendus\Api('YOUR_API_KEY');
$brandId = 18169199;
$brand   = $vendus->products->brands->get($brandId);

?>
```

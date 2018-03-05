# Fetching Units

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/products/units.doc).

## Simple Call

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$unitId = 18169199;
$unit   = $vendus->products->units->get($unitId);

?>
```

# Creating Brands

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/products/brands.doc).

## Simple Call

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params  = array(
    'title'  => 'New Age Hats', 
    'status' => 'on', 

);

$brand = $vendus->products->brands->create($params);
```
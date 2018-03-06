# Creating Products

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/products.doc).

## Simple Call
You only have to send `title` and `unit_id` to create a product.
```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params  = array(
    'title'   => 'Book XPTO', 
    'unit_id' => 123, 

);

$product = $vendus->products->create($params);
```

## Extensive example

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params  = array(
    'reference'     => 'XBD001', 
    'barcode'       => 'P000000XBD001', 
    'supplier_code' => 'AHSG102X', 
    'title'         => 'Book XPTO', 
    'description'   => 'Book XPTO 2006 Edition', 
    'supply_price'  => 10.12, 
    'gross_price'   => 20.00, 
    'unit_id'       => 123, 
    'type_id'       => 'P', 
    'stock_control' => 1, 
    'stock_type'    => 'M', 
    'tax_id'        => 'NOR', 
    'category_id'   => 123, 
    'brand_id'      => 123, 
    'status'        => 'on', 

);

$product = $vendus->products->create($params);
```
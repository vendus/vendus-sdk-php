# Fetching Clients

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/clients.doc).

## Simple Call

```php
<?php

$vendus   = new Vendus\Api('YOUR_API_KEY');
$clientId = 18169199;
$client = $vendus->clients->get($clientId);

print_r($document);
?>
```
```
Array
(
    [id] => 18169199
    [fiscal_id] => 223098091
    [name] => Alberto Lopes
    [address] => Av. Sousa Magalhães, 126
    [city] => Lisboa
    [postalcode] => 4100-039
    [phone] => 210 192 930
    [mobile] => 918 876 546
    [email] => alberto.lopes@dominio.pt
    [website] => https://www.dominio.pt
    [country] => PT
)
```
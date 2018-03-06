# Listing Registers Movements

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/registers/movements.doc).

## Simple Call

```php
<?php

$vendus    = new Vendus\Api('YOUR_API_KEY');
$movements = $vendus->registers->list();

?>
```

## Specifying a date interval

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params = array(
    'since' => '2018-03-06', 
    'until' => '2018-03-07', 

);

$movements = $vendus->registers->list($params);

?>
```
# Listing Registers

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/registers.doc).

## Simple Call

```php
<?php

$vendus    = new Vendus\Api('YOUR_API_KEY');
$registers = $vendus->registers->list();

?>
```
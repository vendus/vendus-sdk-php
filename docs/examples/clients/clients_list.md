# Listing Clients

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/clients.doc).

## Simple Call

```php
<?php

$vendus  = new Vendus\Api('YOUR_API_KEY');
$clients = $vendus->clients->list();

?>
```
```
Array
(
    [0] => Array
        (
            [id] => 2771339
            [fiscal_id] => 123456789
            [name] => Nathan Simpson
            [address] => Rua Nova de Mil Fontes, 123
            [city] => Porto
            [postalcode] => 4100-002
            [phone] => 931234567
            [mobile] => 931234567
            [email] => nathan@nathansimpson.com
            [website] => www.nathansimpson.com
            [country] => PT
        )

    [1] => Array
        (
            [id] => 2771340
            [fiscal_id] => 987654321
            [name] => Patrick Newton
            [address] => Av. Oliveira Santos, 12
            [city] => Lisboa
            [postalcode] => 1100-205
            [phone] => 937654321
            [mobile] => 937654321
            [email] => geral@patricknewton.com
            [website] => www.patricknewton.com
            [country] => PT
        )
)
```

## Specifying pagination params

```php
<?php

$vendus  = new Vendus\Api('YOUR_API_KEY');
$clients = $vendus->clients->list([
    'page'     => 2, 
    'per_page' => 5,
]);

?>
```

## Searching clients

You may search clients using `name`, `fiscal_id`, `email` or you can send `q` containing any of them. You may also filter clients by current `status`, being `active` or `inactive`.

```php
<?php

$vendus    = new Vendus\Api('YOUR_API_KEY');
$filters   = [
    'q'      => 'Alfred',
    'status' => 'active',
];

$clients = $vendus->clients->list($filters);

?>
```
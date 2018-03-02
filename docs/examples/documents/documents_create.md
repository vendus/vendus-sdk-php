# Creating Invoices

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/documents.doc).

## Simple call to create an invoice

If products already exist, you only have to send `id` and `qty` for each one.

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params = [
    'items' => [
        ['id' => '13342484', 'qty' => 1],
        ['id' => '14548163', 'qty' => 1],
    ],
];

$document = $vendus->documents->create($params);

?>
```
```
Array
(
    [id]            => 18111146
    [type]          => FT
    [number]        => FT 07P2018/1
    [date]          => 2018-03-02
    [system_time]   => 2018-03-02 12:01:44
    [amount_gross]  => 2.46
    [amount_net]    => 2.00
    [hash]          => eZsO
)
```

If it is a new product, you have to replace `id` above with at least `title` and `gross_price`.

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params = [
    'items' => [
        [
            'title'       => 'Coffee',
            'qty'         => 2,
            'gross_price' => 1.23, 
        ]
    ],
];

$document = $vendus->documents->create($params);

?>
```

## Specifying a Client

If client already exists, you may reference him using either `id` or `fiscal_id`.

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params = [
    'items' => [
        ...
    ],

    'client' => [
        'fiscal_id'  => '223098091',
    ]
];

$document = $vendus->documents->create($params);

?>
```

If it is a new client, you may send full information about him and a new record will created.

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params = [
    'items' => [
        ...
    ],

    'client' => [
        'fiscal_id'  => '223098091', 
        'name'       => 'Alberto Lopes', 
        'address'    => 'Av. Sousa Magalhães, 126', 
        'postalcode' => '4100-039', 
        'city'       => 'Lisboa', 
        'phone'      => '210 192 930', 
        'mobile'     => '918 876 546', 
        'email'      => 'alberto.lopes@dominio.pt', 
        'website'    => 'https://www.dominio.pt', 
        'country'    => 'PT', 
        'send_email' => 'yes', 
    ]
];

$document = $vendus->documents->create($params);

?>
```

## Specifying prices and discounts
Even for an existing product, you may specify a different `gross_price` to be used on this document only.
You may also use `discount_amount` and/or `discount_percentage` to specify an item discount.

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params = [
    'items' => [
        [
            'id'                  => 1233456,
            'qty'                 => 1,
            'gross_price'         => 100,
            'discount_amount'     => 20, 
            'discount_percentage' => 3.5,
        ]
    ],
];

$document = $vendus->documents->create($params);

?>
```
```
Array
(
    [id]            => 18112169
    [type]          => FT
    [number]        => FT 07P2018/8
    [date]          => 2018-03-02
    [system_time]   => 2018-03-02 12:37:13
    [amount_gross]  => 76.50
    [amount_net]    => 62.20
    [hash]          => P0hh
)
```
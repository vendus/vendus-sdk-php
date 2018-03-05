# Creating Payments / Receipts

To register a customer's payment, a receipt should be created, that is, a document of type `RG`. 

Relevant parameters are `payments`, stating the payment method(s) used; and `invoices`, containing a list of all invoices being paid, each identified by its document_number.

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params = [
    'type' => 'RG',
    'payments' => [
        ['id' => 24937, 'amount' => 100],
        ['id' => 24934, 'amount' => 23]
    ],
    'invoices' => [
        ['document_number' => 'FT 01P2016/25'],
        ['document_number' => 'FT 01P2016/26'],
        ['document_number' => 'FT 01P2016/27'],
    ]
];

$document = $vendus->documents->create($params);

?>
```
```
Array
(
    [id]            => 1812146
    [type]          => RG
    [number]        => RG 07P2018/1
    [date]          => 2018-03-02
    [system_time]   => 2018-03-02 12:01:44
    [amount_gross]  => 123
    [amount_net]    => 100
    [hash]          => eZsO
)
```
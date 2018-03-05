# Canceling invoices (creating a credit note)

When creating a credit note, you must specify `reference_document` for each item, passing `document_number` and `document_row` which unequivocally identifies an existing line on the original invoice, along with `id` and `qty`. All other params are ignored, namely price, which are obtained automatically from the original invoice. 

You also have to specify `notes` stating the reason for issuing the credit note.

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$params = [
    'type'  => 'NC',
    'notes' => 'Client has returned the item',
    'items' => [
        [
            'id'  => '3630471', 
            'qty' => 1,
            'reference_document'  => [
                'document_number' => 'FT 07P2018/10',
                'document_row'    => 1,
            ]
        ],
    ],
];

$document = $vendus->documents->create($params);

?>
```
```
Array
(
    [id] => 18157864
    [type] => NC
    [number] => NC 07P2018/1
    [date] => 2018-03-05
    [system_time] => 2018-03-05 10:19:12
    [amount_gross] => 0.00
    [amount_net] => 0.00
    [hash] => m0jK
)
```
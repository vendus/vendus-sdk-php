# Fetching a document

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/documents.doc).

## Simple Call


```php
<?php

$vendus     = new Vendus\Api('YOUR_API_KEY');
$documentId = 17949462;
$document   = $vendus->documents->get($documentId);

print_r($document);
?>
```
```php
Array
(
    [id]                 => 17949462
    [type]               => FT
    [number]             => FT 01P2018/32
    [date]               => 2018-02-21
    [system_time]        => 2018-02-21 11:53:41
    [amount_gross]       => 10.45
    [amount_net]         => 10.45
    [date_due]           => 2018-02-21
    [observations]       => Campanha Promocional
    [external_reference] => 2349872348283/1
    [store_id]           => 24994
    [register_id]        => 25003
    [user_id]            => 24925
    [taxes]              => Array
        (
            [0] => Array
                (
                    [total]  => 123.00
                    [base]   => 100.00
                    [amount] => 23.00
                    [rate]   => 23
                )
        )

    [payments] => Array
        (
            [0] => Array
                (
                    [id]     => 24934
                    [title]  => Dinheiro
                    [amount] => 123.00
                )
        )

    [client] => Array
        (
            [id]         => 7199559
            [name]       => Nexperience Lda
            [fiscal_id]  => 509442013
            [address]    => Rua Xpto, 12
            [postalcode] => 4100-100
            [city]       => Porto
            [country]    => PT
            [send_email] => no
        )

    [items] => Array
        (
            [0] => Array
                (
                    [id]            => 30350
                    [qty]           => 1
                    [type_id]       => S
                    [title]         => Camisola Red Mountain
                    [reference]     => VTES1099-18022121
                    [stock_control] => 1
                    [amounts]       => Array
                        (
                            [net_unit]    => 100.00
                            [net_total]   => 100.00
                            [gross_unit]  => 123.00
                            [gross_total] => 123.00
                        )
                    [tax] => Array
                        (
                            [id]      => NOR
                            [country] => PT
                            [rate]    => 23
                        )
                )
        )

    [status] => Array
        (
            [id]      => N
            [date]    => 2018-02-21 11:53:41
            [user_id] => 24925
        )

    [debt] => Array
        (
            [total]  => 123.00
            [paid]   => 123.00
            [unpaid] => 0.00
        )

    [related_docs] => Array
        (
            [0] => Array
                (
                    [id]     => 17949463
                    [type]   => RG
                    [number] => RG 01P2018/24
                    [amount] => 123.00
                )
        )

    [hash] => lX1W
)

```
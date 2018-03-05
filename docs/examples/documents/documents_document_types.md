# Listing Document Types

Document types are pre-configured and, from time to time, we might add some new ones. You may use this endpoint to obtain a list of currently available document types.

## All document types

```php
<?php

$vendus    = new Vendus\Api('YOUR_API_KEY');
$documents = $vendus->documents->types->list();

?>
```
```
Array
(
    [0] => Array
        (
            [title] => Consulta de Mesa
            [id] => DC
            [visible_filter] => no
            [visible_finalize] => no
        )

    [1] => Array
        (
            [title] => Encomenda
            [id] => EC
            [visible_filter] => yes
            [visible_finalize] => yes
        )

    [2] => Array
        (
            [title] => Fatura
            [id] => FT
            [visible_filter] => yes
            [visible_finalize] => yes
        )

    [3] => Array
        (
            [title] => Fatura Pró-Forma
            [id] => PF
            [visible_filter] => yes
            [visible_finalize] => yes
        )

    [4] => Array
        (
            [title] => Fatura Recibo
            [id] => FR
            [visible_filter] => yes
            [visible_finalize] => yes
        )

    [5] => Array
        (
            [title] => Guia de Ativos Próprios
            [id] => GA
            [visible_filter] => yes
            [visible_finalize] => yes
        )

    [6] => Array
        (
            [title] => Guia de Devolução
            [id] => GD
            [visible_filter] => yes
            [visible_finalize] => no
        )

    [7] => Array
        (
            [title] => Guia de Remessa
            [id] => GR
            [visible_filter] => yes
            [visible_finalize] => yes
        )

    [8] => Array
        (
            [title] => Guia de Transporte
            [id] => GT
            [visible_filter] => yes
            [visible_finalize] => yes
        )

    [9] => Array
        (
            [title] => Nota de Crédito
            [id] => NC
            [visible_filter] => yes
            [visible_finalize] => no
        )

    [10] => Array
        (
            [title] => Orçamento
            [id] => OT
            [visible_filter] => yes
            [visible_finalize] => yes
        )

    [11] => Array
        (
            [title] => Recibo
            [id] => RG
            [visible_filter] => yes
            [visible_finalize] => no
        )

)
```

## Filtering

You may filter results by `visible_filter` and/or `visible_finalize`. 

```php
<?php

$vendus    = new Vendus\Api('YOUR_API_KEY');
$params    = [
    'visible_filter' => 'yes',
];
$documents = $vendus->documents->types->list($params);

?>
```
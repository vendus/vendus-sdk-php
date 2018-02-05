# Listing Documents

## Simple Call

```php
<?php
$apiKey    = 'PUT_YOUR_API_KEY_HERE';
$vendus    = new Vendus\Api($apiKey);
$documents = $vendus->documents->list();
?>
```

## Specifying a page

```php
<?php
$apiKey    = 'PUT_YOUR_API_KEY_HERE';
$vendus    = new Vendus\Api($apiKey);
$result = $vendus->documents->list(['page' => 2]);
?>
```
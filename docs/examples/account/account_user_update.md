# Updating Users

Below you will find a list of examples for common scenarios. 

To learn about all available params, please check our [API Reference](https://www.vendus.pt/ws/account/users.doc).

## Changing a user's password

```php
<?php

$vendus = new Vendus\Api('YOUR_API_KEY');
$userId = 298738;
$params = array( 
    'password' => '56!paSsWoRd17', 

);
$user = $vendus->account->users->update($userId, $params);

?>
```
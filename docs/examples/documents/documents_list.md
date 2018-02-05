List Documents
------------------------

.. code-block:: php

$apiKey    = 'PUT_YOUR_API_KEY_HERE';
$vendus    = new Vendus\Api($apiKey);
$documents = $vendus->documents->list();
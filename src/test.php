<?php

require_once 'Api.php';

$vendus = new Vendus\Api('abdebedabeab');
$result = $vendus->documents->list();

print_r($result);
print_r($vendus->getErrors());
exit;

$client = new Vendus\ApiClient();
$client->setEndpoint('documents');
$client->setApiKey('abdebedabeab');
$response = $client->get();

print_r($response);

exit;

$documents = new Vendus\Documents();
$documents->create($params);
$documents->list();
$documents->get(12);


$vendus = new Vendus('abdebedabeab');
$vendus->documents->list();
$vendus->documents->create($params);
$vendus->documents->get(234234);
$vendus->documents->pdf(234234);
<?php

require_once 'Api.php';

$vendus = new Vendus\Api('abdebedabeababdebedabeab');
$params = array(
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
);

$products = $vendus->products->list(['page'=>10]);


print_r($products);
print_r($vendus->getErrors());
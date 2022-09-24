<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");  
$collection = $client->splash_ecom->product;
$query = $collection->find(array(), array('name' => 1, '_id' => 1)); 

echo '<pre>';

foreach ($query as $current)
    print_r($current);

echo '</pre>';




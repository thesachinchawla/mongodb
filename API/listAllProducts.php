<?php 

    $client = include('../connection.php');

    // Headers

    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');

    $productsdb = $client->productsdb;
    $productsCollection = $productsdb->products;

    $documentsList = $productsCollection->find();

    
    echo json_encode(iterator_to_array($documentsList));

?>
<?php 
    require 'vendor/autoload.php';
    $m = new MongoDB\Client("mongodb://127.0.0.1/");

    $db = $m->cinephiliaDB;

    $collection_users = $db->Users;
    $collection_products = $db->Products;
?>
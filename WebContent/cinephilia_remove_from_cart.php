<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();

    $product = $_GET['product'];
    $collection_users->updateOne(array("Email"=>$_SESSION['user_email']), array('$pull'=> array("Cart" => array("product_name" => $product))));

    header('Location: cinephilia_cart.php');
    exit;
?>
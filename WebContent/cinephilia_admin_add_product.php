<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
    $product = $_POST['product_name'];
    $genre = $_POST['genre'];
    $collection = $_POST['collection'];
    $price = $_POST['price'];
    $location = $_POST['url'];
    
    $document = array(
      "product_name" => "$product",
      "genre" => "$genre",
      "collection" => "$collection",
      "price" => "$price",
      "image" => "$location"
    );

    $collection_products->insertOne($document);
    
    echo '<script>alert("Your changes are saved. Product Added.")</script>';

?>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'cinephilia_admin_products.php';
    },50);
</script>
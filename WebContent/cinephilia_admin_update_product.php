<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
    $product = $_POST['product_name'];
    $new_product = $_POST['new_product_name'];
    $genre = $_POST['genre'];
    $collection = $_POST['collection'];
    $price = $_POST['price'];
    $location = $_POST['url'];
    
    if (!empty($genre)){
        $collection_products->updateOne(array("product_name"=>"$product"), array('$set'=>array("genre"=>$genre)));
    }
    if (!empty($collection)){
        $collection_products->updateOne(array("product_name"=>"$product"), array('$set'=>array("collection"=>$collection)));
    }
    if (!empty($price)){
        $collection_products->updateOne(array("product_name"=>"$product"), array('$set'=>array("price"=>$price)));
    }
    if (!empty($location)){
        $collection_products->updateOne(array("product_name"=>"$product"), array('$set'=>array("image"=>$location)));
    }
    if (!empty($new_product)){
        $collection_products->updateOne(array("product_name"=>"$product"), array('$set'=>array("product_name"=>$new_product)));
    }

?>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'cinephilia_admin_products.php';
    },50);
</script>
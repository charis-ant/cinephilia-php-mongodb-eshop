<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();

    $product = $_POST['product_name'];

    $cursor = $collection_products->findOne(array('product_name'=> $product));

    if (! $cursor){
        echo '<script>alert("Product not found.")</script>';
    }else{
        $collection_products->deleteOne(array("product_name"=>"$product"));
        echo '<script>alert("Your changes are saved. Product deleted.")</script>';
    }
?>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'cinephilia_admin_products.php';
    },50);
</script>
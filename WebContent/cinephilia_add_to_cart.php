<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();

    $product = $_GET['product'];

    if (isset($_SESSION['logged']) && $_SESSION['logged'] == true){
        $collection_users->updateOne(array("Email"=>$_SESSION['user_email']), array('$push'=> array("Cart" => array("product_name" => $product))));
        echo '<script>alert("Product added to Cart")</script>';
    }else{
        echo '<script>alert("Product cannot be added to Cart. Sign In to use this option")</script>';
    }
?>
<script type="text/javascript">
    window.history.back();
</script>
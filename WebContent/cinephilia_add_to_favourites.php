<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();

    $product = $_GET['product'];

    if (isset($_SESSION['logged']) && $_SESSION['logged'] == true){
        $collection_users->updateOne(array("Email"=>$_SESSION['user_email']), array('$push'=> array("Favourites" => array("product_name" => $product))));
    }else{
        echo '<script>alert("Product cannot be added to Favourites. Sign In to use this option")</script>';
    }
?>
<script type="text/javascript">
    window.history.back();
</script>
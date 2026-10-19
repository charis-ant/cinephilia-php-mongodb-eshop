<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();

    $product = $_GET['product'];

    $collection_users->updateOne(array("Email"=>$_SESSION['user_email']), array('$pull'=> array("Favourites" => array("product_name" => $product))));
    
?>
<script type="text/javascript">
    window.history.back();
</script>
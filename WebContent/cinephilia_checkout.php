<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();

    $total = $_GET['total'];
    $cursor = $collection_users->findOne(array('Email'=> $_SESSION['user_email']));
    $cart = $cursor->Cart;
    $cart2 = $cursor->Cart;

    $random = random_int(0,10000);

    $counter = 0;
    foreach ($cart2 as $document){
        $counter++;
    }

    if (empty($counter)){
        echo '<script>alert("Nothing found in Cart. Redirecting...")</script>';
    }else{
        $order = array();
        $products = array();
        foreach ($cart as $document){
            array_push($products, array("product_name" => $document->product_name));
        }
        array_push($order, array("products" => $products));
        array_push($order, array("total" => $total));
        array_push($order, array("status" => "Pending"));
        array_push($order, array("order_number" => $random));
        $collection_users->updateOne(array("Email"=>$_SESSION['user_email']), array('$addToSet'=> array("Orders" => $order)));

        $collection_users->updateOne(array("Email"=>$_SESSION['user_email']), array('$set'=> array("Cart" => [])));
        echo '<script>alert("Thank You...Redirecting...")</script>';
    }
?>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'cinephilia_home.php';
    },50);
</script>
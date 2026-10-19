<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
    $num = $_GET['order_num'];
    $email = $_GET['email'];

    $condition = array('$and'=>array(
        array("Name"=>array('$ne'=>"admin")),
        array("Orders"=>array('$ne'=>[]))
    ));

    $cursor = $collection_users->find($condition);

    foreach ($cursor as $user){
        foreach ($user as $key => $value){ 
            if ($key != "Orders") {
                continue;
            }else{
                foreach ($value as $order){
                    foreach($order as $document){
                        foreach($document as $k => $v){
                            if ($k == "products"){
                                continue;
                            }
                            if ($k == "total"){
                                continue;
                            }
                            if ($k == "status"){
                                continue;
                            }
                            if ($k == "order_number"){
                               if ( $v == $num){
                                    $condition = array('$and'=>array(
                                        array("Email"=>$email),
                                        array("order_number"=>$v)
                                    ));
                                    //$collection_users->updateOne($condition, array('$set'=>array($document["status"]=>"Cancelled")));
                                }
                            }
                        }
                    }
                }
            }
        }
    }

echo '<script>alert("Your changes are saved. Order Cancelled.")</script>';

?>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'cinephilia_admin_orders.php';
    },50);
</script>
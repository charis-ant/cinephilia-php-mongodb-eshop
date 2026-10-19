<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();

    $email = $_POST['email'];
    $name = $_POST['name'];
    $new_email = $_POST['new_email'];
    $password = $_POST['pass'];

    if (!empty($name)){
        $collection_users->updateOne(array("Email"=>$email), array('$set'=>array("Name"=>$name)));
    }
    if (!empty($password)){
        $collection_users->updateOne(array("Email"=>$email), array('$set'=>array("Password"=>$password)));
    }
    if (!empty($new_email)){
        $collection_users->updateOne(array("Email"=>$email), array('$set'=>array("Email"=>$new_email)));
    }

?>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'cinephilia_admin_users.php';
    },50);
</script>
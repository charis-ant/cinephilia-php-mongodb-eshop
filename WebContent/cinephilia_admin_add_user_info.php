<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
    $email = $_POST['email'];
    $field = $_POST['field_name'];
    $value = $_POST['field_value'];
    
    $collection_users->updateOne(array("Email"=>$email), array('$set'=>array("$field"=>$value)));
    
    echo '<script>alert("Your changes are saved. Information updated.")</script>';

?>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'cinephilia_admin_users.php';
    },50);
</script>
<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();

    $email = $_POST['email'];

    $cursor = $collection_users->findOne(array('Email'=> $email));
    
    if(! $cursor){
        echo '<script>alert("User not found.")</script>';
    }else{
        $collection_users->deleteOne(array("Email"=>"$email"));
        echo '<script>alert("Your changes are saved. User deleted.")</script>';

    }
?>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'cinephilia_admin_users.php';
    },50);
</script>
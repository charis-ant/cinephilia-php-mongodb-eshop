<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    $collection_users->updateOne(array("Email"=>$_SESSION['user_email']), array('$set'=>array("Name"=>$name, "Email"=>$email, "Password"=>$password)));
    $_SESSION['user_email'] = $email;
    echo '<script>alert("Your changes are saved. Personal Information updated.")</script>';

?>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'cinephilia_account.php';
    },50);
</script>
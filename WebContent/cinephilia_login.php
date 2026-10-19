<?php 
    include 'cinephilia_db_connection.php';

    session_start();

    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    $current_user = $collection_users->findOne(array('Email'=>$email));
    if (isset($current_user) && $current_user["Password"] == $password){
        session_start();
        $_SESSION['logged'] = true; //flag variable turned true because a user is logged in
        $_SESSION['user_email'] = $email;   //session belongs to user with the current email
        if ($current_user["Name"] == "admin"){
            header('Location: cinephilia_admin_home.php');
            exit;
        }
        header('Location: cinephilia_home.php');
        exit;
    }
    else{
        echo '<script>alert("Wrong Email or Password. Please try again.")</script>';
    }
?>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'cinephilia_account.php';
    },50);
</script>
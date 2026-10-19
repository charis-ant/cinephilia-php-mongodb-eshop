<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $current_user = $collection_users->findOne(array('Email'=>$email));

    if (isset($current_user)){
        echo '<script>alert("Email address already in use.")</script>';
    }else{
        $_SESSION['logged'] = true; //flag variable turned true because a user is logged in
        $_SESSION['user_email'] = $email;   //session belongs to user with the current email
        if ($name == "admin"){
            $document = array(
                "Name" => "$name",
                "Email" => "$email",
                "Password" => "$password",
            );
            $collection_users->insertOne($document);
            header('Location: cinephilia_admin_home.php');
            exit;
        }else{
            $document = array(
                "Name" => "$name",
                "Email" => "$email",
                "Password" => "$password",
                "Cart" => [],
                "Orders" => [],
                "Favourites" => []
            );
            $collection_users->insertOne($document);
            header('Location: cinephilia_home.php');
            exit;
        }
    }
?>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'cinephilia_home.php';
    },50);
</script>
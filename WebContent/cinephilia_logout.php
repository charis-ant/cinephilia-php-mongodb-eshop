<?php
    session_start();
    session_unset();
    session_destroy();

    header('Location: cinephilia_home.php');
    exit;
?>
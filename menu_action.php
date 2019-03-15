<?php
    session_start();
    if(!isset($_SESSION['firstname'])) {
        header('location:index.php?msg=Please Login to Continue');    
        exit;
    }
    else {
        session_destroy();
        header('location:index.php?msg=Order Successfull');
        exit;
    }
?>
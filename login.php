<?php
    include ('dbconnection.php');
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($con, "SELECT `id`, `firstname` FROM `users` WHERE `email`='".$email."' AND `password`='".$password."'");
    $rows = mysqli_fetch_array($result);
    if(isset($rows['id'])){
        $_SESSION['id'] = $rows['id'];
        $_SESSION['firstname'] = $rows['firstname'];
        header('location:foodselectpage.php');
        exit;
    }
    else {
        header('location:index.php?msg=Incorrect User Info');
        exit;
    }
?>
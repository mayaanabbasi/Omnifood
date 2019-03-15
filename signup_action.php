<?php
    include ('dbconnection.php');
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($password == $_POST['confirmpassword']){
        $res = mysqli_query($con, 'INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`) VALUES("'.$firstname.'", "'.$lastname.'", "'.$email.'", "'.$password.'")');
        header("location:index.php?msg=Profile Created Login to Continue");
        exit;
    }
    else{
        header("location:signup.php?msg=Incorrect Password");
        exit;
    }
?>
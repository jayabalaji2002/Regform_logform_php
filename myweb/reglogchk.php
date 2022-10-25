<?php
    session_start();

    include "sqlconchk.php"; 

    $user_email=$_POST['email'];
    $user_password=$_POST['password'];
    $user_name=$_POST['usname'];

    $sql="select * from registrationdata where email='$user_email' and password='$user_password'";

    $result=mysqli_query($con,$sql);

    $count=mysqli_num_rows($result);

    if($count>0)
    {
        header("location:home.php");
        $_SESSION["email"]=$user_email;
    }
    else{
        header("location:login.php");
    }

?>
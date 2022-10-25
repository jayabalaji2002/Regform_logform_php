<?php

    include "sqlconchk.php";

    $user_name=$_POST['usname'];
    $user_gender=$_POST['gender'];
    $user_age=$_POST['age'];
    $user_email=$_POST['email'];
    $user_password=$_POST['uspassword'];
    
    $sql="INSERT INTO registrationdata(name,gender,age,email,password) 
            VALUES('$user_name','$user_gender','$user_age','$user_email','$user_password')";


    $result=mysqli_query($con,$sql);

    if($result)
    {
        header("location: login.php");
    }
    else{
        echo "error";
    }

?>
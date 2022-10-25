<?php

    $con=mysqli_connect("localhost:3306","root","","mydb");
    
    if($con)
    {
        echo "Connected!!!";
    }
    else{
        echo "Not connected :(";
    }

?>
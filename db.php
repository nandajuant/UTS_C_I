<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "uts_c_i";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()){
        echo "Failed to connect : " . mysqli_connect_error();
}
?>
<?php
error_reporting(0);
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "todo_list";

    $conn =   mysqli_connect($servername,$username,$password,$dbname);

    if($conn){
        // echo "Connection ok";
    }else{
        echo "Connection faild".mysqli_connect_error();
    }
?>
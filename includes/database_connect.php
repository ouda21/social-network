<?php
    $localhost='localhost';
    $name="root";
    $password="";
    $database_name="social_network";

    $conn=mysqli_connect($localhost,$name,$password,$database_name);
    if(!$conn){
        die("Error ".mysqli_connect_error());
    }
    
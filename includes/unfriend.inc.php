<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:../social-network(signup).php");
    }

    require "database_connect.php";
    $pend=$_GET["unfriend_request"];
    $profile=$_SESSION["username"];

    $sql="UPDATE `friends` SET `status`=2 WHERE user_id='$profile' OR friends='$pend'";
    if(mysqli_query($conn,$sql)){
        header("location:../social-newtwork(manage_my_friends).php");
    }else{
        echo "Error:".mysqli_error($conn);
    }

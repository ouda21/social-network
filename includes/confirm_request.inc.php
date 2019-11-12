<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:../social-network(signup).php");
    }

    require "database_connect.php";
    $pend=$_GET["pending_id"];
    $user=$_SESSION["username"];

    $sql="UPDATE `friends` SET `status`=1 WHERE friends='$user' AND user_id='$pend'";
    if(mysqli_query($conn,$sql)){
        header("location:../social-network(home_page).php");
        $statement="You are now friends with ".$pend;
        $id=$_SESSION["username"];
        $sql1="INSERT INTO `activity`(`user_id`, `activity`) VALUES ('$id','$statement')";
        if(mysqli_query($conn,$sql1)){
            header("location:../social-network(home_page).php");
        }
    }else{
        die("Error:".mysqli_error($conn));
    }


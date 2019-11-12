<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:../social-network(signup).php");
    }

    require "database_connect.php";
    $pend=$_GET["pending_id"];
    $id=$_SESSION["username"];
    $sql="UPDATE `friends` SET `status`=2 WHERE friends='$id' AND user_id='$pend'";
    if(mysqli_query($conn,$sql)){
        header("location:../social-network(home_page).php");
        $statement="You rejected a friend request from ".$pend;
        $sql1="INSERT INTO `activity`(`user_id`, `activity`) VALUES ('$id','$statement')";
        mysqli_query($conn,$sql1);
    }
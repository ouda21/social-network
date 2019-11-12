<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:../social-network(signup).php");
    }
    require "database_connect.php";

    function showFriendName($value){
        require "database_connect.php";
        $userId=$_SESSION["username"];
        $sql="SELECT * FROM `user_logs` WHERE user_id !='$userId'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            if($row=mysqli_fetch_assoc($result)){
                return $row["$value"];
            }
        }

    }
    function fetchPicture($value){
        require "database_connect.php";
        $userId=$_SESSION["username"];
        $sql="SELECT * FROM `profile_and_cover_pictures` WHERE user_id != '$userId'";
        $result=mysqli_query($conn,$sql);
        while(mysqli_num_rows($result)>0){
            if($row=mysqli_fetch_assoc($result)){
                return $row["$value"];
            }
        }
    }
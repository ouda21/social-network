<?php

    $user_id=$_GET["friend_id"];

    function fillProfilePicture1($value){
        require "database_connect.php";
        $userId=$_SESSION["username"];
        $sql="SELECT * FROM `profile_and_cover_pictures` WHERE user_id='$user_Id'";
        $result=mysqli_query($conn,$sql);
        while(mysqli_num_rows($result)){
            if($row=mysqli_fetch_assoc($result)){
                return $row["profile_picture"];
            }
        }
    }
    
    header("location:../social-network(view_friends_profile).php");
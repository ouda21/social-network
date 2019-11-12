<?php
     require "database_connect.php";
     session_start();
     if(!isset($_SESSION["username"])){
         header("location:../social-network(signup).php");
     }

     if(isset($_POST["comment1"])){
         $comment=$_POST["comment"];
         $userId=$_SESSION["username"];
         $postId=$_GET["post_id"];

         $sql="INSERT INTO `commets`( `post_id`, `comment`, `user_id`) VALUES ('$postId','$comment','$userId')";
         if(mysqli_query($conn,$sql)){
             header("location:../social-network(homepage).php");
         }else{
             die("Error:".mysqli_error($conn));
         }
     }
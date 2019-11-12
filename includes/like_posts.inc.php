<?php
     
     session_start();
     if(!isset($_SESSION["username"])){
         header("location:../social-network(signup).php");
     }
     require "database_connect.php";
     $post_id=$_GET["post_id"];
     $user_id=$_SESSION["username"];
     $query1="SELECT * FROM `likes` WHERE user_id='$user_id' AND post_id='$post_id'";
     $result=mysqli_query($conn,$query1);
     if(mysqli_num_rows($result)>0){
        updateUnlike($post_id,$user_id);
     }else{
         $query2="INSERT INTO `likes`( `post_id`, `user_id`) VALUES ('$post_id','$user_id')";
         if(mysqli_query($conn,$query2)){
             $query3="SELECT * FROM `posts` WHERE id='$post_id'";
             $result2=mysqli_query($conn,$query3);
             while($row=mysqli_fetch_assoc($result2));
             $n=$row["likes"];
             mysqli_query($conn, "INSERT INTO likes ( post_id,user_id) VALUES ( $post_id,$user_id)");
		     mysqli_query($conn, "UPDATE posts SET likes=likes+1 WHERE id=$post_id");
            header("location:../social-network(home_page).php");
         }else{
             die("Error:".mysqli_error($conn));
         }
     }

     function updateUnlike($id,$id2){
        require "database_connect.php";
        $sql="DELETE FROM `likes` WHERE post_id='$id' AND user_id='$id2'";
        if(mysqli_query($conn,$sql)){
            $query="UPDATE posts SET likes=likes-1 WHERE id=$id";
            if(mysqli_query($conn,$query)){
                header("location:../social-network(home_page).php");
            }
        }
     }
     
     
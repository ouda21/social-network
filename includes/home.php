<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:../signup.php");
    }
    require_once "database_connect.php";

    if($conn){
        $content=$_POST["content"];
        $image=$_FILES["image"]["name"];
        $image_url=$_POST["image_url"];
        $video=$_FILES["video"]["name"];
        $video_url=$_POST["youtube_url"];
        $location=$_POST["location"];
        $tagged_friends=$_POST["with_users"];
        $user=$_SESSION["username"];
        $target_dir_images="../uploads";
        $target_file_images=$target_dir_images.basename($_FILES["image"]["name"]);

        $target_dir_videos="../videos";
        $target_file_videos=$target_dir_videos.$_FILES["video"]["name"];

        if(isset($_POST["submit"])){
            
            $sql="INSERT INTO `posts`( `user_id`, `content`, `image`, `image_url`, `video`, `video_url`, `location`, `tagged_friends`) VALUES ('$user','$content','$image','$image_url','$video','$video_url','$location','$tagged_friends')";
            if(mysqli_query($conn,$sql)){
                echo "inserted successfully";
                //header("location:../social-network(home_page).php");
            }else{
                echo "Failed".mysqli_error($conn);
            }

            move_uploaded_file($_FILES["image"]["tmp_name"],$target_file_images);
            move_uploaded_file($_FILES["video"]["tmp_name"],$target_dir_videos);
        }
    }

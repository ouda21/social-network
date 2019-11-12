<?php
     
    include "database_connect.php";
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:../social-network(signup).php");
    }

    if(isset($_POST["post_items"])){
        $content=$_POST['content'];
        $image=$_FILES["image_file"]["name"];
        $image_url=$_POST["image_url"];
        $video=$_FILES["video_file"]["name"];
        $video_url=$_POST["youtube_url"];
        $location=$_POST["location"];
        $tagged_friends="Ouda";
        $user=$_SESSION["username"];
        $target_dir_images="../uploads/";
        $target_file_images=$target_dir_images.basename($_FILES["image_file"]["name"]);

        $target_dir_videos="../videos/";
        $target_file_videos=$target_dir_videos.$_FILES["video_file"]["name"];

        $sql="INSERT INTO `admin_posts`( `user_id`, `content`, `image`, `image_url`, `video`, `video_url`, `location`, `tagged_friends`,`likes`,`comments`,`shares`) VALUES ('$user','$content','$image','$image_url','$video','$video_url','$location','$tagged_friends',0,0,0)";
            if(mysqli_query($conn,$sql)){
                move_uploaded_file($_FILES["image_file"]["tmp_name"],$target_dir_images.$image);
                move_uploaded_file($_FILES["video_file"]["tmp_name"],$target_dir_videos.$video);
                    echo '<script type="text/javascript">window.location=\'../social-network(admin-main-menu).php\';</script>';
                
            }else{
                echo "Failed".mysqli_error($conn);
            }
    }
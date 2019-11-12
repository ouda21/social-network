
<?php
    session_start();
    if(!isset($_SESSION["username"])){
        echo "Session variable not set";
    }
    require "database_connect.php";
    //include "admin_functions.inc.php";
    
        //save chat to database

        function fillFields($value){
            require "database_connect.php";
            $userId=$_SESSION["username"];
            $sql="SELECT * FROM user_logs WHERE user_id='$userId'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                if($row=mysqli_fetch_assoc($result)){
                    return $row["$value"];
                }
            }
        }

        if(isset($_POST["update"])){
            $firstname=$_POST["firstname"];
            $lastname=$_POST["lastname"];
            $email=$_POST["email"];
            $userid=$_POST["userid"];
            $userId=$_SESSION["username"];

            $sql="UPDATE `user_logs` SET `user_id`='$userid',`first_name`='$firstname',`other_names`='$lastname',`email_address`='$email' WHERE user_id='$userId'";
            if(mysqli_query($conn,$sql)){
                echo "<script>alert('Profile successfully updated')</script>";
                $activity="You updated your profile information";
                    $query="INSERT INTO `activity`( `user_id`, `activity`) VALUES ('$userId','$activity')";
                    if(mysqli_query($conn,$query)){
                        header("location:../social-network(complete_profile).php");
                    }else{
                        die("Could not update activity");
                    }
            }
        }

        if(isset($_POST["add_home"])){
            $current=$_POST["current"];
            $home=$_POST["home"];
            $userId=$_SESSION["username"];

            $sql="UPDATE `user_more_info` SET `current_hood`='$current',`home`='$home' WHERE user_id='$userId'";
            if(mysqli_query($conn,$sql)){
                echo "<script>alert('Home details updated successfully')</script>";
                $activity="You updated your home information";
                    $query="INSERT INTO `activity`( `user_id`, `activity`) VALUES ('$userId','$activity')";
                    if(mysqli_query($conn,$query)){
                        header("location:../social-network(complete_profile).php");
                    }else{
                        die("Could not update activity");
                    }
            }
        }

        if(isset($_POST["add_schools"])){
            $primary=$_POST["primary"];
            $secondary=$_POST["secondary"];
            $uni=$_POST["university"];
            $userId=$_SESSION["username"];

            $sql="UPDATE `user_more_info` SET `primary_school`='$primary',`secondary_school`='$secondary',`university`='$uni' WHERE user_id='$userId'";
            if(mysqli_query($conn,$sql)){
                echo "<script>alert('Home details updated successfully')</script>";
                $activity="You updated your school information";
                    $query="INSERT INTO `activity`( `user_id`, `activity`) VALUES ('$userId','$activity')";
                    if(mysqli_query($conn,$query)){
                        header("location:../social-network(complete_profile).php");
                    }else{
                        die("Could not update activity");
                    }
            }else{
                die("Error:".mysqli_error($conn));
            }
        }

        function showGalleryImages(){
            echo "<button id='add_image' onclick='openModal()'>Add Images</button>";
        }

        if(isset($_POST["advanced"])){
            $advanced=$_POST["advance"];
            $userId=$_SESSION["username"];

            $sql="UPDATE `user_more_info` SET `more`='$advanced' WHERE user_id='$userId'";
            if(mysqli_query($conn,$sql)){
                echo "<script>alert('More details updated successfully')</script>";
                $activity="You updated your personal information";
                    $query="INSERT INTO `activity`( `user_id`, `activity`) VALUES ('$userId','$activity')";
                    if(mysqli_query($conn,$query)){
                        header("location:../social-network(complete_profile).php");
                    }else{
                        die("Could not update activity");
                    }
            }

        }

        function insertId(){
            require "database_connect.php";
            $userId=$_SESSION["username"];
                $sql="SELECT * FROM `user_more_info` WHERE user_id='$userId'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)===0){
                    $query="INSERT INTO `user_more_info`(`user_id`) VALUES ('$userId')";
                    if(mysqli_query($conn,$query)){
                        header("location:../social-network(complete_profile).php");
                    }
                }  
        }

        function findValues($value){
            require "database_connect.php";
            $userId=$_SESSION["username"];
            $sql="SELECT * FROM user_more_info WHERE user_id='$userId'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                if($row=mysqli_fetch_assoc($result)){
                    return $row["$value"];
                }
            }
        }
        
        if(isset($_POST["add_profile_picture"])){
            $userId=$_SESSION["username"];
            $name = $_FILES['profile']['name'];
            $target_dir = "../profile_pictures/";
            $target_file = $target_dir . basename($_FILES["profile"]["name"]);

            $sql="UPDATE `profile_and_cover_pictures` SET `profile_picture`='$name' WHERE user_id='$userId'";
            if(mysqli_query($conn,$sql)){
                if(move_uploaded_file($_FILES['profile']['tmp_name'],$target_dir.$name)){
                    $activity="You updated your profile picture";
                    $query="INSERT INTO `activity`( `user_id`, `activity`) VALUES ('$userId','$activity')";
                    if(mysqli_query($conn,$query)){
                        header("location:../social-network(complete_profile).php");
                    }else{
                        die("Could not update activity");
                    }
                }
                die("Error:".mysqli_error($conn));
            }
            
        }

        function insertPicture(){
            require "database_connect.php";
            $userId=$_SESSION["username"];
            $sql="SELECT * FROM profile_and_cover_pictures WHERE user_id='$userId'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)===0){
                $query="INSERT INTO `profile_and_cover_pictures`(`user_id`) VALUES ('$userId')";
                if(mysqli_query($conn,$query)){
                    header("location:../social-network(complete_profile).php");
                }
            }
        }

        function fillProfilePicture($value){
            require "database_connect.php";
            $userId=$_SESSION["username"];
            $sql="SELECT * FROM `profile_and_cover_pictures` WHERE user_id='$userId'";
            $result=mysqli_query($conn,$sql);
            while(mysqli_num_rows($result)){
                if($row=mysqli_fetch_assoc($result)){
                    return $row["$value"];
                }
            }
        }

        if(isset($_POST["add_cover_picture"])){
            $userId=$_SESSION["username"];
            $name = $_FILES['cover']['name'];
            $target_dir = "../profile_pictures/";
            $target_file = $target_dir . basename($_FILES["cover"]["name"]);

            $sql="UPDATE `profile_and_cover_pictures` SET `cover_picture`='$name' WHERE user_id='$userId'";
            if(mysqli_query($conn,$sql)){
                if(move_uploaded_file($_FILES['cover']['tmp_name'],$target_dir.$name)){
                    $activity="You updated your cover picture";
                    $query="INSERT INTO `activity`( `user_id`, `activity`) VALUES ('$userId','$activity')";
                    if(mysqli_query($conn,$query)){
                        header("location:../social-network(complete_profile).php");
                    }else{
                        die("Could not update activity");
                    }
                }
                die("Error:".mysqli_error($conn));
            }
            
        }

        function getUserProfilePicture($value){
            require "database_connect.php";
            $userId=$_SESSION["username"];

            $sql="SELECT * FROM `profile_and_cover_pictures` WHERE user_id='$value'";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
                $profile_pic=$row["profile_picture"];
                return $profile_pic;
            }
        }

        function getUserCoverPicture($value){
            require "database_connect.php";
            $userId=$_SESSION["username"];

            $sql="SELECT * FROM `profile_and_cover_pictures` WHERE user_id='$value'";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
                $profile_pic=$row["cover_picture"];
                return $profile_pic;
            }
        }
        /*function findIfFriends(){
            require "database_connect.php";
            $userId=$_SESSION["username"];

            $sql="SELECT * FROM `friends` WHERE user_id='$userId'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)==0){
                showFriendName($userId);
            }else{
                echo "No new Friends in the list";
            }
            
        }*/

        function showFriendName(){
            require "database_connect.php";
            $userId=$_SESSION["username"];
            
            $sql="SELECT * FROM `user_logs` WHERE user_id !='$userId'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                            $userID=$row["user_id"];
                            $image=getUserProfilePicture($userID);
                            echo"<span class='img_id'><img src='profile_pictures/".$image."''>";
                            echo "<div><p>".$row["email_address"]."</p></div>";
                            echo "<span><p>".$row["first_name"].' '.$row["other_names"]."</p></span>";
                            echo "<div ><a href='includes/send_request.php?request_id=$userID' method='GET' onclick='this.value='Sent Request''>
                                        <input type='submit' value='Send Request' style='background-color:rgb(64, 154, 196);
                                        width:100px;height:40px;
                                        border:none;
                                        border-radius:5px;
                                        hover{background-color:green};
                                        cursor:pointer;
                                        margin-left:70px;
                                        color: white;
                                        font-size: 12px;
                                        height: 35px;
                                        margin-bottom: 15px;
                                        font-family: Georgia, 'Times New Roman', Times, serif;
                                        border-radius: 10%;
                                        '>
                                        </a>
                                        </div>";
                            echo "</span>"; 
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

        if(isset($_POST["add_course"])){
            $course=$_POST["course"];
            $year=$_POST["year"];
            $userId=$_SESSION["username"];

            $sql="UPDATE `user_more_info` SET `course_persued`='$course',`year_of_study`='$year' WHERE user_id='$userId'";
            if(mysqli_query($conn,$sql)){
                echo "<script>alert('Home details updated successfully')</script>";
                $activity="You updated your course information";
                    $query="INSERT INTO `activity`( `user_id`, `activity`) VALUES ('$userId','$activity')";
                    if(mysqli_query($conn,$query)){
                        header("location:../social-network(complete_profile).php");
                    }else{
                        die("Could not update activity");
                    }
            }else{
                die("Error:".mysqli_error($conn));
            }
        }

        function showPosts(){
            require "database_connect.php";
            $userId=$_SESSION["username"];
            $sql="SELECT * FROM `posts` WHERE user_id = '$userId'";
            $result=mysqli_query($conn,$sql);
            while(mysqli_num_rows($result)>0){
                if($row=mysqli_fetch_assoc($result)){
                    if($row["image"]==null){
                        echo "<div class='post'><p>".$row["content"]."</p></div>";
                        echo "<div><p>".$row["location"]."</p></div>";
                        echo "<div><p>".$row["tagged_friends"]."</p></div>";
                        echo "<div><p>".$row["date_posted"]."</p></div>";
                        echo "</span>";
                        //ini_set('max_execution_time', 300); 
                       // set_time_limit(300); 
                    }else{
                        echo"<span class='img_id'><img src='uploads/".$row["image"]."'>";
                        echo "<div class='post' ><p>".$row["content"]."</p></div>";
                        echo "<div><p>".$row["location"]."</p></div>";
                        echo "<div><p>".$row["tagged_friends"]."</p></div>";
                        echo "<div><p>".$row["date_posted"]."</p></div>";
                        echo "</span>"; 
                        //ini_set('max_execution_time', 300);
                        //set_time_limit(300);
                    }
                }
            }
        }

        function logOut(){
            require "database_connect.php";
            $userId=$_SESSION["username"];
            $activity="You logged out of your account";
                    $query="INSERT INTO `activity`( `user_id`, `activity`) VALUES ('$userId','$activity')";
                    mysqli_query($conn,$query);       
        }

        function showTime($time){
            $now=date('Y-m-d H:i:s');
            $string_now=strtotime($now);
            $string_then=strtotime($time);

            $diff=($string_now)-($string_then);
            if($diff<60){
                return "few seconds ago";
            }
            else if($diff>=60 && $diff<3600){
                return round($diff/60)." minute(s) ago";
            }else if($diff>=3600 && $diff<86400){
                return round($diff/3600)." hour(s) ago";
            }else if($diff>=86400 && $diff<=(86400*30)){
                return round($diff/86400)." day(s)ago";
            }else if($diff>=(86400*30) && $diff<(86400*365) ){
                return round($diff/(86400*30))." month(s) ago";
            }else{
                return round($diff/(86400*365))." year(s) ago";
            }
        }

        function showHomePagePosts(){
            require "includes/database_connect.php";
            $userId=$_SESSION["username"];
            $sql="SELECT `id`,`user_id`,`content`, `image`, `location`, `tagged_friends`, `date_posted` FROM `posts` ORDER BY date_posted DESC";
            $result=mysqli_query($conn,$sql);
            $counters=0;
            // while(mysqli_num_rows($result)>0){
            while($x = mysqli_fetch_assoc($result)){
            if($row=mysqli_fetch_array($result)){
                $time=$row["date_posted"];
                $post_id=$row["id"];
                $image=getUserProfilePicture($row["user_id"]);
                $friendId=$row["user_id"];
                if($row["image"]==""){
                    echo "<span class='img_id'>";
                    echo "<span class='footer'><a href='includes/social-network(view_profile).inc.php?friend_id=".$friendId."' method='GET'><div class='editor-user-icon'><img src='profile_pictures/".$image."'class='user-icon-big' id='editor-poster-icon''></div> ".getName($row["user_id"])."</a> &nbsp is with <a href='#'>".$row["tagged_friends"] ."</a></span><br><br><br>";
                    echo "<div class='show-date'>".showTime($time)."</div>";
                    echo "<p>".$row["content"] ."</p>";
                    echo "<hr>";
                    echo "<span class='buttons-footer'>&nbsp &nbsp<a href='includes/like_posts.inc.php?post_id=$post_id' method='GET'> <i class='far fa-thumbs-up'></i>&nbsp Like &nbsp".getLikesCounts($row["id"])." </a> &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <button id='mycomment' onclick='showComment()'> <i class='far fa-comment'></i>&nbsp Comment ".getCommentsCounts($post_id)."</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp&nbsp <a href='#' method='GET' onclick=''> <i class='far fa-share-square'></i></i>&nbsp Share </a>";
                    echo "<div class='commentor'><form action='#' method='POST'> <input type='text' name='comment' placeholder='Comment on this post...'><input type='submit' name='comment1' style='display:none'></form></div>";
                    echo "<div>".showComments($post_id)."</div>";
                    echo "</span>";
                    echo "</span>";

                  }
                  else{
                    echo "<span class='img_id'>";
                    echo "<span class='footer'><a href='includes/social-network(view_profile).inc.php?friend_id=".$friendId."' method='GET'><div class='editor-user-icon'><img src='profile_pictures/".$image."'class='user-icon-big' id='editor-poster-icon''></div> ".getName($row["user_id"])."</a> &nbsp is with <a href='#'>".$row["tagged_friends"] ."</a></span><br><br><br>";
                    echo "<p>".$row["content"] ."</p>";
                    echo "<div class='show-date'>".showTime($time)."</div>";
                    echo "<img src='uploads/".$row["image"]."' alt='Could load the image'>";
                    echo "<hr>";
                    echo "<span class='buttons-footer'>&nbsp &nbsp<a href='includes/like_posts.inc.php?post_id=$post_id' method='GET'> <i class='far fa-thumbs-up'></i>&nbsp Like &nbsp".getLikesCounts($row["id"])." </a> &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <button id='mycomment' onclick='showComment$counters();
                    '> <i class='far fa-comment'></i>&nbsp Comment ".getCommentsCounts($post_id)."</button> &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <a href='#' method='GET' onclick=''> <i class='far fa-share-square'></i></i>&nbsp Share </a>";
                    echo "<div class='commentor'><form action='' id='frmComment' method='POST'> <input type='hidden' id='name' name='name' value='".$_SESSION["username"]."'><input type='text' name='comment' id='comment-field-$counters' placeholder='Comment on this post...'><input type='submit' id='submit-comment' name='comment1' style='display:none'></form></div>";
                    
                    echo "</span>";
                    echo "<div>".showComments($post_id)."</div>";
                    echo "</span>";
                    echo"<script>
                    function showComment$counters(){
                        document.getElementById('comment-field-$counters').style.display='inline'
                    }
                    </script>";
                    $counters++;
                    
                }
                
             }
            }
        }


        
        function showComments($value){
            require "includes/database_connect.php";
            $sql="SELECT * FROM `commets` WHERE post_id='$value'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    $comment=$row["comment"];
                    $user=$row["user_id"];
                    $time=$row["time"];
                    echo "<div class='commentor-name'><p><a href='#'>".getName($user)."</a><span class='time'>".showTime($time)."</span><br>".$comment."</p></div>";
                }
            }else{
                echo "<div class='comment'><p></p></div>";
            }
        }

        

        function getName($id){
            require "database_connect.php";
            $sql="SELECT * FROM user_logs WHERE user_id='$id'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                if($row=mysqli_fetch_assoc($result)){
                    $fname=$row["first_name"];
                    $onames=$row["other_names"];
                    $full_name=$fname." ".$onames;
                    return $full_name;
                }
            }

        }

        function getName1($id){
            require "database_connect.php";
            $sql="SELECT * FROM user_logs WHERE user_id='$id'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                if($row=mysqli_fetch_assoc($result)){
                    $fname=$row["first_name"];
                    $onames=$row["other_names"];
                    $full_name=$fname." ".$onames;
                    return $full_name;
                }
            }

        }

        function PostOwners(){
            require "includes/database_connect.php";
            $sql="SELECT * FROM user_logs";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                if($row=mysqli_fetch_assoc($result)){
                    $fname=$row["first_name"];
                    $onames=$row["other_names"];
                    $full_name=$fname." ".$onames;
                    return $full_name;
                }
            }
        }

        function showMyPosts(){
                require "includes/database_connect.php";
                $userId=$_SESSION["username"];
                echo "POSTS";
                $sql="SELECT * FROM `posts` WHERE user_id='$userId' ORDER BY date_posted DESC";
                $result=mysqli_query($conn,$sql);
                while($x=mysqli_fetch_assoc($result)){
                if($row=mysqli_fetch_array($result)){
                    $time=$row["date_posted"];
                    $post_id=$row["id"];
                    if($row["image"]==""){
                    echo "<span class='img_id'>";
                    echo "<p>".$row["content"] ."</p>";
                    echo "<hr>";
                    echo "<div class='show-date'>".showTime($time)."</div>";
                    echo "<span class='buttons-footer'><a href='includes/like_posts.inc.php?post_id=$post_id' method='GET'> <i class='far fa-thumbs-up'></i>&nbsp Like&nbsp&nbsp".getLikesCounts($post_id)." </a>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='#'> <i class='far fa-comment'></i>&nbsp Comment </a> &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp <a href='#'> <i class='fas fa-ellipsis-v'></i>&nbsp Others</a></span>";
                    echo "</span>";
                    }
                    else{
                    echo "<span class='img_id'>";
                    echo "<p>".$row["content"] ."</p>";
                    echo "<img src='uploads/".$row["image"]."' alt='Could load the image'>";
                    echo "<hr>";
                    echo "<div class='show-date'>".showTime($time)."</div>";
                    echo "<span class='buttons-footer'><a href='includes/like_posts.inc.php?post_id=$post_id' method='GET'> <i class='far fa-thumbs-up'></i>&nbsp Like&nbsp&nbsp".getLikesCounts($post_id)." </a>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='#'> <i class='far fa-comment'></i>&nbsp Comment </a> &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp <a href='#'> <i class='fas fa-ellipsis-v'></i>&nbsp Others </a></span>";
                    echo "</span>";
                    }
                }
            }
  
        }

        function showMyPosts1($value){
            require "database_connect.php";
            
            echo "POSTS";
            $sql="SELECT * FROM `posts` WHERE user_id='$value' ORDER BY date_posted DESC";
            $result=mysqli_query($conn,$sql);
            while($x=mysqli_fetch_assoc($result)){
            if($row=mysqli_fetch_array($result)){
                $time=$row["date_posted"];
                $post_id=$row["id"];
                if($row["image"]==""){
                echo "<span class='img_id'>";
                echo "<p>".$row["content"] ."</p>";
                echo "<hr>";
                echo "<div class='show-date'>".showTime($time)."</div>";
                echo "<span class='buttons-footer'><a href='like_posts.inc.php?post_id=$post_id' method='GET'> <i class='far fa-thumbs-up'></i>&nbsp Like&nbsp&nbsp".getLikesCounts($post_id)." </a>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='#'> <i class='far fa-comment'></i>&nbsp Comment </a> &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp <a href='#'> <i class='fas fa-ellipsis-v'></i>&nbsp Others</a></span>";
                echo "</span>";
                }
                else{
                echo "<span class='img_id'>";
                echo "<p>".$row["content"] ."</p>";
                echo "<img src='../uploads/".$row["image"]."' alt='Could load the image'>";
                echo "<hr>";
                echo "<div class='show-date'>".showTime($time)."</div>";
                echo "<span class='buttons-footer'><a href='like_posts.inc.php?post_id=$post_id' method='GET'> <i class='far fa-thumbs-up'></i>&nbsp Like&nbsp&nbsp".getLikesCounts($post_id)." </a>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='#'> <i class='far fa-comment'></i>&nbsp Comment </a> &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp <a href='#'> <i class='fas fa-ellipsis-v'></i>&nbsp Others </a></span>";
                echo "</span>";
                }
            }
        }

    }

        function showPendingFriendRequests(){
            require "includes/database_connect.php";
            $userId=$_SESSION["username"];
            $sql="SELECT * FROM `friends` WHERE friends='$userId' AND status =0";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                    $name=$row["user_id"];
                    showFriendsPictures($name);
                }
            }
        }

        function showFriendsPictures($id){
            require "includes/database_connect.php";
            $sql="SELECT * FROM `profile_and_cover_pictures` WHERE user_id='$id'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<div><h3></h3></div>";
                    echo "<span class='img_id'>";
                    echo "<span class='footer'><a href='#'>".getName($id)."</a> </span><br>";
                    echo "<img src='profile_pictures/".$row["profile_picture"]."' alt='Could load the image'>";
                    echo "<div ><a href='includes/confirm_request.inc.php?pending_id=$id' method='GET'>
                                        <input type='submit' value='Confirm' style='background-color:rgb(64, 154, 196);
                                        border-radius:6px;
                                        border:none;
                                        hover:background-color:green;
                                        cursor:pointer;
                                        margin-left:50px;
                                        color: white;
                                        font-size: 12px;
                                        width: auto;
                                        height: 35px;
                                        margin-bottom: 15px;
                                        font-family: Georgia, 'Times New Roman', Times, serif;
                                        border-radius: 10%;
                                        '>
                                        </a>
                                        </div>";
                                        echo "<div ><a href='includes/reject_requet.inc.php?pending_id=$id' method='GET'>
                                        <input type='submit' value='Reject' style='background-color:rgb(64, 154, 196);
                                        border-radius:6px;
                                        border:none;
                                        hover:background-color:green;
                                        cursor:pointer;
                                        margin-left:50px;
                                        color: white;
                                        font-size: 12px;
                                        width: auto;
                                        height: 35px;
                                        margin-bottom: 15px;
                                        font-family: Georgia, 'Times New Roman', Times, serif;
                                        border-radius: 10%;
                                        '>
                                        </a>
                                        </div>";
                    echo "</span>";
                }
            }
        }

        function myFriends(){
            require "includes/database_connect.php";
            $userId=$_SESSION["username"];

            $query1="SELECT DISTINCT user_id, friends,time,status FROM `friends` WHERE user_id='$userId' OR friends ='$userId'";
            $result1=mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1)>0){
                while($row=mysqli_fetch_assoc($result1)){
                    $time=$row["time"];
                    $friendId=$row["friends"];
                    $user=$row["user_id"];
                    if($row["status"]==1){
                        if($friendId==$userId){
                            $query2="SELECT * FROM `user_logs` WHERE user_id='$user'";
                            $result2=mysqli_query($conn,$query2);
                            if(mysqli_num_rows($result2)>0){
                                while($row=mysqli_fetch_assoc($result2)){
                                    $fname=$row["first_name"];
                                    $onames=$row["other_names"];
                                    
                                    $query3="SELECT * FROM `profile_and_cover_pictures` WHERE user_id='$user'";
                                    $result3=mysqli_query($conn,$query3);
                                    if(mysqli_num_rows($result3)>0){
                                        while($row=mysqli_fetch_assoc($result3)){
                                            echo "<div class='person-border'>";
                                            echo "<div class='image'><a href='includes/social-network(view_profile).inc.php?friend_id=".$user."' method='GET'><img src='profile_pictures/".$row["profile_picture"]."'></a></div>";
                                            echo "<div class='information'><p><strong>Student Number</strong>:".$user."</p>";
                                            echo "<p><strong>Full Name </strong>:".$fname." ".$onames."</p>";
                                            echo "<p><strong>Friends Since</strong>:".$time."(".showTime($time).")</p>";
                                            echo "<p><a href='includes/unfriend.inc.php?unfriend_request=$user' method='GET'> <input type='submit' name='unfriend' value='Unfriend'  style='background-color:rgb(64, 154, 196);color:white;margin-left:200px;width:100px;height:40px;border:none;border-radius:5px;margin-top:20px;'></a></p>";
                                            echo "</div></div>";
                                            
                                        }
                                    }
                                }
                            }
                        }else{
                            $query2="SELECT * FROM `user_logs` WHERE user_id='$friendId'";
                            $result2=mysqli_query($conn,$query2);
                            if(mysqli_num_rows($result2)>0){
                                while($row=mysqli_fetch_assoc($result2)){
                                    $fname=$row["first_name"];
                                    $onames=$row["other_names"];
    
                                    $query3="SELECT * FROM `profile_and_cover_pictures` WHERE user_id='$friendId'";
                                    $result3=mysqli_query($conn,$query3);
                                    if(mysqli_num_rows($result3)>0){
                                        while($row=mysqli_fetch_assoc($result3)){
                                            echo "<div class='person-border'>";
                                            echo "<div class='image'><img src='profile_pictures/".$row["profile_picture"]."'></div>";
                                            echo "<div class='information'><p><strong>Student Number</strong>:".$friendId."</p>";
                                            echo "<p><strong>Full Name </strong>:".$fname." ".$onames."</p>";
                                            echo "<p><strong>Friends Since</strong>:".$time."(".showTime($time).")</p>";
                                            echo "<p><a href='includes/unfriend.inc.php?unfriend_request=$friendId' method='GET'> <input type='submit' name='unfriend' value='Unfriend' style='background-color:rgb(64, 154, 196);color:white;margin-left:200px;width:100px;height:40px;border:none;border-radius:5px;margin-top:20px;'></a></p>";
                                            echo "</div></div>";
    
                                        }
                                    }
                                }
                            }
                        }
                    }                    
                }
            }
        }

        function myUserFriends($value){
            require "includes/database_connect.php";

            $query1="SELECT DISTINCT user_id, friends,time,status FROM `friends` WHERE user_id='$value' OR friends ='$value'";
            $result1=mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1)>0){
                while($row=mysqli_fetch_assoc($result1)){
                    $time=$row["time"];
                    $friendId=$row["friends"];
                    $user=$row["user_id"];
                    if($row["status"]==1){
                        if($friendId==$userId){
                            $query2="SELECT * FROM `user_logs` WHERE user_id='$value'";
                            $result2=mysqli_query($conn,$query2);
                            if(mysqli_num_rows($result2)>0){
                                while($row=mysqli_fetch_assoc($result2)){
                                    $fname=$row["first_name"];
                                    $onames=$row["other_names"];
                                    
                                    $query3="SELECT * FROM `profile_and_cover_pictures` WHERE user_id='$value'";
                                    $result3=mysqli_query($conn,$query3);
                                    if(mysqli_num_rows($result3)>0){
                                        while($row=mysqli_fetch_assoc($result3)){
                                            echo "<div class='person-border'>";
                                            echo "<div class='image'><a href='#' method='GET'><img src='profile_pictures/".$row["profile_picture"]."'></a></div>";
                                            echo "<div class='information'><p><strong>Student Number</strong>:".$value."</p>";
                                            echo "<p><strong>Full Name </strong>:".$fname." ".$onames."</p>";
                                            echo "<p><strong>Friends Since</strong>:".$time."(".showTime($time).")</p>";
                                            echo "<p><a href='includes/unfriend.inc.php?unfriend_request=$user' method='GET'> <input type='submit' name='unfriend' value='Unfriend'  style='background-color:rgb(64, 154, 196);color:white;margin-left:200px;width:100px;height:40px;border:none;border-radius:5px;margin-top:20px;'></a></p>";
                                            echo "</div></div>";
                                            
                                        }
                                    }
                                }
                            }
                        }else{
                            $query2="SELECT * FROM `user_logs` WHERE user_id='$friendId'";
                            $result2=mysqli_query($conn,$query2);
                            if(mysqli_num_rows($result2)>0){
                                while($row=mysqli_fetch_assoc($result2)){
                                    $fname=$row["first_name"];
                                    $onames=$row["other_names"];
    
                                    $query3="SELECT * FROM `profile_and_cover_pictures` WHERE user_id='$friendId'";
                                    $result3=mysqli_query($conn,$query3);
                                    if(mysqli_num_rows($result3)>0){
                                        while($row=mysqli_fetch_assoc($result3)){
                                            echo "<div class='person-border'>";
                                            echo "<div class='image'><img src='profile_pictures/".$row["profile_picture"]."'></div>";
                                            echo "<div class='information'><p><strong>Student Number</strong>:".$friendId."</p>";
                                            echo "<p><strong>Full Name </strong>:".$fname." ".$onames."</p>";
                                            echo "<p><strong>Friends Since</strong>:".$time."(".showTime($time).")</p>";
                                            echo "<p><a href='includes/unfriend.inc.php?unfriend_request=$friendId' method='GET'> <input type='submit' name='unfriend' value='Unfriend' style='background-color:rgb(64, 154, 196);color:white;margin-left:200px;width:100px;height:40px;border:none;border-radius:5px;margin-top:20px;'></a></p>";
                                            echo "</div></div>";
    
                                        }
                                    }
                                }
                            }
                        }
                    }                    
                }
            }
        }
        

        function fetchUsersPicture($value){
            require "database_connect.php";
            $sql="SELECT * FROM `profile_and_cover_pictures` WHERE user_id ='$value'";
            $result=mysqli_query($conn,$sql);
            while(mysqli_num_rows($result)>0){
                if($row=mysqli_fetch_assoc($result)){
                    return $row["profile_picture"];
                }
            }
        }


        function selectRecentFriends(){
            require "includes/database_connect.php";
            $userId=$_SESSION["username"];

            $sql="SELECT DISTINCT id,user_id, friends,time,status FROM `friends` WHERE user_id='$userId' OR friends ='$userId'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    $use=$row["user_id"];
                    $friend=$row["friends"];
                    if($row["status"]==1 && $row["id"]>=8){
                        if($userId==$use){
                            echo "<div class='page-block-page clearfix'>";
                            echo "<div class='pull-left' style='margin-right: 15px;'>";
                            echo "<img src='profile_pictures/".fetchUsersPicture($friend)." ' width='40'>";
                            echo "</div>";
                            echo "<div class='pull-left' style='padding-top: 8px;'>";
                            echo "<a href='includes/social-network(view_profile).inc.php?friend_id=$friend' method='GET'>".getName($friend)."</a>";
                            echo "</div>";
                            echo "</div>";
                        }else{
                            echo "<div class='page-block-page clearfix'>";
                            echo "<div class='pull-left' style='margin-right: 15px;'>";
                            echo "<img src='profile_pictures/".fetchUsersPicture($row["user_id"])." ' width='40'>";
                            echo "</div>";
                            echo "<div class='pull-left' style='padding-top: 8px;'>";
                            echo "<a href='includes/social-network(view_profile).inc.php?friend_id=$use' method='GET'>".getName($row["user_id"])."</a>";
                            echo "</div>";
                            echo "</div>";
                        }  
                    }
                    
                }
            }
        }

        function getLikesCounts($id){
            require "database_connect.php";
            $sql="SELECT likes FROM `posts` WHERE id='$id'";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result))
            $like=$row["likes"];
            if($like==0){
                return 0;
            }else{
                return $like;
            }
    
         }

         function showUserAlbums(){
            require "database_connect.php";
            $userId=$_SESSION["username"];
            $sql="SELECT * FROM `albums` WHERE user_id='$userId'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    $album_name=$row["album_name"];
                    $num_of_pics=$row["number_of_pictures"];
                    $album2=$row["id"];
                    echo $album2;
                    echo "<span class='albums'><p><i class='far fa-folder-open'></i>&nbsp<a href='social-network(album-manager).php? x          
                    =$album2' method='GET'> ".$album_name."</a></p></span>";
                }
                echo"<div class='new-album'><p>Create a new <a href='social-network(create_new_album).php'>Album</a></p></div>";
            }else{
                $sql1="SELECT * FROM `albums` WHERE user_id='$userId'";
                $result2=mysqli_query($conn,$sql1);
                while($row1=mysqli_fetch_assoc($result)){
                    $row["id"];
                    $album2=$row["id"];
                    echo $album2;
                echo"<div><p>You have not created any Albums Yet</p></div>";
                echo"<div><p>Create a new <a href='../social-network(create_new_album).php'>Album</a></p></div>";
                }
            }
         }
        

         function createAlbumFolder(){
            $userId=$_SESSION["username"];
            $directory=$userId."'s Albums";
            if(is_dir($directory)===false){
                mkdir($directory);
            }else{
                echo "Could not create the folder";
            }
         }

        function shareButton(){
            require "includes/database_connect.php";
            $userId=$_SESSION["username"];

            $sql="SELECT * FROM `posts`";
            $result=mysqli_query($conn,$slq);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    $post_id=$row["id"];

                }
            }
        }

        /*function showShareOptions(){

            
            echo "<div class='modal-confirm' id='myModal'>
                <div class='modal-content'>
                    <span class='close' id='close' onclick='closeModal()'> &times</span>
                    <form actio='' method='GET'>
                        <input type='radio' name='share'>Friends
                        <input type='radio' name='share'>Group
                    </form>
                    <button class='button' id='continue' onclick='openModal2()'>Continue</button>
                </div>
            </div>";
        }*/

        function showGallery(){

        }
        function displayMessageCount(){
            
        }

        if(isset($_POST["set_settings"])){
            $userId=$_SESSION["username"];
            $view_profile=$_POST["profile_view"];
            $post_view=$_POST["posts_view"];
            $post_on_profile=$_POST["post_profile"];
            $tags=$_POST["tag_user"];
            $allow_request=$_POST["allow_friends"];
            $allow_pages_invites=$_POST["allow_pages"];
            $chat=$_POST["chat_option"];
            $query="SELECT * FROM `user_settings` WHERE user_id='$userId'";
            $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result)==1){
                $query4="UPDATE `user_settings` SET `profile_view`=$view_profile,`post_view`='$post_view',`profile_post`='$post_on_profile',`tags`=$tags,`allow_requests`='$allow_request',`allow_page_invites`='$allow_pages_invites',`send_chats`=$chat WHERE user_id='$userId'";
                if(mysqli_query($conn,$query4)){
                    echo "<script>alert('Settings updated successfully')</script>";
                }else{
                    die("Error:".mysqli_error($conn));
                }

            }else{
                $sql="INSERT INTO `user_settings`(`user_id`, `profile_view`, `post_view`, `profile_post`, `tags`, `allow_requests`, `allow_page_invites`, `send_chats`) VALUES ('$userId','$view_profile','$post_view','$post_on_profile','$tags','$allow_request','$allow_pages_invites','$chat')";
                if(mysqli_query($conn,$sql)){
                    echo "<script>alert('Settings updated successfully')</script>";
                }else{
                    die("Error:".mysqli_error($conn));
                }
            }

        }

        function getCommentsCounts($id){
            require "database_connect.php";
            $sql="SELECT comments FROM `posts` WHERE id='$id'";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result))
            $comments=$row["comments"];
            if($comments==0){
                return 0;
            }else{
                return $comments;
            }
    
        }

        function createMessageTable(){
            require "database_connect.php";
            $userId = $_SESSION["username"];
            $name=$userId."_messages";

            $sql="CREATE table ouda (message_id int(11) UNSGNED PRIMARY KEY AUTO_INCREMENT,receiver_id int(11), time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
            if($conn->query($sql)===TRUE){
                echo "Table cretaed successfully";
            }else{
                die( "Error creating table.".$conn->error);
                
            }
        }

        function getMyChats(){
            require "database_connect.php";
            $userId = $_SESSION["username"];

            $sql="SELECT * FROM `friends` WHERE friends='$userId' OR user_id='$userId'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    $status=$row["status"];
                    
                    if($status==1){
                        if($row["friends"]==$userId){
                            
                            $friend=$row["user_id"];
                            $image=getUserProfilePicture($row["user_id"]);
                            echo'<div class="chat_list">
                                <div class="chat_people">
                                    <div class="chat_img"> <img src="profile_pictures/'.$image.'"> </div>
                                    <div class="chat_ib">
                                    <h5><button style="border:none;background-color:#ebebeb;><a href="social-network(main-chat).php?user_id='.$friend.'" method="GET">'.getName($friend).'</a></button> <span class="chat_date">Today</span></h5>
                                    </div>
                                </div>
                                </div>';
                        }else if($row["user_id"]==$userId) {
                            $friend=$row["friends"];
                            $image=getUserProfilePicture($row["friends"]);
                            echo'<div class="chat_list">
                                <div class="chat_people">
                                    <div class="chat_img"> <img src="profile_pictures/'.$image.'"> </div>
                                    <div class="chat_ib">
                                    <h5><button style="border:none;background-color:#ebebeb;"><a href="social-network(main-chat).php?user_id='.$friend.'" method="GET">'.getName($friend).'</a> </button><span class="chat_date">Today</span></h5>
                                    </div>
                                </div>
                                </div>';
                        }
                        else{
                            echo"";
                        }
                    }else{
                            
                    }
                }
            }else{

            }
        }

        function fillUniversityPicture($value){
            require "database_connect.php";
            $userId=$_SESSION["username"];
            $name=getName($userId);
    
            $sql="SELECT * FROM `university_details` WHERE admin_name='$name'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    return $row["$value"];
                }
            }else{
                return " ";
            }
            
        }

        if(isset($_POST["report"])){
            $reporter=$_POST["reporter"];
            $reported=$_POST["reported"];
            $reason=$_POST["reason"];

            $sql="INSERT INTO `reports`(`reporter`, `reported`, `reason`) VALUES ('$reporter','$reported','$reason')";
            if(mysqli_query($conn,$sql)){
                header("location:social-network(view_profile).inc.php");
            }else{
                die("Error:".mysqli_error($conn));
            }
        }

        function getUniversityLogo(){
            require "database_connect.php";
            $userId=$_SESSION["username"];

           $sql="SELECT * FROM `user_logs` WHERE user_id='$userId'";
           $result=mysqli_query($conn,$sql);
           if(mysqli_num_rows($result)>0){
               while($row=mysqli_fetch_assoc($result)){
                   $uni=$row["university"];
                   $sql1="SELECT * FROM `university_details` WHERE university_name='$uni'";
                   $result1=mysqli_query($conn,$sql1);
                   if(mysqli_num_rows($result1)>0){
                       while($row1=mysqli_fetch_assoc($result1)){
                            $pic=$row1["university_image"];
                            return $pic;
                       }
                   }
               }
           }
        }

        function getId($name){
            require "database_connect.php";
            $sql="SELECT * FROM `university_details` WHERE admin_name='$name'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                if($row=mysqli_fetch_assoc($result)){
                    $name1=$row["admin_name"];
                    $all_name=explode(" ",$name1);
                    $fname=$all_name[0];
                    $lname=$all_name[1];
                    $query="SELECT * FROM `user_logs` WHERE first_name='$fname' AND other_names='$lname'";
                    $result1=mysqli_query($conn,$query);
                    if(mysqli_num_rows($result1)>0){
                        while($row2=mysqli_fetch_assoc($result1)){
                            $Id=$row2["user_id"];
                            return $id;
                        }
                    }else{
                        die("No user found");
                    }
                }
            }
        }

        function showAdminPosts(){
            require "includes/database_connect.php";
            $userId=$_SESSION["username"];
            $sql="SELECT `id`,`user_id`,`content`, `image`, `location`, `tagged_friends`, `date_posted` FROM `posts` ORDER BY date_posted DESC";
            $result=mysqli_query($conn,$sql);
            $counters=0;
            // while(mysqli_num_rows($result)>0){
            while($x = mysqli_fetch_assoc($result)){
            if($row=mysqli_fetch_array($result)){
                $time=$row["date_posted"];
                $post_id=$row["id"];
                $image=getUserProfilePicture($row["user_id"]);
                $friendId=$row["user_id"];
                if($row["image"]==""){
                    echo "<span class='img_id'>";
                    echo "<span class='footer'><a href='includes/social-network(view_profile).inc.php?friend_id=".$friendId."' method='GET'><div class='editor-user-icon'><img src='profile_pictures/".$image."'class='user-icon-big' id='editor-poster-icon''></div> ".getName($row["user_id"])."</a> &nbsp is with <a href='#'>".$row["tagged_friends"] ."</a></span><br><br><br>";
                    echo "<div class='show-date'>".showTime($time)."</div>";
                    echo "<p>".$row["content"] ."</p>";
                    echo "<hr>";
                    echo "<span class='buttons-footer'>&nbsp &nbsp<a href='includes/like_posts.inc.php?post_id=$post_id' method='GET'> <i class='far fa-thumbs-up'></i>&nbsp Like &nbsp".getLikesCounts($row["id"])." </a> &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <button id='mycomment' onclick='showComment()'> <i class='far fa-comment'></i>&nbsp Comment ".getCommentsCounts($post_id)."</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp&nbsp <a href='#' method='GET' onclick=''> <i class='far fa-share-square'></i></i>&nbsp Share </a>";
                    echo "<div class='commentor'><form action='#' method='POST'> <input type='text' name='comment' placeholder='Comment on this post...'><input type='submit' name='comment1' style='display:none'></form></div>";
                    echo "<div>".showComments($post_id)."</div>";
                    echo "</span>";
                    echo "</span>";

                  }
                  else{
                    echo "<span class='img_id'>";
                    echo "<span class='footer'><a href='includes/social-network(view_profile).inc.php?friend_id=".$friendId."' method='GET'><div class='editor-user-icon'><img src='profile_pictures/".$image."'class='user-icon-big' id='editor-poster-icon''></div> ".getName($row["user_id"])."</a> &nbsp is with <a href='#'>".$row["tagged_friends"] ."</a></span><br><br><br>";
                    echo "<p>".$row["content"] ."</p>";
                    echo "<div class='show-date'>".showTime($time)."</div>";
                    echo "<img src='uploads/".$row["image"]."' alt='Could load the image'>";
                    echo "<hr>";
                    echo "<span class='buttons-footer'>&nbsp &nbsp<a href='includes/like_posts.inc.php?post_id=$post_id' method='GET'> <i class='far fa-thumbs-up'></i>&nbsp Like &nbsp".getLikesCounts($row["id"])." </a> &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <button id='mycomment' onclick='showComment$counters();
                    '> <i class='far fa-comment'></i>&nbsp Comment ".getCommentsCounts($post_id)."</button> &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <a href='#' method='GET' onclick=''> <i class='far fa-share-square'></i></i>&nbsp Share </a>";
                    echo "<div class='commentor'><form action='' id='frmComment' method='POST'> <input type='hidden' id='name' name='name' value='".$_SESSION["username"]."'><input type='text' name='comment' id='comment-field-$counters' placeholder='Comment on this post...'><input type='submit' id='submit-comment' name='comment1' style='display:none'></form></div>";
                    
                    echo "</span>";
                    echo "<div>".showComments($post_id)."</div>";
                    echo "</span>";
                    echo"<script>
                    function showComment$counters(){
                        document.getElementById('comment-field-$counters').style.display='inline'
                    }
                    </script>";
                    $counters++;
                    
                }
                
             }
            }

        }
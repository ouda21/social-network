<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:../social-network(signup).php");
    }
    
    require "database_connect.php";
    $request=$_GET["request_id"];
    $userId=$_SESSION["username"];
    $sql="SELECT * FROM user_logs WHERE user_id='$request'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        if($row=mysqli_fetch_array($result)){
            $name=$row["first_name"]." ".$row["other_names"];
        
            $sql1="SELECT * FROM `friends` WHERE user_id='$userId' AND friends='$request' OR user_id='$request' AND friends='$userId'";
            $result2=mysqli_query($conn,$sql1);
            if(mysqli_num_rows($result2)==1){
                die("<script>alert('You have sent friend to ".$name."')</script>".header("location:../social-network(connect_with_friends).php"));
            }
            else{
                $query="INSERT INTO `friends`(`user_id`, `friends`, `status`) VALUES ('$userId','$request',0)";
                if($userId==$request){
                    die();
                    header("location:../social-network(connect_with_friends).php");
                }else{
                    if(mysqli_query($conn,$query)){
                        $activity="You sent a friend request to ".$name;
                            $query="INSERT INTO `activity`( `user_id`, `activity`) VALUES ('$userId','$activity')";
                            if(mysqli_query($conn,$query)){
                                header("location:../social-network(connect_with_friends).php");
                            }else{
                                die("Could not update activity");
                            }
                        }else{
                            die("Error".mysqli_error($conn));
                        }
                }
            }
            
        }
    else{
        die("Error:".mysqli_error($conn));
        }
    }


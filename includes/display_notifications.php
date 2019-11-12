<?php

//session_start();
if(!isset($_SESSION["username"])){
    header("location:../social-network(signup).php");
}

require "database_connect.php";

function loadNotifications(){
    $userID=$_SESSION["username"];
    require "database_connect.php";
    $sql="SELECT activity,time_executed,MAX(time_executed) FROM activity WHERE user_id='$userID'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        if($row=mysqli_fetch_array($result)){
            $time_last=$row["time_executed"];
            $now=date('Y-m-d H:i:s');
            $query="SELECT COUNT(activity) FROM activity BETWEEN '$time_last' AND '$now' WHERE user_id != $userID";
            $result1=mysqli_query($conn,$query);
            return $result1;
        }else{
            die("Error:".mysqli_error($conn));
        }
    }else{
        die("Error:".mysqli_error($conn));
        return null;
    }
}
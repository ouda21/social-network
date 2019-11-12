<?php

    
    require "database_connect.php";
    
    function getUserInfo($value,$col){
        require "includes/database_connect.php";
        $sql="SELECT * FROM `user_logs` WHERE user_id='$value'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result))
                return $row[$col];
        }
    }

    function getMyFriends($value){
        require "includes/database_connect.php";
        $sql="SELECT * FROM `friends` WHERE user_id='$value' OR friends='$value'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $status=$row["status"];
                if($status==1){
                    for($i=0;i<$row;$i++){
                        $id=$i["user_id"];
                        $fname=getUserInfo($id,"first_name");
                        $otrname=getUserInfo($id,"other_names");

                    return $fname." ".$otrname;
                    }
                    
                }
            }
        }
    }

    
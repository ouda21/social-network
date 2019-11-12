<?php

    include "database_connect.php";
    $now =date("Y-m-d H:i:s");
    echo "Today is: ".$now."<br>";
    $sql="SELECT * FROM activity WHERE user_id=12309 ORDER BY time_executed DESC";
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0){
        if($row=mysqli_fetch_array($result)){
            echo $row["time_executed"]."<br>";
            $time3=strtotime($now);
            $time2=strtotime($row["time_executed"]);
            echo $time2."<br>";

            $diff=$time3-$time2;
            echo $diff."<br>";
            if($diff<60){
                echo "Added a few seconds ago";
            }
            else if($diff<>60 && $diff<3600){
                echo "Added ".round ($diff/60)." minutes ago";
            }
            else if($diff>=3600 && $diff<86400){
                echo "Added ".round ($diff/3600)." hours ago";
            }else{
                echo "Added ".round ($diff/86400)." days ago";
            }
        }
    }
<?php

    include "database_connect.php";
    if(isset($_POST["send_message"])){
        $sender=$_POST["userId"];
        $receiver=$_POST["recepient"];
        $body=$_POST["msg"];

        echo "Form loaded";
    
    }
    
<?php

    session_start();
    if(!isset($_SESSION["username"])){
        header("../social-network(signup).php");
    }
    require  "database_connect.php";
    $post_shared=$_GET["post_id"];
    
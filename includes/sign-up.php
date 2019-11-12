<?php
    require_once "database_connect.php";

    if($conn){
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $email=$_POST["email"];
        $userid=$_POST["userid"];
        $password=md5($_POST["password"]);
        $conf_password=md5($_POST["password2"]);
        $sign_up=$_POST["signup"];
        $university=$_POST["uni"];

        if(isset($sign_up)){
            if($password !==$conf_password){
                die("<script>alert('Password mismatch</script>')");
            }else{
                $sql="INSERT INTO `user_logs`(`user_id`, `first_name`, `other_names`, `email_address`, `university`,`password`, `conf_password`, `user_rank`) VALUES ('$userid','$firstname','$lastname','$email',,'$university','$password','$conf_password',1)";
                if(mysqli_query($conn,$sql)){
                    echo "<script>alert('Reqistration successful')</script>";
                    $activity="Created your Account";
                        $query="INSERT INTO `activity`( `user_id`, `activity`) VALUES ('$userid','$activity')";
                        if(mysqli_query($conn,$query)){
                            header("location:../social-network(signup).php");
                        }else{
                            die("Could not execute query");
                        }
                }else{
                    die("<script>alert('An error occurred:".mysqli_error($conn)."')</script>");
                }
            }
        }
    }          
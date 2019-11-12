<?php
    session_start();
    require "database_connect.php";

    if($conn){
        $userid=$_POST["username"];
        $password=md5($_POST["password"]);
        $login=$_POST["login"];

        if(isset($login)){
            $sql="SELECT * FROM `user_logs` WHERE user_id=? AND password=?";
            $stmt=mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                die("Sql statement failed");
            }else{
                mysqli_stmt_bind_param($stmt,"is",$userid,$password);
                mysqli_stmt_execute($stmt);
                $result=mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result)==0){
                    echo '<script type="text/javascript">
                    alert("Wrong UserName or Password. Please try again!");
                    window.location=\'../social-network(signup).php\';</script>';
                }else{
                    while($row=mysqli_fetch_assoc($result)){
                        $_SESSION['username']=$row['user_id'];
                        $userId=$_SESSION["username"];
                        if($row["user_rank"]===1){
                            $activity="Logged into your Account";
                            $query="INSERT INTO `activity`( `user_id`, `activity`) VALUES ('$userId','$activity')";
                            if(mysqli_query($conn,$query)){
                            
                                echo "<script>Log in Successful</script>";
                                header("location:../social-network(home_page).php");
                            }else{
                                die("Could not execute query".mysqli_error($conn));
                            }
                        }else{
                            $activity="Logged into your Account";
                            $query="INSERT INTO `activity`( `user_id`, `activity`) VALUES ('$userId','$activity')";
                            if(mysqli_query($conn,$query)){
                            
                                echo "<script>Log in Successful</script>";
                                header("location:../social-network(getting_started).php");
                            }else{
                                die("Could not execute query".mysqli_error($conn));
                            }
                        }
                    }
                }
            }
        }
    }
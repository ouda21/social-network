<?php
    include "edit_profile.inc.php";
    if(!isset($_SESSION["username"])){
        echo "Session variable not set";
    }
    require "database_connect.php";

    if(isset($_POST["uni_details"])){
        $image=$_FILES["university_image"]["name"];
        $name=$_POST["university_name"];
        $email=$_POST["university_email"];
        $student=$_POST["students"];
        $country=$_POST["country"];
        $city=$_POST["city"];
        $phone=$_POST["phone"];
        $userId=$_SESSION["username"];
        $admin=getName($userId);

        $target_dir = "../universities/";
        $target_file = $target_dir . basename($_FILES["university_image"]["name"]);

        $query="SELECT * FROM `university_details` WHERE university_name='$name'";
        $result=mysqli_query($conn,$query);
        If(mysqli_num_rows($result)>0){
            die("University exists in the system");
        }else{
            $sql="INSERT INTO `university_details`(`university_image`, `university_name`, `university_email`, `students`, `country`, `city`, `phone`,`admin_name`) VALUES ('$image','$name','$email',$student,'$country','$city','$phone','$admin')";
            if(mysqli_query($conn,$sql)){
                if(move_uploaded_file($_FILES["university_image"]["tmp_name"],$target_dir.$image)){
                        echo"<script>alert('University Registered successfully');window.location=\"../social-network(getting_started).php\"</script>";
                }else{
                    die("Error:".mysqli_error($conn));
                }
            }else{
                die("Error: ".mysqli_error($conn));
            }
        }
    }

    function fillUniversityDetails($value){
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

    function getAllUsers(){
        require "database_connect.php";
        $sql="SELECT * FROM `user_logs` WHERE user_rank=1";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_num_rows($result);
            return $row;
        }else{
            return 0;
        }
    }

    function getUniversityUser(){
        require "database_connect.php";
        $userId=$_SESSION["username"];
        $name=getName($userId);

        $sql="SELECT * FROM `university_details` WHERE admin_name='$name'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $university=$row["university_name"];
                $sql1="SELECT * FROM `user_logs` WHERE university='$university'";
                $result1=mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1)>0){
                    $row1=mysqli_num_rows($result1);
                    return $row1;
                }else{
                    return 0;
                }
            }
        }else{
            echo "No such user";
        }
    }

    function getPostsCounts(){
        require "database_connect.php";
        $userId=$_SESSION["username"];
        $sql="SELECT * FROM `university_details` WHERE admin_name='$name'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $university=$row["university_name"];
                $sql1="SELECT * FROM `user_logs` WHERE university='$university'";
                $result1=mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1)>0){
                   while($row1=mysqli_fetch_assoc($result1)){
                        $id=$row1["user_id"];
                        $sql2="SELECT * FROM `posts` WHERE user_id='$id'";
                        $result2=mysqli_query($conn,$sql2);
                        if(myqli_num_rows($result2)>0){
                            $row2=mysqli_num_rows($result2);
                            return $row2;
                        }else{
                            return 0;
                        }
                   }
                }else{
                    return 0;
                }
            }
        }else{
            echo "No such user";
        }
    }

    function univesityUsers(){
        require "database_connect.php";
        $userId=$_SESSION["username"];
        $name=getName($userId);

        $sql="SELECT * FROM `university_details` WHERE admin_name='$name'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $university=$row["university_name"];
                $sql1="SELECT * FROM `user_logs` WHERE university='$university'";
                $result1=mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1)>0){
                    echo'<table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>Student Id</th>
                            <th>First Name</th>
                            <th>Other Name</th>
                            <th class="text-right">Email</th>
                            <th class="text-right">University</th>
                        </tr>
                    </thead>';
                    while($row1=mysqli_fetch_assoc($result1)){
                        $id=$row1["user_id"];
                        $fname=$row1["first_name"];
                        $oname=$row1["other_names"];
                        $email=$row1["email_address"];
                        $university=$row1["university"];
                        echo ' <tbody>
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$fname.'</td>
                            <td>'.$oname.'</td>
                            <td class="text-right">'.$email.'</td>
                            <td class="text-right">'.$university.'</td>
                        </tr>';
                    }
                    echo ' </tbody>
                    </table>';
                    
                }else{
                    return 0;
                }
            }
        }else{
            echo "No such user";
        }
    }

    function getUniversityPost(){
        require "database_connect.php";
        $userId=$_SESSION["username"];
        $name=getName($userId);

        $sql="SELECT * FROM `university_details` WHERE admin_name='$name'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $university=$row["university_name"];
                $sql1="SELECT * FROM `user_logs` WHERE university='$university'";
                $result1=mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1)){
                    while($row1=mysqli_fetch_assoc($result1)){
                        $id=$row1["user_id"];
                        $sql3="SELECT * FROM `posts` WHERE user_id='$id'";
                        $result2=mysqli_query($conn,$sql3);
                        if(mysqli_num_rows($result2)>0){
                            while($row2=mysqli_fetch_assoc($result2)){
                                $post=$row2["content"];
                                $time=$row2["date_posted"];
                                echo '<div class="au-task__item-inner">
                                    <h5 class="task">
                                    <a href="#">'.$post.'</a>
                                    </h5>
                                    <span class="time">'.$time.'</span>
                                </div>';
                            }
                        }else{
                            echo 0;
                        }
                    }
                }
            }
        }
    }

    function getReports(){
        require "database_connect.php";
        $userId=$_SESSION["username"];
        $name=getName($userId);

        $sql="SELECT * FROM `university_details` WHERE admin_name='$name'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $uni=$row["university_name"];
                $sql1="SELECT * FROM `user_logs` WHERE university='$uni'";
                $result1=mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1)>0){
                    while($row1=mysqli_fetch_assoc($result1)){
                        $id=$row1["user_id"];
                        $sql2="SELECT * FROM `reports` WHERE reporter='$id'";
                        $result2=mysqli_query($conn,$sql2);
                        if(mysqli_num_rows($result2)){
                            while($row2=mysqli_fetch_assoc($result2)){
                                $reporter=$row2["reporter"];
                                $reported=$row2["reported"];
                                $reason=$row2["reason"];

                                echo'<div class="au-message__item unread">
                                <div class="au-message__item-inner">
                                    <div class="au-message__item-text">
                                        <div class="avatar-wrap">
                                            <div class="avatar">
                                                <img src="profile_pictures/'.fillProfilePictureReport($reporter).'" alt=" ">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h5 class="name">'.getName($reporter).'</h5>
                                            <p>Reported <strong>'.getName($reported).'</strong> for: '.$reason.'</p>
                                        </div>
                                    </div>
                                    <div class="au-message__item-time">
                                        <span>12 Min ago</span>
                                    </div>
                                </div>';
                            }
                        }
                    }
                }
            }
        }
    }

    function getReportCount(){
        require "database_connect.php";
        $userId=$_SESSION["username"];
        $name=getName($userId);

        $sql="SELECT * FROM `university_details` WHERE admin_name='$name'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $uni=$row["university_name"];
                $sql1="SELECT * FROM `user_logs` WHERE university='$uni'";
                $result1=mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1)>0){
                    while($row1=mysqli_fetch_assoc($result1)){
                        $id=$row1["user_id"];
                        $sql2="SELECT * FROM `reports` WHERE reporter='$id'";
                        $result2=mysqli_query($conn,$sql2);
                        if(mysqli_num_rows($result2)>0){
                            $row2=mysqli_num_rows($result2);
                            return $row2;
                        }
                    }
                }  
            }
        }
    }

    function fillProfilePictureReport($value){
        require "database_connect.php";
        
        $sql="SELECT * FROM `profile_and_cover_pictures` WHERE user_id='$value'";
        $result=mysqli_query($conn,$sql);
        while(mysqli_num_rows($result)){
            if($row=mysqli_fetch_assoc($result)){
                return $row["profile_picture"];
            }
        }
    }

    function getTopUniversities(){
        require "database_connect.php";
        $sql="SELECT * FROM `university_details`";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo'<table class="table table-top-countries">
                    <tbody>';
            while($row=mysqli_fetch_assoc($result)){
                $university=$row["university_name"];
                $students=$row["students"];
                echo '<tr>
                        <td>'.$university.'</td>
                        <td class="text-right">'.$students.'</td>
                     </tr>';
            }
            echo ' </tbody>
            </table>';
        }
    }


function allUnivesityUsers(){
    require "database_connect.php";
    $userId=$_SESSION["username"];
    $name=getName($userId);

    $sql="SELECT * FROM `university_details` WHERE admin_name='$name'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $university=$row["university_name"];
            $sql1="SELECT * FROM `user_logs` WHERE university='$university'";
            $result1=mysqli_query($conn,$sql1);
            if(mysqli_num_rows($result1)>0){
                echo'<table class="blueTable">
                <thead>
                    <tr>
                        <th>Student Id</th>
                        <th>First Name</th>
                        <th>Other Name</th>
                        <th class="text-right">Email</th>
                        <th class="text-right">University</th>
                        <th>Action</th>
                    </tr>
                </thead>';
                while($row1=mysqli_fetch_assoc($result1)){
                    $id=$row1["user_id"];
                    $fname=$row1["first_name"];
                    $oname=$row1["other_names"];
                    $email=$row1["email_address"];
                    $university=$row1["university"];
                    echo ' <tbody>
                    <tr>
                        <td>'.$id.'</td>
                        <td>'.$fname.'</td>
                        <td>'.$oname.'</td>
                        <td class="text-right">'.$email.'</td>
                        <td class="text-right">'.$university.'</td>
                        <td ><a href="#">Delete</a>&nbsp &nbsp <a href="#">Suspend</a></td>
                       
                    </tr>';
                }
                echo '<td colspan="7">
                <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
                </td>';
                echo ' </tbody>
                </table>';
                
            }else{
                return 0;
            }
        }
    }else{
        echo "No such user";
    }
}
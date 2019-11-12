<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:../social-network(signup).php");
}

include "database-connect.php";
if(isset($_POST["search"])){
    // Prepare a select statement
    $userId=$_SESSION["username"];
    $sql = "SELECT * FROM `friends` WHERE user_id LIKE '%" .$userId. "%' OR lastname LIKE '%".$userId  ."%' WHERE status=2";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_POST["search"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["friends"] . "</p>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
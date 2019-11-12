<?php
     include "php/home_page_stuff.inc.php";
    if(!isset($_SESSION["name"])){
        header("localhost:../betty(log-in).php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin | Manage Mechanics</title>
        <meta name="viewport" content="width=device-width, height=deivice-height,initial-scale=1"> 
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/home-styles.css">
        <link rel="stylesheet" href="styles/admin-styles.css">
    </head>
    <body>
    <nav class="navigation">
  <div class="logo">
    <a href="betty(admin-dashboard).php"><img src="images/logo-226x40.png" alt="no logo to display"></a>
        </div>
        <div class="links">
            <ul style="margin-right:-50px;">
            <li><a href="betty(admin-manage-users).php">USERS</a></li>
                <li><a href="betty(admin-mechanic).php">MECHANICS</a></li>
                <li><a href="betty(admin-queries).php">QUERIES</a></li>
                <li><a href="#"><?php echo $_SESSION["name"]?></a>
                    <ul class="dropdown">
                        <li><a href="betty(edit-profile).php"style="color:silver">Edit Profle</a></li>
                        <li><a href="betty(log-in).php" style="color:silver">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        </nav>
        
        <div class="title-bar">
            <h2>Manage Users</h2>
            <h4><a href=''><?php echo $_SESSION["name"]?></a></h4>
        </div>
        <div class="system-users">
            <h2>Mechanics</h2>
            <?php showAllMechanics() ?>
        </div>
        <div class="system-users">
            <h2>Suspended Mechanics</h2>
            <?php showSuspendedMechanics() ?>
        </div>
        <button id="myBtn" onclick="openModal()" style="margin-top:300px;">Add Mechanic</button>
        <div class="modal-confirm" id="myModal">
                <div class="modal-content">
                    <span class="close" id="close" onclick="closeModal()"> &times</span>
                    <div class="head" style="text-align:center;font-weight:bold">Employ New Mechanic</div>
                    <form action="php/home_page_stuff.inc.php" method="POST">
                        <input class="form-input" type="text" name="name" placeholder="Full Name">
                        <input class="form-input" type="text" name="phone" placeholder="Phone">
                        <input class="form-input" type="email" name="name" placeholder="Email">
                        <div class="form-wrap stick-to-buttom">
                            <button class="btn btn-lg btn-default" style="color:white">Add Mechanic</button>
                        </div>
                    </form>
                </div>
            </div>
            <script>
                  function fun(){
                    alert(<form>
                        <select name='mech' class='dropdown'>
                            <option value='".$name2."'></opton>
                        </select>
                    </form>)
                }
            </script>
            
            <script>
                function openModal(){
                    var modal = document.getElementById("myModal");
                    //var btn = document.getElementById("myBtn");
                    modal.style.display="block";
                }

                function closeModal(){
                    var modal = document.getElementById("myModal");
                    modal.style.display="none";
                }

                function closeModal2(){
                    var modal2 = document.getElementById("myModal2");
                    modal2.style.display="none";
                }

                function openModal2(){
                    var modal = document.getElementById("myModal");
                    modal.style.display="none";
                    var modal2 = document.getElementById("myModal2");
                    modal2.style.display="block";
                }
            </script>
    <body>
</html>
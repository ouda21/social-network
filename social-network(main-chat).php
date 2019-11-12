
<?php

    include "includes/edit_profile.inc.php";
    include "includes/get_user_info.inc.php";
    $userId=$_SESSION["username"];
    error_reporting(0);
?>
<html>
<head>

<link href="http://social.patchesoft.com/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="http://social.patchesoft.com/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="http://social.patchesoft.com/scripts/libraries/mention/jquery.mentions.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

         <!-- Styles -->
        <link href="http://social.patchesoft.com/styles/client/themes/titan/main.css" rel="stylesheet" type="text/css">
        <link href="http://social.patchesoft.com/styles/client/themes/titan/responsive.css" rel="stylesheet" type="text/css">
        <link href="http://social.patchesoft.com/styles/client/responsive.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="styles/home-page-styles.css">
        <link href="http://social.patchesoft.com/styles/client/elements.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,500,550,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />

        <link href="http://social.patchesoft.com/styles/chat.css" rel="stylesheet" type="text/css">

        <!-- SCRIPTS -->
        <script type="text/javascript">
        var global_base_url = "http://social.patchesoft.com/";
        var global_hash = "7e97c8399674f181628ded7a106c7988";
        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script src="scripts/home_page.js"></scripts>
        <script src="http://social.patchesoft.com/scripts/libraries/jquery.form.min.js"></script> <!-- processing forms ajax -->

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.12/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.12/datatables.min.js"></script> <!-- datatables -->

        <script src="http://social.patchesoft.com/scripts/libraries/mention/jquery.mentions.js"></script> <!-- @mentions and #hastags -->
        <script src="http://social.patchesoft.com/scripts/libraries/jquery.jscroll.js"></script> <!-- infinite scroll -->

        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> <!-- text editor -->

        <script src="//twemoji.maxcdn.com/2/twemoji.min.js?2.3.0"></script> <!-- for emoji -->

        
        
         <link href="http://social.patchesoft.com/scripts/libraries/select2.min.css" rel="stylesheet" type="text/css">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo0l7EcNxwWoTYIgE3-p3J0m5_W844_Pg&libraries=places"></script>
        <script src="http://social.patchesoft.com/scripts/libraries/jquery.geocomplete.min.js"></script>
        <script src="http://social.patchesoft.com/scripts/libraries/select2.full.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="http://social.patchesoft.com/scripts/custom/chat.js" type="text/javascript"></script>
        <script type="text/javascript">
          time_to_update = 5000;
        </script>
        
        <link  href="http://social.patchesoft.com/scripts/libraries/viewer/viewer.css" rel="stylesheet">
        <script src="http://social.patchesoft.com/scripts/libraries/viewer/viewer.js"></script> <!-- Gallery viewer -->
        <link rel="stylesheet" href="styles/main_chat.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-header2">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#" title="Social Network">University Social Network (USN)</a>
                </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="social-network(home_page).php">Home</a></li>
            <li>
              <form action="#" class="navbar-form" method="post" accept-charset="utf-8">
                <input type="hidden" name="csrf_test_name" value="7e97c8399674f181628ded7a106c7988" />
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search ..." id="search-complete">
              </div>
              </form>            </li>
                      <li><a href="#" data-target="#" onclick="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="noti-menu-drop"><i class="far fa-bell"></i><span class="badge notification-badge small-text"></span></a>
                      
        
            <ul class="dropdown-menu" aria-labelledby="noti-menu-drop">
            <li>
            <!--<div class="notification-box-title">
            Notifications <span class="badge click" id="noti-click-unread" onclick="load_notifications_unread()">3</span>            </div>-->
            <!--<div id="notifications-scroll">
              <div id="loading_spinner_notification">
                <span class="glyphicon glyphicon-refresh" id="ajspinner_notification"></span>
              </div>
            </div>
            <div class="notification-box-footer">
            <a href="http://social.patchesoft.com/home/notifications">Read More</a>
            </div>-->
          </li>
          </ul>
          </li>
            <li><a href="#" data-target="#" onclick="load_chats()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="email-menu-drop"><i class="fas fa-envelope-square"></i><span class="badge notification-badge small-text" id="chat-noti"></span></a>

            <ul class="dropdown-menu" aria-labelledby="email-menu-drop">
            <li>
              <div class="notification-box-title">
                Chat Messages - <a href="social-network(main-chat).php">Inbox</a>
                </div>
                <div id="chat-scroll">
                  <div id="loading_spinner_email">
                    <span class="glyphicon glyphicon-refresh" id="ajspinner_email"></span>
                  </div>
                </div>
                <div class="notification-box-footer">
                <a href="#" id="chat-click-more" onclick="load_chat_page()">Load More</a>
              </div>
            </li>
            </ul>

            </li>
            <li class="user_bit"><?php echo "<img src='profile_pictures/".fillProfilePicture('profile_picture')."' class='user_avatar'>" ?> <a href="javascript:void(0)" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <?php echo" ".$_SESSION["username"] ?> </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="social-network(view_profile).php"> <i class="far fa-user"></i> &nbsp My Profile</a></li>
              <li><a href="#"><i class="far fa-file-alt"></i> &nbsp My Pages</a></li>
              <li><a href="social-newtwork(manage_my_friends).php"><i class="fas fa-users"></i> &nbsp Friends</a></li>
              <li><a href="social-network(settings).php"><i class="fas fa-sliders-h"></i> &nbsp Settings</a></li>
            </ul></li>
            <li><a href="social-network(signup).php">Logout</a></li>
            </ul>
        </div>
      </div>
    </nav>

    <?php
          $friend=$_GET["user_id"];
    ?>

<div class="container">
<h3 class=" text-center">Messaging</h3>
<div class="messaging">
      <div class="inbox_msg" id="msg2">
        <h4 style="text-align:center" id="chat-title">Chat With: <?php echo getName($friend) ?></h4>
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>All Friends</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat">
            <div class="chat_list active_chat">
            <?php echo getMyChats() ?>
            </div>
          </div>
        </div>
        <div class="mesgs" id="mesgs">
          <div class="" id="mesgs1" style="border:1px solid silver;height:480px;overflow-x:auto;">
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <form method="POST" action="includes/post_message.inc.php">
              <input type="hidden" id="receipt" name="recepient" value="<?php echo $friend ?>">
              <input type="hidden" name="userId" id="userId" value="<?php echo $_SESSION["username"] ?>">
              <input type="text" id="msg" name="msg" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" id="send" type="button" name="send_message"><i class="fas fa-arrow-alt-circle-right" aria-hidden="true"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
  
    </div></div>
    <audio id="bleep" controls>
    <source src="beep-4.mp3" type="audio/mpeg">
    <source src="beep-4.ogg" type="audio/ogg">
</audio>

</div>
    <div id="footer" class="clearfix">
      <span class="pull-left">Made By <a href="https://www.facebook.com/wycliffe.ouda">Ouda</a> University Social Network <a href="#">Change Language</a></span>
    </div>
    </body>

    
    <script type="text/javascript">
      $(document).ready(function(){
        var conn = new WebSocket('ws://localhost:8080');
          conn.onopen = function(e) {
              console.log("Connection established!");
          };

          conn.onmessage = function(e) { 
              console.log(e.data);
              var data=JSON.parse(e.data);
              var today=new Date();
              var h=today.getHours();
              var m=today.getMinutes();

              if(m<10){
                m="0"+m;
              }else{
                m=m;
              }
              var time=h+":"+m;
              
              var row1='<div class="incoming_msg"><div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt=""> </div><div class="received_msg"><div class="received_withd_msg">'+data.userId+'<p>'+data.msg+'</p><span class="time_date"> '+time+'  |    Today</span></div></div></div>';
            $("#mesgs1").append(row1);
            var audio=new Audio("sounds/light.mp3");
            audio.play();
          };

          $("#send").click(function(e){
            e.preventDefault()
            var msg=$("#msg").val();
            var recepient=$("#receipt").val();
            var userId=$("#userId").val();
            var today=new Date();
            var h=today.getHours();
              var m=today.getMinutes();

              if(m<10){
                m="0"+m;
              }else{
                m=m;
              }
              var time=h+":"+m;
            var data={
              userId:userId,
              msg:msg
            };
            
            // var vals='sender='+userId+'&receiver='+recepient+'&message='+msg;

            // $.ajax({
            //   url:"includes/post_message.inc.php",
            //   method:"post",
            //   data:vals,
            // });

            var row='<div class="outgoing_msg"> <div class="sent_msg">You<p>'+msg+'</p><span class="time_date"> '+time+'   |    Today</span> </div></div>';
            $("#mesgs1").append(row);
            var fullData=JSON.stringify(data);
            conn.send(fullData);

            
            $("#msg").val("");
          })
      })

        

    </script>
    </html>
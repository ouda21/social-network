<?php

    include "includes/edit_profile.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Social Network/chats</title>         
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="http://social.patchesoft.com/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="http://social.patchesoft.com/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

        <link href="http://social.patchesoft.com/scripts/libraries/mention/jquery.mentions.css" rel="stylesheet" type="text/css">
        

         <!-- Styles -->
        <link href="http://social.patchesoft.com/styles/client/themes/titan/main.css" rel="stylesheet" type="text/css">
        <link href="http://social.patchesoft.com/styles/client/themes/titan/responsive.css" rel="stylesheet" type="text/css">
        <link href="http://social.patchesoft.com/styles/client/responsive.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="http://social.patchesoft.com/styles/client/elements.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,500,550,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="http://social.patchesoft.com/styles/chat.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="styles/chat.css">
        <!-- SCRIPTS -->
        <script type="text/javascript">
        var global_base_url = "http://social.patchesoft.com/";
        var global_hash = "1c693a4b799d4252a6fe31d5721917b3";
        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

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

        <script src="http://social.patchesoft.com/scripts/custom/chat.js" type="text/javascript"></script>
        <script type="text/javascript">
          time_to_update = 5000;
        </script>
        
        <link  href="http://social.patchesoft.com/scripts/libraries/viewer/viewer.css" rel="stylesheet">
        <script src="http://social.patchesoft.com/scripts/libraries/viewer/viewer.js"></script> <!-- Gallery viewer -->

        
        <!-- CODE INCLUDES -->
        <script type="text/javascript" src="http://social.patchesoft.com/scripts/custom/mail.js" /></script>
			 

        <!-- Favicon: http://realfavicongenerator.net -->
        <link rel="apple-touch-icon" sizes="76x76" href="http://social.patchesoft.com/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="http://social.patchesoft.com/images/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="http://social.patchesoft.com/images/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="http://social.patchesoft.com/images/favicon/manifest.json">
        <link rel="mask-icon" href="http://social.patchesoft.com/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        

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
                    <a class="navbar-brand" href="#" title="Social Network">University Social Network</a>
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
                      <li><a href="#" data-target="#" onclick="load_notifications()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="noti-menu-drop"><i class="far fa-bell"></i><span class="badge notification-badge small-text">2</span></a>
                      
        
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
                Chat Messages - <a href="#">Inbox</a>
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
            <li class="user_bit"><?php echo "<img src='profile_pictures/".fillProfilePicture('profile_picture')."' class='user_avatar'>" ?> <a href="javascript:void(0)" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">              <?php echo $_SESSION["username"] ?>             </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="social-network(view_profile).php"> <i class="far fa-user"></i> &nbsp My Profile</a></li>
              <li><a href="#"><i class="far fa-file-alt"></i> &nbsp My Pages</a></li>
              <li><a href="#"><i class="fas fa-users"></i> &nbsp Friends</a></li>
              <li><a href="#"><i class="fas fa-sliders-h"></i> &nbsp Settings</a></li>
                          </ul></li>
            <li><a href="social-network(signup).php">Logout</a></li>
                    </ul>
        </div>
      </div>
    </nav>


    <div class="sidebar">
                <div class="friends-padding-content">
<p class="friends-title">Recent Friends</p>
</div>

<div class="friends-bar-box clearfix clickable" onclick="chat_with(1)">
<div class="friends-bar-user">
<div class="user-box-avatar">
                <div class="online-dot-user" data-toggle="tooltip" data-placement="bottom" title="Online"></div>
                <a href="http://social.patchesoft.com/profile/admin"><img src="http://social.patchesoft.com/uploads/af3a8d96a4d9da0f7afefbd1e31cfe6d.png" title="admin" data-toggle="tooltip" data-placement="right" /></a>
                </div></div>
<div class="friends-bar-user-info">
admin<p class="friends-bar-last-online">6 Minutes ago</p>
</div>
</div>
    </div>


    <div id="main-content">
    
        <div id="responsive-menu-links">
          <select name='link' OnChange="window.location.href=$(this).val();" class="form-control">
          <option value=''>Newsfeed</option>
          <option value=''>Profile</option>
          <option value=''>Inbox</option>
          <option value=''>Settings</option>
          <option value='social-network(albums).php'>Albums</option>
          <option value=''>Pages</option>
          <option value=''>Saved Posts</option>
          	      	            </select>
  </div>         <div class="container">
          <div class="row">
          <div class="col-md-12 col-md-offset-sidebar">

                      
     

        <script type="text/javascript">
// Load default mail
$(document).ready(function() {
  load_mail(1, 0);
});
</script>

<div class="white-area-content">

<div class="db-header clearfix">
    <div class="page-header-title"> <i class="fas fa-envelope-square"></i></span> Messages</div>
    <div class="db-header-extra"> 
</div>
</div>

<div class="row">
<div class="col-md-5 mail-border-top mail-border-right no-padding">
<div class="mail-box-snippet">
<button onclick="compose()" class="btn btn-primary btn-sm">Compose</button>
</div>
<div class="mail-box-snippet">
<form action="#" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1c693a4b799d4252a6fe31d5721917b3" />
<div class="row">
  <div class="col-lg-12">
    <div class="input-group">

      <input type="text" id="message" class="form-control" autocomplete="off" placeholder="Search ..." name="search" >
      
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Go</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</form></div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">

    $(document).ready(function()
                     {
        $("input[name='search']").on('keyup',function()
           {
            var keyword = $(this).val();
            $.ajax(
            {
                url:'process.php',
                type:'POST',
                data:'request='+keyword,
                success:function(data)
                {
                    $("#message").html(data);
                    //alert(data);
                },
            });
        });
    });
</script>


  <div class="mail-box-snippet click " onclick="load_mail(1,0)" id="mail-box-msg-1">
<div class="mail-box-timestamp">
35 Seconds ago</div>
<div class="mail-box-avatar">
<div class="user-box-avatar">
                <div class="online-dot-user" data-toggle="tooltip" data-placement="bottom" title="Online"></div>
                <a href="#"><?php echo "<img src='profile_pictures/".fillProfilePicture('profile_picture')."' data-toggle='tooltip' data-placement='right'>" ?></a>
                </div></div>
<div class="mail-box-text">
<p class="mail-box-username"><a href="http://social.patchesoft.com/profile/Isabel">
<?php echo $_SESSION["username"] ?></a></p>
<p class="mail-box-title">Chat with <strong>admin</strong></p>
<p class="mail-box-message">By the way can we meet today?

&nbsp;</p>
</div>
</div>
<div class="mail-box-snippet">

</div>


</div>

<div class="col-md-7 mail-border-top no-padding" id="mail-view">
<div class="message_composer">
<form action="#" method="POST">
<div class="search-box">
  <input type="hidden" id="userId" value='<?php echo $_SESSION["username"]?>'>
  <input type="text" placeholder="Send to..." name="reciever">
  <div class="results"></div>
</div>
  <textarea class="ckeditor" name="body" id="msg" cols="30" rows="10" placeholder="Write your message body..."></textarea>
  <input type="submit" id="send_message" name="send_message" value="Send">
</form>
</div>
<div id="loading_spinner_mail">
      
</div>
</div>

</div>
</div>
      </div>
    </div>
  </div>


    </div>

    <div id="chat_bar">
    

<div id="active_chats">

</div>

<audio id="bleep" controls>
    <source src="http://social.patchesoft.com/images/audio/beep.mp3" type="audio/mpeg">
</audio>

</div>
    <div id="footer" class="clearfix">
      <span class="pull-left">Made By <a href="">Ouda</a> - University Social Network V1.3 - <a href="http://social.patchesoft.com/home/change_language">Change Language</a></span>
    </div>

    <!-- SCRIPTS -->
     <script src="http://social.patchesoft.com/scripts/custom/global.js"></script>
    <script src="http://social.patchesoft.com/scripts/libraries/jquery.nicescroll.min.js"></script>
    <script type="text/javascript">
      $.widget.bridge('uitooltip', $.ui.tooltip);
    </script>
    
    <script src="http://social.patchesoft.com/bootstrap/js/bootstrap.min.js"></script>

     <script type="text/javascript">
            $(document).ready(function() {
              $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
            <script type="text/javascript">
     $(document).ready(function() {

        // Get sidebar height
       resize_layout();

        $('.nav-sidebar li').on('shown.bs.collapse', function () {
           $(this).find(".glyphicon-menu-right")
                 .removeClass("glyphicon-menu-right")
                 .addClass("glyphicon-menu-down");
            resize_layout();
        });
        $('.nav-sidebar li').on('hidden.bs.collapse', function () {
           $(this).find(".glyphicon-menu-down")
                 .removeClass("glyphicon-menu-down")
                 .addClass("glyphicon-menu-right");
            resize_layout();
        });

        function resize_layout() 
        {
          var sb_h = $('.sidebar').height();
          var mc_h = $('#main-content').height();
          var w_h = $(window).height();
          $('.sidebar').height($(window).height());
          if(sb_h > mc_h) {
            $('#main-content').css("min-height", sb_h+50 + "px");
          }
          if(w_h > mc_h) {
            $('#main-content').css("min-height", (w_h-(51+30)) +"px");
          }
        }
     });
    </script>
    </body>
    <script type="text/javascript">
    $(document).ready(function(){
      var conn = new WebSocket('ws://localhost:8080');
          conn.onopen = function(e) {
              console.log("Connection established!");
          };

          conn.onmessage = function(e) {
              console.log(e.data);
          };
        $("#send_message").click(function(){
          var user=$("#userId").val();
          var msg=$("#msg").val();

          var data={
            user:userId;
            msg:msg;
          };
          conn.send(JSON.stringify(data));
        })

    });
    </script>
</html>
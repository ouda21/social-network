<?php

    include "includes/edit_profile.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Social Network/complete_profile</title>         
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="http://social.patchesoft.com/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="http://social.patchesoft.com/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

        <link href="http://social.patchesoft.com/scripts/libraries/mention/jquery.mentions.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="signup.css">
         <!-- Styles -->
        <link href="http://social.patchesoft.com/styles/client/themes/titan/main.css" rel="stylesheet" type="text/css">
        <link href="http://social.patchesoft.com/styles/client/themes/titan/responsive.css" rel="stylesheet" type="text/css">
        <link href="http://social.patchesoft.com/styles/client/responsive.css" rel="stylesheet" type="text/css">
        
        <link href="http://social.patchesoft.com/styles/client/elements.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,500,550,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />

        <link href="http://social.patchesoft.com/styles/chat.css" rel="stylesheet" type="text/css">

        <!-- SCRIPTS -->
        <script type="text/javascript">
        var global_base_url = "http://thesocialnetwork.com/";
        //var global_hash = "1c693a4b799d4252a6fe31d5721917b3";
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
        
			<script type="text/javascript" src="http://social.patchesoft.com/scripts/custom/profile.js" /></script> 

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
    <body onload="<?php echo insertId();?>">

    <nav class="navbar navbar-inverse navbar-header2">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <a class="navbar-brand" href="#" title="Social Network">University Social Network(USN)</a>
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
              <li><a href="social-newtwork(manage_my_friends).php"><i class="fas fa-users"></i> &nbsp Friends</a></li>
              <li><a href="#"><i class="fas fa-sliders-h"></i> &nbsp Settings</a></li>
                          </ul></li>
            <li><a href="social-network(signup).php" onclick="<?php logOut() ?>" >Logout</a></li>
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
                <div class="offline-dot-user" data-toggle="tooltip" data-placement="bottom" title="Offline"></div>
                <a href="#"><img src="#" title="admin" data-toggle="tooltip" data-placement="right" /></a>
                </div></div>
<div class="friends-bar-user-info">
admin<p class="friends-bar-last-online">22/04/2019</p>
</div>
</div>
    </div>


    <div id="main-content">
    
        <div id="responsive-menu-links">
          <select name='link' OnChange="window.location.href=$(this).val();" class="form-control">
          <option value='#'>Newsfeed</option>
          <option value='#'>Profile</option>
          <option value='#'>Inbox</option>
          <option value='#'>Settings</option>
          <option value='social-network(albums).php'>Albums</option>
          <option value='#'>Pages</option>
          <option value='#'>Saved Posts</option>
          	      	            </select>
  </div>         <div class="container">
          <div class="row">
          <div class="col-md-12 col-md-offset-sidebar">

<script type="text/javascript">
$(document).ready(function() {
  load_posts(2);
});

function load_posts_wrapper() 
{
  load_posts(2);
}

function load_posts(userid) 
{
  $.ajax({
    url: global_base_url + 'feed/load_user_posts/' + userid,
    type: 'GET',
    data: {

    },
    success: function(msg) {
      $('#home_posts').html(msg);
      $('#home_posts').jscroll({
          nextSelector : '.load_next'
      });
    }
  })
}
 </script>
 <div class="row">
 <div class="col-md-12">


 <div class="profile-header" <?php echo "style='background:url(profile_pictures/".fillProfilePicture('cover_picture').")'" ?> center center; background-size: cover;">
 <div class="profile-header-avatar">
	  <?php echo "<img src='profile_pictures/".fillProfilePicture('profile_picture')."'>" ?>
 </div>
 <div class="profile-header-name">
  <?php echo $_SESSION["username"] ?>  </div>
 </div>
 <div class="profile-header-bar clearfix">
 <ul>
  <li class="active"><a href="social-network(view_profile).php"><i class="far fa-user"></i> &nbsp Profile</a></li>
  <li><a href="social-newtwork(manage_my_friends).php"><i class="fas fa-users"></i> &nbsp Friends</a></li>
  <li><a href="social-network(albums).php"><i class="fas fa-images"></i> &nbsp Albums</a></li>
 </ul>

 <div class="pull-right profile-friend-box">
   	<button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#reportModal" title="Report"><i class="fas fa-flag"></i></button>
 </div>
 </div>

 <div class="row separator">
 <div class="col-md-4">

  <div class="page-block">
    <div class="align-center">
      <div class="project-info project-block align-center">
      <p class="project-info-bit profile-big-text">9</p>
      <p class="project-info-title">Profile Views</p>
      </div>

      <div class="project-info project-block align-center">
      <p class="project-info-bit profile-big-text">1</p>
      <p class="project-info-title">Posts</p>
      </div>

      <div class="project-info project-block align-center">
      <p class="project-info-bit profile-big-text">
                <span class="profile-online">Online</span>
            </p>
      <p class="project-info-title">Status</p>
      </div>
    </div>
  </div>

 	<div class="page-block half-separator">
 	
 	<div class="page-block-title">
 	<i class="fas fa-door-open"></i> Welcome 	</div>
 	<div class="page-block-intro">
         <p>Full name: &nbsp <?php echo "     ".fillFields("first_name")."  ".fillFields("other_names")?></p>
         <p>Email address: &nbsp <?php echo fillFields("email_address") ?></p>
         <p>Student number: &nbsp <?php echo fillFields("user_id")?></p>
         <p>Primary school: &nbsp <?php echo findValues("primary_school") ?></p>
         <p>Secondary school: &nbsp <?php echo findValues("secondary_school") ?></p>
         <p>University: &nbsp <?php echo findValues("university") ?></p>
         <p>Current City: &nbsp <?php echo findValues("current_hood") ?></p>
         <p>Home Town: &nbsp <?php echo findValues("home") ?></p>
         <p>Course: &nbsp <?php echo findValues("course_persued") ?></p>
         <p>Year of study: &nbsp <?php echo findValues("year_of_study") ?></p>
         <p>About myself: &nbsp <?php echo findValues("more") ?></p>
 	 	</div>
  <hr>

                  
  
  <div class="align-center">
</div>

 	</div>
<div class="page-block half-separator">
<div class="page-block-page clearfix">
<?php echo'<p><a href="#"><img alt="" src="universities/".'.getUniversityLogo().' width="100%" /></a></p>' ?>
 
</div>
</div>
    <div class="page-block half-separator">
        <div class="page-block-title">
        <i class="fas fa-users"></i> <a href="#">Friends</a>
        </div>
        <div class="page-block-tidbit">
                  <div class="profile-friend-area">
          <p><img src="http://social.patchesoft.com/uploads/af3a8d96a4d9da0f7afefbd1e31cfe6d.png" width="40"></p>
          <p><a href="#">Admin User</a></p>
          </div>
                </div>
    </div>

    <div class="page-block half-separator">
        <div class="page-block-title">
        <i class="fas fa-images"></i> <a href="social-network(albums).php">Albums</a>
        </div>
        <div class="page-block-tidbit"></div>
    </div>
 </div>

 <div class="col-md-8">
	<form action="includes/post_status.inc.php"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <input type="hidden" name="csrf_test_name" value="1c693a4b799d4252a6fe31d5721917b3" />                                                                 
    <input type="hidden" name="targetid" value="2">
    <input type="hidden" name="target_type" value="user_profile">
    <div class="editor-wrapper">
    <div class="editor-content">
    <div class="clearfix editor-textarea-wrapper">
    <div class="editor-user-icon"><?php echo "<img src='profile_pictures/".fillProfilePicture('profile_picture')."' class='user-icon-big' id='editor-poster-icon'>" ?> 
</div>

<div class="editor-textarea-part"><textarea name="content" class="editor-textarea" id="editor-textarea" placeholder="What's on your mind <?php echo getName($_SESSION["username"]) ?>..."></textarea>
  </div>
</div>
</div>
<div class="editor-footer">
<button type="button" id="image-button" class="editor-button" title="Upload Image" data-toggle="modal" data-target="#imageModal"><i class="fas fa-image"></i></button>
<button type="button" id="video-button" class="editor-button" title="Video" data-toggle="modal" title="Add Video" data-target="#videoModal"><i class="fas fa-video"></i></button> 
<button type="button" id="map-button" class="editor-button" value="Location" title="Add your location" data-toggle="modal" data-target="#locationModal"><i class="fas fa-map-marker-alt"></i></button> 
<button type="button" id="user-button" class="editor-button" value="User" data-toggle="modal" title="Profile" data-target="#userModal"><i class="far fa-user"></i></span></button> 
<!--<button type="button" id="poll-button" class="editor-button" value="Create Poll" data-toggle="modal" data-target="#pollModal"><span class="glyphicon glyphicon-stats"></span></button>  -->
<button class="editor-button dropdown-toggle" type="button" data-toggle="dropdown" title="Emoji"><i class="fas fa-smile-beam"></i></button>   <ul class="dropdown-menu">
    <li>
              <button type="button" class="nobutton" onclick="add_smile(':)')">&#x1F60A;</button>
              <button type="button" class="nobutton" onclick="add_smile(';)')">&#x1F609;</button>
              <button type="button" class="nobutton" onclick="add_smile(':D')">&#x1F601;</button>
              <button type="button" class="nobutton" onclick="add_smile(':joy:')">&#x1F602;</button>
              <button type="button" class="nobutton" onclick="add_smile(':sweatsmile:')">&#x1F605;</button>
              <button type="button" class="nobutton" onclick="add_smile('XD')">&#x1F606;</button>
              <button type="button" class="nobutton" onclick="add_smile(':innocent:')">&#x1F607;</button>
              <button type="button" class="nobutton" onclick="add_smile(':smileimp:')">&#x1F608;</button>
              <button type="button" class="nobutton" onclick="add_smile(':relieved:')">&#x1F60C;</button>
              <button type="button" class="nobutton" onclick="add_smile(':hearteyes:')">&#x1F60D;</button>
              <button type="button" class="nobutton" onclick="add_smile('8)')">&#x1F60E;</button>
              <button type="button" class="nobutton" onclick="add_smile(':P')">&#x1F60B;</button>
              <button type="button" class="nobutton" onclick="add_smile(':|')">&#x1F610;</button>
              <button type="button" class="nobutton" onclick="add_smile('-_-')">&#x1F611;</button>
              <button type="button" class="nobutton" onclick="add_smile(':sweat:')">&#x1F613;</button>
              <button type="button" class="nobutton" onclick="add_smile(':/')">&#x1F615;</button>
              <button type="button" class="nobutton" onclick="add_smile(':kissingheart:')">&#x1F618;</button>
              <button type="button" class="nobutton" onclick="add_smile(':kissingclosedeyes')">&#x1F61A;</button>
              <button type="button" class="nobutton" onclick="add_smile(':stuckouttonguewinking:')">&#x1F61C;</button>
              <button type="button" class="nobutton" onclick="add_smile(':(')">&#x1F61E;</button>
              <button type="button" class="nobutton" onclick="add_smile(':crossedeyestongue:')">&#x1F61D;</button>
              <button type="button" class="nobutton" onclick="add_smile(':rage:')">&#x1F621;</button>
              <button type="button" class="nobutton" onclick="add_smile(':tearface:')">&#x1F622;</button>
              <button type="button" class="nobutton" onclick="add_smile(':fuming:')">&#x1F624;</button>
              <button type="button" class="nobutton" onclick="add_smile(':o')">&#x1F62F;</button>
              <button type="button" class="nobutton" onclick="add_smile(':weary')">&#x1F62B;</button>
              <button type="button" class="nobutton" onclick="add_smile(':sleepy:')">&#x1F634;</button>
              <button type="button" class="nobutton" onclick="add_smile(':mask:')">&#x1F637;</button>
          </li>
  </ul>
  <input type="submit" name="post_item" value="Post">

</div>

<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fas fa-image"></i> Add an Image</h4>
      </div>
      <div class="modal-body ui-front form-horizontal">
          <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Upload Image</label>
                    <div class="col-md-8">
                        <input type="file" class="form-control" name="image_file" id="image_file">
                    </div>
            </div>
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">or From URL</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="image_url" id="image_url" placeholder="http://www ...">
                    </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" value="Select" data-dismiss="modal">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fas fa-video"></i> Attach a Video</h4>
      </div>
      <div class="modal-body ui-front form-horizontal">
          <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Upload Video</label>
                    <div class="col-md-8">
                        <input type="file" class="form-control" name="video_file" id="video_file">
                    </div>
            </div>
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">or YouTube URL</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="youtube_url" id="video_url" placeholder="http://www ...">
                    </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" data-dismiss="modal" value="Select">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fas fa-map-marker-alt"></i> Get Location</h4>
      </div>
      <div class="modal-body ui-front form-horizontal">
          <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Location</label>
                    <div class="col-md-8">
                      <input type="text" name="location" id="map_name" class="form-control map_name">
                    </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" data-dismiss="modal" value="Select">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fas fa-users"></i> Select Friends</h4>
      </div>
      <div class="modal-body ui-front form-horizontal">
          <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Select User</label>
                    <div class="col-md-8">
                        <select class="js-example-basic-multiple" style="width: 100%;" name="with_users[]" id="with_users" multiple="multiple">
                        
                        </select>
                    </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" value="Select" data-dismiss="modal">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pollModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-stats"></span> Create Poll</h4>
      </div>
      <div class="modal-body ui-front form-horizontal">
          <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Poll Question</label>
                    <div class="col-md-8">
                        <input type="text" name="poll_question" class="form-control" id="poll_question">
                    </div>
            </div>
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Type</label>
                    <div class="col-md-8">
                        <select name="poll_type" class="form-control">
                          <option value="0">Single Answer</option>
                          <option value="1">Multiple Answer</option>
                        </select>
                    </div>
            </div>
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Answers</label>
                    <div class="col-md-8" id="answer-area">
                        <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="poll_answer_1" class="form-control" placeholder="Answer #1 ...">
                                </div>
                        </div>
                        <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="poll_answer_2" class="form-control" placeholder="Answer #2 ...">
                                </div>
                        </div>
                        <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="poll_answer_3" class="form-control" placeholder="Answer #3 ...">
                                </div>
                        </div>
                        <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="poll_answer_4" class="form-control" placeholder="Answer #4 ...">
                                </div>
                        </div>
                        <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="poll_answer_5" class="form-control" placeholder="Answer #5 ...">
                                </div>
                        </div>
                    </div>
            </div>
            <input type="button" class="btn btn-primary btn-xs" value="Add Another Answer" id="add_answer">
            <input type="hidden" name="poll_answers" value="5" id="poll_answers">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" value="Create Poll" data-dismiss="modal">
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {

    $('#poll_question').change(function() {
      var q = $(this).val();
      if(q) {
        $('#poll-button').addClass("highlight-button");
      } else {
        $('#poll-button').removeClass("highlight-button");
      }
    });

    $('#with_users').change(function() {
      var q = $(this).val();
      if(q) {
        $('#user-button').addClass("highlight-button");
      } else {
        $('#user-button').removeClass("highlight-button");
      }
    });

     $('#map_name').change(function() {
      var q = $(this).val();
      if(q) {
        $('#map-button').addClass("highlight-button");
      } else {
        $('#map-button').removeClass("highlight-button");
      }
    });

     $('#video_file').change(function() {
      var q = $(this).val();
      if(q) {
        $('#video-button').addClass("highlight-button");
      } else if(!$('#video_url').val()) {
        $('#video-button').removeClass("highlight-button");
      }
    });

     $('#video_url').change(function() {
      var q = $(this).val();
      if(q) {
        $('#video-button').addClass("highlight-button");
      } else if(!$('#video_file').val()) {
        $('#video-button').removeClass("highlight-button");
      }
    });

     $('#image_file').change(function() {
      var q = $(this).val();
      if(q) {
        $('#image-button').addClass("highlight-button");
      } else if(!$('#image_url').val()) {
        $('#image-button').removeClass("highlight-button");
      }
    });

     $('#image_url').change(function() {
      var q = $(this).val();
      if(q) {
        $('#image-button').addClass("highlight-button");
      } else if(!$('#image_file').val()) {
        $('#image-button').removeClass("highlight-button");
      }
    });
    $('#add_answer').click(function() {
      var answers = $('#poll_answers').val();
      answers++;
      $('#poll_answers').val(answers);

      var html = '<div class="form-group">'+
                    '<div class="col-md-12">'+
                    '<input type="text" name="poll_answer_'+answers+'" class="form-control" placeholder="Answer #'+answers+' ...">'+
                    '</div>'+
                    '</div>';
      $('#answer-area').append(html);
    });
  });
</script>

</form></div>

<div class="loginbox radius">
		<h2 style="color:#141823; text-align:center;">Cover Picture</h2>
	<div class="loginboxinner radius">
    <div class="loginbox radius">
		<h5 style="color:#141823; text-align:center;">Add your latest cover picture here</h5>
	<div class="loginboxinner radius">
	<div class="loginform">
	<form id="login" action="includes/edit_profile.inc.php" method="post" enctype="multipart/form-data">
		<p>
			<input type="file" id="cover" name="cover" placeholder="Cover picture..." value="" class="radius" required/>
		</p>
			
		<p>
			<button class="radius title" name="add_cover_picture">Add Cover Picture</button>

		</p>

	</form>
	</div>
	</div>
    </div>

<div class="loginbox radius">
		<h2 style="color:#141823; text-align:center;">Profile Picture</h2>
	<div class="loginboxinner radius">
    <div class="loginbox radius">
		<h5 style="color:#141823; text-align:center;">Add one of your latest shoots here</h5>
	<div class="loginboxinner radius">
	<div class="loginform">
	<form id="login" action="includes/edit_profile.inc.php" method="post" enctype="multipart/form-data">
		<p>
			<input type="file" id="profile" name="profile" placeholder="Profile picture..." value="" class="radius" required/>
		</p>
			
		<p>
			<button class="radius title" name="add_profile_picture">Add Profile Picture</button>

		</p>

	</form>
	</div>
	</div>
    </div>

<div class="loginbox radius">
		<h2 style="color:#141823; text-align:center;">Edit Your Profile</h2>
	<div class="loginboxinner radius">
	<div class="loginform">
	<form id="login" action="includes/edit_profile.inc.php" method="post">
		<p>
			<input type="text" id="firstname" name="firstname" value=<?php echo fillFields("first_name") ?> value="" class="radius" required/>
		</p>
		<p>
			<input type="text" id="lastname" name="lastname" value=<?php echo fillFields("other_names") ?> value="" class="radius" required/>
		</p>

		<p>
			<input type="text" id="email" name="email" value=<?php echo fillFields("email_address") ?> value="" class="radius" required/>
		</p>

		<p>
			<input type="text" id="remail" name="userid" value=<?php echo fillFields("user_id") ?> class="radius" required/>
		</p>

		<p>
			<button class="radius title" name="update">Update Details</button>

		</p>

	</form>
	</div>
	</div>
    </div>

    <div class="loginbox radius">
		<h2 style="color:#141823; text-align:center;">Academics</h2>
	<div class="loginboxinner radius">
    <div class="loginbox radius">
		<h5 style="color:#141823; text-align:center;">Let your friends know which schools you attended</h5>
	<div class="loginboxinner radius">
	<div class="loginform">
	<form id="login" action="includes/edit_profile.inc.php" method="post">
		<p>
			<input type="text" id="primary" name="primary" placeholder="Primary school..." value="" class="radius" required/>
		</p>
		<p>
			<input type="text" id="secondary" name="secondary" placeholder="Secondary school..." value="" class="radius" required/>
		</p>

		<p>
			<input type="text" id="university" name="university" placeholder="University..." value="" class="radius" />
		</p>

		
		<p>
			<button class="radius title" name="add_schools">Add School Details</button>

		</p>

	</form>
	</div>
	</div>
    </div>
    
    <div class="loginbox radius">
		<h2 style="color:#141823; text-align:center;">Course Details</h2>
	<div class="loginboxinner radius">
    <div class="loginbox radius">
		<h5 style="color:#141823; text-align:center;">Let your friends know which course you persue</h5>
	<div class="loginboxinner radius">
	<div class="loginform">
	<form id="login" action="includes/edit_profile.inc.php" method="post">
		<p>
			<input type="text" id="course" name="course" placeholder="Current course..." value="" class="radius" required/>
		</p>
		<p>
			<input type="text" id="year" name="year" placeholder="Current year..." value="" class="radius" required/>
		</p>

		<p>
			<button class="radius title" name="add_course">Add Course Details</button>

		</p>

	</form>
	</div>
	</div>
    </div>
    <div class="loginbox radius">
		<h2 style="color:#141823; text-align:center;">Home</h2>
	<div class="loginboxinner radius">
    <div class="loginbox radius">
		<h5 style="color:#141823; text-align:center;">Let your friends know about your home</h5>
	<div class="loginboxinner radius">
	<div class="loginform">
	<form id="login" action="includes/edit_profile.inc.php" method="post">
		<p>
			<input type="text" id="current" name="current" placeholder="Current hood..." value="" class="radius" required/>
		</p>
		<p>
			<input type="text" id="home" name="home" placeholder="Place of birth..." value="" class="radius" required/>
		</p>

		<p>
			<button class="radius title" name="add_home">Add Home Details</button>

		</p>

	</form>
	</div>
	</div>
    </div>

    <div class="loginbox radius">
		<h2 style="color:#141823; text-align:center;">Advanced</h2>
	<div class="loginboxinner radius">
    <div class="loginbox radius">
		<h5 style="color:#141823; text-align:center;">Let your friends know more about you</h5>
	<div class="loginboxinner radius">
	<div class="loginform">
	<form id="login" action="includes/edit_profile.inc.php" method="post">
		<p>
        <textarea name="advance" class="editor-textarea" id="editor-textarea" placeholder="Say more about yourself..."></textarea>
		</p>

		<p>
			<button class="radius title" name="advanced">Add Personal Details</button>

		</p>

	</form>
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
    <source src="beep-4.mp3" type="audio/mpeg">
</audio>

</div>
    <div id="footer" class="clearfix">
      <span class="pull-left">Made By <a href="https://www.facebook.com/wycliffe.ouda">Ouda</a> - University Social Network- <a href="#">Change Language</a></span>
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
</html>
<?php
  include "includes/admin_functions.inc.php";
  include "includes/display_notifications.php";
  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Social Network</title>         
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
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
        <script src="jquery-3.2.1.min.js"></script>
        <script type="text/javascript"></script>
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

        
        <!-- CODE INCLUDES -->
         

        <!-- Favicon: http://realfavicongenerator.net -->
        <!--<link rel="apple-touch-icon" sizes="76x76" href="http://social.patchesoft.com/images/favicon/apple-touch-icon.png">
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
    <body onload="<?php echo insertPicture();?>">
      
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
                      <li><a href="#" data-target="#" onclick="load_notifications()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="noti-menu-drop"><i class="far fa-bell"></i><span class="badge notification-badge small-text"><?php echo loadNotifications() ?></span></a>
                      
        
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

    <div class="sidebar">
    
                <div class="friends-padding-content">
<?php echo showAdminPosts()?>
</div>


    </div>


    <div id="main-content">
    
        <div id="responsive-menu-links" >
          <select name='link' OnChange="window.location.href=$(this).val();" class="form-control">
          <option value='#'></i>Newsfeed</option>
          <option value='social-network(view_profile).php'> Profile</option>
          <option value='social-network(main-chat).php'>Inbox</option>
          <option value='social-network(settings).php'>Settings</option>
          <option value='social-network(albums).php'>Albums</option>
          <option value='#'>Pages</option>
          <option value='#'>Saved Posts</option>
          	      	            </select>
  </div>         <div class="container">
          <div class="row">
          <div class="col-md-12 col-md-offset-sidebar">

                      
     

            <div class="row">
        <div class="col-md-2 sidebar-block" id="homepage-links" style='position:sticky';>

        <ul>
        <li class="active"><a href="#"><i class="fas fa-newspaper"></i> &nbsp Newsfeed</a></li>
        <li><a href="social-network(view_profile).php"><i class="far fa-user"></i> &nbsp Profile</a></li>
        <li><a href="social-network(main-chat).php"><i class="fas fa-inbox"></i> &nbsp Inbox</a></li>
        
        </ul>
        
        <p class="sidebar-title" >Content</p>
        <ul>
        <li><a href="social-network(admin-dashboard).php"><i class="fas fa-images"></i> &nbsp Dashboard</a></li>
        <li><a href="#"><i class="far fa-file-alt"></i> &nbsp Posts</a></li>
        <li><a href="#"><i class="fas fa-blog"></i> &nbsp Users</a></li>
        <li ><a href="#"><i class="fas fa-suitcase-rolling"></i> &nbsp Albums</a></li>
        <li><a href="#"><i class="fas fa-search-dollar"></i> &nbsp Comments</a></li>
        </ul>
                                        
        <hr>

        <p class="sidebar-title">
        Trending</p>
        <ul>
                      <li><a href="#"><i class="fab fa-product-hunt"></i> &nbsp #products</a></li>
                      <li><a href="#"><i class="fas fa-school"></i> &nbsp #school</a></li>
                      <li><a href="#"><i class="fas fa-feather-alt"></i> &nbsp#patchesoft</a></li>
                  </ul>
        </div>
        <div class="col-md-6">


 <!--start of form-->


<form action="includes/post_status_admin.inc.php" enctype="multipart/form-data" method="POST" >
    <!--<input type="hidden" name="csrf_test_name" value="7e97c8399674f181628ded7a106c7988" />
    <input type="hidden" name="targetid" value="">
    <input type="hidden" name="target_type" value="">-->
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
  <input type="submit" name="post_items" value="Post">
  <!--post button-->

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
        <h4 class="modal-title" id="myModalLabel"><i class="fas fa-video"></i> Add a Video</h4>
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

</form></div>
<!--end of form-->

<div class="modal fade" id="likeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> Post Likes</h4>
      </div>
      <div class="modal-body ui-front" id="post-likes">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editPostModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="editPost">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> Edit Post</h4>
      </div>
      <div class="modal-body ui-front form-horizontal" id="editPost">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="promotePostModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="promotePost">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> </h4>
      </div>
      <div class="modal-body ui-front form-horizontal" id="promotePost">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="requests">

<?php showPendingFriendRequests()?>
</div>
<?php showHomePagePosts() ?>
</div>
<script>
  $(document).ready(function(){
    $("#frmComment").on("submit",function(e){
      $(".error").text(" ");

      var name=$("#name").val();
      var comment=$("comment-field-")
      var formDaata= 
    })
  })
</script>
<div id="home_posts">
  
</div>

        <div class="col-md-4" id="homepage-stuff" style='position:sticky;'>
        
        <div class="page-block">
          <div class="page-block-inner" <?php echo "style='background:url(profile_pictures/".fillProfilePicture('cover_picture').")'" ?> center center; background-size: cover;">
          <div class="page-block-avatar">
          <?php echo "<img src='profile_pictures/".fillProfilePicture('profile_picture')."'>" ?>
          </div> 
          <div class="page-block-info">
          <a href="social-network(view_profile).php"><?php echo $_SESSION["username"] ?></a>
          </div>
          </div>
        </div>

        
<div class="page-block half-separator">
<div class="page-block-page clearfix">
<p><a href="#"><img alt="" src="universities/<?php echo fillUniversityDetails("university_image")?>"width="100%" /></a></p>
 
</div>
</div>
        
        <div class="page-block half-separator">
         <div class="page-block-title">Newest Friends</div>
              <?php selectRecentFriends() ?>
          </div>


        <div class="page-block half-separator">
         <div class="page-block-title">Newest Pages</div>
                            	<div class="page-                   block-page clearfix">
         		<div class="pull-left" style="margin-right: 5px;">
         			<img src="http://social.patchesoft.com/uploads/61b9598c5d15b3776c47b12d075e40e5.png" width="40">
         		</div>
         		<div class="pull-left">
         			<a href="#">Envato</a>
         			<p class="small-text faded-icon">1 Members</p>
         		</div>
         	</div>
                <div class="page-block-page clearfix">
         		<div class="pull-left" style="margin-right: 5px;">
         			<img src="http://social.patchesoft.com/uploads/default.png" width="40">
         		</div>
         		<div class="pull-left">
         			<a href="http://social.patchesoft.com/pages/view/2">Fish</a>
         			<p class="small-text faded-icon">2 Members</p>
         		</div>
         	</div>
                <div class="page-block-page clearfix">
         		<div class="pull-left" style="margin-right: 5px;">
         			<img src="http://social.patchesoft.com/uploads/default.png" width="40">
         		</div>
         		<div class="pull-left">
         			<a href="http://social.patchesoft.com/pages/view/1">My Page</a>
         			<p class="small-text faded-icon">1 Members</p>
         		</div>
         	</div>
          </div>
        </div>
      </div>
<script type="text/javascript">
var global_page = 0;
var hide_prev = 0;



$(document).ready(function() {
  load_posts();

});

function load_posts_wrapper() 
{
  load_posts();
}

function load_posts() 
{
  $.ajax({
    url: global_base_url + 'feed/load_home_posts',
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
      <span class="pull-left">Made By <a href="https://www.facebook.com/wycliffe.ouda">Ouda</a> University Social Network <a href="#">Change Language</a></span>
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
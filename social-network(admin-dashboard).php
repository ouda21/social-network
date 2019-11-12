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
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/font-face.css">
        <link href="http://social.patchesoft.com/styles/chat.css" rel="stylesheet" type="text/css">

        <!-- SCRIPTS -->
        <script src="js/main2.js"></script>
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

        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        
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
          <li><a href="social-network(admin-main-menu).php">Home</a></li>
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

    
    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">

                                            </div>
                                            <div class="text">
                                                <h2><?php echo getAllUsers() ?></h2>
                                                <span>Users WolrdWide</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                               
                                            </div>
                                            <div class="text">
                                                <h2><?php echo getUniversityUser() ?></h2>
                                                <span>University Users</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo getReportCount() ?></h2>
                                                <span>Reports</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                
                                            </div>
                                            <div class="text">
                                                <h2><?php echo getPostsCounts()?></h2>
                                                <span>total posts</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">recent reports</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>products</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>services</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">
                                                <div class="chart-statis">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                    <span class="label">products</span>
                                                </div>
                                                <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Users</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                   <?php echo univesityUsers() ?>
                                </div>
                                <div class="au-task__footer">
                                    <a href="social-network(admin:user_manager).php" class="au-btn au-btn-load js-load-btn">load more</a>
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Top Universities</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <?php echo getTopUniversities() ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>Posts</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                        
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <?php echo getUniversityPost() ?>
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>Report
                                        </h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">
                                                <p>You Have
                                                    <span>2</span>

                                                    new messages
                                                </p>
                                            </div>
                                            <div class="au-message-list">
                                                <?php echo getReports() ?>
                                            </div>
                                            <div class="au-message__footer">
                                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
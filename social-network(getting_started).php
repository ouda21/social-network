<?php
  include"includes/admin_functions.inc.php";
  if(!isset($_SESSION["username"])){
      header("location:social-network(signin).php");
  }
?>
<!DOCTYPE html>
    
<html lang="en">
  <head>
    <title>University Social Network | Admin StartUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="stylesheet" href="styles/albums.css">
    <link rel="shortcut icon" href="ftco-32x32.png">
    
    
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="styles/gallery.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/admin.css">
    <!--<link rel="stylesheet"  href="css/bootstrap.min.css" >-->
    
    
  </head>
 
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="scripts/get_started.js"></script>
    </head>
    <body>
        <nav>
            <div class="site-name" style=" width:100%;height:150px;background-color:rgb(7, 7, 26);margin-top:0px;">
                <div class="title" style=" color:white;font-size:65px;text-align:center;margin:auto;"><h2>University Social Network</h2></div>
            </div>
        </nav>
        

        <div class="intro-section custom-owl-carousel" id="home-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mr-auto" data-aos="fade-up">

            <div class="owl-carousel slide-one-item-alt-text">
              <div class="slide-text">
                <h1>We connect you to the world around you</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                <p><a href="https://free-template.co/" target="_blank" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
              </div>
              <div class="slide-text">
                <h1>Free communication for all</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                <p><a href="https://free-template.co/" target="_blank" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
              </div>
              <div class="slide-text">
                <h1>High Quality Website Templates</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                <p><a href="https://free-template.co/" target="_blank" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
              </div>
              <div class="slide-text">
                <h1>Instant messaging</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                <p><a href="https://free-template.co/" target="_blank" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
              </div>
            </div>

          </div>
          <div class="col-lg-6 ml-auto"  data-aos="fade-up" data-aos-delay="100">
                        
            <div class="owl-carousel slide-one-item-alt">
              <img src="images/LadyJustice.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              <img src="images/LadyJustice.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              <img src="images/LadyJustice.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              <img src="images/LadyJustice.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </div>

            <div class="owl-custom-direction">
              <a href="#" class="custom-prev"><span class="icon-keyboard_arrow_left"></span></a>
              <a href="#" class="custom-next"><span class="icon-keyboard_arrow_right"></span></a>
            </div>

          </div>
        </div>
      </div>
    </div>
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
              <img class="img-fluid" style="margin-top:45px;height=400px"  src="universities/<?php echo fillUniversityDetails("university_image")?>" alt=" ">
            </div>
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <h3>Hello <?php echo getName($_SESSION["username"])?>!</h3>
              <p>Est diam venenatis arcu lacus ad. Duis quis eros. Cursus et rutrum eleifend sollicitudin lacinia justo id turpis. 
                Nec convallis integer. Odio eget duis. Nulla aenean et.
                 Blandit varius sollicitudin. Pellentesque leo primis neque urna magnis. 
                 Elit ut sollicitudin. 
                 Et est a nam dolores eget itaque sagittis et parturient duis est eleifend sociis rutrum odio viverra integer.</p>
              <div class="about-profile">
                <ul class="admin-profile">
                  <li><span class="pro-title"> Name </span> <span class="pro-detail"><?php echo fillUniversityDetails("university_name")?></span></li>
                  <li><span class="pro-title"> Email </span> <span class="pro-detail"><?php echo fillUniversityDetails("university_email")?></span></li>
                  <li><span class="pro-title"> Students </span> <span class="pro-detail"><?php echo fillUniversityDetails("students")?></span></li>
                  <li><span class="pro-title"> Country </span> <span class="pro-detail"><?php echo fillUniversityDetails("country")?></span></li>
                  <li><span class="pro-title"> City </span> <span class="pro-detail"><?php echo fillUniversityDetails("city")?></span></li>
                  <li><span class="pro-title"> Phone </span> <span class="pro-detail"><?php echo fillUniversityDetails("phone")?></span></li>
                  
                </ul>
              </div>
              <a href="#" onclick="openModal()" class="btn btn-common"><i class="icon-paper-clip"></i>University setup</a>
              <a href="social-network(admin-main-menu).php" class="btn btn-danger"><i class="icon-speech"></i> Main Menu</a>
            </div>
          </div>   
        </div>
      </div>
    </section>

    <div class="modal-confirm"  id="myModal">
                <div class="modal-content">
                    <span class="close" id="close" onclick="closeModal()"> &times</span>
                    <div class="head" style="text-align:center;font-weight:bold">Upload Image to Album</div>
                    <form action="includes/admin_functions.inc.php" method="POST" enctype="multipart/form-data">
                        <input class="form-control" type="file" name="university_image" placeholder="Full Name" required><br>
                        <input class="form-control" type="text" name="university_name" placeholder="Name of the University" required><br>
                        <input class="form-control" type="email" name="university_email" placeholder="Email of the institution" required><br>
                        <input class="form-control" type="text" name="students" placeholder="Approximate number of Expected users" required><br>
                        <input class="form-control" type="text" name="country" placeholder="Country" required><br>
                        <input class="form-control" type="text" name="city" placeholder="City" required><br>
                        <input class="form-control" type="text" name="phone" placeholder="Phone" required><br>
                        <hr>
                        <div class="form-wrap stick-to-buttom">
                            <button class="button1" style="color:white" name="uni_details">Submit</button>
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
                    //document.body.style.position = 'fixed';
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
            <div id="footer" class="clearfix">
    <span class="pull-left">Made By <a href="https://www.facebook.com/wycliffe.ouda">Ouda</a> - University Social Network- <a href="#">Change Language</a></span>
    </div>

        <footer>
            <div class="footer">

            </div>
        </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>

    </body>
  </html>
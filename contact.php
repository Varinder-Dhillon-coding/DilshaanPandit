<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index-styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.ico" />
    <title>DP Music</title>
</head>

<body>
    <!--  This is header  -->
    
    <div class="container-fluid">
      <div class="row row1">
          <div class="col-md-4 col-10 logo">
              <a href="index.php">DP Music</a>
          </div>
          <div class="col-8 menu-bar">
              <div class="menu">
                  <a href="index.php">Home</a>
              </div>
              <div class="menu">
                  <a href="about.php">About</a>
              </div>
              <div class="menu">
                  <a href="contact.php">Contact</a>
              </div>
              <!-- if user is logged in  -->
              <?php  
              $cookie_name = "UserLogin"; 
              if(isset($_COOKIE[$cookie_name])){
                $pieces = explode(",", $_COOKIE[$cookie_name]);
                ?>
              <!-- to display -->
              <div class="menu user-data">
                  <img src="images/no-profile-picture.jpg" class="no-profile-picture" >  
                  <a href="user_data_show.php">
                    <p class="username"><?php echo $pieces[0]?></p>
                  </a>
             </div>

              <?php }
              // if user is not logged in
              else{ ?>
              <!-- display this -->
              <div class="menu">
                  <a href="signup.php">Sign Up</a>
              </div>
              <div class="menu">
                  <a href="login.php">Login</a>
              </div>
              <?php } ?>
          </div>

          <!-- Hamburger menu for tablets and smartphones -->

          <div class="col-2 hamburger-menu">
              <ul>
                  <li><span class="bar"></span></li>
                  <li><span class="bar"></span></li>
                  <li><span class="bar"></span></li>
              </ul>
          </div>
          <ul class="hamburger-list">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <!-- if user is logged in -->
              <?php
              if(isset($_COOKIE[$cookie_name])){
                $pieces = explode(",", $_COOKIE[$cookie_name]);
                 ?>
                 <li>
                  <a href="user_data_show.php">
                    <img src="images/no-profile-picture.jpg" class="no-profile-picture" >  
                    <p class="username"><?php echo $pieces[0]?></p>
                    </a>
                 </li>
                 <?php }
                 // if user is not loggged in
                 else{ ?>
              <li><a href="signup.php">Sign Up</a></li>
              <li><a href="login.php">Login</a></li>
              <?php } ?>
          </ul> 
      </div>
        <!-- This is main content for contact page -->

        <div class="row row3">
            <div class="col-lg-6 contact-img">
                <img src="images/contact-us-image.jpg">
            </div>
            <div class="col-lg-6 contacts">
                <h2>GET IN TOUCH!</h2>
                <p>Hey ! We are looking forward to start a project with you.</p><br>
                <h5>Email us</h5>
                <a target="_blank" href="https://mail.google.com/mail/u/0/#inbox"><i class="fa-solid fa-envelope"></i> &nbsp;<p>Work4dilshaan@gmail.com</p></a><br>
                <h5>Social Media</h5>
                <a target="_blank" href="https://www.facebook.com/100025021008863"><i class="fa-brands fa-facebook"></i> &nbsp; Facebook</a><br>
                <a target="_blank" href="https://www.instagram.com/dilshaan_pandit07/"><i class="fa-brands fa-instagram"></i> &nbsp; Instagram </a> <br>
                <a target="_blank" href="https://www.youtube.com/channel/UCCEGa9_z7S4NKfSX2Ty5SWA"><i class="fa-brands fa-youtube"></i> &nbsp; YouTube </a>
                <h5>Listen my latest Tracks here!</h5>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/1LJ2JpIct3dxApOhbkIGbb?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="30%" style="width:100%;max-width:660px;overflow-x:hidden;overflow-y:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/album/lofi-music-2021/1560336837?i=1560336838"></iframe>
            </div>
        </div>

        <!-- Footer -->

        <div class="col footer">
            <ul>
                <div>
                    <li><a target="_blank" href="https://www.facebook.com/100025021008863"><i class="fa-brands fa-facebook"></i></a></li>
                </div>
                <div>
                    <li><a target="_blank" href="https://www.instagram.com/dilshaan_pandit07/"><i class="fa-brands fa-instagram"></i></a></li>
                </div>
                <div>
                    <li><a target="_blank" href="https://www.youtube.com/channel/UCCEGa9_z7S4NKfSX2Ty5SWA"><i class="fa-brands fa-youtube"></i></a></li>
                </div>
                <div>
                    <li><a target="_blank" href="https://open.spotify.com/artist/1LJ2JpIct3dxApOhbkIGbb"><i class="fa-brands fa-spotify"></i></a></li>
                </div>
                <div>
                    <li><a target="_blank" href="https://music.apple.com/us/artist/dilshaan-pandit/1547280644/see-all?section=top-songs"><i class="fa-brands fa-apple"></i></a></li>
                </div><br>
                <li><a href="https://www.instagram.com/varinder_dhillon0/" class="copyright" target="_blank">©Varinder Dhillon ● 2022</a></li>
            </ul>
        </div>
    </div>
    <script src="js/js.js"></script>
</body>

</html>
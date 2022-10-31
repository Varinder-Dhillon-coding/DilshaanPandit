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
        if (isset($_COOKIE[$cookie_name])) {
          $pieces = explode(",", $_COOKIE[$cookie_name]);
        ?>
          <!-- to display -->
          <div class="menu user-data">
            <img src="images/no-profile-picture.jpg" class="no-profile-picture">
            <a href="user_data_show.php">
              <p class="username"><?php echo $pieces[0] ?></p>
            </a>
          </div>

        <?php }
        // if user is not logged in
        else { ?>
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
        if (isset($_COOKIE[$cookie_name])) {
          $pieces = explode(",", $_COOKIE[$cookie_name]);
        ?>
          <li>
            <a href="user_data_show.php">
              <img src="images/no-profile-picture.jpg" class="no-profile-picture">
              <p class="username"><?php echo $pieces[0] ?></p>
            </a>
          </li>
        <?php }
        // if user is not loggged in
        else { ?>
          <li><a href="signup.php">Sign Up</a></li>
          <li><a href="login.php">Login</a></li>
        <?php } ?>
      </ul>
    </div>

    <!-- This is main content for first page -->

    <div class="imp">
      <div class="row main_headline">
        <div class="col">
          <p>DILSHAAN PANDIT <br> Music | Mixing Mastering</p><br>
          <center><a href="https://www.youtube.com/channel/UCCEGa9_z7S4NKfSX2Ty5SWA" target="_blank"><button>Visit us on <i class="fa-brands fa-youtube"></i></button></a></center>
        </div>
      </div>
      <div class="background">
        <img src="images/background-crop.jpg">
      </div>
      <div class="col headlines">
        <?php if (isset($_COOKIE[$cookie_name])) {?>
        <p>Hey! <?php echo $pieces[0];?> <br> Listen now to our latest ep!</p>
          <?php } else{?>
        <p>Dignity Series is Live! <br> Now Available on online streaming stores.</p>
            <?php } ?>
      </div>
    </div>

    <!-- This are cards and yt video links -->

    <div class="row row-temporary">
      <div class="col-lg-4 col-sm-6 columns ">
        <div class="card card1"> 
          <img src="images/I STILL BELEIVE IN POWER - YT.png" class="card-img-top card-img">
          <div class="card-body">
            <h5 class="card-title card-title1 ">I Still Beleive in Power</h5>
            <p class="card-text card-text1">
              &nbsp;<br>
              Music: Dilshaan Pandit <br>
              Visuals: Varinder Dhillon <br>
              Track #1 <br>
            </p>
            <a target="_blank" class="yt" href="https://youtu.be/SjrgTNH4j4g"><i class="fa-brands fa-youtube"></i></a>
            <a target="_blank" class="yt" href="https://open.spotify.com/album/50asnlYtzBABtSGdeBmhPA"><i class="fa-brands fa-spotify"></i></a>
            <a target="_blank" class="yt" href="https://music.apple.com/us/artist/dilshaan-pandit/1547280644/see-all?section=top-songs"><i class="fa-brands fa-apple"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 columns">
        <div class="card card1">
          <img src="images/AFRAID OF DESIRE - YT.png" class="card-img-top card-img">
          <div class="card-body">
            <h5 class="card-title card-title1">Afraid of Desire</h5>
            <p class="card-text card-text1">
              &nbsp;<br>
              Music: Dilshaan Pandit <br>
              Visuals: Varinder Dhillon <br>
              Track #2 <br>
            </p>
            <a target="_blank" class="yt" href="https://youtu.be/jdoSaShp5EU"><i class="fa-brands fa-youtube"></i></a>
            <a target="_blank" class="yt" href="https://open.spotify.com/album/50asnlYtzBABtSGdeBmhPA"><i class="fa-brands fa-spotify"></i></a>
            <a target="_blank" class="yt" href="https://music.apple.com/us/artist/dilshaan-pandit/1547280644/see-all?section=top-songs"><i class="fa-brands fa-apple"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 columns">
        <div class="card card1">
          <img src="images/BONJOUR FLOW - YT.png" class="card-img-top card-img">
          <div class="card-body">
            <h5 class="card-title card-title1">Bonjour Flow</h5>
            <p class="card-text card-text1">
              Music: Dilshaan Pandit <br>
              Mixing/Mastering: Vipan Heir <br>
              Visuals: Varinder Dhillon <br>
              Track #3
            </p>
            <a target="_blank" class="yt" href="https://youtu.be/H0bUvCfKGyQ"><i class="fa-brands fa-youtube"></i></a>
            <a target="_blank" class="yt" href="https://open.spotify.com/album/50asnlYtzBABtSGdeBmhPA"><i class="fa-brands fa-spotify"></i></a>
            <a target="_blank" class="yt" href="https://music.apple.com/us/artist/dilshaan-pandit/1547280644/see-all?section=top-songs"><i class="fa-brands fa-apple"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 columns">
        <div class="card card1">
          <img src="images/To the east -yt.jpg" class="card-img-top card-img">
          <div class="card-body">
            <h5 class="card-title card-title1">To The East</h5>
            <p class="card-text card-text1">
              Music: Dilshaan Pandit <br>
              Mixing/Mastering: Vipan Heir <br>
              Visuals: Varinder Dhillon <br>
              Track #4
            </p>
            <a target="_blank" class="yt" href="https://youtu.be/zChEg86P7rQ"><i class="fa-brands fa-youtube"></i></a>
            <a target="_blank" class="yt" href="https://open.spotify.com/album/50asnlYtzBABtSGdeBmhPA"><i class="fa-brands fa-spotify"></i></a>
            <a target="_blank" class="yt" href="https://music.apple.com/us/artist/dilshaan-pandit/1547280644/see-all?section=top-songs"><i class="fa-brands fa-apple"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 columns">
        <div class="card card1">
          <img src="images/first flow- yt.jpg" class="card-img-top card-img">
          <div class="card-body">
            <h5 class="card-title card-title1">First Flow</h5>
            <p class="card-text card-text1">
              &nbsp;<br>
              Music: Dilshaan Pandit <br>
              Visuals: Varinder Dhillon <br>
              Track #5
            </p>
            <a target="_blank" class="yt" href="https://youtu.be/JXHJOGM9fjU"><i class="fa-brands fa-youtube"></i></a>
            <a target="_blank" class="yt" href="https://open.spotify.com/album/50asnlYtzBABtSGdeBmhPA"><i class="fa-brands fa-spotify"></i></a>
            <a target="_blank" class="yt" href="https://music.apple.com/us/artist/dilshaan-pandit/1547280644/see-all?section=top-songs"><i class="fa-brands fa-apple"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 columns">
        <div class="card card1">
          <img src="images/Dignity Series cut.jpg" class="card-img-top card-img">
          <div class="card-body">
            <h5 class="card-title card-title1">Full EP</h5>
            <p class="card-text card-text1">
              Music: Dilshaan Pandit <br>
              Mixing/Mastering: Vipan Heir <br>
              Visuals: Varinder Dhillon <br>
              All Tracks
            </p>
            <a target="_blank" class="yt" href="https://www.youtube.com/channel/UCCEGa9_z7S4NKfSX2Ty5SWA"><i class="fa-brands fa-youtube"></i></a>
            <a target="_blank" class="yt" href="https://open.spotify.com/album/50asnlYtzBABtSGdeBmhPA"><i class="fa-brands fa-spotify"></i></a>
            <a target="_blank" class="yt" href="https://music.apple.com/us/artist/dilshaan-pandit/1547280644/see-all?section=top-songs"><i class="fa-brands fa-apple"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col headlines">
      <p>Recommended Videos</p>
    </div>
    <div class="row-yt-center">
      <div class="row row-yt">
        <div class="col-lg-4 col-sm-6">
          <iframe width="300vw" height="201px" src="https://www.youtube.com/embed/a4_vbiwyp8Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-4 col-sm-6">
          <iframe width="300vw" height="201px" src="https://www.youtube.com/embed/kWYruq7KKGg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-4 col-sm-6">
          <iframe width="300vw" height="201px" src="https://www.youtube.com/embed/awNZiHkUMuw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-4 col-sm-6">
          <iframe width="300vw" height="201px" src="https://www.youtube.com/embed/_eMUz73GzhQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-4 col-sm-6">
          <iframe width="300vw" height="201px" src="https://www.youtube.com/embed/LaXThtyf8u8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-4 col-sm-6">
          <iframe width="300vw" height="201px" src="https://www.youtube.com/embed/t1Ze1fXZIxA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
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
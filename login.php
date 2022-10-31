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
    <title>Login</title>
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
                        <img src="images/no-profile-picture.jpg" class="no-profile-picture" alt="user-no-pfp">
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
                            <img src="images/no-profile-picture.jpg" class="no-profile-picture" alt="user-no-pfp">
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

        <!-- This is main content for signup page -->
        <?php
        function alerts($message)
        {
            echo "<script>alert('$message');</script>";
        }

        //Loggging in the user by checking email and password

        if (isset($_POST['Login'])) {
            $Email = $_POST['Email'];
            $Passw = $_POST['Passw'];

            $conn = mysqli_connect("localhost", "root", "", "panditwebsitelogins") or die("connection failed!!");
            $query = "Select * from users where Email = '$Email' and Password = '$Passw';";
            try {
                $result = mysqli_query($conn, $query);
                $rows = mysqli_fetch_assoc($result);
                if (mysqli_num_rows($result) == 0) {
                    alerts("Email and Password combination is incorrect.");
                } else {
                    $cookie_name = "UserLogin";
                    $Name = $rows['Name'];
                    $cookie_data = $Name . "," . $Email;
                    setcookie(
                        $cookie_name,
                        $cookie_data,
                        time() + 86400 * 30,
                        "/"
                    );
                    header("Location: index.php");
                }
            } catch (Exception) {
                alerts("Login Failed . Try Sign in.");
            }
        }
        ?>
        <div class="signup-container">
            <center>
                <h2>Login</h2>
                <?php
                require_once 'vendor/autoload.php';
                // init configuration
                $clientID = '3988728853-mj7997gu3lndmg8ed8cevvac3jbt745h.apps.googleusercontent.com';
                $clientSecret = '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';
                $redirectUri = 'http://localhost/PandatWebsite/login.php';

                // create Client Request to access Google API
                $client = new Google_Client();
                $client->setClientId($clientID);
                $client->setClientSecret($clientSecret);
                $client->setRedirectUri($redirectUri);
                $client->addScope("email");
                $client->addScope("profile");

                if (isset($_GET['code'])){
                    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
                    $client->setAccessToken($token['access_token']);

                    // get profile info
                    $google_oauth = new Google\Service\Oauth2($client);
                    $google_account_info = $google_oauth->userinfo->get();
                    $email =  $google_account_info->email;
                    $name =  $google_account_info->name;
                    $Pic = $google_account_info['picture'];

                    $cookie_name = "UserLogin";
                    $cookie_data = $name . "," . $email.",".$Pic;
                    setcookie(
                        $cookie_name,
                        $cookie_data,
                        time() + 86400 * 30,
                        "/"
                    );
                    header("Location: index.php");
                } else {
                    echo "
                    <div class='google-btn'>
                    <img src='images/google-logo.png' alt='google-logo'>
                    <a href='" . $client->createAuthUrl() . "' class='google-login'> Login with Google </a> 
                    </div><br>
                    ";
                } ?>
                <p>or</p>
                <form method="POST">
                    <input type="email" placeholder="Email" name="Email" required><br>
                    <input type="password" placeholder="Password" name="Passw" required><br>
                    <input type="submit" name="submit" value="Login" class="signup" placeholder="Sign Up">
                </form>
            </center>
        </div>
        <div class="login-margin">

        </div>
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
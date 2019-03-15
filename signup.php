<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <title>OmniFood </title>
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="resources/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">

</head>



<body>
    <header>
        <nav>
            <div class="row">
                <img src="resources/img/logo-white.png" alt="Omnifood logo" class="logo-signup">
                <ul class="main-nav-signup">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#footer">Contact us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <section class="section-signup">
            <div class="row" style="width: 500px">
                <div class="signup-box">
                    <h2>Sign Up</h2>
                    <form action="signup_action.php" method="post">
                        <div class="span-2-of-2">
                            <i class="ion-ios-person icon-small span-2-of-12"></i>
                            <input type="text" name="firstname" placeholder="Your First Name" class="in-rounded span-10-of-12" required>
                        </div>
                        <div class="span-2-of-2">
                            <i class="ion-ios-person icon-small span-2-of-12"></i>
                            <input type="text" name="lastname" placeholder="Your Last Name" class="in-rounded span-10-of-12" required>
                        </div>
                        <div class="span-2-of-2">
                            <i class="ion-ios-email icon-small span-2-of-12"></i>
                            <input type="email" name="email" placeholder="Your Email" class="in-rounded span-10-of-12" required>
                        </div>
                        <div class="span-2-of-2">
                            <i class="ion-ios-locked icon-small span-2-of-12"></i>
                            <input type="password" name="password" placeholder="Password" class="in-rounded span-10-of-12" required>
                        </div>
                        <div class="span-2-of-2">
                            <i class="ion-ios-refresh icon-small span-2-of-12"></i>
                            <input type="password" name="confirmpassword" placeholder="Confirm Password" class="in-rounded span-10-of-12" required>
                        </div>
                        <div class="span-2-of-2" style="text-align: center; margin-bottom: 4px;">
                            <button class="btn btn-full">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </header>
    <!--------------------------FOOTER---------------------------->
    <footer id="footer">
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li>
                        <a href="#">About us</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Press</a>
                    </li>
                    <li>
                        <a href="#">iOS App</a>
                    </li>
                    <li>
                        <a href="#">Android App</a>
                    </li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <ul class="social-links">
                    <li>
                        <a href="#">
                            <i class="ion-social-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ion-social-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ion-social-googleplus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ion-social-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <p>
                Copyright &copy; 2018 by Omnifood. All rights reserved.
            </p>
        </div>
    </footer>

    <!---------------------------------------------------------------------------->


    <script src="resources/js/jquery-3.3.1.min.js"></script>
    <script src="resources/js/jquery-ui.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>

</body>

</html>

<?php
    if(isset($_GET['msg'])){
        echo '<script language="javascript">';
        echo 'alert("'.$_GET['msg'].'")';
        echo '</script>';
    }
?>
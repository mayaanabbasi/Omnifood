<?php 
    include ('dbconnection.php');
    session_start();
    $starters = mysqli_query($con, "SELECT * FROM `starters`");
    $main_course = mysqli_query($con, "SELECT * FROM `main_course`");
    $desserts = mysqli_query($con, "SELECT * FROM `desserts`");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Select</title>
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
	<link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="resources/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="resources/css/style.css">	
	<link rel="stylesheet" type="text/css" href="resources/css/queries.css">	
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">

</head>
<body>
        
    
  
    <section class="menu-back">
        <nav class="menu-nav">           
    
            <div class="row">
                <img src="resources/img/logo-white.png" alt="Omnifood logo" class="logo">
                <img src="resources/img/logo.png" alt="Omnifood logo" class="logo-black">
                <ul class="main-nav js-main-nav">
                    <li><a href="javascript:function() { return false; }" style="border-bottom: none;">welcome:  <?php echo $_SESSION['firstname']; ?></a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
                <a class="mobile-nav-icon js-nav-icon"><i class="ion-navicon-round"></i></a>
            </div>
    
        </nav>
        <div class="menu">
            <h2>
                menu
            </h2>
            <form action="menu_action.php" method="post">
                <div class="menu-div">
                    <div class="starters">
                        <h4>
                            Starters:
                        </h4>
                        
                        <ul class="food-list">
                        <?php while($result1=mysqli_fetch_array($starters)) {?>
                            <label><li><input type="checkbox" name="starters[]" values="<?php echo $result1['name']; ?>">  <?php echo $result1['name']; ?></li></label>
                        <?php } ?>
                        </ul>
                    </div>
                    <div class="main-course">
                        <h4>
                        main course:
                        </h4>
                        
                        <ul class="food-list">
                        <?php while($result2=mysqli_fetch_array($main_course)) {?>
                            <label><li><input type="checkbox">  <?php echo $result2['name']; ?></li></label>
                        <?php } ?>
                        </ul>
                    </div>
                    <div class="deserts">
                        <h4>
                            desserts:
                        </h4>
                        
                        <ul class="food-list">
                        <?php while($result3=mysqli_fetch_array($desserts)) {?>
                            <label><li><input type="checkbox">  <?php echo $result3['name']; ?></li></label>
                        <?php } ?>
                        </ul>
                    </div>  
                    <div class="btn-order">
                        <button class="btn btn-full">Order</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
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
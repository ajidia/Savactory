<?php
//Includes file
require_once __DIR__.'/includes/configuration.php';
require_once __DIR__.'/includes/class.php';
require_once __DIR__.'/includes/function.php';

//Session
session_name("savactory");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head> 
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tugas Akhir | Savactory</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/ini.ico" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/propeller.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!--- material icons --->
    <link rel="stylesheet" href="assets/fonts/material-icons/material-icons.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>
<body>
<!---<header id="headerlogin">
        <div class="container">
        
        <nav id="nav-login-container">
        <a href="index.php"><img src="assets/img/slogo.png" alt=""></a>
                 
            </nav>
        </div>
        
</header> --->
<!---============login section==============--->
        <section id="login">
        <div class="coba"></div>
        <div class="login-container">
            <div class="col-sm-4">
                <div class="cardlog">

                <form action="main.php" method="post">
                    <input type="hidden" name="component" value="Home">
                    <input type="hidden" name="action" value="login">
                    <div class="pmd-card-title card-header-border text-center wow fadeInDown">
                        <div class="loginlogo">
                            <a href="index.php"><img src="assets/img/logoo.png"></a>
                        </div>
                    </div>
                    <div class="pmd-card-body paddingrl wow fadeIn">
                        <div class="form-group pmd-textfield">
                            <label for="username" class="labell pull-left">Username</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="material-icons md-light pmd-sm">perm_identity</i></div>
                                <input class="form-control" id="username" name="username" required autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="form-group pmd-textfield">
                            <label for="password" class="labell pull-left">Password</label>
                            <div class="input-group ">
                                <div class="input-group-addon"><i class="material-icons md-light pmd-sm">lock_outline</i></div>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
                        <input type="submit" class="btn-get-started wow fadeInUp" value="Login">  
                        <br>
                        <br>
                        <a href="forgot.php" class="link wow fadeIn">Forgot Password</a>
                        <br>
                        <br>
                        <a href="register.php" class="link wow fadeIn">Sign Up For <strong>Savactory</strong></a>   
                        <br>
                        <br> 
                    </div>
                </form>

            </div>

            

            </div>

        </div>

    </section>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/bootstrap/js/propeller.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>
</html>
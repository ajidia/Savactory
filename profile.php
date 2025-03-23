<?php
//Includes file
require_once __DIR__.'/includes/configuration.php';
require_once __DIR__.'/includes/class.php';
require_once __DIR__.'/includes/function.php';

//Session
session_name("savactory");
session_start();

//Route
$component = isset($_REQUEST['component']) ? $_REQUEST['component'] : 'Profile';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';

//Includes Model, View, and Controller
if (!file_exists(__DIR__.'/components/'.strtolower($component).'.controller.php')) {
    echo "File tidak ditemukan";
    exit();
}

require_once(__DIR__.'/components/'.strtolower($component).'.model.php');
require_once(__DIR__.'/components/'.strtolower($component).'.view.php');
require_once(__DIR__.'/components/'.strtolower($component).'.controller.php');

ob_start();

$controllerName = $component.'Controller';
$controller = new $controllerName();
$controller->{$action}();

$content = ob_get_contents();
ob_clean();
   
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
<?php echo $content; ?>
</body>
</html>
<!-- facebook logout -->
<?php 
session_start();
session_unset();
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
header("Location: index.php");        // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 
?>


<!-- google logout  -->
<?php
//Include GP config file
include_once 'gpConfig.php';

//Unset token and user data from session
unset($_SESSION['token']);
unset($_SESSION['userData']);

//Reset OAuth access token
$gClient->revokeToken();

//Destroy entire session
session_destroy();
// header('location: http://localhost/DESIGN/1.0/index1.php');
header('location: index.php');
//Redirect to homepage
?>

<!-- Registration logout -->
<?php
session_start();
session_destroy();
header('location: http://localhost/1353/1353/index.php');
?>
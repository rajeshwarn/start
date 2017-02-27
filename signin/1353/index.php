<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

<?php  //Start the Session
session_start();
require('connection.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['email']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$email = $_POST['email'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `user_register` WHERE email='$email' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['email'] = $email;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$f1msg = "Invalid Login Credentials.";
echo $f1msg;
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['email'])){
$email = $_SESSION['email'];
}
/*$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/DESIGN/1.0/index1.php";
   include ($path);

}else{
}*/
?>
<!-- <?php 
    /*if (isset($_SESSION['email'])) {
        echo 'Session is active';
        }

  else{
      echo 'no session exist';
    }*/
?> -->
<head>
    <meta charset="utf-8">
    <title>DAILY.TV</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>

        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/itv.css">
    <link rel="stylesheet" type="text/css" href="../1.0/css/style1.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!--for popup-->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<!--close for popup-->

   <link rel="stylesheet" type="text/css" href="css/style.css">

<style type="text/css">
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
    position: fixed;
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

@keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

</style>
</head>

<body>
<?php if (isset($_SESSION['email'])){
include 'nav.php';
}
else
{
  include'nav1.php';
}
?>
<div class="container">
<?php include 'slider.php';?>

<br>
 <div class="sections">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vod";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "select * from vid_info";

if ($result = $conn->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
      $t = json_encode($row);


        echo '
 <div class="col-lg-3 col-md-3 col-sm-4">
   <div class="thumbnail poster">
       <figure>
           <a href=""><img src="' ;
           echo $row['thumbnail'];
           echo '" alt="Poster name" /></a>
           <div class="overlay"></div>
       </figure>
       <div class="caption">
           <a href="' ;
           echo $row['v_id'];
           echo '" class="poster-name">Mai Kuch bhi kar sakti hu</a>
           <div class="language">HINDI</div>
           <ul class="list-inline tags">

           </ul>
       </div>
       <a href=""><button class="btn btn-primary btn-block">WATCH NOW</button></a>
   </div>
</div>
';
        
       }

    /* free result set */
    $result->free();
}
?>
<script type="text/javascript">stLight.options({publisher: "7fe2156e-ea1e-4571-b764-0b1f72349306", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
var options={ "publisher": "7fe2156e-ea1e-4571-b764-0b1f72349306", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "linkedin", "pinterest", "email", "sharethis"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>

</div>

</div>
<br>

           

  
      <?php include 'footer.php';?>

        </div><!--/.container-->


<script src="js/itv.js"></script>
<script type="text/javascript">
    // Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 4000
    })
  });

</script>

</body>
</html>

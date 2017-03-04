<!DOCTYPE html>
<html lang="en">

<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="http://vjs.zencdn.net/5.11.9/video-js.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/videojs-resolution-switcher/0.4.2/videojs-resolution-switcher.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<script src="http://vjs.zencdn.net/5.11.9/video.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-resolution-switcher/0.4.2/videojs-resolution-switcher.js">


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
    <link href="https://fonts.googleapis.com/css?family=Anton|Fjalla+One|Francois+One|Libre+Franklin|Rambla|Ubuntu" rel="stylesheet"><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  
<style>
/* Full-width input fields */

/* Set a style for all buttons */

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
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
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: black;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Sansita" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>

<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>

<!-- Optional theme -->


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!--for popup-->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<!--close for popup-->
    <link rel="stylesheet" type="text/css" href="css/style1.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/itv.css">

<style type="text/css">
  .player {
    position: relative;
    width: 100%;
    overflow: hidden;
    /* background-color: black; */
    background-image: url('images/shade.jpg');
  }
  
</style>
<script>
function clicked(){
  document.getElementById('id01').style.display='block';
}
</script>
 <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Dropdown Hover CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
</head>

<body>
<script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap Dropdown Hover JS -->
    <script src="js/bootstrap-dropdownhover.min.js"></script>
<?php
$servername = "localhost";
$username = "root";
$password = "itv";
$dbname = "vod";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<?php 
if (isset($_SESSION['email'])){
include 'nav.php';
}
else
{
  include'nav1.php';
}
?>
<?php

function curl($url)
{
  $ch = @curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "Accept-Language: en-us,en;q=0.5";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  $page = curl_exec($ch);
  curl_close($ch);
  return $page;
}

if (isset($_GET['id'])){
  $id = $_GET['id'];
$query = "select * from vid_info  where id = $id";
$result = $conn->query($query);
$data = $result->fetch_array(MYSQLI_ASSOC);
$link = $data['v_id'];
//include 'get.php';
$api = 'http://api.getlinkdrive.com/getlink?url='.$link;
$sources = curl($api);
if(isset($email)){

  echo '<div class="col-md-12 col-sm-12">
  <div class= "player">
  <center><video id="videojs_id" class="video-js" controls preload="auto">
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video></center>
  </div>
  </div>';}
  else{
    echo '<div class="col-md-12 col-sm-12">
    <div class= "player" onclick="clicked()" style="width:auto;">
     <center>
     <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
  poster="' ;
           echo $data['thumbnail'];
           echo '" data-setup="{}">
  </video>
    </div></div>
</center>

';



}


  include 'play.php';}
else include 'slider.php';
?>

<div id="id01" class="modal">
   <h1 style="color: white;"> please <a href= "signin/index.php">sign in </a>to view </h1>
</div>
<script>
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>
<div class="container">

<br>
 <div class="sections">
<?php
$servername = "localhost";
$username = "root";
$password = "itv";
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
 <div class="col-lg-3 col-md-3 col-sm-2">
   <div class="thumbnail poster">
       <figure>
           <a href="' ;
           echo "index.php?id=" . $row['id'];
           echo '"><img src="' ;
           echo $row['thumbnail'];
           echo '" alt="Poster name" /></a>
           <div class="overlay"></div>
       </figure>
       <div class="caption">
           <a href="' ;
          echo "index.php?id=" . $row['id'];
           echo '" class="poster-name">' ;
           echo $row['title'];
           echo '</a>
           <div class="language">HINDI</div>
           <ul class="list-inline tags">

           </ul>
       </div>
   </div>
</div>
';
        
       }

    /* free result set */
    $result->free();
}
?>

</div>
<br>
      

  </div>
  
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
<script type="text/javascript">
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

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
<style type="text/css">
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0;background-color: black; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(images/loader-128x/gyro.gif) center no-repeat #fff;
  background-color: #344557;

}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="hover.css">
<script src="js/jquery-1.11.1.min.js"></script>
<link href="http://vjs.zencdn.net/5.17.0/video-js.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/slider.css">
  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->

<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!--start-smoth-scrolling-->
<!-- fonts -->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<script type="text/javascript">
 
function clicked(){
  document.getElementById('id01').style.display='block';
}

</script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script type="text/javascript">
 

//paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>
<style type="text/css">
 
  /* Grow Shadow */
.hvr-grow-shadow {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px transparent;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: box-shadow, transform;
  transition-property: box-shadow, transform;
}
.hvr-grow-shadow:hover, .hvr-grow-shadow:focus, .hvr-grow-shadow:active {
  box-shadow: 0 10px 10px -10px rgba(0, 0, 0, 0.5);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>
<body>
<div class="se-pre-con"></div>

<?php 
if (isset($_SESSION['email'])){
include 'nav.php';
}
else
{
include'navv.php';
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

include 'connvideo.php';

if (isset($_GET['id'])){
  $id = $_GET['id'];
$query = "select * from vid_info  where id = $id";
$result = $conn->query($query);

$data = $result->fetch_assoc();

$data1 = json_encode($data); 

$link = $data['v_id'];
//include 'get.php';
$api = 'http://api.getlinkdrive.com/getlink?url='.$link;
$sources = curl($api);
if(isset($email)){
  echo '<div class="container">
  <center>
  <div class="player">
  <video id="videojs_id" class="video-js vjs-paused" controls preload="auto">
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video></center>
  </div>
  </div>';}
  else{
    echo '<div class="container">
    <center>
    <div href="#watch" class="player play-icon popup-with-zoom-anim" >
    
     <a href="#watch" class="play-icon popup-with-zoom-anim"><video id="my-video" class="video-js img-responsive vjs-fluid" controls preload="auto" width="640" height="264"
  poster="' ;
           echo $data['thumbnail'];
           echo '" data-setup="{}">
  </video></a>
    </div></div>
</center>
<br>
<br>


';

}
  include 'play.php';}
else include 'slider.php';
?>





<br>

  
  <div id="watch" class="mfp-hide">

  <h1>PLEASE SIGN IN TO WATCH THE VIDEOS</h1>
  <a href="http://thedailyeye.tv/start/signin/">SIGNIN</a>
  </div>

<br>

<div class="container">

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

 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
   <div class="thumbnail poster hvr-grow-shadow">
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
<div class="container"> 
<?php include 'section.php';?>
</div>
</div>
</div>
<div class="container">
<?php include 'footer.php';?>
</div>


<script type="text/javascript" src="js/modernizr.custom.min.js"></script>   
                  <script src="js/jquery-1.11.1.min.js"></script>

<script type="text/javascript">
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
 
 
                  <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                  <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
                      $(document).ready(function() {
                      $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                      });
                         
                         // Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 3000
    })
  });                             
                      });
                  </script>

<!-- <script src="js/jquery-1.11.0.min.js"></script>
 -->
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


 <script src="js/jquery-1.11.0.min.js"></script>
                


    <!-- Bootstrap Dropdown Hover JS -->
</body>
</html>
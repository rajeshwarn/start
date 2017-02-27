<!DOCTYPE html>
<html lang="en">
<?php 

?>

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
    <link href="https://fonts.googleapis.com/css?family=Anton|Fjalla+One|Francois+One|Libre+Franklin|Rambla|Ubuntu" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

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
<link rel="stylesheet" type="text/css" href="css/itv.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<?php 
if (isset($_SESSION['email'])){
include 'nav.php';
}
else
{
  include'nav1.php';
}
?>
<?php include 'slider.php';?>

<div class="container">

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


</body>
</html>

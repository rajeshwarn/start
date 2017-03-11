<?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'Usergoogle.php';
if(isset($_GET['code'])){
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}
if (isset($_SESSION['token'])) {
    $gClient->setAccessToken($_SESSION['token']);
}
if ($gClient->getAccessToken()) {
    //Get user profile data from google
    $gpUserProfile = $google_oauthV2->userinfo->get();
    
    //Initialize User class
    $user = new User();
    
    //Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
    );
    $userData = $user->checkUser($gpUserData);
    
    //Storing user data into sesssion
    $_SESSION['userData'] = $userData;
    
    //Render facebook profile data
    if(!empty($userData)){
        
     /*$output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'" width="auto" height="auto">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Google</a>'; */
         $output = $userData['email'];
         $_SESSION['email'] = $output;
         
         header("Location: index.php");
         /*$output .= '<br/>Logout from <a href="logout.php">Google</a>';*/
        
   }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} 
         /*$output .= '<br/>Logout from <a href="logout.php">Google</a>';*/
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/mobile.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->

<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
</head>
  <body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
  require('connection.php');
    // If the values are posted, insert them into the database.
    if (isset($_GET['email']) && isset($_GET['password'])){
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
      $email = $_GET['email'];
        $password = $_GET['password'];


        $sql = "INSERT INTO user_register (firstname, lastname, email,password)
VALUES ('$firstname', '$lastname', '$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>
    <div id="wrapper">
        <div class="overlay"></div>
       
			 <nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"></a>

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="#">
                      <img src="images/logo (Custom).jpg"></img>
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
               <ul class="nav navbar-nav">
                    <li><a href='movie.php'>HOME</a></li>
                   
                    <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> SHOW<b class="caret"></b></a>
              <ul class="dropdown-menu">
               
               <li><a href='movie.php'>Hindi</a></li>
                <li><a href='movie.php'>English</a></li>
                 
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> MOVIES<b class="caret"></b></a>
              <ul class="dropdown-menu">
               
               <li><a href='movie.php'>Hindi</a></li>
                <li><a href='movie.php'>English</a></li>
                 
              </ul>
            </li>
            <li><a href='movie.php'>KIDS</a></li>
            <li><a href='movie.php'>SHORT FILMS</a></li>


          </ul>

                     <div class="col-sm-3 col-md-4">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
            </div>
 <ul class="nav navbar-nav navbar-right">
 <li><div class="signin">
					<a href="#small-dialog3" class="play-icon popup-with-zoom-anim">Sign Up</a>
					<!-- pop-up-box -->
									<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
									<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
									<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
									<!--//pop-up-box -->
								
									<div id="small-dialog3" class="mfp-hide">
										<h3>Create Account</h3> 
										<div class="social-sits">
											<div class="facebook-button">
												<a href="http://thedailyeye.tv/start/fbconfig.php">Connect with Facebook</a>
											</div>
											<div class="chrome-button">
											 <?php $authUrl = $gClient->createAuthUrl();
    $display = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'">
												Connect with Google </a>';
    echo $display;
    ?>
											</div>
											<div class="button-bottom">
												<p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
											</div>
										</div>
										<div class="signup">
											<form  method="get" >
											<input type="text" required  name="firstname" placeholder="firstname" />
											<input type="text" required  name="lastname" placeholder="lastname" />
											<input type="text" name="email"  placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
											<input type="password" name="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required"  />
                                              
												<input type="submit"  value="Sign Up"/>
												 <!-- <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                                              <?php if(isset($fmsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $fmsg; ?> </div><?php } ?> -->
											</form>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div id="small-dialog7" class="mfp-hide">
										<h3>Create Account</h3> 
										<div class="social-sits">
											<div class="facebook-button">
												<a href="http://thedailyeye.tv/start/fbconfig.php">Connect with Facebook</a>
											</div>
											<div class="chrome-button">
											 <?php $authUrl = $gClient->createAuthUrl();
    $display = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'">
												Connect with Google </a>';
    echo $display;
    ?>
											</div>
											<div class="button-bottom">
												<p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
											</div>
										</div>
										<div class="signup">
											<form action="index.php" method="post">
												<input type="text" name="email" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
												<input type="password" name="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required"  />
												<input type="submit"  value="Sign In"/>
											</form>
										</div>
										<div class="clearfix"> </div>
									</div>
									
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
																											
											});
									</script>	
				</div>
</li>

      <li><div class="signin">
					<a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a>
					<div id="small-dialog" class="mfp-hide">
						<h3>Login</h3>
						<div class="social-sits">
							<div class="facebook-button">
												<a href="http://thedailyeye.tv/start/fbconfig.php">Connect with Facebook</a>
											</div>
											<div class="chrome-button">
											 <?php $authUrl = $gClient->createAuthUrl();
    $display = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'">
												Connect with Google </a>';
    echo $display;
    ?>
											</div>
							<div class="button-bottom">
								<p>New account? <a href="#small-dialog3" class="play-icon popup-with-zoom-anim">Signup</a></p>
							</div>
						</div>
						<div class="signup">
							<form action="index.php" method="post">
												<input type="text" name="email" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
												<input type="password" name="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required"  />
												<input type="submit"  value="Sign In"/>
											</form>
							<div class="forgot">
								<a href="#">Forgot password ?</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div></li> 
    </ul>
</div>
</div>
                </div>
                <!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
			
				
				
				
				<div class="clearfix"> </div>
			
		<div class="clearfix"> </div>
     </div>
     <script type="text/javascript">
     	$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
     </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>
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


       
			 <nav id="header" class="navbar navbar-static-top">
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
                <div id="navbar" class="collapse navbar-collapse ">
               <ul class="nav navbar-nav">
                    <li><a href='index.php'>HOME</a></li>
                   
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
 <div class="signin">
					<a href="#small-dialog3" class="play-icon popup-with-zoom-anim">Sign Up</a>
					<!-- pop-up-box -->
									
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
												Connect with Google &nbsp;&nbsp;&nbsp;&nbsp;</a>';
    echo $display;
    ?>
											</div>
											<div class="button-bottom">
												<p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
											</div>
										</div>
										<div  class="signup">
                    <div id="contactResponse"></div>
											<form id="contactForm"  action="registration.php" method="post" >
											<input type="text" required  name="firstname" placeholder="firstname" />
											<input type="text" required  name="lastname" placeholder="lastname" />
											<input type="text" name="email"  placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
											<input type="password" name="password" placeholder="Password" required="required"  title="Minimum 6 characters required"  />
                                              
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
												Connect with Google  &nbsp;&nbsp;&nbsp;&nbsp;</a>';
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
												<input type="password" name="password" placeholder="Password" required="required"  title="Minimum 6 characters required"  />
												<input type="submit"  value="Sign In"/>
											</form>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div id="small-dialog4" class="mfp-hide">
										<h3>Feedback</h3> 
										<div class="feedback-grids">
											<div class="feedback-grid">
												<p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
											</div>
											<div class="button-bottom">
												<p><a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign in</a> to get started.</p>
											</div>
										</div>
									</div>
										
				</div>


     <div class="signin">
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
												<input type="password" name="password" placeholder="Password" required="required"  title="Minimum 6 characters required"  />
												<input type="submit"  value="Sign In"/>
											</form>
							<div class="forgot">
								<a href="#">Forgot password ?</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
    </ul>
</div>
</div>
                </div>
                <!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
			
				
				
				
				<div class="clearfix"> </div>
			
		<div class="clearfix"> </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script type="text/javascript">
  if ($(window).width() < 760) {

    $('#header').addClass('navbar-static-top');
    $('#menu2').removeClass('navbar-fixed-top');
} else {
    $('#header').addClass('navbar-fixed-top');
    $('#menu2').removeClass('navbar-static-top');
}
</script>
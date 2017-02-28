<?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';
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
         
         header("Location: ../index.php");

         /*$output .= '<br/>Logout from <a href="logout.php">Google</a>';*/
        
   }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} 

         /*$output .= '<br/>Logout from <a href="logout.php">Google</a>';*/

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
<link rel="stylesheet" href="css/style.css">
<style type="text/css">
  
  .alert {
    color: red;
    background-color: white;
    padding: 2em;
  }
</style>
  
</head>

<body>
<?php
  require('connection.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['email']) && isset($_POST['password'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
      $email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `user_register` (firstname, lastname, email,password) VALUES ('$firstname', '$lastname', '$email','$password')";
        $result = mysqli_query($conn, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Already Existed";
        }
    }
?>
 <div id="myModal" class="modal">
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
     

      <div class="tab-content">
        <div id="signup">
          <h1>Sign Up for Free</h1>
         

          <form  method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="firstname" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="lastname" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email" />
          </div>

          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required id="txtNewPassword" name="password"  autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Repeat A Password<span class="req">*</span>
            </label>
            <input type="password"required  id="txtConfirmPassword" onChange="checkPasswordMatch();" name="repass" autocomplete="off"/>
          </div>
    <div class="registrationFormAlert" id="divCheckPasswordMatch" style="color: white;">
</div><br>
          <button type="submit" class="button button-block" onclick="submitform();" />Get Started</button>

     <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
     <?php if(isset($fmsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

          </form>
      <p style="color: white;">
    </p>
       </div>
      
        
        <div id="login">   
          <h1>Welcome Back!</h1>
               <?php if(isset($f1msg)){ ?><div class="alert alert-success" role="alert"> <?php echo $f1msg; ?> </div><?php } ?>

          <form action="../index.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required  name="email" />
          </div>

          <div id="txtHint"><b></b></div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required  name="password" />
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>
		  
		  <br><br>
      
		  <a href="http://thedailyeye.tv/fbconfig.php"><img src="images/facebook-login-blue.png" width="215px" height="70px" alt=""/></img></a>
     
     
      <?php $authUrl = $gClient->createAuthUrl();
    $display = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'">
    <img src="images/google.png" width="215px" height="70px" alt=""/></a>';
    echo $display;
    ?>
    


        </div>
        
      </div><!-- tab-content -->
      
</div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
<script type="text/javascript">
var password;
var confirmPassword;
  function checkPasswordMatch() {
    password = $("#txtNewPassword").val();
    confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}

$(document).ready(function () {
   $("#txtConfirmPassword").keyup(checkPasswordMatch);
});



</script>
</body>
</html>

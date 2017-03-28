<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
require 'functions.php';  
use FacebookFacebookSession;
use FacebookFacebookRedirectLoginHelper;
use FacebookFacebookRequest;
use FacebookFacebookResponse;
use FacebookFacebookSDKException;
use FacebookFacebookRequestException;
use FacebookFacebookAuthorizationException;
use FacebookGraphObject;
use FacebookEntitiesAccessToken;
use FacebookHttpClientsFacebookCurlHttpClient;
use FacebookHttpClientsFacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '1837584569842574','4ae79f4816e66c3dfbc388a4376ee756' );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://thedailyeye.tv/start/fbconfig.php' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
      $fbid = $graphObject->getProperty('id');              // To Get Facebook ID
      $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
      $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
  /* ---- Session Variables -----*/
      $_SESSION['FBID'] = $fbid;           
        $_SESSION['FULLNAME'] = $fbfullname;
      $_SESSION['email'] =  $email;
  checkuser($fuid,$ffname,$email);
  header("Location: index.php");
} else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
}
?>
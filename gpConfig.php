<?php


//Include Google client library 
include_once 'srcgoogle/Google_Client.php';
include_once 'srcgoogle/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '504763847297-c1fudk9sattvf6ladhcd26e4kaq933q2.apps.googleusercontent.com';
$clientSecret = 'euRstYzTBorv2EaAYrkjcObt';
$redirectURL = 'http://thedailyeye.tv/start/signin/index.php';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
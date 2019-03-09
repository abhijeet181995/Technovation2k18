<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '655960161811-cjl9ua8rejdbdjf5km5dgce3dhkcoais.apps.googleusercontent.com';
$clientSecret = 'PhUWOEuOehM3rVW7Nt4PjxKo';
$redirectURL = 'http://technovation2k18.org/register.php';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Technovation@2k18');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
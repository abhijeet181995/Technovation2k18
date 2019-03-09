<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '655960161811-jubssh8hl7ddsbbmf5vv91bk826iu4br.apps.googleusercontent.com';
$clientSecret = '8HkdLcLgR7pYTtN6NWpI9eB-';
$redirectURL = 'http://technovation2k18.org/forgetfinal.php';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Technovation@2k18forget');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/php-template/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/php-template/contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "JCMM COMICS";
	}
//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('968720151135-icdldc3a7vn0p6giaepuc7ga4325r7qn.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('LATwRxYJNrtgRtb_JSN-iKg-');

//Set the OAuth 2.0 Redirect URI
//$google_client->setRedirectUri('http://localhost/index.php');
$google_client->setRedirectUri('http://jcmmcomics.iesmarquesdecomares.org/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');


$login_button = '';

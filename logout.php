<?php 
include('includes/a_config.php');

session_start();

//Reset OAuth access token
$google_client->revokeToken();

session_unset();
session_destroy();
header('Location:index.php');

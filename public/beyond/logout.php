<?php
// Include FB config file
//require_once 'fbConfig.php';

// Remove access token from session
//unset($_SESSION['facebook_access_token']);

// Remove user data from session
//unset($_SESSION['userData']);

//unset($_SESSION['access_token']);

session_start();
$_SESSION = array();
session_destroy();

setcookie('cookie1', '', strtotime('-2 days'));
setcookie('cookie2', '', strtotime('-2 days'));
//header("Location:http://facebook.com/logout.php?confirm=1&next=http://localhost/property/index.php");



// Redirect to the homepage
header("Location:index.php");
?>
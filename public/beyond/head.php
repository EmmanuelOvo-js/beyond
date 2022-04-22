<?php require_once('Connections/emirate.php'); ?>
<?php

//If the HTTPS is not found to be "on"
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
{
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_emirate, $emirate);
$query_site = "SELECT * FROM site";
$site = mysql_query($query_site, $emirate) or die(mysql_error());
$row_site = mysql_fetch_assoc($site);
$totalRows_site = mysql_num_rows($site);


?>
<?php require_once('Connections/emirate.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


mysql_select_db($database_emirate, $emirate);
$query_site = "SELECT * FROM site";
$site = mysql_query($query_site, $emirate) or die(mysql_error());
$row_site = mysql_fetch_assoc($site);
$totalRows_site = mysql_num_rows($site);

if (isset($_GET['User_id'])) {
    $use = $_GET['User_id'];
    
    mysql_select_db($database_emirate, $emirate);
$query_use = "SELECT * FROM users where Access='member' and User_id ='$use' limit 4";
$use = mysql_query($query_use, $emirate) or die(mysql_error());
$row_use = mysql_fetch_assoc($use);
$totalRows_use = mysql_num_rows($use);


}
else
{
mysql_select_db($database_emirate, $emirate);
$query_use = "SELECT * FROM users where Access='member' and expiry >= CURDATE();";
$use = mysql_query($query_use, $emirate) or die(mysql_error());
$row_use = mysql_fetch_assoc($use);
$totalRows_use = mysql_num_rows($use);
}

if (isset($_GET['adsid'])) {
    $usep = $_GET['adsid'];
    
    mysql_select_db($database_emirate, $emirate);
$query_use = "SELECT * FROM uploads where adsid ='$usep'";
$use = mysql_query($query_use, $emirate) or die(mysql_error());
$row_use = mysql_fetch_assoc($use);
$totalRows_use = mysql_num_rows($use);
}

 if (isset($_GET['inboxid'])) {
    
$code = $_GET['inboxid'];


mysql_select_db($database_emirate, $emirate);
$query_trx = sprintf("SELECT * FROM conversation WHERE inboxid = '$code' ORDER BY inboxid DESC", GetSQLValueString($colname_trx, "int"));
$trx = mysql_query($query_trx, $emirate) or die(mysql_error());
$row_trx = mysql_fetch_assoc($trx);
$totalRows_trx = mysql_num_rows($trx);

mysql_select_db($database_emirate, $emirate);
$query_trxs = sprintf("SELECT * FROM inbox WHERE inboxid = '$code' ORDER BY inboxid DESC", GetSQLValueString($colname_trxs, "int"));
$trxs = mysql_query($query_trxs, $emirate) or die(mysql_error());
$row_trxs = mysql_fetch_assoc($trxs);
$totalRows_trxs = mysql_num_rows($trxs);
}
else
{
    $colname_trx = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_trx = $_SESSION['MM_Username'];
}
mysql_select_db($database_emirate, $emirate);
$query_trx = sprintf("SELECT * FROM `inbox` WHERE receiver = '$colname_trx' or sender = '$colname_trx' ORDER BY inboxid DESC", GetSQLValueString($colname_trx, "text"));
$trx = mysql_query($query_trx, $emirate) or die(mysql_error());
$row_trx = mysql_fetch_assoc($trx);
$totalRows_trx = mysql_num_rows($trx);


mysql_select_db($database_emirate, $emirate);
$query_trxd = sprintf("SELECT * FROM `conversation` WHERE receiver = '$colname_trxd' and status='new' ORDER BY inboxid DESC", GetSQLValueString($colname_trxd, "text"));
$trxd = mysql_query($query_trxd, $emirate) or die(mysql_error());
$row_trxd = mysql_fetch_assoc($trxd);
$totalRows_trxd = mysql_num_rows($trxd);
}

mysql_select_db($database_emirate, $emirate);
$query_tro = sprintf("SELECT * FROM countries order by name asc", GetSQLValueString($colname_tro, "int"));
$tro = mysql_query($query_tro, $emirate) or die(mysql_error());
$row_tro = mysql_fetch_assoc($tro);
$totalRows_tro = mysql_num_rows($tro);

mysql_select_db($database_emirate, $emirate);
$query_trop = sprintf("SELECT * FROM users where Access != 'admin'", GetSQLValueString($colname_trop, "int"));
$trop = mysql_query($query_trop, $emirate) or die(mysql_error());
$row_trop = mysql_fetch_assoc($trop);
$totalRows_trop = mysql_num_rows($trop);

mysql_select_db($database_emirate, $emirate);
$query_trops = sprintf("SELECT * FROM users where Access != 'admin' and bname != ''", GetSQLValueString($colname_trops, "int"));
$trops = mysql_query($query_trops, $emirate) or die(mysql_error());
$row_trops = mysql_fetch_assoc($trops);
$totalRows_trops = mysql_num_rows($trops);

$usem = $_GET['User_id'];
    
    mysql_select_db($database_emirate, $emirate);
$query_userx = "SELECT * FROM users where User_id ='$usem'";
$userx = mysql_query($query_userx, $emirate) or die(mysql_error());
$row_userx = mysql_fetch_assoc($userx);
$totalRows_userx = mysql_num_rows($userx);


    $colname_trq = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_trq = $_SESSION['MM_Username'];
}
mysql_select_db($database_emirate, $emirate);
$query_trq = sprintf("SELECT * FROM `properties` WHERE Username = '$colname_trq'  ORDER BY propertyid DESC", GetSQLValueString($colname_trq, "text"));
$trq = mysql_query($query_trq, $emirate) or die(mysql_error());
$row_trq = mysql_fetch_assoc($trq);
$totalRows_trq = mysql_num_rows($trq);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php
        if ($pagetype == 'dashboard'){?>
        
        Dashboard
        
         
         <?php } ?>
         <?php
        if ($pagetype == 'users'){?>
        
        All Users
        
         
         <?php } ?>
         <?php
        if ($pagetype == 'referrals'){?>
        
        All Users With Most Referrals
        
         
         <?php } ?>
         <?php
        if ($pagetype == 'payouts'){?>
        
        All Payouts
        
         
         <?php } ?>
         <?php
    if ($pagetype == 'transaction'){?>
    
    All Transactions
        
         
         <?php } ?>
        
         <?php
        if ($pagetype == 'verify'){?>
        
        Transaction Verification
        
         
         <?php } ?>
         <?php
        if ($pagetype == 'profile'){?>
        
        Update Profile
        
         
         <?php } ?>
         <?php
    if ($pagetype == 'proposal'){?>
    
    View proposal
        
         
         <?php } ?>
         <?php
        if ($pagetype == 'password'){?>
        
        Update Password
        
         
         <?php } ?>
         <?php
        if ($pagetype == 'bank'){?>
        
        Update Bank Details
        
         
         <?php } ?>
         
         <?php
        if ($pagetype == 'picture'){?>
        
        Update Picture
        
         
         <?php } ?>
         <?php
        if ($pagetype == 'package'){?>
        
        Choose Package
        
         
         <?php } ?>
           <?php
        if ($pagetype == 'myjobs'){?>
        
        My Jobs
        
         
         <?php } ?>
         <?php
    if ($pagetype == 'apply'){?>
    
    Apply Now
        
         
         <?php } ?>
         
           <?php
    if ($pagetype == 'alljobs'){?>
    
    All Jobs
        
         
         <?php } ?>
         <?php
    if ($pagetype == 'findjobs'){?>
    
    Find Jobs
        
         
         <?php } ?>
        
<?php
    if ($pagetype == 'updatejob'){?>Update Job
        
         
         <?php } ?>

           <?php
    if ($pagetype == 'clientjobs'){?>
    
    My Created Jobs
        
         
         <?php } ?>
         <?php
    if ($pagetype == 'viewmore'){?>
    
    View More
        
         
         <?php } ?>
           <?php
    if ($pagetype == 'addjob'){?>
    
    Add Job
        
         
         <?php } ?>
          
         
         
         / <?php echo $row_site['name']; ?></title>
        <meta name="description" content="<?php echo $row_site['name']; ?>">
        <meta name="author" content="<?php echo $row_site['name']; ?>">
        <meta name="keyword" content="<?php echo $row_site['name']; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
        
     <script>
       $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});</script>


        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/gen.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/wizard.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
               <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        
        
    </head>
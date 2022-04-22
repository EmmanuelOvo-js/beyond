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
$query_use = "SELECT * FROM users where Access='member' limit 4";
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

 mysql_select_db($database_emirate, $emirate);
$query_usez = "SELECT * FROM properties where adsid ='$usep' limit 4";
$usez = mysql_query($query_usez, $emirate) or die(mysql_error());
$row_usez = mysql_fetch_assoc($usez);
$totalRows_usez = mysql_num_rows($usez);
}

if (isset($_POST['search']) or isset($_POST['country'])) {
    $use = $_POST['search'];
       $usec = $_POST['country'];
    
    $where = "WHERE title != ''";


if(!empty($use)){
$where .= "and type ='$use'";
}

if(!empty($usec)){
//$where .= "and bcountry ='$usec'";
}
    
    mysql_select_db($database_emirate, $emirate);
$query_usep = "SELECT * FROM properties $where  ORDER BY propertyid DESC";
$usep = mysql_query($query_usep, $emirate) or die(mysql_error());
$row_usep = mysql_fetch_assoc($usep);
$totalRows_usep = mysql_num_rows($usep);
}
else
{
   mysql_select_db($database_emirate, $emirate);
$query_usep = "SELECT * FROM properties ORDER BY propertyid DESC";
$usep = mysql_query($query_usep, $emirate) or die(mysql_error());
$row_usep = mysql_fetch_assoc($usep);
$totalRows_usep = mysql_num_rows($usep); 
}

mysql_select_db($database_emirate, $emirate);
$query_used = "SELECT * FROM properties limit 4";
$used = mysql_query($query_used, $emirate) or die(mysql_error());
$row_used = mysql_fetch_assoc($used);
$totalRows_used = mysql_num_rows($used);

mysql_select_db($database_emirate, $emirate);
$query_trx = sprintf("SELECT * FROM countries order by name asc", GetSQLValueString($colname_trx, "int"));
$trx = mysql_query($query_trx, $emirate) or die(mysql_error());
$row_trx = mysql_fetch_assoc($trx);
$totalRows_trx = mysql_num_rows($trx);
?>
<?php
error_reporting(0);
// *** Validate request to login to this site.
if (!isset($_SESSION)) {

  session_start();
}
if (isset($_SESSION['MM_Username'])) {
    header('location:dashboard.php');
}
$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['Username'])) {
$loginUsername=$_POST['Username'];
  $password= md5($_POST['Password']);
  $MM_fldUserAuthorization = "Access";
  $MM_redirectLoginSuccess = "dashboard.php";
  $MM_redirectLoginFailed = '
          <strong>Oh snap!</strong> You have entered a wrong Email or password please try again.
          ';
  $MM_redirecttoReferrer = true;
  mysql_select_db($database_emirate, $emirate);
    
  $LoginRS__query=sprintf("SELECT Username, Password, Access FROM users WHERE Username=%s AND Password=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $emirate) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'Access');
    
    if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;       

    if (isset($_SESSION['PrevUrl']) && true) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];  
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
     // header("Location: ". $MM_redirectLoginFailed );
   $myerror =  $MM_redirectLoginFailed;
  }
}
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
        if ($pagetype == 'signin'){?>
        
        Signin
        
         
         <?php } ?>
<?php
        if ($pagetype == 'index'){?>
        
        Homepage
        
         
         <?php } ?>
         <?php
        if ($pagetype == 'signup'){?>
        
        Create Account
        
         
         <?php } ?> / <?php echo $row_site['name']; ?></title>
        <meta name="description" content="<?php echo $row_site['name']; ?>">
        <meta name="author" content="<?php echo $row_site['name']; ?>">
        <meta name="keyword" content="<?php echo $row_site['name']; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
              <link rel="stylesheet" href="assets/css/gen.css">
        
 
        
    </head>
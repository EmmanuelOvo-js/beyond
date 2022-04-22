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
//echo $ert = $_POST['Username'];
//echo $erts = $_POST['Password'];
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
  $password= $_POST['Password'];
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
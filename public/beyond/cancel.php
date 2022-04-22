
<?php require_once('Connections/emirate.php'); ?>
<?php


$colname_trx = "-1";
if (isset($_GET['transid'])) {
  $colname_trx = $_GET['transid'];
}
mysql_select_db($database_emirate, $emirate);
$query_trx = "SELECT * FROM transaction WHERE transid = '$colname_trx' ORDER BY transid DESC";
$trx = mysql_query($query_trx, $emirate) or die(mysql_error());
$row_trx = mysql_fetch_assoc($trx);
$totalRows_trx = mysql_num_rows($trx);
require_once('str/init.php');

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_live_LD5XHKGlYMb2mC3z91S5t0Od");
    

$sub = $row_trx['subid'];
$subscription = \Stripe\Subscription::retrieve($sub);
echo 'Subscription cancelled';

$servername = "localhost";
$username = $username_emirate;
$password = $password_emirate;
$dbname = $database_emirate;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


error_reporting(1);
 
 
 


  $sql = "UPDATE transaction
           SET subid = NULL
         WHERE  transid = '$colname_trx'";

if ($conn->query($sql) === TRUE) {
  
   
  
} else {
    echo "Error updating record: " . $conn->error;
}
$subscription->cancel();

echo'<meta http-equiv="refresh" content="3; url=transactions.php" />';

?>
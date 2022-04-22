<?php require_once('Connections/emirate.php'); ?>
<?php


$colname_trx = "-1";
if (isset($_GET['User_id'])) {
  $colname_trx = $_GET['User_id'];
}
mysql_select_db($database_emirate, $emirate);
$query_trx = "SELECT * FROM users WHERE User_id = '$colname_trx' ORDER BY User_id DESC";
$trx = mysql_query($query_trx, $emirate) or die(mysql_error());
$row_trx = mysql_fetch_assoc($trx);
$totalRows_trx = mysql_num_rows($trx);


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
 
 
 $order_id = $row_trx['User_id'];
 $access = $row_trx['bname'];


  $sql = "UPDATE users
           SET banned = 'yes'
         WHERE  User_id = '$order_id'";

            

if ($conn->query($sql) === TRUE) {
    echo '<h1>banned</h1>';
  
    
		echo'<meta http-equiv="refresh" content="2; url=allusers.php" />';
	
	

} else {
    echo "Error updating record: " . $conn->error;
}



?>
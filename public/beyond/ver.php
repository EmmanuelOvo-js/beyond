<?php require_once('Connections/emirate.php'); ?>
<?php
       
if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $checkdate = $_GET['checkdate'];
    $Username = $_GET['Username'];

  $servername = "localhost";
$username = $username_emirate;
$password = $password_emirate;
$dbname = $database_emirate;
// Create connection


$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = mysqli_query($conn, "SELECT * FROM verification WHERE  checkdate = '$checkdate' and Username='$Username' and code='$code'");
//$querys = mysqli_query($conn, "SELECT * FROM users WHERE number='$_POST[phone]'");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 if (mysqli_num_rows($query) == 0){
     echo 'Invalid link';
   // echo '<META HTTP-EQUIV="Refresh" Content="4; URL=verifyacct.php">';
}

else
{

//Checkconnection
if(mysqli_connect_errno())
{
echo"FailedtoconnecttoMySQL:".mysqli_connect_error();
}

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
 $usernamex =  $Username;

  $sql = "UPDATE users
           SET verifyemail = 'yes'
         WHERE  Username = '$usernamex'";
if ($conn->query($sql) === TRUE) {
    echo 'Email Confirmed Please wait while you are redirected';
  
    echo'<meta http-equiv="refresh" content="2; url=createprop.php" />';

} else {
    echo "Error updating record: " . $conn->error;
}

// code for verufy comes her
if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
} else {
    echo " " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
}
}
?>

<?php require_once('Connections/emirate.php');

?>

<?php
if( isset( $_POST['tee'] ) )
{

$msgid = $_POST['tee'];
$con=mysqli_connect("localhost",$username_emirate,$password_emirate,$database_emirate);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="SELECT * FROM conversation WHERE status ='new' and receiver = '$msgid' ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
}
?>

 






 <?php
include_once("db.php");

if(!empty($_FILES)){
$upload_dir = "uploads/";
$fileName = $_FILES['file']['name'];
$collect = $_POST['mine'];
$usern = $_POST['Username'];


 $newfilename = (rand(100000,1000000000)).$usern;
  $ext = pathinfo($fileName, PATHINFO_EXTENSION);
  $dot = '.';

if(move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$newfilename.$dot.$ext)){
  $er = $last_id - 1;
//insert file information into db table
$mysql_insert = "INSERT INTO uploads (`file`,adsid)VALUES('".'uploads/'.$newfilename.$dot.$ext."','".$collect."')";
mysqli_query($conn, $mysql_insert) or die("database error:". mysqli_error($conn));
}
}

?>

<?php

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = mysqli_query($conn, "SELECT * FROM properties WHERE adsid='$_POST[mine]'");
//$querys = mysqli_query($conn, "SELECT * FROM users WHERE number='$_POST[phone]'");
// Check connection


 if (mysqli_num_rows($query) > 0){
    // echo ' Email Address Has Been Used!! 
     //      Please wait while you are been redirected!!';
   // echo '<META HTTP-EQUIV="Refresh" Content="2; URL=index.php">';
}

else
{

$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];
$usern = $_POST['Username'];
$collect = $_POST['mine'];
$type = $_POST['type'];
$mode = $_POST['mode'];
$room = $_POST['room'];
$toilet = $_POST['toilet'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$area = $_POST['area'];
$garage = $_POST['garage'];

$sqld = "INSERT INTO properties (garage,lat,lng,room,toilet,area,type,mode,title,price,description,adsid,Username)
VALUES ('$garage','$lat','$lng','$room','$toilet','$area','$type','$mode','$title','$price','$description','$collect','$usern')";

if (mysqli_query($conn, $sqld)) {
  

} else {
   
}

}


?>
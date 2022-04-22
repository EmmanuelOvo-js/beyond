<?php
include_once("db.php");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sqlz = "INSERT INTO coder (Username)
VALUES ('ytt')";

if (mysqli_query($conn, $sqlz)) {
    $last_id = mysqli_insert_id($conn);
   
//    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
   
}
?>
<?php

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];

$sqld = "INSERT INTO advert (title,price,description,adsid)
VALUES ('$title','$price','$description','$last_id')";

if (mysqli_query($conn, $sqld)) {
   // $last_id = mysqli_insert_id($conn);
//    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
   
}




?>

<?php }?>
      <?php if (isset($_POST['title'])){?>
<?php
echo '<br /><br /><br /><div align="center"><h2>Business Advert Created</h2></div><br /><br /><br /><br /><br /><br />';

?>

<?php }?>
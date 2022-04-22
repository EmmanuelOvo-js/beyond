<?php require_once('Connections/emirate.php'); ?>
<?php
$db = new mysqli('localhost', $username_emirate,$password_emirate,$database_emirate);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
<?php require_once('Connections/emirate.php'); ?>
<style>
    
    .chatimg {
  border: 3px solid #000;
  border-radius: 4px;
  padding: 5px;
  width: 40px;
  margin-right : 20px;
}
    
.imageclass{
margin:0;
width:80px;
display:inline-block;

}
.messagecontainer{
background:white;
border-top:.5px solid  #E0E0E0;
}
.chatimg{
margin-top:18px;
width:50px;
height:50px;
border:none;
border-radius:50%;
object-fit:cover;
}
.messagebox{
padding:0px 20px;
vertical-align:top;
margin:0;
width:80%;
display:inline-block;

}
.time{

text-align:right;
font-weight:600;
}
.Name{
text-align:left;
font-weight:600;
}
.messages{
   text-align:left; 
    word-wrap: break-word;
}
</style>
<?php


function time_elapsed_string($date) {
     $timestamp = strtotime($date);	
	   
	   $strTime = array("second", "minute", "hour", "day", "month", "year");
	   $length = array("60","60","24","30","12","10");

	   $currentTime = time();
	   if($currentTime >= $timestamp) {
			$diff     = time()- $timestamp;
			for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
			$diff = $diff / $length[$i];
			}

			$diff = round($diff);
			return $diff . " " . $strTime[$i] . "(s) ago ";
	   }
}
?>
<?php
//error_reporting(0);
if( isset( $_POST['msgid'] ) )
{

$msgid = $_POST['msgid'];

$host = 'localhost';
$user = $username_emirate;
$pass = $password_emirate;

mysql_connect($host, $user, $pass);

mysql_select_db($database_emirate);

$selectdata = "SELECT sender,message,title FROM inbox where inboxid ='$msgid'";

$query = mysql_query($selectdata);

while($row = mysql_fetch_array($query))
{
 echo "<span style='font-weight :bold;font-size : 24px;color : green'>";
 echo "Title : ";
 
 echo "".$row['title']."<br /><br />";
 echo "</span>";
}

}
?>





<?php

if( isset( $_POST['msgid'] ) )
{

$msgid = $_POST['msgid'];

$host = 'localhost';
$user = $username_emirate;
$pass = $password_emirate;

mysql_connect($host, $user, $pass);

mysql_select_db($database_emirate);

$selectdata = "SELECT name,message,date,sender FROM conversation where inboxid='$msgid'";

$query = mysql_query($selectdata);

while($row = mysql_fetch_array($query))
{
    $class = $row['type'];
     $sende = $row['sender'];
     
     
    
    date_default_timezone_set('GMT');

//set an date and time to work with
$start = $row['date'];

//display the converted time

    
           // start of paragraph
        echo "<div class='messagecontainer'>";
        // show image for freelancer
         echo"<div class='imageclass'><img class='chatimg' src='";
$img = $sende;
        $sql = "select * FROM users where Username = '$img'";
$result = mysql_query($sql);
while ($rows = mysql_fetch_assoc($result)) {
    $pice = $rows['picture'];
    
     // if freelancer has not uploaded image show this
    if (empty($pice))
    {
        echo'https://freelancer.africa/f/nopicture.jpg';
        
    }
    
     // if uploaded show image for freelancer
    else {
        
        echo $pice;
    }
  }

 
 echo "' /></div>";
 // end of image tag
 
 
 //beginning of name and message for member
 echo "<div class='messagebox'> <p class='Name'>";
 echo "".$row['name'];
 
 echo ' : ';
 echo "</p><p class='messages'>";

 $string = $row['message'];
$badwords = array('email','.com','dot','digitz','digits','phone','skype','yahoo','facebook','plus','number','linkendin','@');
$banstring = ($string != str_ireplace($badwords,"XX",$string))? true: false;
if ($banstring) {
    echo 'Contains prohibited words';
} else {
    echo $row['message'];
}
 
 echo"</p>";
 
// echo "<p class ='time'>";

 
 //echo date('H:i A',strtotime('+6 hour',strtotime($start)));
 echo "  </div></div>";
    }
}






?>

<?php
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
 
 
$msgid = $_POST['msgid'];
$senf = $_POST['sender'];


  $sql = "UPDATE conversation
           SET status = 'checked'
         WHERE  inboxid = '$msgid' and receiver='$senf'";



if ($conn->query($sql) === TRUE) {
    echo '';
    
    
  
   // echo'<meta http-equiv="refresh" content="0; url=clientjobs.php" />';
   // echo'<meta http-equiv="refresh" content="2; url=updatejob.php?jobid='.$jobid.'" />';

} else {
    echo "Error updating record: " . $conn->error;
}


?>



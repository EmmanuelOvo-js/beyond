<?php require_once('Connections/emirate.php'); ?>
<?php

// Retrieve the request's body and parse it as JSON:
$input = @file_get_contents('php://input');
//$nig = json_decode($input);
;

$json_object = json_decode($input,true); // set 2nd param to true, output an array of arrays - look it up
//var_dump($json_object);


//print_r($json_object['data']['object']['plan']['interval']);

echo $cust = print_r($json_object['data']['object']['customer'],true);


require_once('str/init.php');

// live details goes here
\Stripe\Stripe::setApiKey("sk_test_7xPc6BOUno1LZ8HHqCToPH8K");

// dont forget to include $cust variable wen goin live
// $ty = \Stripe\Customer::retrieve('cus_FEXg4mGcxIv9Kz');

//when ready
 //$ty = \Stripe\Customer::retrieve($cust);
$ema = print_r($ty->email, true);
echo $ema;




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

$expiry = date("Y-m-d" , strtotime('+1 month'));

         $sql = "UPDATE users
           SET expiry = '$expiry'
         WHERE  Username = '$ema'";
     
     
     

if ($conn->query($sql) === TRUE) {
    echo '';
  
    //echo'<meta http-equiv="refresh" content="3; url=createad.php" />';
   // echo'<meta http-equiv="refresh" content="2; url=updatejob.php?jobid='.$jobid.'" />';

} else {
    echo "Error updating record: " . $conn->error;
}






  $reply = $ema;



    $replysubject = "Payment made: support | Business Africa";
    $replyfrom = "From: info@freelancer.africa\r\n";
     $replymessagess .= "Package renewed.\r\n\r\n";
   
  
   $replymessagess .= "\r\n";
    
      $replymessagess .= $alo;
  
     $replymessagess .= "Please login to continue.\r\n\r\n";
    $replymessagess .= "http://www.business.freelancer.africa\r\n\r\n";
    $replymessagess .= "This e-mail is automated, so please do not reply.\r\n";
     $replymessagess .= "Regards.\r\n";
  mail($reply,$replysubject, $replymessagess, $replyfrom);

// Return a response to acknowledge receipt of the event
http_response_code(200); // PHP 5.4 or greater


?>
<?php require_once('Connections/emirate.php'); ?>
<?php
require_once('str/init.php');
 
if(!empty($_POST['token'])) {
    $token = $_POST['token'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
     $ord = $_POST['ord'];
     

//"secret_key"      => 'sk_live_LD5XHKGlYMb2mC3z91S5t0Od',
     //   "publishable_key" => 'pk_live_lLW1ubN4VHbV372tJgI6AENU'
 
    //set api key
    $stripe = array(
        "secret_key"      => 'sk_test_7xPc6BOUno1LZ8HHqCToPH8K',
        "publishable_key" => 'pk_test_CPX60gfMJbwhPhLXPvszFoNH'
    );
 
    \Stripe\Stripe::setApiKey($stripe['secret_key']);
 
    //Add customer to stripe
    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source'  => $token
    ));
 
    //item meta
    $item_name = $act;
    $item_price = $amount * 100;
    $currency = "usd";
    $order_id = $ord;
 
    //charge a credit or a debit card
    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount'   => $item_price,
        'currency' => $currency,
        'description' => $item_name,
        'metadata' => array(
            'order_id' => $order_id
        )
    ));
 
    //retrieve charge details
    $chargeResponse = $charge->jsonSerialize();
    
    $txn_id = $chargeResponse['latest_invoice'];
    $sub = $chargeResponse['id'];
     $customer = $chargeResponse['customer'];
 
    //if charge is successful
    if($chargeResponse['paid'] == 1 && $chargeResponse['captured'] == 1) {
 
        //save txn_id in the database here
        $txn_id = $chargeResponse['balance_transaction'];
    echo 'Transaction successful';

    mysql_select_db($database_emirate, $emirate);
$query_trxs = "SELECT * FROM transaction WHERE transid = '$order_id' ORDER BY transid DESC";
$trxs = mysql_query($query_trxs, $emirate) or die(mysql_error());
$row_trxs = mysql_fetch_assoc($trxs);
$totalRows_trxs = mysql_num_rows($trxs);


// collecting data from recordset for the reason of purpose
$posx = $_POST['amount'];
$purp = $row_trxs['purpose'];
$purps = $row_trxs['receiver'];
$sende = $row_trxs['sender'];
$pack = $row_trxs['package'];
$featured = $row_trxs['featured'];
$entries = $row_trxs['entries'];

$agr = $posx; 



 if ($purp =='Buy Package')
 {
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
           SET txnid = '$txn_id', status = 'paid', merchant ='stripe',invoiceid = '$txn_id',subid ='$sub',customerid ='$customer'
         WHERE  transid = '$order_id'";

        
     
     
     

if ($conn->query($sql) === TRUE) {
    echo '';
  
    echo'<meta http-equiv="refresh" content="3; url=transactions.php" />';
   // echo'<meta http-equiv="refresh" content="2; url=updatejob.php?jobid='.$jobid.'" />';

} else {
    echo "Error updating record: " . $conn->error;
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

$expiry = date("Y-m-d" , strtotime('+1 month'));

         $sql = "UPDATE users
           SET package = '$pack',expiry = '$expiry',invoiceid = '$txn_id',subid ='$sub',customerid ='$customer'
         WHERE  Username = '$email'";
     
     
     

if ($conn->query($sql) === TRUE) {
    echo '';
  
    //echo'<meta http-equiv="refresh" content="3; url=createad.php" />';
   // echo'<meta http-equiv="refresh" content="2; url=updatejob.php?jobid='.$jobid.'" />';

} else {
    echo "Error updating record: " . $conn->error;
}



}

 
$whitelist = array(
    '127.0.0.1',
    '::1'
);

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
 // echo 'loclahost';
    // not valid

  $reply = $sende;



    $replysubject = "Payment made: support | Business Africa";
    $replyfrom = "From: info@freelancer.africa\r\n";
     $replymessagess .= "You have just purchased a new package.\r\n\r\n";
   
  
   $replymessagess .= "\r\n";
    
      
  
     $replymessagess .= "Please login to continue.\r\n\r\n";
    $replymessagess .= "http://www.business.freelancer.africa\r\n\r\n";
    $replymessagess .= "This e-mail is automated, so please do not reply.\r\n";
     $replymessagess .= "Regards.\r\n";
  mail($reply,$replysubject, $replymessagess, $replyfrom);
  

//end of payment freelancer


    }


    //else {
     //   echo'failed';
    //}
        
        

// end of successful charge
}
}
?>
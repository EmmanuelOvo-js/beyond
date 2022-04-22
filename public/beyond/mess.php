<?php require_once('Connections/emirate.php'); ?>

<?php
 
 
    //Connection to MySQL
    $con = mysqli_connect('localhost', $username_emirate, $password_emirate);
 
    if(!$con) {
        die('Not Connected To Server');
    }
 
    //Connection to database
    if(!mysqli_select_db($con, $database_emirate)) {
        echo 'Database Not Selected';
    }
 
    //Create variables
    $name = $_POST['name'];
    $sender = $_POST['sender'];
    $title = $_POST['title'];
    $code = $_POST['msgid'];
    $receiver = $_POST['receiver'];
    $message = mysqli_real_escape_string($con, $_POST['message']);
  
    
    $sql = "INSERT INTO conversation (status,sender,receiver,message,name,inboxid) VALUES ('new','$sender','$receiver','$message','$name','$code')";
 
    echo 'Message Sent';
    
     $last_id = mysqli_insert_id($con);
    
    if (mysqli_query($con, $sql)) {
    
   
        $reply = $_POST['receiver'];



    $replysubject = "New Business Request | Freelancer Africa";
    $replyfrom = "From: info@freelancer.africa\r\n";
     $replymessagess .= "You have just received a new inbox message, please login to read.\r\n\r\n";
   
  
   //$replymessagess .= "\r\n";
   
   //$replymessagess .= "Fullname : ";
   
   
   //$replymessagess .= $_POST['name'];
    
    //  $replymessagess .= "\r\n";
      
      //$replymessagess .= "Email : ";
   
   
   //$replymessagess .= $_POST['p-email'];
  // $replymessagess .= "\r\n";$replymessagess .= "\r\n";
      
     // $replymessagess .= "message : ";
   
   
   //$replymessagess .= $_POST['message'];
    
    //  $replymessagess .= "\r\n";
     // $replymessagess .= "\r\n";
  
     //$replymessagess .= "Please login to continue.\r\n\r\n";
    $replymessagess .= "http://business.freelancer.africa\r\n\r\n";
    $replymessagess .= "This e-mail is automated, so please do not reply.\r\n";
     $replymessagess .= "Regards.\r\n";
  mail($reply,$replysubject, $replymessagess, $replyfrom);  
 
 
        
   }
 
    //Close connection
    mysqli_close($con);
 
?>
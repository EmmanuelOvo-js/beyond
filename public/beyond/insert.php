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
    $sender = $_POST['p-email'];
    $title = $_POST['title'];
    $receiver = $_POST['email'];
    $message = mysqli_real_escape_string($con, $_POST['message']);
  
    
    $sql = "INSERT INTO inbox (status,sender,receiver,message,title) VALUES ('new','$sender','$receiver','$message','$title')";
 
    echo 'Message Sent';
    
     $last_id = mysqli_insert_id($con);
    
    if (mysqli_query($con, $sql)) {
    $last_id = mysqli_insert_id($con);
    $sql2 = "INSERT INTO conversation (name,status,sender,receiver,message,title,inboxid) VALUES ('$name','new','$sender','$receiver','$message','$title','$last_id')";
    if(!mysqli_query($con, $sql2)) {
        //echo 'Could not insert';
    }
        $reply = $_POST['email'];



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
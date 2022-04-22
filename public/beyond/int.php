<?php require_once('Connections/emirate.php'); ?>

<?php
 
 $fname = $_POST['fname'];
 $title = $_POST['subject'];
 $email = $_POST['email'];
  $lname = $_POST['lname'];
  $spa = ' ';
   $message = $_POST['message'];
 
    //
        $reply = 'wolexx007@gmail.com';



    $replysubject = "New Contact message | Freelancer Africa";
    $replyfrom = "From: info@freelancer.africa\r\n";
     $replymessagess .= "You have just received a new contact message, details are below.\r\n\r\n";
     $replymessagess .= "\r\n";
   
   $replymessagess .= "Subject : ";
   
   
   $replymessagess .= $title;
   
  
   $replymessagess .= "\r\n";
   
   $replymessagess .= "Fullname : ";
   
   
   $replymessagess .= $fname.$spa.$lname;
    
      $replymessagess .= "\r\n";
      
      $replymessagess .= "Email : ";
   
   
   $replymessagess .= $email;
   $replymessagess .= "\r\n";$replymessagess .= "\r\n";
      
      $replymessagess .= "message : ";
   
   
   $replymessagess .= $message;
    
      $replymessagess .= "\r\n";
     $replymessagess .= "\r\n";
  
     $replymessagess .= "Please login to continue.\r\n\r\n";
    $replymessagess .= "http://business.freelancer.africa\r\n\r\n";
    $replymessagess .= "This e-mail is automated, so please do not reply.\r\n";
     $replymessagess .= "Regards.\r\n";
  mail($reply,$replysubject, $replymessagess, $replyfrom);  
 
 
         echo 'Message Sent';
   
 

 
?>
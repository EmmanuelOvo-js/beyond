<?php
             

if (isset($_POST['email']))
{
    $servername = "localhost";
$username = $username_emirate;
$password = $password_emirate;
$dbname = $database_emirate;
// Create connection


$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = mysqli_query($conn, "SELECT * FROM users WHERE Email='$_POST[email]'");
//$querys = mysqli_query($conn, "SELECT * FROM users WHERE number='$_POST[phone]'");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 if (mysqli_num_rows($query) > 0){
     echo ' Email Address Has Been Used!! 
           Please wait while you are been redirected!!';
    echo '<META HTTP-EQUIV="Refresh" Content="2; URL=index.php">';
}

else
{


//Checkconnection
if(mysqli_connect_errno())
{
echo"FailedtoconnecttoMySQL:".mysqli_connect_error();
}

$era = $_POST['email'];
$pass = md5($_POST['password']);
$pack = $_POST['package'] ;
//if ($pack == 'free')
//{
//$sql="INSERT INTO users(package,first,expiry,country,entries,featured,amount,ratings,refid,reffered,Date,Access,Username,Email,Password,fname,lname,number)VALUES('free','yes','$_POST[expiry]','$_POST[country]','0','0','0','0','$_POST[refid]','$_POST[reffered]','$_POST[dates]','member','$_POST[email]','$_POST[email]','$pass','$_POST[fname]','$_POST[lname]','$_POST[phone]')";

//}
//else if ($pack == 'premium')
//{
  //  $sql="INSERT INTO users(package,first,expiry,country,entries,featured,amount,ratings,refid,reffered,Date,Access,Username,Email,Password,fname,lname,number)VALUES('premium','yes','$_POST[expiry2]','$_POST[country]','0','0','0','0','$_POST[refid]','$_POST[reffered]','$_POST[dates]','member','$_POST[email]','$_POST[email]','$pass','$_POST[fname]','$_POST[lname]','$_POST[phone]')";

//}
//else
//{
    $sql="INSERT INTO users(type,package,first,expiry,country,refid,reffered,Date,Access,Username,Email,Password,fname,lname,number)VALUES('$_POST[type]','free','yes','$_POST[expiry]','$_POST[country]','$_POST[refid]','$_POST[reffered]','$_POST[dates]','member','$_POST[email]','$_POST[email]','$pass','$_POST[fname]','$_POST[lname]','$_POST[phone]')";

//}


if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



$sql1="INSERT INTO verification(checkdate,Username,code)VALUES('$_POST[dates]','$_POST[email]','$_POST[code]')";




if (mysqli_query($conn, $sql1)) {
    //echo "New record created successfully";
} else {
    echo " " . $sql1 . "<br>" . mysqli_error($conn);
}




// handling notifications
// handling notifications
$whitelist = array(
    '127.0.0.1',
    '::1'
);

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
 // echo 'loclahost';
    // not valid

$emailContent = 'xxxxxxxxxx';
$emailSubject = 'Verify Account';
//$code = $_POST['code'];
//$Username = $_POST['email'];
//$checkdate = $_POST['dates'];
$dates = $_POST['dates'];
$email = $_POST['email'];
$code = $_POST['code'];

$headers = "From: info@propertysite.com";
$headers .= "MIME-Version: PRO\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $body = '<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to Property Site - Activate Your Account
</title>
    <style>
   .logo{
   text-align:center;
   padding :20px;
    padding-bottom :10px;
border-bottom:1px solid #E0E0E0!important;
   }
        
        .air-card{
            color: black!important;
        }
   body{
   background:#f9f9f9 !important
   }
   .Mailcontainer{
   width:600px;
   margin: 10px auto;
   background:white!important;
   }
   .textcontainer{
   padding:20px;
       color: black!important;
   }
  .mailheader{
   background:#2b2522;
   color:white!important;
   padding:10px;
   }
   .air-card.header {
    border-radius: 0;
    text-align: left;
    padding: 10px;
    text-transform: capitalize;
    border-bottom: 1px solid #E0E0E0;
    margin-bottom: 0;
}
.projects {
    border: 1px solid #E0E0E0;
    border-radius: 5px;
    background: white!important;
    box-shadow: 0 0.07143rem 0.42857rem 0 rgba(0,0,0,.1);
}
.projectdetails{
padding:15px;
    color:black!important;
}
.brieftag {
    display: inline-block;
    padding: 10px 25px;
    background-color: rgba(43, 37, 34, 0.4);
    margin-right: 10px;
    border-radius: 5px;
    font-size: 18px;
    font-weight: 600;
    color: white!important;
}
.btntype {
    padding: 12px 30px;
    text-decoration:none;
    background-color: #04CCD3;
    margin-right: 10px;
    border-radius: 5px;
    font-size: 18px;
    font-weight: 600;
    border: 1px solid #04CCD3;
    display: inline-block;
    color: white!important;
    cursor: pointer;
}
        
    @media (max-width: 475px){
   .Mailcontainer{
   width:90%;
   margin: 10px auto;
   background:white !important;
   }
        .logo-img{
            width: 180px!important;
        }
   }
        
    </style>
</head>
    
    
    <!--html-->
    
<body>
 <div class="Mailcontainer">   
    <div class="logo">
    <img class="logo-img" src="https://buygrowexit.com/assets/img/log.png" alt="logo" width="250px">
        </div>
    
 <div class="textcontainer">
    <h3>Welcome, ' . strip_tags($_POST['fname']) . ' </h3>
     <div> 
      <div class="projects">
      <p class="air-card header">You have successfully created a Property site account. Please click on the Button below to verify your email address and complete your registration.

</p>
      
      <p class="projectdetails">
    

<a class="btntype" target="blank" href="https://buygrowexit.com/property/ver.php?code='.$code.'&Username='.$email.'&checkdate='.$dates.'">Activate Account</a>
       </p><p>
      </p>
      </div>       
    </div>
     <p>
Kind Regards<br> Property Team</p>
    </div>
 </div>
</body>
</html>';
        



  // optionally modify body here...?
  $emailBody = $body .= ''; // or whatever you're trying to do here...
  $email = $_POST['email'];
  //echo $row['Email'];

  // send email to each individual person
  mail($email, $emailSubject, $emailBody, $headers);


   

}

echo '<br /><br />
<div align="center"><strong>Successfully Created Account,please wait while you are redirected!! </strong> Do not refresh the page</div>';
//echo '<META HTTP-EQUIV="Refresh" Content="2; URL=index.php">';


mysqli_close($conn);
}
}
?>
     <?php
    
$servername = "localhost";
$username = $username_emirate;
$password = $password_emirate;
$dbname = $database_emirate;


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$ourname = 'nullx';

//$ournames = $row_users['status'];
        //if ($ournames == 'unused')
    //{
    //$last_id = $row_users['id'];
    //}
//else{

$sqlz = "INSERT INTO coder (Username)
VALUES ('$ourname')";

if (mysqli_query($conn, $sqlz)) {
    $last_id = mysqli_insert_id($conn);
//    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
   
}
?>

 
    
    
    <script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>
  

      
        
  
 

        <!-- register-area -->
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-12">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                           <?php
			 

if (isset($_POST['email']))
{?>
 <?php
 if (mysqli_query($conn, $sql1)) {?>
 
  <script type="text/javascript">

function formAutoSubmit () {

var frm = document.getElementById("myForm");

frm.submit();

}

window.onload = formAutoSubmit;

</script>

<form ACTION="tes.php" method="POST" id="myForm" name="myForm">
    <p>
        <input type="text" name="Username" value="<?php echo $era; ?>" />
    </p>
    <p>
        <input type="text" name="Password" value="<?php echo $pass; ?>" />
        <input type="hidden" name="url" value="<?php echo $_SERVER["HTTP_REFERER"]; ?>" />
    </p>
</form>
 <?php }?> <?php }?>
                           <?php

if (!isset($_POST['email'])){?> <h2>New account : </h2> 
                            
                            <form class="formcontainer" method="post" action="signup.php" name="signup" id="signup">
                                <input type="hidden" name="refid" value="<?php
$i = $last_id;
printf("%05d",$i);
?>"  />
<input type="hidden" name="code" value="<?php
$i = $last_id;
printf("%05d",$i);
?><?php
echo(rand(1000000,100000000));
?>"  />
<input type="hidden" value="<?php
 echo $row_ref['Username'];
 
 
  ?>" name="reffered" />
  <input type="hidden" value="<?php
//date_default_timezone_set("Africa/Lagos");
echo  date("Y-m-d");
?>" name="dates" />
<input type="hidden" value="<?php
//date_default_timezone_set("Africa/Lagos");
echo  date("Y-m-d" , strtotime('+15 days'));
?>" name="expiry" />
<input type="hidden" value="<?php
//date_default_timezone_set("Africa/Lagos");
echo  date("Y-m-d");
?>" name="expiry2" />
<input type="hidden" name="package" value="<?php
if (isset($_GET['plan'])) {
    echo $_GET['plan'];
}
?>" />
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    
                                    <input required="required" type="text" class="form-control" id="p-signup-first-name" name="fname" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    
                                    <input required="required" type="text" class="form-control" id="p-signup-last-name" name="lname" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input required="required" type="email" class="form-control" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input required=""  type="password" class="form-control" id="password" name="password"  placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="password">Confirm Password</label>
                                    <input required=""  type="password" class="form-control" id="confirm_password" name="passwordss" oninput="check(this)" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label for="password">Account Type</label>
                                    <select class="form-control" required name="type">
         <option value="">Select Type</option>     
   <option value="agency">Agency</option>
      <option value="personal">Personal Use</option>

    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="password">Country</label>
                                    <select class="form-control" required name="country">
         <option value="">Select Country</option>     
   <?php do

      { ?> <option value="<?php echo $row_trx['name']; ?>"><?php echo $row_trx['name']; ?></option>
    <?php } while ($row_trx = mysql_fetch_assoc($trx)); ?>
    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">Register</button>
                                </div>
                            </form>
                            <?php }?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    
                </div>

            </div>
        </div>      

        
       
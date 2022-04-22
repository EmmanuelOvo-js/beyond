

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Hello : <span class="orange strong"><?php echo $row_user['fname'];?></span></h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header --> 

        <!-- property area -->
        <div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   
                <div class="row">
                 

                       
                            <div class="profiel-header">
                                 <?php
             

if (isset($_POST['fname']))
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
 $usernamex =  $_POST['usern'];
 $fname =  $_POST['fname'];
 $lname =  $_POST['lname'];
 $number =  $_POST['number'];
 $postal =  $_POST['postal'];
$city =  $_POST['city'];
$state =  $_POST['state'];
$country =  $_POST['country'];
$business =  $_POST['bname'];
$access =  $_POST['access'];
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $biography = mysqli_real_escape_string($conn, $_POST['biography']);
 

  //$sql = "UPDATE users
         //  SET business  = '$business',country  = '$country',jobtype = '$jobtype',about = '$about', fname = '$fname', lname = '$lname',number = '$number',hour = '$hour',title ='$ders',allow ='$allow'
        // WHERE  Username = '$usernamex'";

  $sql = "UPDATE users
           SET Access  = '$access',bname  = '$business', fname = '$fname', lname = '$lname',number = '$number',postal = '$postal',city = '$city',
           state = '$state',country = '$country',address = '$address',biography = '$biography'
         WHERE  Username = '$usernamex'";
         
         
         

if ($conn->query($sql) === TRUE) {
    echo '<strong>User</strong> Updated Please wait while you are redirected
    <br />';
    
        echo'<meta http-equiv="refresh" content="2; url=allusers.php" />';

} else {
    echo "Error updating record: " . $conn->error;
}
    
}


?>
<div class="col-sm-8 col-sm-offset-1">

</div>
 
                                 <?php

if (!isset($_POST['fname'])){?>

<div align="center"><br /><br /><h2>Manage Details</h2> </div><br />
                            
                            <form class="formcontainer" method="post" action="manage.php" name="signup" id="signup">
                                 <div class="col-sm-5 col-sm-offset-1">
                                 
                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                                     <input type="hidden" class="form-control"  name="usern" value="<?php echo $row_userx['Username'];?>">
                                                     
                                                     
                                    <input required="required" type="text" class="form-control" id="p-signup-last-name" name="lname" value="<?php echo $row_userx['lname'];?>" placeholder="Last Name">
                                </div>
                                </div>
                                <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    
                                    <input required="required" type="text" class="form-control" id="p-signup-first-name" value="<?php echo $row_userx['fname'];?>" name="fname" placeholder="First Name">
                                </div></div>
                                <div class="col-sm-11 col-sm-offset-1">
                                
                                <div class="form-group">
                                    <label for="name">Business Name</label>
                                    
                                    <input required="required" type="text" class="form-control" id="p-signup-first-name" value="<?php echo $row_userx['bname'];?>" name="bname" placeholder="Business Name">
                                </div>
                                </div>
                                <div class="col-sm-11 col-sm-offset-1">
                                    <div class="form-group">
                                        <label for="email">Biography</label>
                        <textarea name="biography" class="form-control"  rows="10" cols="50" required><?php echo $row_userx['biography'];?></textarea>
                        </div> </div>
                                
                                <br /><br />
                                  <div class="col-sm-10 col-sm-offset-1">
                                <div class="form-group">
                                    <br /><br />
                                     <h5 style="font-weight : bold">Contact Details</h5>
                                    </div>
                                </div>
                                    
                                     
                               
                                  <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    
                                    <label for="name">Email</label>
                                    
                                    <input required="required" type="email" class="form-control" id="p-signup-last-name" name="email" value="<?php echo $row_userx['Email'];?>" readonly placeholder="Last Name">
                                </div></div>
                                
                                <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    <label for="email">Phone</label>
                                    <input required="required" type="number" class="form-control" name="number" placeholder="Phone Number" value="<?php echo $row_userx['number'];?>">
                                </div>
                                </div>
                                
                                 <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    
                                    <label for="name">Country</label>
                                    
                                    
                                    <select class="form-control" required name="country">
         <option value="">Select Country</option>     
   <?php do

      { ?> <option
      <?php
      if($row_userx['country'] == $row_tro['name'])
      {
        echo 'selected';  
      }
      ?>
      value="<?php echo $row_tro['name']; ?>"><?php echo $row_tro['name']; ?></option>
    <?php } while ($row_tro = mysql_fetch_assoc($tro)); ?>
    </select>
                                </div></div>
                                
                                <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    <label for="email">State</label>
                                    <input required="required" type="text" class="form-control" name="state" placeholder="State" value="<?php echo $row_userx['state'];?>">
                                </div>
                                </div>
                                 <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    
                                    <label for="name">Your City</label>
                                    
                                    <input required="required" type="text" class="form-control" id="p-signup-last-name" name="city" value="<?php echo $row_userx['city'];?>" placeholder="City">
                                </div></div>
                                
                                <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    <label for="email">Postal Code</label>
                                    <input required="required" type="text" class="form-control" name="postal" placeholder="Postal Code" value="<?php echo $row_userx['postal'];?>">
                                </div>
                                </div>
                                <div class="col-sm-11 col-sm-offset-1">
                                <div class="form-group">
                                    
                                    <label for="name">Access Level</label>
                                    
                                    
                                    <select class="form-control" required name="access">
         <option value="">Select</option>     
    <option
      <?php
      if($row_userx['Access'] == 'admin')
      {
        echo 'selected';  
      }
      ?>
      value="admin">Admin</option>
        <option
      <?php
      if($row_userx['Access'] == 'member')
      {
        echo 'selected';  
      }
      ?>
      value="member">Member</option>

    </select>
                                </div></div>
       
                                <div class="col-sm-11 col-sm-offset-1">
                                    <div class="form-group">
                                        <label for="email">Address</label>
                        <textarea name="address" class="form-control"  rows="10" cols="50" required><?php echo $row_userx['address'];?></textarea>
                        </div> </div>
                                <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Update Profile</button>
                                </div></div>
                            </form>
                            <?php }?>
                            </div>

                            <div class="clear">


                
            </div><!-- end row -->

        </div>
    </div>

  
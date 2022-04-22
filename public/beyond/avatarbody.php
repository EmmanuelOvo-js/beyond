

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
                    <div class="col-sm-10 col-sm-offset-1 profiel-container">

                       
                            <div class="profiel-header">
                              <?php
             

if (isset($_POST['uppic']))
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
$allowed =  array('png','jpg','jpeg','gif','JPEG');

$filename = $_FILES['picture']['name'];

$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$allowed) ) {
    echo '<strong>Oh snap!</strong> Invalid file format, Gif,Png,Jpg only
    ';
}
//error_reporting(0);



else
{
$random1 = substr(number_format(time() * rand(),0,'',''),0,10);

 $target = "uploads/";  $target = $target .$random1.basename( $_FILES['picture']['name']);
     
             $pic="uploads/".$random1.$_FILES['picture']['name'];
             
             
             $usernamex =  $row_user['Username'];
    



if(move_uploaded_file($_FILES['picture']['tmp_name'], $target)) 
          
   
{

    //echo $proid;
    //echo $pic;

  $sql = "UPDATE users
           SET picture = '$pic'
         WHERE  Username = '$usernamex'";
         
         
         

if ($conn->query($sql) === TRUE) {
    echo '
          <strong>Picture</strong> Updated Please wait while you are redirected
    
    <br />';
    
        echo'<meta http-equiv="refresh" content="3; url=avatar.php" />';

} else {
    echo "Error updating record: " . $conn->error;
}
}

             
             ///end of upload

}
}
?>
<?php

if (!empty($row_user['picture'])){?>
<div align="center">
    
<img src="<?php echo $row_user['picture']; ?>" width="150px">

</div>

    <?php }?>

    <?php

if (empty($row_user['picture'])){?>
<div align="center">

    <img src="noimage.jpg" width="150px">
    


</div>

    <?php }?>
 
                                 <?php

if (!isset($_POST['uppic'])){?> <h2>Update Picture : </h2> 
                            
                            <form ACTION="avatar.php" enctype="multipart/form-data" METHOD="POST" name="updatepic" id="updatepic">
                                
                                <div class="form-group">
                                    <label for="name">Picture</label>
                                    
                                      <input type="hidden" name="uppic" value="te" />
          <input required type="file" class="form-control" id="cv-attachment" name="picture">
                                </div>
                               
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">Update Picture</button>
                                </div>
                            </form>
                            <?php }?>
                            </div>

                            <div class="clear">


                </div>
            </div><!-- end row -->

        </div>
    </div>

  
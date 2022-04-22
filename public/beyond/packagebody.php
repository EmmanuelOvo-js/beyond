
<style>
    
    * {
  box-sizing: border-box;
}

/* Create three columns of equal width */
.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

/* Style the list */
.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

/* Add shadows on hover */
.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

/* Pricing header */
.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}
.price .header1 {
  background-color: red;
  color: white;
  font-size: 25px;
}
.price .header2 {
  background-color: purple;
  color: white;
  font-size: 25px;
}
.price .header3 {
  background-color: blue;
  color: white;
  font-size: 25px;
}

/* List items */
.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

/* Grey list item */
.price .grey {
  background-color: #eee;
  font-size: 20px;
}

/* The "Sign Up" button */
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

/* Change the width of the three columns to 100% 
(to stack horizontally on small screens) */
@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
    
</style>
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
               

                       
                            <div class="profiel-header">
                                <h3>
                                  <?php
                                  include_once("db.php");
                                  // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
                                  if (isset($_POST['package'])){




$package = $_POST['package'];
$purpose = $_POST['purpose'];
$featured = $_POST['featured'];
$usern = $row_user['Username'];
$entries = $_POST['entries'];
//$amount = $_POST['amount'];

$sqld = "INSERT INTO transaction (status,amount,package,purpose,featured,entries,sender)
VALUES ('pending','500','$package','$purpose','$featured','$entries','$usern')";

if (mysqli_query($conn, $sqld)) {
    $last_id = mysqli_insert_id($conn);
   echo "please wait while you are redirected";
   echo'<meta http-equiv="refresh" content="2; url=stripe.php?transid='.$last_id.'" />';
} 
else {
        
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

$usern = $row_user['Username'];

  $sql = "UPDATE users
           SET package  = 'Premium', entries = entries + 2, featured = featured + 0
         WHERE  Username = '$usern'";
         
         
         

if ($conn->query($sql) === TRUE) {
   // echo '<strong>Please </strong>wait while you are redirected
    //<br />';
    
         echo'<meta http-equiv="refresh" content="2; url=stripe.php?transid='.$last_id.'" />';

} else {
    echo "Error updating record: " . $conn->error;
}
    

   


}
?>
                                </h3>
                                <hr>
                            </div>
<?php if (!isset($_POST['package'])){?>

<div class="columns">
  <ul class="price">
    <li class="header">Premium</li>
    <li class="grey">Permanent Listing</li>
    <li>Limited Buyer Access</li>
    <li>Limited Enquiries</li>
    
    <li>Renewed Automatically monthly Until Cancelled</li>
   
    <li>Limited Advert & Profile</li>
    <li class="grey">
        <form method="post" id="form1" action="package.php">
            <input type="hidden" name="package" value="Premium" />
            <input type="hidden" name="featured" value="0" />
            <input type="hidden" name="entries" value="2" />
             <input type="hidden" name="purpose" value="Buy Package" />
            <input type="hidden" name="sender" value="<?php echo $row_user['Username'];?>" />
            
        <button type="submit" class="button">Sign Up</button>
        </form></li>
  </ul>
</div>



<?php }?>
                
            
    </div>

  
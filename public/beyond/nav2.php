<?php require_once('Connections/emirate.php'); ?>
<?php echo "<link rel='stylesheet' type='text/css' href='general.css'>";?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


$colname_user = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_user = $_SESSION['MM_Username'];
}
mysql_select_db($database_emirate, $emirate);
$query_user = sprintf("SELECT * FROM users WHERE Username = %s", GetSQLValueString($colname_user, "text"));
$user = mysql_query($query_user, $emirate) or die(mysql_error());
$row_user = mysql_fetch_assoc($user);
$totalRows_user = mysql_num_rows($user);
?>
 <body>

        
        <!-- Body content -->
        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> +1 234 567 7890</span>
                                <span><i class="pe-7s-mail"></i> your@company.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img width="200px" src="assets/img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="dashboard.php">Dashboard</a></li>
                        <?php 
                        if ($row_user['Access'] != 'admin') { ?>

 <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="#">Transactions</a></li>
 
 <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="myprop.php">My properties</a></li>
 <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="inbox.php">Inbox (<span id="cash" style="color : red;font-weight : bold"></span>)</a></li>
                <?php }?>  
                <?php 
                        if ($row_user['Access'] == 'admin') { ?>

 <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="#">All Users</a></li>
 <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="#">All Listings</a></li>
 
                <?php }?>  
                       
                        <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="profile.php">Profile</a></li>
                        
                        <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="logout.php">Logout</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">


setInterval(lox, 1000);

function lox()
{

 var tee=document.getElementById( "tee" );

 
  
 if(tee)
 {
  $.ajax({
  type: 'post',
  url: 'inb.php',
  data: {
      tee:tee.value,
      
   
  },
 
  success: function (response) {
   // We get the element having id of display_info and put the response inside it
   $( '#cash' ).html(response);
 

  }
  });
 }
  
 else
 {
  $( '#cash' ).html("");
  //$("#my_audio").get(0).play();
 }
}

</script>
<form id="sjdh" name="sdghsdh">
    <input type="hidden" value="<?php echo $row_user['Username']?>" name="tee" id="tee" />
    <input type="hidden" value="<?php echo $row_user['Username']?>" name="tees" id="tees" />
    </form>
     <?php if ($pagetype != 'dashboard')
	{?>
	
    <?php if ($row_user['banned'] == 'yes' or ($row_user['verifyemail'] != 'yes'))
	{?>
		<meta http-equiv="refresh" content="0; url=dashboard.php" />
	<?php } ?><?php } ?>
        <!-- End of nav bar -->
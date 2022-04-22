

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
                        
<!--The "message" id will be display via PHP and AJAX-->
        <?php if($row_user['Username'] == $row_trxs['sender'] OR ($row_user['Username']== $row_trxs['receiver']))
     
     {?>
      <div id="display_info" >
    
    <br /><br />
</div>
         
        <form id="my-form" action="" method="post">
           <input type="hidden" name="msgid" id="msgid" value="<?php
       if (isset($_GET['inboxid'])) {
    
$code = $_GET['inboxid'];
echo $code;
}
    ?>">

    <input type="hidden" name="sender" placeholder="" id="sender" value="<?php echo $row_user['Username'] ;?>">
    
    
    <input type="hidden" name="receiver" placeholder="" value="<?php if( $row_user['Username'] == $row_trxs['sender']){
    
    echo $row_trxs['receiver'];
    }
    else
     {
        echo $row_trxs['sender']; 
     }
    ?>
    ">
    
            <input type="hidden" name="name" placeholder="Name" value="<?php
            if (empty($row_user['business']))
            {
            echo $row_user['fname'];
            }
            else{
               echo $row_user['business'] ; 
            }
            ?>">
            <div class="sendercontainer">
                <br />
                <textarea type="text" id="textMessage" name="message" placeholder="send chat message"  oninput="enablebutton()"  class="form-control" required></textarea><br />
            <button id="mySubmit"  type="submit"  class="btn btn-finish btn-primary" > Send <i class="fa fa-send"></i></button>
          </div>
        </form>
       
       <?php }?>
           </div>
            </div><!-- end row -->

        </div>
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!--AJAX-->
        <script>
        
            $(document).ready(function() {
                <!--#my-form grabs the form id-->
                $("#my-form").submit(function(e) {
                    e.preventDefault();
                    $.ajax( {
                        <!--insert.php calls the PHP file-->
                        url: "mess.php",
                        method: "post",
                        data: $("form").serialize(),
                        dataType: "text",
                        success: function(strMessage) {
                            $("#message").text(strMessage);
                            $("#my-form")[0].reset();
                        }
                    });
                });
            });
        </script>

 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">


setInterval(loaddata, 1000);

function loaddata()
{

 var msgid=document.getElementById( "msgid" );
 var sender=document.getElementById( "sender" );
 
  
 if(msgid)
 {
  $.ajax({
  type: 'post',
  url: 'load.php',
  data: {
      msgid:msgid.value,
      sender:sender.value,
   
  },
 
  success: function (response) {
   // We get the element having id of display_info and put the response inside it
   $( '#display_info' ).html(response);
 

  }
  });
 }
  
 else
 {
  $( '#display_info' ).html("Please Enter Some Words");
  //$("#my_audio").get(0).play();
 }
}

</script>

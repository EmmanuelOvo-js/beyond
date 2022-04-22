

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

                 <?php if ($totalRows_trx > 0) { // Show if recordset not empty ?>
<table id="example" class="table table-striped">
      <thead>
      <tr>
        
        <th>Title</th>
    
        <th>Started By</th>

         <th>Status</th>
       
        
         <th></th>
      </tr>
      </thead>
      <tbody>
    <?php
    function ywt_get_first_chara($str) {
    if($str)
        return strtolower(substr($str, 0, 1));
 
    return false;
}?>    
     <?php do

      { ?> <tr 
style="color : #000" 


>
        
        <td><?php echo $row_trx['title']; ?></td>

       
        
       <?php if ($row_trx['sender'] == $row_user['Username'])
        {

         ?> 
        <td><span style="color :red">You</span></td>
    <?php }?>
    <?php if ($row_trx['sender'] != $row_user['Username'])
        {

         ?> 
        <td><span style="color :green">Prospective Client</span></td>
    <?php }?>
         
       <td>

    
         
        <?php if ($row_trxd['status'] == 'new')
        {

         ?>
        New Inbox Message For You
           
           <?php }?>
         
           <?php if ($row_trxd['status'] != 'new')
        {

         ?>
         
         <?php 
        $img = $row_user['Username'];
        $idsz = $row_trx['inboxid'];
        $sql = "select * FROM conversation where receiver = '$img' and status='new' and inboxid='$idsz'";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);

//echo $img; echo $idsz;


if($num_rows > 0)
{
?>
<span style="color : green">New message -</span>
<?php } ?>

         <?php 
        
        $idsz = $row_trx['inboxid'];
        $sql = "select * FROM conversation where inboxid='$idsz'";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);

//echo $img; echo $idsz;

echo$num_rows; echo' replie(s)';

?>
<?php }?>
         
         </td>
        
         <td><a class="btn btn-info btn-rounded" href="conversation.php?inboxid=<?php echo $row_trx['inboxid']; ?>">View Conversation</a></td>
      </tr>
       <?php } while ($row_trx = mysql_fetch_assoc($trx)); ?>
  
      </tbody>
    </table>
<?php } // Show if recordset not empty ?>
<?php if ($totalRows_trx == 0) { // Show if recordset empty ?>
<div class="alert alert-danger" role="alert">
          <span class="alert-icon iconfont iconfont-info"></span>
          <strong>No messages yet!!</strong> 
          <span class="close iconfont iconfont-alert-close" data-dismiss="alert"></span>
        </div>
<?php } // Show if recordset empty ?>
            </div><!-- end row -->

        </div>
    </div>

  
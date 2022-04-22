

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
<a class="btn btn-info btn-rounded" href="createprop.php">Create property</a><br><br>
                 <?php if ($totalRows_trq > 0) { // Show if recordset not empty ?>
<table id="example" class="table table-striped">
      <thead>
      <tr>
        
        <th>Title</th>
    
       
       
        
         <th></th>
      </tr>
      </thead>
      <tbody>
     
     <?php do

      { ?> <tr 
style="color : #000" 


><td><?php echo $row_trq['title']; ?></td>
         <td><a class="btn btn-info btn-rounded" href="updateprop.php?propertyid=<?php echo $row_trq['propertyid']; ?>">Update property</a></td>
      </tr>
       <?php } while ($row_trq = mysql_fetch_assoc($trq)); ?>
  
      </tbody>
    </table>
<?php } // Show if recordset not empty ?>
<?php if ($totalRows_trq == 0) { // Show if recordset empty ?>
<div class="alert alert-danger" role="alert">
          <span class="alert-icon iconfont iconfont-info"></span>
          <strong>No properties yet!!</strong> 
          <span class="close iconfont iconfont-alert-close" data-dismiss="alert"></span>
        </div>
<?php } // Show if recordset empty ?>
            </div><!-- end row -->

        </div>
    </div>

  
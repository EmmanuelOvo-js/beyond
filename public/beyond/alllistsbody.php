

<?php echo "<link rel='stylesheet' type='text/css' href='general.css'>";?>

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
        <div class="content-area user-profiel" style="background-color:#F9F9F9;">&nbsp;
            <div class="container">   
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 profiel-container">

                       
                            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Country</th>
                <th></th>
                <th></th>
                  <th></th>
                  <th></th>
            </tr>
        </thead>
        <tbody>
            <?php do

      { ?>
            <tr>
                <td><?php if (empty($row_trops['bname']))
                {
                    echo $row_trops['fname'].$row_trops['lname'];
                }
                else
                {
                    echo $row_trops['bname'];
                }
                
                ?></td>
                 <td><?php echo $row_trops['country']; ?></td>
                <td><a href="buymore.php?User_id=<?php echo $row_trops['User_id']; ?>">View Listing Details</a></td>
               
                <td><a href="manage.php?User_id=<?php echo $row_trops['User_id']; ?>">Manage Listing Details</a></td>
              
                <td>
                    <?php if ($row_trops['banned'] !='yes') {?>
                    <a href="ban2.php?User_id=<?php echo $row_trops['User_id']; ?>">Ban Listing</a>
                    <?php }?>
                    <?php if ($row_trops['banned'] =='yes') {?>
                    <a href="unban2.php?User_id=<?php echo $row_trops['User_id']; ?>">UnBan Listing</a>
                    <?php }?>
                    </td>
                          <td><a href="delete2.php?User_id=<?php echo $row_trop['User_id']; ?>">Delete listing</a></td>
                 
            </tr>
            <?php } while ($row_trops = mysql_fetch_assoc($trops)); ?>
              </tbody>
        
    </table>

                            <div class="clear">


                </div>
            </div><!-- end row -->
        
        </div>
    </div>

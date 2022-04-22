<style>
    
    .buy
    {
        width : 300px!important;
        height : 100px!important;
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
       

                       

                           

  <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>All Businesses</h2>
                        <p></p>
                    </div>
                </div>

                <div class="row">
                    <div class="proerty-th">
                        <?php do { ?>
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                 <div class="item-thumb">
                                    <a href="buymore.php?User_id=<?php echo $row_use['User_id']; ?>" >
                                    
                                    <?php

if (empty($row_use['picture'])){?>
                                        <img class="buy"  src="noimage.jpg">
<?php }?>
<?php

if (!empty($row_use['picture'])){?>
                                        <img class="buy" src="<?php echo $row_use['picture']; ?>">
<?php }?>
                                    </a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="buymore.php?User_id=<?php echo $row_use['User_id']; ?>" >

                                        <?php

if (empty($row_use['bname'])){?>
<?php echo $row_use['fname']; ?> <?php echo $row_use['lname']; ?>

    <?php }?>
    <?php

if (!empty($row_use['bname'])){?>
<?php echo $row_use['bname']; ?> 

    <?php }?>


                                     </a></h5>
                                    
                                    
                                </div>
                            </div>
                        </div>
<?php } while ($row_use = mysql_fetch_assoc($use)); ?>
                      

                    </div>
                </div>
            </div>
        </div>

      

       

     
<?php include ('slider.php')?>
        <!-- property area -->
   
        
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Featured Properties</h2>
                        <p></p>
                    </div>
                </div>
 <?php if ($totalRows_used != '0') {?>
                <div class="row">
                    <div class="proerty-th">
                       
                        <?php do { ?>
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="adsinfo.php?adsid=<?php echo $row_used['adsid']; ?>" >

                                        <img src="<?php
                       // check wat type of project is
                        $img = $row_used['adsid'];
        $sql = "select * FROM uploads where adsid = '$img' lIMIT 1";
$result = mysql_query($sql);
$pvd = "";
while ($row = mysql_fetch_assoc($result)) {
    $pvd = $row['file'];
  }
if(!empty($pvd)) {
    
    echo $pvd;
    
}
else {
    
echo'noimage.jpg';
}

?>">

                                    </a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="adsinfo.php?adsid=<?php echo $row_used['adsid']; ?>" >

                                    
<?php echo $row_used['title']; ?> 


                                     </a></h5>
                                    
                                    <h5><a href="adsinfo.php?adsid=<?php echo $row_used['adsid']; ?>" >

                                    
For <?php echo $row_used['type']; ?> / $<?php echo $row_used['price']; ?> 


                                     </a></h5>
                                    
                                    
                                </div>
                            </div>
                        </div>
<?php } while ($row_used = mysql_fetch_assoc($used)); ?>
                      

                    </div>
                </div>
            <?php }?>    
                
            </div>
        </div>

      

       

     
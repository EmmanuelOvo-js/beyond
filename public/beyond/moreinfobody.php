
    
    
        <!-- property area -->
        <link rel="stylesheet" href="assets/css/lightslider.min.css">
        
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   

                <div class="clearfix padding-top-40" >

                    <div class="col-md-8 single-property-content prp-style-1 ">
                        <div class="row">
                            <div class="light-slide-item">            
                                <div class="clearfix">
                                    <div class="favorite-and-print">
                                        <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                            <i class="fa fa-star-o"></i>
                                        </a>
                                        <a class="printer-icon " href="javascript:window.print()">
                                            <i class="fa fa-print"></i> 
                                        </a>
                                    </div> 

                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                       <?php

if (empty($row_use['picture'])){?>
                                        <img src="noimage.jpg">
<?php }?>
<?php

if (!empty($row_use['picture'])){?>
                                        <img src="<?php echo $row_use['picture']; ?>">
<?php }?>
                     
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single-property-wrapper">
                            <div class="single-property-header">                <br />                          
                                <h1 class="property-title pull-left">   <?php

if (empty($row_use['bname'])){?>
<?php echo $row_use['fname']; ?> <?php echo $row_use['lname']; ?>

    <?php }?>
    <?php

if (!empty($row_use['bname'])){?>
<?php echo $row_use['bname']; ?> 

    <?php }?></h1>
                                <span class="property-price pull-right"></span>
                            </div>

                            <!-- .property-meta -->

                            <div class="section">
                                <h4 class="s-property-title">Description</h4>
                                <div class="s-property-content">
                                    <?php echo $row_use['biography']; ?>
                                  </div>
                            </div>
                            <!-- End description area  -->

                            
                            

                           
                            <!-- End video area  -->
                            
                        </div>
                    </div>


                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right">
                            <div class="dealer-widget">
                                <div class="dealer-content">
                                    <div class="inner-wrapper">

                                        <div class="clear">
                                            <div class="col-xs-4 col-sm-4 dealer-face">
                                                <a href="">
                                                    
<?php

if (empty($row_use['picture'])){?>
                                        <img class="img-circle" src="noimage.jpg">
<?php }?>
<?php

if (!empty($row_use['picture'])){?>
                                        <img class="img-circle" src="<?php echo $row_use['picture']; ?>">
<?php }?>
                                                </a>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 ">
                                                <h3 class="dealer-name">
                                                    <a href=""><?php

if (empty($row_use['bname'])){?>
<?php echo $row_use['fname']; ?> <?php echo $row_use['lname']; ?>

    <?php }?>
    <?php

if (!empty($row_use['bname'])){?>
<?php echo $row_use['bname']; ?> 

    <?php }?></a>
                                                    <span></span>        
                                                </h3>
                                                <div class="dealer-social-media">
                                                    <a class="twitter" target="_blank" href="">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a class="facebook" target="_blank" href="">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a> 
                                                    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>       
                                                </div>

                                            </div>
                                        </div>

                                        <div class="clear">
                                            <ul class="dealer-contacts">                                       
                                                <li><i class="pe-7s-map-marker strong"> </i> <?php echo $row_use['address']; ?></li>
                                                
                                            </ul>
                                            <p></p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                                <?php

if (!isset($_SESSION['MM_Username'])) {?>
<h3 class="panel-title">You need to be logged in to contact business</h3>
<?php }?>
                                <?php

if (isset($_SESSION['MM_Username'])) {?>
                                <div class="panel-heading">
                                    <h3 class="panel-title">Contact Provider</h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                         <form id="my-form" action="" method="post">
                                <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group">
                                        <label>Fullname :</label>
                                        <input required name="name" type="text" class="form-control" placeholder="Fullname">
                                        <input type="hidden" name="email" value="<?php echo $row_use['Email']; ?>" />
                                    </div>
                                    
                                </div>  

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label>Email :</label>
                                        <input required name="p-email" type="email" class="form-control" placeholder="p-email@rmail.com">
                                    </div>
                              
 
                            </div>
                            <div class="col-sm-10 col-sm-offset-1">
                        <textarea name="message" class="form-control"  rows="10" cols="50" required></textarea>
                        </div>
                    
                            <div class="col-sm-5 col-sm-offset-1">
                                <br>
                                <input id="mySubmit"  type="submit"  class='btn btn-finish btn-primary' name='finish' value='Contact now' />
                            </div>
                            <br>
                    </form>
                    <?php }?>
                    <br />
                     <div align="center"><span align="center" style="color : green;font-size :18px;font-weight :bold;text-align : center" id="message"></span></div>
                               
                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!--AJAX-->
        <script>
        
            $(document).ready(function() {
                <!--#my-form grabs the form id-->
                $("#my-form").submit(function(e) {
                    e.preventDefault();
                    $.ajax( {
                        <!--insert.php calls the PHP file-->
                        url: "insert.php",
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
                                       
                                </div>
                            </div>                          

                           

                            
                        </aside>
                    </div>
                </div>

            </div>
        </div>




  
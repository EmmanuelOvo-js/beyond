<style>
    .slit {
  max-width:100%; height:400px;
}
    
    
</style>
 <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
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
                                        <?php do { ?>
                                        
                                        <?php

if (empty($row_use['file'])){?>
<li data-thumb="assets/img/property-1/property1.jpg"> 
                                        <img src="noimage.jpg">
                                        </li>
<?php }?>
<?php

if (!empty($row_use['file'])){?>
 <li data-thumb="<?php echo $row_use['file']; ?>"> 
                                        <img class="slit" src="<?php echo $row_use['file']; ?>">
                                        </li>
<?php }?>
                                        
                                          
                                        <?php } while ($row_use = mysql_fetch_assoc($use)); ?>
                                    </ul>
                                </div>
                            </div>
                        </div><br />
<div class="single-property-wrapper">
                            <div class="single-property-header">                                          
                                <h1 style="color : #333" class="property-title pull-left s-property-title"><?php echo $row_usez['title']; ?></h1>
                                <span class="property-price pull-right">$<?php echo $row_usez['price']; ?> / <?php echo $row_usez['mode']; ?></span>
                            </div>

                            <div class="property-meta entry-meta clearfix ">   

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-tag">                                        
                                        <img src="assets/img/icon/sale-orange.png">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Status</span>
                                        <span class="property-info-value">For <?php echo $row_usez['type']; ?></span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info icon-area">
                                        <img src="assets/img/icon/room-orange.png">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Area</span>
                                        <span class="property-info-value"><?php echo $row_usez['area']; ?><b class="property-info-unit">Sq Ft</b></span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <img src="assets/img/icon/bed-orange.png">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Bedrooms</span>
                                        <span class="property-info-value"><?php echo $row_usez['room']; ?></span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <img src="assets/img/icon/cars-orange.png">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Swimming pool</span>
                                        <span class="property-info-value">?</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bath">
                                        <img src="assets/img/icon/os-orange.png">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Bathrooms</span>
                                        <span class="property-info-value"><?php echo $row_usez['toilet']; ?></span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-garage">
                                        <img src="assets/img/icon/room-orange.png">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Garages</span>
                                        <span class="property-info-value"><?php echo $row_usez['garage']; ?></span>
                                    </span>
                                </div>
                                
                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-garage">
                                        <img src="assets/img/icon/shawer-orange.png">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Anyinfo</span>
                                        <span class="property-info-value"></span>
                                    </span>
                                </div>


                            </div></div>
                        <hr style="height:1px; border:none; color:#000; background-color:#000;" />
                        <div class="single-property-wrapper">
                            <div class="single-property-header">                                          
                                <h1 class="property-title pull-left"></h1>
                                <span class="property-price pull-right"></span>
                            </div>

                            <!-- .property-meta -->

                            <div class="section">
                                <h4 class="s-property-title">Description</h4>
                                <div class="s-property-content">
                                    <?php echo $row_usez['description']; ?>
                                    <br />    <br />
                                    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
                                  <div id="mapDiv" style="width: 800px; height: 500px"></div>
  <script>
    // position we will use later
    var lat = <?php echo $row_usez['lat']; ?>;
    var lon = <?php echo $row_usez['lng']; ?>;
    // initialize map
    map = L.map('mapDiv').setView([lat, lon], 13);
    // set map tiles source
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
      maxZoom: 18,
    }).addTo(map);
    // add marker to the map
    marker = L.marker([lat, lon]).addTo(map);
    // add popup to the marker
    marker.bindPopup("<?php echo $row_usez['title']; ?>").openPopup();
  </script>
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
                                                    <img src="<?php
                       // check wat type of project is
                        $img = $row_usez['Username'];
        $sql = "select * FROM users where Username = '$img' ";
$result = mysql_query($sql);
$pvd = "";
while ($row = mysql_fetch_assoc($result)) {
    $pvd = $row['picture'];
  }
if(!empty($pvd)) {
    
    echo $pvd;
    
}
else {
    
echo'noimage.jpg';
}

?>" class="img-circle">
                                                </a>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 ">
                                                <h3 class="dealer-name">
                                                    <a href=""><?php
                       // check wat type of project is
                        $img = $row_usez['Username'];
        $sql = "select * FROM users where Username = '$img' ";
$result = mysql_query($sql);
$pvd = "";
while ($row = mysql_fetch_assoc($result)) {
    $pvd = $row['bname'];
    $pvds = $row['fname'].' '.$row['lname'];
  }
if(!empty($pvd)) {
    
    echo $pvd;
    
}
else {
    
echo $pvds;
}

?></a>
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
                                                <li><i class="pe-7s-map-marker strong"> </i> 9089 your adress her</li>
                                                
                                            </ul>
                                            <p>Duis mollis  blandit tempus porttitor curabiturDuis mollis  blandit tempus porttitor curabitur , est non…</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                                <?php

if (!isset($_SESSION['MM_Username'])) {?>
<h5>You need to be logged in to contact user</h5>
<?php } ?>
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
                                        <input type="hidden" name="email" value="<?php
                       // check wat type of project is
                        $img = $row_usez['Username'];
        $sql = "select * FROM users where Username = '$img' ";
$result = mysql_query($sql);
$pvd = "";
while ($row = mysql_fetch_assoc($result)) {
    echo $row['Email'];
    
  }


?>" />
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
                    <?php } ?>
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


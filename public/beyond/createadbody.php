<?php
include_once("db.php");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sqlz = "INSERT INTO coder (Username)
VALUES ('ytt')";

if (mysqli_query($conn, $sqlz)) {
    $last_id = mysqli_insert_id($conn);
   
//    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
   
}
?>


 



        <!-- property area -->
        <div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">
                <div class="clearfix" > 
                    <div class="wizard-container"> 

                        <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                            <form  name="wizard-card form" id="my-form">                        
                                <div class="wizard-header">
                                    <h3>
                                        <b>Submit</b> PROPERTY <br>
                                        <small></small>
                                    </h3>
                                </div>

                                <ul>
                                    <li><a href="#step1" data-toggle="tab">Step 1 </a></li>
                                    <li><a href="#step2" data-toggle="tab">Step 2 </a></li>
                                    <li><a href="#step3" data-toggle="tab">Step 3 </a></li>
                                    <li><a href="#step4" data-toggle="tab">Step 4 </a></li>
                                    <li><a href="#step5" data-toggle="tab">Finished </a></li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane" id="step1">
                                        <div class="row p-b-15  ">
                                            <h4 class="info-text"> Create Property</h4>
                                            <input type="hidden" id="Username" name="Username" value="<?php echo $row_user['Username'];?>">
                                            <input type="hidden" id="mine" name="mine" value="<?php echo $last_id;?>">
                                               
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Title <small>(required)</small></label>
                                                    <input name="title" id="title"  type="text" class="form-control" placeholder="...">
                                                </div>

                                                <div class="form-group">
                                                    <label> price <small>(required)</small></label>
                                                    <input name="price" id="price"  type="number" class="form-control" placeholder="">
                                                </div> 
                                                
                                            </div>
                                            
                                             <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Type <small>(required)</small></label>
                                                     <select  name='type' class="form-control"  id="color">
    <option value="">choose options</option>
    <option value="sale">Sale</option>
    <option value="rent">Rent</option>
   
  </select>
                                                </div>

                                                <div class="form-group">
                                                    <label> Mode <small>(required)</small></label>
                                                     <select  name='mode' class="form-control" id="size">
<option value="">choose options</option>
    <option value="one time payment" class="sale">One Time Payment</option>
    <option value="per month" class="rent">Per Month</option>
    <option value="per year" class="rent">Per Year</option>
   
  </select>
                                                </div> 
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 1 -->
                                    
                                    <div class="tab-pane" id="step2">                                        
                                        <h4 class="info-text">Tell Us About Your Property </h4>
                                        <div class="row">  
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="property-images">Rooms :</label>
                                               <input name="room" id="room"  type="number" class="form-control" placeholder="">

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="property-images">Toilets :</label>
                                               <input name="toilet" id="toilet"  type="number" class="form-control" placeholder="">

                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">  
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="property-images">Area SQ :</label>
                                               <input name="area" id="area"  type="text" class="form-control" placeholder="">

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="property-images">Garage :</label>
                                               <input name="garage" id="garage"  type="text" class="form-control" placeholder="">

                                                </div>
                                            </div>
                                           
                                        </div>
                                        <h4 style='font-weight : bold'>Property Map </h4>
                                        <div class="row">  
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="property-images">Latitude :</label>
                                               <input name="lat" id="lat"  type="text" class="form-control" placeholder="">

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="property-images">Longtitude :</label>
                                               <input name="lng" id="lng"  type="text" class="form-control" placeholder="">

                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="step3">
                                        <h4 class="info-text"> Tell Us About Your Property </h4>
                                        <div class="row">
                                            <div class="col-sm-12"> 
                                                <div class="col-sm-12"> 
                                                    <div class="form-group">
                                                        <label>Description :</label>
                                                        <textarea  rows="14" cols="50" name="description" id="description" class="form-control" ></textarea>
                                                    </div> 
                                                </div> 
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End step 2 -->

                                    <div class="tab-pane" id="step4">                                        
                                        <h4 class="info-text">Give us some images ? </h4>
                                        <div class="row">  
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="property-images">Chose Images :</label>
                                                  
                                                 <div class="dropzone"></div>

                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!--  End step 3 -->


                                    <div class="tab-pane" id="step5">                                        
                                        <h4 class="info-text"> Finished and submit </h4>
                                        <div class="row">  
                                            <div class="col-sm-12">
                                                <div class="">
                                                   
                                                    

                                                    <div class="checkbox">
                                                        <label>
                                                           <?php if ($row_user['featured'] != '7777777770') {?> <input type="checkbox" name="feat" value='yes' /> <strong>Apply for featured preferencing?.</strong><?php }?>
                                                           <?php if ($row_user['featured'] == '77777777770') {?>  <span style="color : red;font-weight : bold;font-size : 18px">Featured preferencing Unavailable</span><?php }?>
                                                        </label>
                                                    </div> 
                                                    <br /><br />
                                                    <span style="color : green;font-size : 20px;font-weight :bold;display:none" id="success">Property Created please wait while your are redirected</span>

                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 4 -->

                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-primary' name='next' value='Next' />
                                        
                                        
                                        
                                        <button class='btn btn-finish btn-primary '  type="submit" id="startUpload">Finish</button>
                                        
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-default' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>                                            
                                </div>	
                            </form>
                        </div>
                        <!-- End submit form -->
                    </div> 
                </div>
            </div>
        </div>
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
      <script>

    Dropzone.autoDiscover = false;

    $(document).ready(function () {
        var myDropzone = new Dropzone(".dropzone", {
            init: function () {

                $('#startUpload').click(function () {
                    myDropzone.processQueue();
                });
            },
            url: "upload.php",
            type: 'POST',
            autoProcessQueue: false,
             maxFilesize: 20,
  paramName: "file",
        maxFiles: 10,
        parallelUploads: 10,
        addRemoveLinks: true,
        acceptedFiles: ".jpg,.JPG.jpeg,.JPEG,.PNG,.png,.gif",
    
        //send all the form data along with the files:
        
    
            success: function () {
                document.getElementById('success').style.display = "block";
                window.setTimeout(function() {
    window.location.href = 'myprop.php';
}, 2000);

                //do stuff
            },
            error: function () {
                //do error notification
            }


        });
            
             $(document).ready(function() {
                <!--#my-form grabs the form id-->
                $("#my-form").submit(function(e) {
                    e.preventDefault();
               
                });
            });
            
         myDropzone.on("sending", function(file, xhr, formData) {
  // Will send the filesize along with the file as POST data.
  

  var price=document.getElementById("price").value;
   var title=document.getElementById("title").value;
     var description=document.getElementById("description").value;
     var mine=document.getElementById("mine").value;
      var Username=document.getElementById("Username").value;
      var type=document.getElementById("color").value;
      var mode=document.getElementById("size").value;
      var garage=document.getElementById("garage").value;
      var room=document.getElementById("room").value;
      var toilet=document.getElementById("toilet").value;
      var area=document.getElementById("area").value;
      var lat=document.getElementById("lat").value;
      var lng=document.getElementById("lng").value;
  formData.append("price", price);
  formData.append("title", title);
  formData.append("description", description);
   formData.append("mine", mine);
   formData.append("Username", Username);
   formData.append("type", type);
   formData.append("mode", mode);
   formData.append("garage", garage);
   formData.append("room", room);
   formData.append("toilet", toilet);
   formData.append("area", area);
   formData.append("lat", lat);
   formData.append("lng", lng);
});
    });
    
   
</script>
       
     
 




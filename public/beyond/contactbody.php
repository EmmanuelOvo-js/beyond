       <!-- End page header<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Contact page 3</h1>               
                    </div>
                </div>
            </div>
        </div> --> 
     

        <!-- property area -->
        <div class="content-area recent-property" style="background-color: #f6f6f6;"><br>  <div align="center"><span align="center" style="color : green;font-size :18px;font-weight :bold;text-align : center" id="message"></span></div>
            <div class="container">  

                <div class="col-md-8" style="margin-top: 30px;">

                    <div class="" id="contact1">                        
                        <div class="row">
                            
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row --> 
                        <h2>Contact US</h2>
                        <form id='my-form'  style="margin-top: 30px;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input required name='fname' type="text" class="form-control" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label  for="lastname">Lastname</label>
                                        <input required name='lname' type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input required name='email' type="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input required name='subject' type="text" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea required name='message' id="message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="simplebutton"><i class="fa fa-send"></i> Send message</button>
                                </div>
                            </div>
                            <!-- /.row -->
                        </form>
                        
                               
                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!--AJAX-->
        <script>
        
            $(document).ready(function() {
                <!--#my-form grabs the form id-->
                $("#my-form").submit(function(e) {
                    e.preventDefault();
                    $.ajax( {
                        <!--insert.php calls the PHP file-->
                        url: "int.php",
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
                <!-- /.col-md-9 -->   

                <div class="col-md-4 " style="margin-top: 30px;    background: white;    min-height: 560px;">                    
                    <div class="blog-asside-right">  
                        <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                                <h2>Contact INFO</h2>
                            <div class="panel-body recent-property-widget">
                                <ul class="contactinfo">
                                    <li><i class="fa fa-map-marker" style="color: #01ccd0;"></i>13/25 New Avenue New Heaven 45Y 73J England Great Britain
                                    </li>
                                    <li><i class="fa fa-phone" style="color: #01ccd0;"></i><strong><a href="tel:0000000000" style="color: #787878;font-weight: 400;">000 000 000 00</a></strong>   </li>
                                    <li><i class="fa fa-envelope" style="color: #01ccd0;"></i><strong><a href="mailto:" style="color: #787878;font-weight: 400;">info@buygrowexit.com</a></strong>   </li>
                                </ul>
                           
                           
                            </div>
                        </div>
                    </div>                     
                </div>            
            </div>
        </div>
      
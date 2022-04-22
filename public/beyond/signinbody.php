<style>
<?php include 'general.css'; ?>
</style>
 

        <!-- register-area -->
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-12">
                    
                </div>

                <div class="col-md-12">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            
                            <h2>Login : </h2> 
                             <form ACTION="<?php echo $loginFormAction; ?>" METHOD="POST" class="formcontainer" name="formlogin" id="formlogin">
                                <?php if(!empty($myerror)){
    
     echo $myerror;
}
    ?>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="Password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default"> Log in</button>
                                </div>
                            </form>
                            
                            <p>
                            <a class="login-social" href="#">Forgot Password</a> 
                             
                            </p> 
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>      

        
       
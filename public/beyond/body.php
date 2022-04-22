 <?php
    include('conn.php');
    $query = $db->query("SELECT * FROM countries ORDER BY name ASC");
    $rowCount = $query->num_rows;
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>

 <style>
     input,select {
    padding: 10px;
    width: 100%;
    font-size: 14px;
    border: 1px solid #aaaaaa;
}
p, ul,label {
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 16px;
}

.chosen-container-multi .chosen-choices li.search-choice .search-choice-close{
        margin-left: 8px;
    float: right;
    display: inline-block;
    position: unset;
}
li.search-choice {
  padding: 10px 15px 10px 15px !important;
  background-image: none !important;
}
.chosen-container-multi .chosen-choices{
    border: 1px solid #aaaaaa !important;
}
ul.chosen-choices {
    min-height: 32px;
    padding: 5px !important;
}
 </style>
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

                       
                            <div class="profiel-header">
                                
                                <?php if ($row_user['banned'] == 'yes')
	{?>
		<h2>You have been banned!!</h2>
	<?php } ?>
	<?php if($row_user['Access'] == 'admin')  {?>
	
	<h2>Welcome Administrator!!</h2><br />
	<?php } ?>
                               
                              <?php if($row_user['Access'] == 'member') {?> 
                              
                              
                              <?php if ($row_user['banned'] != 'yes')
	{?>  
                            
                            <?php if($row_user['verifyemail'] != 'yes') {?>
<h2>Verify email Now, please check mail inbox and spam box to verify thanks</h2>


<?php } ?> 



<?php }?>



 	<?php } ?>	
                                
                            
                            </div>

                            <div class="clear">


                </div>
            </div><!-- end row -->
        
        </div>
    </div>
<script>
function getSelectedOptions(sel, fn) {
    var opts = [], opt;
    
    // loop through options in select list
    for (var i=0, len=sel.options.length; i<len; i++) {
        opt = sel.options[i];
        
        // check if selected
        if ( opt.selected ) {
            // add to array of option elements to return from this function
            opts.push(opt);
            
            // invoke optional callback function if provided
            if (fn) {
                fn(opt);
            }
        }
    }
    
    // return array containing references to selected option elements
    return opts;
}
  function callback(opt) {
    // display in textarea for this example
    var display = document.getElementById('strengthcollection');
    display.innerHTML += opt.value + ', ';
    // can access properties of opt, such as...
    //alert( opt.value )
    //alert( opt.text )
    //alert( opt.form )
}

  function callback1(opt) {
    
    var displayopportunities = document.getElementById('opportunitiescollection');
    displayopportunities.innerHTML += opt.value + ', ';
    
    // can access properties of opt, such as...
    //alert( opt.value )
    //alert( opt.text )
    //alert( opt.form )
}

  function callback2(opt) {
    var displayoperations = document.getElementById('operationscollection');
    displayoperations.innerHTML += opt.value + ', ';
    // can access properties of opt, such as...
    //alert( opt.value )
    //alert( opt.text )
    //alert( opt.form )
}

  function callback3(opt) {
    var displaymarketing = document.getElementById('marketingcollection');
    displaymarketing.innerHTML += opt.value + ', ';
    // can access properties of opt, such as...
    //alert( opt.value )
    //alert( opt.text )
    //alert( opt.form )
}
// anonymous function onchange for select list with id demoSel
document.getElementById('strengthsselection').onchange = function(e) {
    // get reference to display textarea
    var display = document.getElementById('strengthcollection');
    display.innerHTML = ''; // reset
    
    // callback fn handles selected options
    getSelectedOptions(this, callback);
    
    // remove ', ' at end of string
    var str = display.innerHTML.slice(0, -2);
    display.innerHTML = str;
};  
document.getElementById('opportunities').onchange = function(e) {
    // get reference to display textarea
    var displayopportunities = document.getElementById('opportunitiescollection');
    displayopportunities.innerHTML = ''; // reset
    
    // callback fn handles selected options
    getSelectedOptions(this, callback1);
    
    // remove ', ' at end of string
    var str = displayopportunities.innerHTML.slice(0, -2);
    displayopportunities.innerHTML = str;
}; 

document.getElementById('operations').onchange = function(e) {
    // get reference to display textarea
    var displayoperations = document.getElementById('operationscollection');
    displayoperations.innerHTML = ''; // reset
    
    // callback fn handles selected options
    getSelectedOptions(this, callback2);
    
    // remove ', ' at end of string
    var str = displayoperations.innerHTML.slice(0, -2);
    displayoperations.innerHTML = str;
}; 

document.getElementById('marketing').onchange = function(e) {
    // get reference to display textarea
    var displaymarketing = document.getElementById('marketingcollection');
    displaymarketing.innerHTML = ''; // reset
    
    // callback fn handles selected options
    getSelectedOptions(this, callback3);
    
    // remove ', ' at end of string
    var str = displaymarketing.innerHTML.slice(0, -2);
    displaymarketing.innerHTML = str;
}; 
</script>
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min/js"></script>
<script type="text/javascript">


$(document).ready(function(){

   
    $('#father').on('change',function(){
        var father_id = $(this).val();
        if(father_id){
            $.ajax({
                type:'POST',
                url:'ajax.php',
                data:'father_id='+father_id,
                success:function(html){
                    $('#child').html(html);
                    $('#school').html('<option value="">Select child first</option>'); 
                }
            }); 
        }else{
            $('#child').html('<option value="">Select country first</option>');
            $('#school').html('<option value="">Select child first</option>'); 
        }
    });
    $('#child').on('change',function(){
        var child_id = $(this).val();
        if(child_id){
            $.ajax({
                type:'POST',
                url:'ajax.php',
                data:'child_id='+child_id,
                success:function(html){
                    $('#school').html(html);
                }
            }); 
        }else{
            
        }
    });
});
</script>
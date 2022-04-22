

<?php echo "<link rel='stylesheet' type='text/css' href='general.css'>";?>

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

                        <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country" data-placeholder="Begin typing a name to filter..." multiple class="chosen-select">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" value="Submit">
  </form> 
  
  <script>
$(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
</script>
                </div>
            </div><!-- end row -->
        
        </div>
    </div>

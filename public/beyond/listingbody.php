<style>
    
    .buy
    {
        width : 300px!important;
        height : 250px!important;
    }
    
</style>

       
        <!-- End page header --> 

        <!-- property area -->
       

                       

                           

  <div class="content-area home-area-1 recent-property" style="background-color: #f6f6f6; padding-bottom: 55px;"><br />  
            <div class="container">
                <div class="row">
                    <div class="col-sm-10" style="margin: 0 auto !important;    float: unset;">
                        <div class="search-form wow pulse" data-wow-delay="0.8s">

                           <form action="listing.php" method='post' class=" form-inline">
                                
<div class="row">
    <div class="col-sm-12">
    <div class="col-sm-10">
  <div class="col-sm-6">
      <select name="search"  id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Type of Property">

                                       <option
      value="sale">Sale</option>
      <option
      value="rent">Rent</option>
  
                                    </select></div>
  <div class="col-sm-6">
      <select class="selectpicker"  name="country">
         <option value="">Select Country</option>     
   <?php do

      { ?> <option value="<?php echo $row_trx['id']; ?>"><?php echo $row_trx['name']; ?></option>
    <?php } while ($row_trx = mysql_fetch_assoc($trx)); ?>
    </select></div>
</div>
                               
                                <button class="simplebutton" type="submit"style="font-size: 18px; padding: 5px 15px;vertical-align: top;"><span class="deskspan">Search </span><i class="fa fa-search"></i></button>
</div>
                               
                            </form>
                     </div>   </div></div></div>
                        <!-- /.feature title --> <br>
                        <h2 style="text-align:center;">All Properties</h2>
                        <p></p>
                
<style>
 
.flex {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}
.content {
  
  
  color: #fff;
  font-size: 24px;
  line-height: 100px; /* centering text just for view */
  text-align: center;
  background-color: grey;
  margin: 5px;
  border: 1px solid lightgrey;
  display: none;
}
#loadMore {
  width: 200px;
  color: #fff;
  display: block;
  text-align: center;
  margin: 20px auto;
  padding: 10px;
  border-radius: 10px;
  border: 1px solid transparent;
  background-color: #00ccd0;
  transition: .3s;
}
#loadMore:hover {
  color: #00ccd0;
  background-color: #fff;
  border: 1px solid #00ccd0;
  text-decoration: none;
}
.noContent {
  color: #000 !important;
  background-color: transparent !important;
  pointer-events: none;
}
    </style>
    
    <?php if ($totalRows_usep == '0') {?>
    <h2>No results</h2>
    <?php }?>
    <?php if ($totalRows_usep != '0') {?>
<div class="container">
  <div class="flex">
     <?php do { ?>
<div class="content"><a href="adsinfo.php?adsid=<?php echo $row_usep['adsid']; ?>" >
                                    
     
                                        <img class="buy" src="<?php
                       // check wat type of project is
                        $img = $row_usep['adsid'];
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
                                     <div class="item-entry overflow">
                                    <h5><a href="adsinfo.php?adsid=<?php echo $row_usep['adsid']; ?>" >

                                   
<?php echo $row_usep['title']; ?>


                                     </a></h5>
                                     <h5><a href="adsinfo.php?adsid=<?php echo $row_usep['adsid']; ?>" >

                                    
For <?php echo $row_usep['type']; ?> / $<?php echo $row_usep['price']; ?> 


                                     </a></h5>
                                    <div class="dot-hr"></div>
                                    
                                </div>
                                    
                                    </div>
<?php } while ($row_usep = mysql_fetch_assoc($usep)); ?>
</div>
<div align="center"><br><br><a   href="#" id='loadMore' class="simplebutton">View more</a></div>
</div></div>
<?php }?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script id="rendered-js">
      $(document).ready(function () {
  $(".content").slice(0, 3).show();
  $("#loadMore").on("click", function (e) {
    e.preventDefault();
    $(".content:hidden").slice(0, 3).slideDown();
    if ($(".content:hidden").length == 0) {
      $("#loadMore").text("End of Listing").addClass("noContent");
    }
  });

});
      //# sourceURL=pen.js
    </script>
              
            </div>
        </div>
<style>
    
    * {
  box-sizing: border-box;
}

/* Create three columns of equal width */
.columns {
  float: left;
  width: 50%;
  padding: 8px;
}

/* Style the list */
.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0 15px;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

/* Add shadows on hover */
.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

/* Pricing header */
.price .header {
  background-color:#007B7B;
  color: white;
  font-size: 25px;
}
.price .header1 {
  background-color:#00AAAA;
  color: white;
  font-size: 25px;
}
.price .header2 {
  background-color:#2AD4D4;
  color: white;
  font-size: 25px;
}
.price .header3 {
  background-color:#54DBDB;
  color: white;
  font-size: 25px;
}

/* List items */
.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

/* Grey list item */
.price .grey {
  background-color: #eee;
  font-size: 20px;
}

/* The "Sign Up" button */
.buttons {
  background-color:#00ccd0;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}
.buttons:hover{
    background:#fdc600;
    color:white;
}
.width50{
    width:60%;
    margin-right: auto;
    padding-top: 30px;
    margin-left: auto;
}
/* Change the width of the three columns to 100% 
(to stack horizontally on small screens) */
@media only screen and (max-width: 600px) {
  .columns,.width50{
    width: 100%;
  }
}
li.amount {
    font-size: 40px;
    font-weight: 700;
    background: #00ccd0;
    border-bottom: none;
    color: white;
}
li.header > span {
    font-size: 15px;
}
li.amount > span {
    font-size: 20px;
}
</style>  

<?php if ($s =='ss') { ?>
<div align='center'>
<br /><a href="signup.php" class="simplebutton">Create Buyer Account..</a></div><br /><br />
        <div class="register-area " style="background-color: white;padding-bottom: 80px;padding-top:80px;">
            <div class="container">
                        <h2 class="page-title">SELL YOUR BUSINESS</h2>
                        <p class="subheadline"style="text-align:center;color:black">To sell your business please select the plan below that best suits your requirements</p>
                     
                <div class="width50 ">
<div class="columns fadeInRight animated animated">
  <ul class="price">
    <li class="amount">$0.00</li>
    <li class="header trial">Free <span>(15 Day Listing)</span></li>
    <li>Limited Buyer Access</li>
    <li>Limited Enquiries</li>
    
    <li>Free Plan</li>
    <li>Limited Advert & Profile</li>
    <li class="grey"><a href="signup.php?plan=free" class="simplebutton">Sign Up</a></li>
  </ul>
</div>
   <a name="sell"></a>
<div class="columns fadeInRight animated animated">
  <ul class="price">
    <li class="amount">$100 <span>per month</span></li>
    <li class="header premium">Premium <span>(Unlimited listing)</span></li>
    <li>No Contract</li>
    <li>More Buyer Enquiries</li>

    <li>Rolling Monthly Contract</li>
    <li>Full Advert & Profile</li>
    <li class="grey"><a href="signup.php?plan=premium" class="simplebutton">Sign Up</a></li>
  </ul>
</div></div>
</div>
</div>
        <?php } ?>
      

       

     
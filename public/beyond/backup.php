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
                              
                              <?php if($row_user['Access'] == 'member') {?> <?php if ($row_user['banned'] != 'yes')
	{?>  <h3>
                                    
                                    <?php
     
$expire = strtotime($row_user['expiry']);
$today = strtotime(date("Y-m-d"));

if($today >= $expire){
   
?>
<h2>Your Account on The platform Has Expired, to renew Visit the Buy Package Page</h2>
<?php }?>

 <?php if($row_user['first'] == 'yes') {?>

<div class="formb">
            <h2>GENERAL INFORMATION</h2><br/>
            <label>Business Name</label>
            <input required name="bname" placeholder="Business Name" size="100" type="text"/>
            <label>Business URL (Please copy the full URL from your address bar including https:// or http://)</label>
            <input required name="burl" placeholder="https://example.com" type="url"/>
            <label>When did your business begin operations?</label><br/>
            <select required name="year">
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019" selected="selected">2019</option>
            </select>
            <br />
            <select required name="month">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6" selected="selected">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select><br/>
            <label>Where is your business registered?</label>  
         
            <select name="bcountry" id="father"  >
                <option value="">Select Country</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            }
        }
       else
       {
            echo '<option value="">Countries not available</option>';
        }?>
               </select>
            <label>In which state are you based?</label>
            <select name="bstate" id="child" >
                <option value="">Select option</option>
            </select>
            <label>Vertical / Industry</label>  
            <select required name="industry" >
                <option value="10">Electronics</option>
                <option value="6">Automotive</option>
                <option value="7">Business</option>
                <option value="8">Design and Style</option>
                <option value="9">Education</option>
                <option value="11">Entertainment</option>
                <option value="12">Food and Drink</option>
                <option value="13">General Knowledge</option>
                <option value="14">Health and Beauty</option>
                <option value="15">Hobbies and Games</option>
                <option value="16">Home and Garden</option>
                <option value="17">Internet</option>
                <option value="18">Lifestyle</option>
                <option value="19">Sports and Outdoor</option>
                <option value="20">Travel</option>
            </select> 
            <label>What is your main source of income?</label>
            <select required name="sincome">
                <option value="1">e-Commerce</option>
                <option value="2">SaaS</option>
                <option value="3">Services</option>
                <option value="4">Marketplace</option>
                <option value="5">Advertising</option>
            </select>
            <label>One-line description</label>
            <textarea required name="bdescription" placeholder="In the most concise way possible, please describe your business. This will appear on the listing page." rows="6"></textarea>  
            <label>Explain your business in the simplest way possible. What does your business do?</label> 
            <textarea required name="bdescription2" placeholder="Tell us a little about the business so potential buyers get excited. Describe your core proposition and operations." rows="6"></textarea>
            <label>How does your business make money?</label> 
            <textarea required name="how" placeholder="We make money from selling..." rows="6"></textarea>
            <label>Why should someone buy this business?</label>
            <textarea required name="why" placeholder="This is your sales pitch. Think about why someone would want to buy your business." rows="6"></textarea>
            <label>How can the future owner improve this business?</label>
            <textarea required name="how2" placeholder="Pick the one thing you would do if you had more time and resource to grow the business." rows="6"></textarea>
            <label>How many full-time staff?</label>
            <select required name="how3">
                <option value="1">Owner Operated</option>
                <option value="2">1 to 10</option>
                <option value="3">10 to 50</option>
                <option value="4">50+</option>
            </select>
            <label>Business Strengths (Choose up to 5 strengths)</label>
            <select required name="strengths" multiple="multiple" multiple class="chosen-select">
                <option value="1">Key Words Ranking</option>
                <option value="2">Brand and Community Loyalty</option>
                <option value="3">Customer Service</option>
                <option value="4">Evergreen Niche</option>
                <option value="5">High Barrier of Entry to Market</option>
                <option value="6">High levels of Automation</option>
                <option value="7">High Profit Margins</option>
                <option value="8">Large Customer Database</option>
                <option value="9">Length of Operation in Niche</option>
                <option value="10">Lots of Repeat Customers</option>
                <option value="12">Low Return Rate</option>
                <option value="13">Low Time Commitment Required</option>
                <option value="14">Outsourced Order Fulfilment</option>
                <option value="15">Outsourced Technical Operations</option>
                <option value="17">Passive Revenue</option>
                <option value="18">Positive Customer Reviews</option>
                <option value="19">Scalable Business Model</option>
                <option value="20">Significant IP Included</option>
                <option value="21">Sticky Business Model</option>
                <option value="22">Strong Manufacturing Relationships</option>
                <option value="23">Strong Recuring Revenue</option>
                <option value="24">The Business Is Currently Growing</option>
                <option value="25">Turn-key Operations</option>
                <option value="26">Well Established and Unique Brand</option>
                <option value="16">Overall Market Size</option>
                <option value="11">Low Acquisition Cost for New Customers</option>
            </select>
            <label>Opportunities for a new owner (Choose up to 3 opportunities)</label>
            <select required name="opportunities" multiple="multiple" multiple class="chosen-select">
                <option value="27">Launch New Products</option>
                <option value="28">Start Selling into New Markets</option>
                <option value="29">Capitalise on the Emerging Market</option>
                <option value="30">Improve Current Marketing Efforts</option>
                <option value="31">Introduce Further Revenue Streams</option>
                <option value="32">Improve or Outsource Operations</option>
                <option value="33">Advance or Explore Retail / Distribution Partnerships</option>
                <option value="34">Improve Customer Service</option>
                <option value="35">Develop New Features</option>
                <option value="36">Increase Basket Size Per Customer</option>
            </select>
            <label>Key day-to-day operations (Choose up to 5 key workstreams)</label>
            <select required name="operations" multiple="multiple" multiple class="chosen-select">
                <option value="37">Managing Staff</option>
                <option value="38">Customer Support / Service</option>
                <option value="39">Bookkeeping</option>
                <option value="40">Design &amp; Production</option>
                <option value="41">Launching New Products</option>
                <option value="42">Managing Inventory</option>
                <option value="43">Reporting</option>
                <option value="44">Supplier Relationship Management</option>
                <option value="45">Order Assembly</option>
                <option value="46">Order Fulfilment</option>
                <option value="47">Product Sourcing and Design</option>
                <option value="48">Website Maintenance</option>
                <option value="49">Programming / Development</option>
                <option value="50">Content marketing</option>
                <option value="51">Adwords Maintenance</option>
                <option value="52">Product photography</option>
                <option value="53">Video production</option>
            </select>
            <label>Marketing (Choose up to 3 marketing tactics)</label>
            <select required name="marketing" multiple="multiple" multiple class="chosen-select">
                <option value="54">Adroll</option>
                <option value="55">Affiliate Marketing</option>
                <option value="56">Amazon PPC</option>
                <option value="57">Customer Referral Program</option>
                <option value="58">Email Marketing</option>
                <option value="59">Facebook Community Management</option>
                <option value="60">Facebook Advertising</option>
                <option value="61">Google Adwords</option>
                <option value="62">Influencer Marketing</option>
                <option value="63">Instagram Community Management</option>
                <option value="64">Instagram Advertising</option>
                <option value="65">Native Advertising</option>
                <option value="66">Partnerships</option>
                <option value="67">SEM</option>
                <option value="68">SEO</option>
                <option value="69">Sponsorships</option>
                <option value="70">Twitter</option>
                <option value="71">Webinars</option>
                <option value="72">Word of Mouth</option>
                <option value="73">Youtube Channel Management</option>
                <option value="74">YouTube Advertising</option>
            </select>  
            <label>Why are you selling this business?</label>
            <textarea required name="whysell" placeholder="Tell us about your circumstances. Be honest and forthright. Buyers want to know why you are selling as a means to assess its ongoing viability." rows="6"></textarea>
            <label>Will you or a staff member provide post sale support?</label>
            <label class="formclass">One
                <input type="radio" checked="checked" name="will">
                
            </label>
            <label class="formclass">Two
                <input type="radio" name="will">
           
            </label>
            <h2>ANNUALIZATION INFORMATION</h2><br/>
            <label>Annual Revenue (Prior 12 months)</label>
            <input type="number"/>
            <label>Annual Expenses (Prior 12 months)</label>
            <input type="number"/>
            <label>Annual Net Profit (Prior 12 months)</label>
            <input type="number"/>
            <label style="font-size:16px!important;">Prior 3 months</label><br/>
            <label>May 2019</label><br/>
            <input class="er" type="number" placeholder="Revenues"/> <input class="er m" type="number" placeholder="Expenses"/> <input class="er m" type="text" placeholder="Net Profit"/><br/><br/>
            <label>April 2019</label><br/>
            <input class="er" type="number" placeholder="Revenues"/> <input class="er m" type="number" placeholder="Expenses"/> <input class="er m" type="text" placeholder="Net Profit"/><br/><br/>
            <label>March 2019</label><br/>
            <input class="er" type="number" placeholder="Revenues"/> <input class="er m" type="number" placeholder="Expenses"/> <input class="er m" type="text" placeholder="Net Profit"/><br/>
            <br/>
            <input type="submit" value="Continue...">
        </div> 
   <script>
$(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
</script>
  
<?php }?>	<?php } ?>	<?php } ?>
                                </h3>
                            
                            </div>

                            <div class="clear">


                </div>
            </div><!-- end row -->
        
        </div>
    </div>
  
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
            $('#child').html('<option value="">Select father first</option>');
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
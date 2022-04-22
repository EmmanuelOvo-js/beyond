<?php require_once('Connections/emirate.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


$colname_trxs = "-1";
if (isset($_GET['transid'])) {
  $colname_trxs = $_GET['transid'];
}
mysql_select_db($database_emirate, $emirate);
$query_trxs = sprintf("SELECT * FROM transaction WHERE transid = %s ORDER BY transid DESC", GetSQLValueString($colname_trxs, "int"));
$trxs = mysql_query($query_trxs, $emirate) or die(mysql_error());
$row_trxs = mysql_fetch_assoc($trxs);
$totalRows_trxs = mysql_num_rows($trxs);
?>
<style>
   
  
    form {
  width: 480px;
  margin: 20px 0;
}

.group {
  background: white;
  box-shadow: 0 7px 14px 0 rgba(49,49,93,0.10),
              0 3px 6px 0 rgba(0,0,0,0.08);
  border-radius: 4px;
  margin-bottom: 20px;
}

label {
  position: relative;
  color: #8898AA;
  font-weight: 300;
  height: 40px;
  line-height: 40px;
  margin-left: 20px;
  display: flex;
  flex-direction: row;
}

.group label:not(:last-child) {
  border-bottom: 1px solid #F0F5FA;
}

label > span {
  width: 80px;
  text-align: right;
  margin-right: 30px;
}

.field {
  background: transparent;
  font-weight: 300;
  border: 0;
  color: #31325F;
  outline: none;
  flex: 1;
  padding-right: 10px;
  padding-left: 10px;
  cursor: text;
}

.field::-webkit-input-placeholder { color: #CFD7E0; }
.field::-moz-placeholder { color: #CFD7E0; }

button {
  float: left;
  display: block;
  background: #666EE8;
  color: white;
  box-shadow: 0 7px 14px 0 rgba(49,49,93,0.10),
              0 3px 6px 0 rgba(0,0,0,0.08);
  border-radius: 4px;
  border: 0;
  margin-top: 20px;
  font-size: 15px;
  font-weight: 400;
  width: 100%;
  height: 40px;
  line-height: 38px;
  outline: none;
}

button:focus {
  background: #555ABF;
}

button:active {
  background: #43458B;
}

.outcome {
  float: left;
  width: 100%;
  padding-top: 8px;
  min-height: 24px;
  text-align: center;
}

.success, .error {
  display: none;
  font-size: 13px;
}

.success.visible, .error.visible {
  display: inline;
}

.error {
  color: #E4584C;
}

.success {
  color: #666EE8;
}

.success .token {
  font-weight: 500;
  font-size: 13px;
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
        <div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   
               
<div class="col-md-4"></div><div class="col-md-6">
                       
                            <div class="profiel-header">
                                <h2>Pay with stripe</h2>
                                <form action="pay.php" method="post" id="payment-form">
    <input type="hidden" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $row_user['Username'] ?>">
    

    <input type="hidden" name="amount" class="form-control" placeholder="Enter Amount" value="<?php echo $row_trxs['amount'] ?>">
 
    <input type="hidden" name="ord" value="<?php echo $row_trxs['transid'] ?>">
    

     
    <input type="hidden" name="token" class="token"><br />
    <div class="form-row"><br />
       
        <div id="card-element">
            <!-- a Stripe Element will be inserted here. -->
        </div>
 
        <!-- Used to display form errors -->
        <div id="card-errors" role="alert"></div>
        </div>
 <br />
        <button class="btybtn">Pay $<?php echo $row_trxs['amount'] ?> <i class='fa fa-stripe-s'></i></button>
</form>
<script src="https://js.stripe.com/v3/"></script>
<script>
    // Create a Stripe client
    var stripe = Stripe('pk_test_CPX60gfMJbwhPhLXPvszFoNH');
 
    // Create an instance of Elements
    var elements = stripe.elements();
 
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
    base: {
        iconColor: '#666EE8',
      color: '#31325F',
        lineHeight: '18px',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
        color: '#000',
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
    };
 
    // Create an instance of the card Element
    var card = elements.create('card', {style: style});
 
    // Add an instance of the card Element into the `card-element` <div>
    card.mount('#card-element');
 
    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });
 
    // Handle form submission
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
 
        stripe.createToken(card).then(function(result) {
            if (result.error) {
            // Inform the user if there was an error
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server. Use ajax request
                document.querySelector('.token').value = result.token.id;
                 
                document.getElementById('payment-form').submit();
            }
        });
    });
</script>

                                    </div> </div>
                                
                 
                
            
    </div></div>

  
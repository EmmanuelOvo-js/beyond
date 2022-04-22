<style>
    
    * {
  box-sizing: border-box;
}

/* Create three columns of equal width */
.columns {
  float: left;
  width: 25%;
  padding: 8px;
}

/* Style the list */
.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
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
  background-color:#7E929B;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

/* Change the width of the three columns to 100% 
(to stack horizontally on small screens) */
@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
    
</style>
<div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">
<div class="columns">
  <ul class="price">
    <li class="header">Free</li>
    <li class="grey">15 Day Listing</li>
    <li>Limited Buyer Access</li>
    <li>Limited Enquiries</li>
    
    <li>Free Plan</li>
    <li>Limited Advert & Profile</li>
    <li class="grey"><a href="signup.php?plan=free" class="buttons">Sign Up</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header1">Premium</li>
    <li class="grey">Unlimited listing</li>
    <li>No Contract</li>
    <li>More Buyer Enquiries</li>

    <li>Rolling Monthly Contract</li>
    <li>Full Advert & Profile</li>
    <li class="grey"><a href="signup.php?plan=premium" class="buttons">Sign Up</a></li>
  </ul>
</div>

</div>
</div>
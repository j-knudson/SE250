<!DOCTYPE html>
<html>
<title> Cart </title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    table, th, td{
      border: 1px solid black;
    }
    body {
    font-family: Arial;
    font-size: 17px;
    padding: 8px;
  }

  * {
    box-sizing: border-box;
  }

  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }

  .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
  }

  .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
  }

  .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
  }

  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }

  .container {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
  }

  input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  label {
    margin-bottom: 10px;
    display: block;
  }

  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }

  .btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }

  .btn:hover {
    background-color: #45a049;
  }

  a {
    color: #2196F3;
  }

  hr {
    border: 1px solid lightgrey;
  }

  span.price {
    float: right;
    color: grey;
  }

  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }
  header{
    height: 100px;
  }
  .content {
    min-height: calc(100vh - 170px);
  }
  footer{
    height: 70px;
  }
  #topMenu{
    width: 100%;
    background-color: red;
    color: white;
  }
    #bottomMenu{
    width: 100%;
    height: 70px;
    background-color:#cfcbcb;
    color:#ed0202;
    font-size: 20px;
  }
    a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: black;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
  </style>
  </head>
<body>
    <header>
      <h1>
        <table id = "topMenu">
          <tr>
			<th><a href="http://localhost/Pizzabase.html"><img src = "/images/LogotWT.png" style="height:100px;">Home</a></th>
            <th><a href="http://localhost/PizzaOrder.html">Order</a> </th>
            <th><a href="http://localhost/PizzaMenu.html">Menu</a></th>
            <th><a href="http://localhost/PizzaLogin.html">Login</a> </th>
            <th bgcolor="#308d05";><a href="http://localhost/PizzaCart.html"><img src = "/images/cart.png" style="width:100px;height:100px;"</th>
          </tr>
        </table>
		</h1>
	</header>
<div class = "content">
<!---***********************************************--->
<!---***********************************************--->
<!---End of Top Menu Area Put your code BELOW this--->
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="St. Cloud">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <label for="State"><b>State</b></label>
                <select>
               <option value="NA">None</option>
               <option value="AL">Alabama</option>
               <option value="AK">Alaska</option>
               <option value="AZ">Arizona</option>
               <option value="AR">Arkansas</option>
               <option value="CA">California</option>
               <option value="CO">Colorado</option>
               <option value="CT">Connecticut</option>
               <option value="DE">Delaware</option>
               <option value="DC">District Of Columbia</option>
               <option value="FL">Florida</option>
               <option value="GA">Georgia</option>
               <option value="HI">Hawaii</option>
               <option value="ID">Idaho</option>
               <option value="IL">Illinois</option>
               <option value="IN">Indiana</option>
               <option value="IA">Iowa</option>
               <option value="KS">Kansas</option>
               <option value="KY">Kentucky</option>
               <option value="LA">Louisiana</option>
               <option value="ME">Maine</option>
               <option value="MD">Maryland</option>
               <option value="MA">Massachusetts</option>
               <option value="MI">Michigan</option>
               <option value="MN">Minnesota</option>
               <option value="MS">Mississippi</option>
               <option value="MO">Missouri</option>
               <option value="MT">Montana</option>
               <option value="NE">Nebraska</option>
               <option value="NV">Nevada</option>
               <option value="NH">New Hampshire</option>
               <option value="NJ">New Jersey</option>
               <option value="NM">New Mexico</option>
               <option value="NY">New York</option>
               <option value="NC">North Carolina</option>
               <option value="ND">North Dakota</option>
               <option value="OH">Ohio</option>
               <option value="OK">Oklahoma</option>
               <option value="OR">Oregon</option>
               <option value="PA">Pennsylvania</option>
               <option value="RI">Rhode Island</option>
               <option value="SC">South Carolina</option>
               <option value="SD">South Dakota</option>
               <option value="TN">Tennessee</option>
               <option value="TX">Texas</option>
               <option value="UT">Utah</option>
               <option value="VT">Vermont</option>
               <option value="VA">Virginia</option>
               <option value="WA">Washington</option>
               <option value="WV">West Virginia</option>
               <option value="WI">Wisconsin</option>
               <option value="WY">Wyoming</option>
             </select>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2021">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Delivery address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>

</body>
</html>




<!---Start of Footer Area Put your code ABOVE this--->
<!---***********************************************--->
<!---***********************************************--->
</div>
<footer>
<table id = "bottomMenu">
  <tr>
    <th>Contact Us</th>
    <th>Nutrition</th>
    <th>Employment </th>
    <th>Join E-Club</th>
  </tr>
</table>
</footer>

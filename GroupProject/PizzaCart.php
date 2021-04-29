<!DOCTYPE html>
<html>
<title> Cart </title>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    table, th, td{
      border: 1px solid black;
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
<h1>Cart Page </h1>
<body>
    <header>
      <h1>
        <table id = "topMenu">
          <tr>
			<th><a href="http://localhost/Pizzabase.php"><img src = "/images/LogotWT.png" style="height:100px;">Home</a></th>
            <th><a href="http://localhost/PizzaOrder.php">Order</a> </th>
            <th><a href="http://localhost/PizzaMenu.php">Menu</a></th>
            <th><a href="http://localhost/PizzaLogin.php">Login</a> </th>
            <th bgcolor="#308d05";><a href="http://localhost/PizzaCart.php"><img src = "/images/cart.png" style="width:100px;height:100px;"</th>
          </tr>
        </table>
		</h1>
	</header>
<div class = "content">
<!---***********************************************--->
<!---***********************************************--->
<!---End of Top Menu Area Put your code BELOW this--->
<form class="credit-card">
<div class="form-header">
<h4 class="title">Credit card detail</h4>
</div>
<div class="form-body"><!-- Card Number --> <input type="text" class="card-number" placeholder="Card Number" /> <!-- Date Field -->
<div class="date-field">
<div class="month"><select name="Month">
<option value="january">January</option>
<option value="february">February</option>
<option value="march">March</option>
<option value="april">April</option>
<option value="may">May</option>
<option value="june">June</option>
<option value="july">July</option>
<option value="august">August</option>
<option value="september">September</option>
<option value="october">October</option>
<option value="november">November</option>
<option value="december">December</option>
</select></div>
<div class="year"><select name="Year">

<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
 <option value="2016">2025</option>
<option value="2017">2026</option>
<option value="2018">2027</option>
<option value="2019">2028</option>
</select></div>
</div>
<!-- Card Verification Field -->
<div class="card-verification">
<div class="cvv-input"><input type="text" placeholder="CVV" /></div>
<div class="cvv-details">
<p>3 or 4 digits usually found <br />on the signature strip</p>
</div>
</div>
<!-- Buttons --> <button type="submit" class="proceed-btn"><a href="#">Proceed</a></button> <button type="submit" class="paypal-btn"><a href="#">Pay With Cash</a></button></div>
</form>



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
message.txt
4 KB

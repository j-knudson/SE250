<!DOCTYPE html>
<html>
<title> Order </title>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    table, th, td{
      border: 1px solid black;
      td #Gray {background-color:LightSlateGray;}
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
  #subMenu{

  }
  #bottomMenu{
    width: 100%;
    height: 70px;
    background-color:#cfcbcb;
    color:#ed0202;
    font-size: 20px;
  }
  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields --> Testing half with centered*/
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
/* Testing half   */
input[type=htext], {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,input[type=htext]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #308d05;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn, .guestbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

  </style>
  </head>
<h1>Create Account Page </h1>
<body>
    <header>
      <h1>
        <table id = "topMenu">
          <tr>
            <th><a href="http://localhost/Pizzabase.html"><img src = "/images/LogotWT.png" style="height:100px;">Home</a></th>
            <th><a href="http://localhost/PizzaOrder.html">Order</a> </th>
            <th><a href="http://localhost/PizzaMenu.html">Menu</a></th>
            <th><a href="http://localhost/PizzaLogin.html">Login</a> </th>
            <th><a href="http://localhost/PizzaCart.html"><img src = "/images/cart.png" style="width:100px;height:100px;"</th>
          </tr>
        </table>
		</h1>
      <table id = " "
	</header>
<div class = "content">
<!---***********************************************--->
<!---***********************************************--->
<!---End of Top Menu Area Put your code BELOW this--->
               <!---//https://tryphp.w3schools.com/showphp.php?filename=demo_form_validation_required --->

  <?php/*
$action = $_GET["action"];
$myText = $_POST["mytext"];

if($action = "save") {
 $targetFolder = "/data";
 file_put_contents($targetFolder."order.txt", $myText);
}
*/?>
<h1> Guest Pizza Order </h1>
<p> Please complete this form to receive your order details and/or for delivery </p>

<p><label> <input type=radio name=mode> Carryout </label></p>
<p><label> <input type=radio name=mode> Delivery </label></p>
<form action="action_page.php" style="border:1px solid #ccc">
 <div class="container">
   <label for="email"><b>Email</b></label>
   <input type="text" placeholder="Enter Email" name="email" required>

   <label for="fname"><b>First name</b></label>
   <input type="text" placeholder="Enter First Name" name="fname" required>

   <label for="lname"><b>Last name</b></label>
   <input type="text" placeholder="Enter Last Name" name="lname" required>
 </div>
<p><strong> Please Enter your address </strong></p>
  <div class="container"
   <label for="street"><b>Address</b></label>
   <input type="text" placeholder="Street address" name="street" required>

   <label for="city"><b>City</b></label>
   <input type="htext" placeholder="City" name="city" required>

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

<label for="zip"><b>Zip Code</b></label>
<input type="text" placeholder="Zip Code" name="zip" required>



   <div class="clearfix">
     <button type="button" class="cancelbtn">Cancel</button>
     <button type="submit" class="guestbtn">Continue</button>
   </div>
 </div>
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

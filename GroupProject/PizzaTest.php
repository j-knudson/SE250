<!DOCTYPE html>
<html>
<title> Order </title>
<head>
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
  </style>
  </head>
<h1>New Order Page </h1>
<body>
    <header>
      <h1>
        <table id = "topMenu">
          <tr>

            <th bgcolor="#308d05";><a href="http://localhost/PizzaOrder.html">Order</a> </th>
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
<?php
$action = $_GET["action"];
$myText = $_POST["mytext"];

if($action = "save") {
 $targetFolder = "/data";
 file_put_contents($targetFolder."order.txt", $myText);
}
?>

<form action="?action=save" name="PizzaForm" method="post">  <!---//https://www.w3schools.com/php/php_form_validation.asp --->
 <!---<p><label>Customer name: <input></label></p>--->
 <fieldset>
  <legend><strong> Pizza Size </strong> </legend>
  <p><label> <input type=radio name=size> Small </label></p>
  <p><label> <input type=radio name=size> Medium </label></p>
  <p><label> <input type=radio name=size> Large </label></p>
 </fieldset>
<fieldset>
 <legend><strong> Crust </strong> </legend>
 <p><label><input type=radio name = crust>Thin Crust</label></p>
 <p><label><input type=radio name = crust> Hand-Tossed Crust </label></p>
 <p><label><input type=radio name= crust> Deep Dish </label></p>
 </fieldset>
 <fieldset>
  <legend><strong> Sauce </strong> </legend>
  <p><label><input type=radio name = sauce>Less Sauce</label></p>
  <p><label><input type=radio name = sauce>Normal Sauce</label></p>
  <p><label><input type=radio name= sauce>More Sauce</label></p>
  </fieldset>
  <fieldset>
   <legend><strong> Cheese </strong> </legend>
   <p><label><input type=radio name = cheese>Less Cheese</label></p>
   <p><label><input type=radio name = cheese>Normal Cheese</label></p>
   <p><label><input type=radio name= cheese>More Cheese</label></p>
   </fieldset>
   <fieldset>
     <legend><strong> Pizza Toppings</strong></legend>
     <p><label> <input type = checkbox> Pepperoni </label></p>
     <p><label> <input type = checkbox> Sausage </label></p>
     <p><label> <input type = checkbox> Mushroom </label></p>
     <p><label> <input type = checkbox> Pineapple </label></p>
     <p><label> <input type = checkbox> Jalape&ntilde;o </label></p>
     <p><label> <input type = checkbox> Onion </label></p>
    </fieldset>
    <p><button>Add pizza to cart </button><p>
    <p><label>Preferred delivery time: <input type=time min="11:00" max="21:00" step="900"></label></p>
    <p><label>Delivery instructions: <textarea></textarea></label></p>
    <p><button>Checkout</button><p>
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

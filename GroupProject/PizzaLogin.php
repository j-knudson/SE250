<!DOCTYPE html>
<html>
<title> Login </title>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
   body{
		
		text-align: center;
	}
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
<body>
    <header>
      <h1>
        <table id = "topMenu">
          <tr>
			<th><a href="http://localhost/Pizzabase.html"><img src = "/images/LogotWT.png" style="height:100px;">Home</a></th>
            <th><a href="http://localhost/PizzaOrder.html">Order</a> </th>
            <th><a href="http://localhost/PizzaMenu.html">Menu</a></th>
            <th bgcolor="#308d05";><a href="http://localhost/PizzaLogin.html">Login</a> </th>
            <th><a href="http://localhost/PizzaCart.html"><img src = "/images/cart.png" style="width:100px;height:100px;"</th>
          </tr>
        </table>
		</h1>
	</header>
<div class = "content">
<!---***********************************************--->
<!---***********************************************--->
<!---End of Top Menu Area Put your code BELOW this--->
        <h1>Welcome to Singh's Squadron Pizza!</h1>
        <h2>To continue with your account, please enter your user information below</h2>
        <form action="C:\Program Files (x86)\Ampps\www\Mitchell Hayen\users.php" method="post">
            Username: <input type="text" name="uname" /><br /><br />
            Password: <input type="text" name="pw" /><br /><br />
            <input type="submit" name="submit" value="Submit" />
        </form>
		<h2>Want to create an account?</h2>
		<form action="createAccount.php">
			<input type="submit" value="Create Acount" />
		</form>
			
		<h2>Or you can choose to continue as guest</h2>
		<form action="guest.php">
		<input type="submit" name="submit" value="Continue as Guest" />
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
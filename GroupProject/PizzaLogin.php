<?php
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('Mitchell' => array('PW' => '12345', 'Address' => '123 4th street St Cloud MN','Name' => 'Mitchell Hayen'), 'John' => array('PW' => '54321', 'Address' => '321 4th Street St Cloud MN', 'Name' => 'John Knudson'), 'Jake' => array('PW' => '00000', 'Address' => '213 4th Street St Cloud MN','Name' => 'Jake Klockenga'));
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username]['PW'] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:PizzaOrder.html");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
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
<br>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>
<h2>Want to create an account?</h2>
		<form action="createAccount.php">
			<input type="submit" value="Create Acount" />
		</form>
			
		<h2>Or you can choose to continue as guest</h2>
		<form action="guest.php">
		<input type="submit" name="submit" value="Continue as Guest" />
		</form>
</body>
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
</html>

<?php
   require_once 'loginFile.php';
   $conn = new mysqli($hn, $un, $pw, $db);
   if ($conn->connect_error) die("Fatal Error");
?>
<?php
//clear POST values
//$Username = clean($_POST['Username']);
//$Password = clean($_POST['Password']);
unset($Username);

/* Check and assign submitted Username and Password to new variable */
/* Check Login form submitted */
if(isset($_POST['Submit'])){
  $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
  $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
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
			<th><a href="http://localhost/Pizzabase.php"><img src = "/images/LogotWT.png" style="height:100px;">Home</a></th>
            <th><a href="http://localhost/PizzaOrder.php">Order</a> </th>
            <th><a href="http://localhost/PizzaMenu.php">Menu</a></th>
            <th bgcolor="#308d05";><a href="http://localhost/PizzaLogin.php">Login</a> </th>
            <th><a href="http://localhost/PizzaCart.php"><img src = "/images/cart.png" style="width:100px;height:100px;"</th>
          </tr>
        </table>
		</h1>
	</header>
<div class = "content">
<!---***********************************************--->
<!---***********************************************--->
<!---End of Top Menu Area Put your code BELOW this--->
<br>
<form action="PizzaLogin.php" method="post" name="Login_Form">
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
      <td><input name="Username" type="text" class="Input"</td>
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




<?php


$query = "SELECT * FROM user_account WHERE email  ='$Username'";
$result = $conn->query($query);
if (!$result) die ("Database access failed");
$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
$row = $result->fetch_array(MYSQLI_NUM);
$r0 = htmlspecialchars($row[0]);
$r1 = htmlspecialchars($row[1]);
$r2 = htmlspecialchars($row[2]);
$r3 = htmlspecialchars($row[3]);
//$r4 = htmlspecialchars($row[4]);
if ($Password == $r1){
  echo '<strong>'.$r2 .' ' . $r3.'</strong>';
  echo " You are now logged into your Singh's Squadron pizza account";
}
else
  echo " Incorrect username or password. Please try again";
?>
<br>
</div>








<?php

}
$result->close();
$conn->close();
function get_post($conn, $var)
{
return $conn->real_escape_string($_POST[$var]);
}
?>
<!---Start of Footer Area Put your code ABOVE this--->
<!---***********************************************--->
<!---***********************************************--->
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

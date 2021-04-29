<html>
<body>
<?php $_SESSION[pizzaOrdered]=array() ?>


<h1> Your pizza selection: </h1><br>
<?php
if(isset($_POST['size'])){
	$pizza_size= $_POST ['size'];
} else {
	$pizza_size= "No Button Selected";
}
echo 'Size: ' . $pizza_size;
array_push($_SESSION[pizzaOrdered],$pizza_size);
?>
<br>


<?php
if(isset($_POST['crust'])){
	$crust_type= $_POST ['crust'];
} else {
	$crust_type= "No Button Selected";
}
echo 'Crust: ' . $crust_type;
array_push($_SESSION[pizzaOrdered],$crust_type);
?><br>

<?php
if(isset($_POST['sauce'])){
	$sauce_amount= $_POST ['sauce'];
} else {
	$sauce_amount= "No Button Selected";
}
echo 'Sauce: ' . $sauce_amount;
?><br>

<?php
if(isset($_POST['cheese'])){
	$cheese_amount= $_POST ['cheese'];
} else {
	$cheese_amount= "No Button Selected";
}
echo 'Cheese: ' . $cheese_amount;
?><br>
<?php

$user_toppings= $_POST['toppings'];

if(isset($user_toppings)) {
echo 'Your optional toppings:' .  '<br>';
foreach ($user_toppings as $key => $value)
{
echo $value . '<br>';
}
}
else
{
echo "You haven't selected any toppings";
}
?>



<p>  Testing array printing </p> <br>
<?php  //Display contents of Cart

$max=sizeof($_SESSION['pizzaOrdered']);
//echo $max;
for($i=0; $i<$max; $i++) {
  echo $pizzaOrdered[$i];
  echo "<br>";
}

 ?>








</body>
</html

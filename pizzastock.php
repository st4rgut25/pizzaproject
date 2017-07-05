<?php

require("pizzacnn.php");
$query = "SELECT * FROM `inventory`";
$topping = $_POST['topping'];
$number = $_POST['number']*7.99;
if ($query_run=mysqli_query($cnn,$query)){
echo "query successful";
$sql="INSERT INTO inventory (toppings,number) VALUES ('$topping','$number')";
$success = $cnn->query($sql);
if ($success){echo "query recorded successfully";
header("Location:pizzaform.php?numpizzas=$number");}//sneak pizza count in URL
else {echo "Error:".$sql."<br>".$cnn->error;}
}
else {die("query unsuccessful");}

?>

<?php

require("pizzacnn.php");

$query = "SELECT * FROM `customers`";

if ($query_run = mysqli_query($cnn,$query)){

echo "table found";

if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['money'])){
header("Location:pizzaform.php?numpizzas=".$_POST['money']."&msg=please fill out all the fields again again");
}

$sql = "INSERT INTO customers (name,address,phone_number, money,feedback) VALUES ('{$_POST['name']}','{$_POST['address']}','{$_POST['phone']}','{$_POST['money']}','{$_POST['feedback']}')";

if ($cnn->query($sql)===TRUE){echo "record successfully created";}
else {echo "Error:".$sql."<br>".$cnn->error;}

}
else {
die("table was not found");
}
$cnn->close();

?>

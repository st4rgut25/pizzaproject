<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

$servername = "localhost";
$username = "root";
$password = "3141&juno";



$cnn = mysqli_connect($servername,$username,$password);

if ($cnn){
echo "connection to mysql successful";
$cnndb = mysqli_select_db($cnn,"pizza");
if ($cnndb){
echo "connection to database pizza succesful";
}
else {
die("connection to database pizza unsuccessful");
}

}
else {
die("connection to mysql unsuccessful");
}


?>

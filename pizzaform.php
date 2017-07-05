<style type="text/css">
body{
font-family:"Arial Narrow",Helvetica,sans-serif;
background-image:url("peppi.jpeg");
}
form{
padding:15px;
width:40%;
margin-left:30%;
margin-top:20%;
display:inline-block;
background-color:#ED6A3E;
}

input{
display:inline-block;
float:left;
margin-bottom:2px;
}

input[type="text"], select, textarea{
background-color:yellow;
}

label{
text-align:right;
margin-right:2px;
float:left;
clear:left;
width:100px;
display:inline-block;
}

input[type=submit]{
clear:left;
margin-left:35%;
}

h1{
text-align:center;
}

#warning{
width:100%;
padding:3px;
background-color:red;
color:white;
display:inline-block;
margin-bottom:0px;
}

</style>
<?php

echo 
'<body>
<form action="pizza.php" method="post">
<h1>Please submit your delivery info.</h1>
<label>Name:</label> <input type="text" name="name">
<label>Address:</label> <input type="text" name="address">
<label>Phone:</label> <input type="text" name="phone">
<label>Money: </label><input type="text" name="money" readonly="readonly" value="'.$_GET["numpizzas"].'" >
<label>Feedback:</label> <input type="text" name="feedback">
<input type="submit" value="Submit">
</form>
</body>';

if ($_GET["msg"]){
echo '<div id="warning">You didn\'t fill out all the fields</div>';
}



?>



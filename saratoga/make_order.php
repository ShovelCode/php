<?php
session_start();
$host=204.158.158.108;
//$host="localhost";
$username="cosc445504";
$password="cosc445504sm16";
$db_name="cosc445504";
$tbl_name="orders";
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
//$myusername=htmlentities($_POST['myusername']);
//$mypassword=htmlentities($_POST['mypassword']);
$value1 = $_POST['name'];
$value2 = $_POST['itemnum'];
$value3 = $_POST['quantity'];
/////
$sql="INSERT INTO $db_name.$tbl_name ('Orderer', 'ProductNumber', 'Quantity')
	  VALUES($value1 , $value2, $value3)";
mysql_query($sql);
//////

header("location:Welcome.php");
}
else {
header();
}
session_destroy();
?>

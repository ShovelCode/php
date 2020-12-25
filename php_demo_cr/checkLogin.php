<?php
session_start();
$host="localhost";
$username="cosc445504";
$password="cosc445504sm16";
$db_name="cosc445504";
$tbl_name="user_data";

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$myusername=htmlentities($_POST['myusername']);
$mypassword=htmlentities($_POST['mypassword']);

$sql="SELECT * FROM $tbl_name WHERE User_name='$myusername'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){
$name="SELECT User_Name FROM $tbl_name WHERE User_Pass='$mypassword'";
$result0=mysql_query($name);
$first=mysql_result($result0,0);

$_SESSION['FIRST'] = $first;

header("location:Welcome.php");
}
else {
header();
}
?>
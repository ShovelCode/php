<?php
session_start();
$host="localhost";
$username="re439504";
$password="re439504s17";
$db_name="re439504";
$tbl_name="admin";

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$myusername=htmlentities($_POST['myusername']);
$mypassword=htmlentities($_POST['mypassword']);

$sql="SELECT * FROM $tbl_name WHERE User_name='$myusername'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){
$name="SELECT username FROM $tbl_name WHERE password='$mypassword'";
$result0=mysql_query($name);
$first=mysql_result($result0,0);

$_SESSION['FIRST'] = $first;

header("location:adminfunctions5.php");
}
else {
header();
}
?>
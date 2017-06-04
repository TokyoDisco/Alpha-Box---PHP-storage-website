<?php

$host="localhost";
$DBlog="root"; 
$DBpass="root"; 
$db_name="Users2"; 
$tbl_name="users";

mysql_connect("$host", "$DBlog", "$DBpass")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");



$login=$_POST['LOGON']; 
$pass=$_POST['PASS']; 


$login = stripslashes($login);
$pass = stripslashes($pass);
$login = mysql_real_escape_string($login);
$pass = mysql_real_escape_string($pass);
$sql="SELECT * FROM $tbl_name WHERE Login='$login' and Password='$pass'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);


if($count > 0){

session_register("LOGON");
session_register("PASS"); 
echo "success" ;
}
else {
echo "Wrong Username or Password";
}

?>


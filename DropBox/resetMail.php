<?php


$myBase = "xxxxx" ;

$myUser = "xxxx";
$myPass = 'xxxxx' ;
$myServer ='xxxxx';




$conn = new mysqli($myServer, $myUser, $myUser, $myBase);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully ";

mysql_connect($myServer, $myUser, $myPass);
mysql_select_db($myBase);



$mail = $_REQUEST['email'];
$check = "SELECT * FROM MyUsers WHERE Email ='$mail' " ;
$result = mysql_query($check) or die (mysql_error());
$count = mysql_num_rows($result);


if ($count == 1)
{
    header("url: logonA.html");

    $pass = "SELECT Password FROM MyUsers " ;
    $datapass = query($pass);
    $login = "SELECT Login FROM MyUsers " ;
    $datalogin = query($login);
     echo "success";
     $message = "Our password is '$datapass' and our login is '$datalogin' " ;
     mail($mail, 'Password', $message);
     echo "'.$message'";
        
    echo "success" ;
    header("url: logonA.html");



}

else
{
    echo "    account bound to this email doesn't exits. Return to previous page in 5 seconds" ;
    header("refresh:5;url=resetPass.html");

}




?>
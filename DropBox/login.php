<?php
session_start();
$myBase = "xxxx" ;

$myUser = "xxxx";
$myPass = 'xxxxx' ;
$myServer = 'xxxxx';





$conn = new mysqli($myServer, $myUser, $myPass, $myBase);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully ";

mysql_connect($myServer, $myUser, $myPass);
mysql_select_db($myBase);

$login = $_REQUEST['LOGON'];
$pass = $_REQUEST['PASS'];
$dir = "UsersSpace" ; 



$_SESSION['user'] = $login ;

$check = "SELECT * FROM MyUsers WHERE Login ='$login' AND password ='$pass' " ;
$result = mysql_query($check) or die (mysql_error());
$count = mysql_num_rows($result);



if ($count == 1) 
    {
        echo $count ;
        echo "success";
        $url = "makedir.php?dir=$login&foldername = $dir ";
        header("location: $url"); 
        

    }

else {
    
    echo "Wrong password or login. Return to previous page in 5 seconds" ;
    header("refresh:5;url=logonA.html");
    die ;
  

}





$conn->close();

















?>


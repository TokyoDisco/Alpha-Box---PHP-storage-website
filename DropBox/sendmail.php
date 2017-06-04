<?php

session_start();
$myServer = "localhost";
$myUser = "root";
$myPass = "root";
$myBase = "Users2";


$conn = new mysqli($myServer, $myUser, $myPass, $myBase);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully ";

mysql_connect($myServer, $myUser, $myPass);
mysql_select_db($myBase);


$mail = $_GET['mail'];






$check = "SELECT * FROM MyUsers WHERE Email ='$mail' " ;
$result = mysql_query($check) or die (mysql_error());
$count = mysql_num_rows($result);



if ($count == 1) 
    {
        $pass = "SELECT Password FROM MyUsers " ;
        $login = "SELECT Login FROM MyUsers " ;
        echo "success";
        $message = "Our password is '$pass' and our login is '$login' " ;
        mail($mail, 'Password', $message);
        
        
        $url = "logon.html ";
        header("location: $url"); 
        

    }

else {
    
    echo "Wrong password or login. Return to previous page in 5 seconds" ;
    header("refresh:5;url=logonA.html");
    die ;
  

}

/*
// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('caffeinated@example.com', 'My Subject', $message);

*/













?>


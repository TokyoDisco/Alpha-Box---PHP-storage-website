<?php

$myServer = "localhost";
$myUser = "root";
$myPass = "root";
$myBase = "Users2";



$myBase = "XXXXX" ;

$myUser = "XXXXX";
$myPass = 'XXXXX' ;
$myServer = 'XXXXX';



$conn = new mysqli($myServer, $myUser, $myPass, $myBase);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo " Connected successfully ";

mysql_connect($myServer, $myUser, $myPass);
mysql_select_db($myBase);

$query = "SELECT ID FROM MyUsers";
$result = mysqli_query($conn, $query);


if (empty($result)) {
    
    $sqlnew = "CREATE TABLE MyUsers (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Email VARCHAR(30) NOT NULL UNIQUE ,
Login VARCHAR(30) NOT NULL UNIQUE,
Password VARCHAR(50) NOT NULL)" ;

    if ($conn->query($sqlnew) === true) {
            echo "Table MyGuests created successfully";
            header("refresh:5;url=register.html");
}           
else {
        echo "Error creating table: " . $conn->error;
}

}


else {


        $mail = $_REQUEST['email'];
        $login = $_REQUEST['logon'];
        $pass = $_REQUEST['pass1'];


        $sqlrep =  mysql_query("SELECT Email, Login  FROM MyUsers WHERE Email='$mail' AND Login='$login' ");
        $num_rows = mysql_num_rows($sqlrep); 

                if ($num_rows > 0) 
    {
   
                die("This exist" ) ;
    }

                else {
                $sql = "INSERT INTO myusers (Email, Login, Password)
VALUES ('$mail', '$login', '$pass')";

                    if(mysqli_query($conn, $sql)) 
                   {
                echo "New record created successfully";
                  header('location: LogonA.html');
                    } 
                     else {
                        echo " This account exist " ;
                        echo " Return to register page in 5 seconds ";
                        
 
                       
                       header("refresh:5;url=register.html");
}
}
}



$conn->close();




?>






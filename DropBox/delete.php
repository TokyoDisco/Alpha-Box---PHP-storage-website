<?php
session_start();

$filename = $_GET['file']; //get the filename
if (is_file($filename))
{
    
    unlink($filename); //delete it
}
else 
{
    unlink($filename);    
}


$login = $_SESSION['user'];
$url = "Frame.php?dir=$login";
        header("location: $url"); 

//redirect back to the other page

?>
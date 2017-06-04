<?php


session_start();

$filename = $_GET['file']; //get the filename
if (is_dir($filename)) 
{
    
    rmdir($filename); //delete it
}


$login = $_SESSION['user'];
$url = "Frame.php?dir=$login";
        header("location: $url"); 

?>
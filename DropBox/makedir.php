<?php
session_start();

$folder_name = $_REQUEST["foldername"];
$dir = $_GET["dir"] ;


$new_folder=mkdir($dir.$folder_name, 0777, true);
header("location: testF.php") ;










?>


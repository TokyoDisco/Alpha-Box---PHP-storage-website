<?php
session_start();
$user = $_SESSION['user'];
$foldername = $_REQUEST["newname"];




echo  '<a href="RenameMode.php?name=' .$foldername. '&dir='.$user.'  ">click</a></ul>  </ul>'; 












?>


<?php
session_start();
$user = $_SESSION['user'];
$foldername = $_REQUEST["newname"];




echo  '<a href="dirSelect.php?foldername='.$foldername. '&dir='.$user.'  ">click</a></ul>  </ul>'; 












?>


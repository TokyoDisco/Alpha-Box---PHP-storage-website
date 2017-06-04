<?php
$OldName = $_GET['file'];

$Dir = $_GET['dir'];
$Name = $_GET['name'] ;
$ext = $_GET['ext'];

$NewName = $Dir + $Name ;

rename($OldName, $Dir.$Name.".".$ext );

header ("location: testF.php") ;




?>


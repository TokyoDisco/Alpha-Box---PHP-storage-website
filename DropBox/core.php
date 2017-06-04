<?php
define("BASE_DIR","../images");

function searchDir($p="",$f=""){

$contents=array();
$p=trim($p);
$f=trim($f);
if($p=="")$p=BASE_DIR;

if(!is_dir($p))$p=dirname($p);
$filter=($f=="")?array():explode(",",$f);

$files=@scandir($p);
if (!$files)return "";

for ($i=0;$i<count($files);$i++){
	$fName=$files[$i];
	if(substr($p,-1)!="/")$p.="/";
	$fPath=$p.$fName;

	$isDir=is_dir($fPath);
	$add=false;
	$fType="folder";
	
	if (!$isDir){
		$ft=strtolower(substr($files[$i],strrpos($files[$i],".")+1));
		$fType=$ft;	
		if ($f!=""){
			if (in_array($ft,$filter))$add=true;
		}else{
			$add=true;
		}
	}else{
		if($fName!=".")$add=true;
		if($fName==".."){
			$tempar=explode("/",$fPath);
			array_splice($tempar,-2);
			$fPath=implode("/",$tempar);
			if($fPath=="..")$fPath="";
		}
	}
	
	if ($add)$contents[]=array("fPath"=>$fPath,"fName"=>$fName,"fType"=>$fType);
}
return $contents;
}

$p=isset($_POST["path"])?$_POST["path"]:"";
$f=isset($_POST["filter"])?$_POST["filter"]:"";
echo json_encode(searchDir($p,$f));
?>
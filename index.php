<?php 

$dir    = 'uploads/';
$files  = scandir($dir);
$out=[];

foreach ($files as $key => $value) {
	if (in_array($value, [".","..",".DS_Store"])){
		unset($files[$key]);
	}
	else 
		echo "<a href='/uploads/ " + $value +"'";
}


?>

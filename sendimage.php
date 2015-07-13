<?php 

// Debugging
// echo "<pre>";
// var_dump($_FILES);
// var_dump($_POST);
// echo "</pre>";


$name=$_POST['name'];
if($name ){
	file_put_contents("uploads/".time().$_FILES["image"]["name"] ,file_get_contents($_FILES["image"]["tmp_name"]));
	$out["result"]="ok";
	echo json_encode($out);
}
else
	header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
?>

<?php if(!defined('directAccess')){ header('location: ../?content=404');}
$upRes="";
ini_set('upload_max_filesize', '10M');
ini_set('post_max_size', '10M');
ini_set('max_input_time', 120);
ini_set('max_execution_time',120);
$target_dir = "/var/www/html/CUMBRE/files/";
$target_file = $target_dir .date("HmdHms"). str_replace(" ","_",basename($_FILES["fileUpload"]["name"]));
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check file size
if($FileType=="" || !isset($FileType) || ($FileType!=="xls" && $FileType!="xlsx")) {
	$upRes="Tipo de archivo no valido";
}elseif ($_FILES["fileUpload"]["size"] > 10000) {
	$upRes="Archivo muy grande, maximo 10 Mb";
}elseif (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
	$upRes="OK";
}else {
	$upRes="Error";
}
print $upRes;
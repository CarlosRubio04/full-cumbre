<?php
require_once '../load.php';
if (filter_input(INPUT_POST, "createTest",FILTER_SANITIZE_STRING)==1) {
	$id=filter_input(INPUT_POST, "id",FILTER_SANITIZE_NUMBER_INT);
	print createTest($message,$id);
}
function createTest($message,$id){
	$question=filter_input(INPUT_POST, "question",FILTER_SANITIZE_STRING);
	$opc1=filter_input(INPUT_POST, "opc1",FILTER_SANITIZE_STRING);
	$opc2=filter_input(INPUT_POST, "opc2",FILTER_SANITIZE_STRING);
	$opc3=filter_input(INPUT_POST, "opc3",FILTER_SANITIZE_STRING);
	$opc4=filter_input(INPUT_POST, "opc4",FILTER_SANITIZE_STRING);
	$answer=filter_input(INPUT_POST, "answer",FILTER_SANITIZE_NUMBER_INT);
	$objT=new TestModel();
	$res=$objT->create(new Test(null,$question,$opc1,$opc2,$opc3,$opc4,$answer,$id));
	
	if(is_numeric($res)){
		$message="Pregunta Creada";
		Common::logg("Creación de Pregunta",$message);
	}else{
		$message="Error al crear la pregunta$res";
		Common::logg("Creación de Pregunta",$message.$res);
	}
	return $message;
}
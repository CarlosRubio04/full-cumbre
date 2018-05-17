<?php
$id=filter_input(INPUT_POST, "id",FILTER_SANITIZE_STRING);
$name=filter_input(INPUT_POST, "name",FILTER_SANITIZE_STRING);
$summary=filter_input(INPUT_POST, "summary",FILTER_SANITIZE_STRING);
$introduction=filter_input(INPUT_POST, "introduction",FILTER_SANITIZE_STRING);
$definition=filter_input(INPUT_POST, "definition",FILTER_SANITIZE_STRING);
$megas=filter_input(INPUT_POST, "megas",FILTER_SANITIZE_STRING);
$justification=filter_input(INPUT_POST, "justification",FILTER_SANITIZE_STRING);
$description=filter_input(INPUT_POST, "description",FILTER_SANITIZE_STRING);
$objective=filter_input(INPUT_POST, "objective",FILTER_SANITIZE_STRING);
$objectiveOthers=filter_input(INPUT_POST, "objectiveOthers",FILTER_SANITIZE_STRING);
$startDate=filter_input(INPUT_POST, "startDate",FILTER_SANITIZE_STRING);
$endDate=filter_input(INPUT_POST, "endDate",FILTER_SANITIZE_STRING);
$methodology=filter_input(INPUT_POST, "methodology",FILTER_SANITIZE_STRING);
$expectedResults=filter_input(INPUT_POST, "expectedResults",FILTER_SANITIZE_STRING);
$execution=filter_input(INPUT_POST, "execution",FILTER_SANITIZE_STRING);
$results=filter_input(INPUT_POST, "results",FILTER_SANITIZE_STRING);
$analysis=filter_input(INPUT_POST, "analysis",FILTER_SANITIZE_STRING);
$products=filter_input(INPUT_POST, "products",FILTER_SANITIZE_STRING);
$conclutions=filter_input(INPUT_POST, "conclutions",FILTER_SANITIZE_STRING);
$bibliography=filter_input(INPUT_POST, "bibliography",FILTER_SANITIZE_STRING);
$objP=new ProjectModel();
$infoAux=$objP->get($id);

$projectInfo=new Project($id,$name,$summary,$introduction,$definition,$megas,$justification,$description,$objective,$objectiveOthers,$startDate,$endDate,$methodology,$expectedResults,$execution,$results,$analysis,$products,$conclutions,$bibliography);
if(isset($infoAux)){
	//print_r($projectInfo);
	$res=$objP->update($projectInfo);
}else{
	$res=$objP->create($projectInfo);
}
if(is_numeric($res) && !isset($infoAux)){
	$_SESSION['projectINFO']=$projectInfo->projectInfo();
	echo "datos guardados!";
	Common::logg("Definición del Proyecto","Proyecto Creado:".$_SESSION['projectINFO']);
}elseif(is_numeric($res)){
	if(!isset($_SESSION['projectINFO'])|| $_SESSION['projectINFO']!==$projectInfo->projectInfo()){
		Common::logg("Definición del Proyecto","Proyecto Modificado:".$projectInfo->projectInfo());
		$_SESSION['projectINFO']=$projectInfo->projectInfo();
	}
	echo "datos Modificados!";
}else{
	echo $res;
}
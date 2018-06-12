<?php
require_once '../load.php';
if (filter_input(INPUT_POST, "createPro",FILTER_SANITIZE_STRING)==1) {
	print createProduct($message);
}
function createProduct(){
	$_SESSION['productValues']= filter_input_array(INPUT_POST);
	$name=filter_input(INPUT_POST, "nombre",FILTER_SANITIZE_STRING);
	$fecha=filter_input(INPUT_POST, "fecha",FILTER_SANITIZE_STRING);
	$desc=filter_input(INPUT_POST, "desc",FILTER_SANITIZE_STRING);
	$assignedId=[];
	$tasksId=[];
	$assignedSTR=$tasksSTR="";
	foreach (filter_input_array(INPUT_POST) as $key => $value) {
		if(substr($key,0,13)=="assignedTaskP"){
			$assignedId[]=substr($key,13);
			$assignedSTR.="$value,";
		}elseif(substr($key,0,8)=="listTask"){
			$tasksId[]=substr($key,8);
			$tasksSTR.="$value,";
		}
	}
	if(count($assignedId)<4 && filter_input(INPUT_POST, 'assignedTaskPGroup',FILTER_SANITIZE_STRING)!='Group'){
		$message="Un entregable debe tener por lo menos 4 partisipantes asignados";
		Common::logg("Creación de Entregable",$message);
		return $message;
	}
	$assignedSTR=rtrim($assignedSTR,",");
	$tasksSTR=rtrim($tasksSTR,",");
	$_SESSION['productValues']['responsable']=$assignedId;
	$_SESSION['productValues']['tasks']=$tasksId;
	$assignedIdS= "|".implode("|", $assignedId)."|";
	$tasksS= implode("|", $tasksId);
	if(filter_input(INPUT_POST, "assignedGroup",FILTER_SANITIZE_STRING)!==NULL){
		$objU=new UserModel();
		$userI=$objU->get($_SESSION['loginIdCumbre']);
		$assignedIdS="|Group|".$userI->getGroupId()."|";
	}
	if(empty($name) ||empty($desc) ||empty($fecha) ||empty($assignedIdS)|| $assignedIdS=='||' ||empty($tasksS)){
		$message="Datos de entregable no validos, debe llenar todos los campos $tasksS";
		Common::logg("Creación de Entregable",$message);
		return $message;
	}
	$objProduct=new ProductModel();
	$res=$objProduct->create(new Product(null,$name,$desc,$fecha,$assignedIdS));
	if(is_numeric($res)){
		$message="Entregable Creado";
		foreach ($tasksId as $value) {
			$objProduct->assignToTask($res, $value);
		}
		
		$objT=new TaskModel();
		$tInfo=$objT->get($tasksId[0]);
		$objPh=new PhaseModel();
		$phInfo=$objPh->get($tInfo->getPhaseId());
		$objP=new ProjectModel();
		$pInfo=$objP->get($phInfo->getProjectId());
		
		//add record to score table
		$objSc=new ScoreModel();
		$infoSc=$objSc->searchByCampTask($phInfo->getProjectId(), 'Campamento Base',2);
		if(empty($infoSc)){
			$objG=new GroupModel();
			$users=$objG->getUsers($phInfo->getProjectId());
			foreach ($users as $value) {
				$objSc->create(new Score(null,'Campamento Base',2,5,'product',$res,$value->getId()));
			}
		}
		
		//add record to score table with zero grade for camp two
		$objSc->productsGrade(0,$res);
		
		unset($_SESSION['productValues']);
		Common::logg("Creacion de Producto",$message."=> Nombre:$name,desc:$desc,Fecha:$fecha,$assignedSTR,Tareas:$tasksSTR");
		$MSGdata=['USER'=>$_SESSION['loginNameCumbre'],'NAME'=>$name,'TASKS'=>$tasksSTR,'PROJECT'=>$pInfo->getName(),'ID'=>$res];
		
		//notify assigned users and coach
		foreach ($assignedId as $value) {
			Notify::send('NEWPRODUCT', $value, $MSGdata);
		}
		//notify coach
		$objGroup=new GroupModel();
		$groupI=$objGroup->get($phInfo->getProjectId());
		Notify::send('NEWPRODUCT', $groupI->getCoachId(), $MSGdata);
	}else{
		$message="Error al crear el entregable $res";
		Common::logg("Creación de Entregable",$message);
	}
	return $message;
}
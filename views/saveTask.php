<?php
require_once '../load.php';
if (filter_input(INPUT_POST, "createTask",FILTER_SANITIZE_STRING)==1) {
	print createTask($message);
}
function createTask(){
	$_SESSION['taskValues']= filter_input_array(INPUT_POST);
	$name=filter_input(INPUT_POST, "nombre",FILTER_SANITIZE_STRING);
	$task=filter_input(INPUT_POST, "tarea",FILTER_SANITIZE_STRING);
	$startDate=filter_input(INPUT_POST, "fechaIni",FILTER_SANITIZE_STRING);
	$endDate=filter_input(INPUT_POST, "fechaFin",FILTER_SANITIZE_STRING);
	$phaseId= filter_input(INPUT_POST,"fase",FILTER_SANITIZE_STRING);
	$assignedId=[];
	$assignedSTR="";
	foreach (filter_input_array(INPUT_POST) as $key => $value) {
		if(substr($key,0,12)=="assignedTask"){
			$assignedId[]=substr($key,12);
			$assignedSTR.="$value,";
		}
	}
	$assignedSTR=rtrim($assignedSTR,",");
	$_SESSION['taskValues']['responsable']=$assignedId;
	$assignedIdS= "|".implode("|", $assignedId)."|";
	if(filter_input(INPUT_POST, "assignedGroup",FILTER_SANITIZE_STRING)!==NULL){
		$objU=new UserModel();
		$userI=$objU->get($_SESSION['loginIdCumbre']);
		$assignedIdS="|Group|".$userI->getGroupId()."|";
	}
	if(empty($name) ||empty($task) ||empty($startDate) ||empty($endDate) ||empty($assignedIdS) || $assignedIdS=='||' ||empty($phaseId)){
		$message="Datos de actividad no validos, debe llenar todos los campos";
		Common::logg("Creación de Tarea",$message);
		return $message;
	}
	$objTask=new TaskModel();
	$numTask=$objTask->searchFromPhase($phaseId);
	if(count($numTask)>=5){
		$message="No se puede crear la actividad, Maximo 5 actividad por fase";
		Common::logg("Creación de Tarea",$message);
		return $message;
	}
	
	$res=$objTask->createTask($message,new Task(null,$name,$task,$startDate,$endDate,$assignedIdS,$phaseId));
	
	if($message=="Tarea Creada"){
		unset($_SESSION['taskValues']);
		$message="Tarea Creada";
		$objPh=new PhaseModel();
		$phInfo=$objPh->get($phaseId);
		Common::logg("Creacion de Tarea",$message."=> Nombre:$name,Tarea:$task,Inicio:$startDate,Fin:$endDate,$assignedSTR,Fase:".$phInfo->getName());
		$objP=new ProjectModel();
		$pInfo=$objP->get($phInfo->getProjectId());
		$MSGdata=['USER'=>$_SESSION['loginNameCumbre'],'TASK'=>$name,'PHASE'=>$phInfo->getName(),'PROJECT'=>$pInfo->getName(),'ID'=>$res];
		
		//notify assigned users and coach
		$objGroup=new GroupModel();
		if($assignedIdS=="Group"){
			$groupList=$objGroup->getUsers($phInfo->getProjectId());
			foreach ($groupList as $value) {
				Notify::send('NEWTASK', $value->getId(), $MSGdata);
			}
		}else{
			foreach ($assignedId as $value) {
				Notify::send('NEWTASK', $value, $MSGdata);
			}
		}
		//notify coach
		$groupI=$objGroup->get($phInfo->getProjectId());
		Notify::send('NEWTASK', $groupI->getCoachId(), $MSGdata);
	}else{
		Common::logg("Creación de Tarea",$message);
	}
	return $message;
}
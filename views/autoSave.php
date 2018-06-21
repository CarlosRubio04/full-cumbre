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
$_SESSION['projectINFO']=$objP->get($id);

$projectInfo=new Project($id,$name,$summary,$introduction,$definition,$megas,$justification,$description,$objective,$objectiveOthers,$startDate,$endDate,$methodology,$expectedResults,$execution,$results,$analysis,$products,$conclutions,$bibliography);

$objPmsg=new ProjectMessageModel();
if(isset($_SESSION['projectINFO']) && !empty($_SESSION['projectINFO']) && $_SESSION['projectINFO']!=$projectInfo){
	$res=$objP->update($projectInfo);
	
	Common::logg("Definición del Proyecto","Proyecto Modificado:".$projectInfo->projectInfo());

	$msg=compareInfo($_SESSION['projectINFO'],$projectInfo);
	$_SESSION['projectINFO']=$projectInfo;
	$objG=new GroupModel();
	$groupI=$objG->get($id);
	//create modification Msg 
	Common::logg("Proyecto Modificado",$message."id:$id,nombre:$name,resumen:$summary,introduccion:$introduction,definicion:$definition,megas:$megas,justificacion:$justification,descripcion:$description,Obj General:$objective,Obj especificos:$objectiveOthers,fecha Inicio:$startDate,fecha terminacion:$endDate,metodologia:$methodology,resultados esperados:$expectedResults,ejecucion:$execution,resultados:$results,analisis:$analysis,entregables:$products,concluciones:$conclutions,bibliografia:$bibliography");
	$MSGdata=['USER'=>$_SESSION['loginNameCumbre'],'NAME'=>$name,'ID'=>''];
	Notify::send('EDITPROJECT', $groupI->getCoachId(), $MSGdata);
	//create MSg project
	$objPmsg->create(new ProjectMessage(null,"Modifico los siguientes campos:".$msg,$_SESSION['loginIdCumbre'],$id,date("Y-m-d H:i:s")));
	echo "datos guardados";
}elseif(empty($_SESSION['projectINFO'])){
	$objP->create($projectInfo);
	$_SESSION['projectINFO']=$projectInfo;
	echo "datos guardados";
	//add record to score table
	$objG=new GroupModel();
	$users=$objG->getUsers($id);
	$objSc=new ScoreModel();
	foreach ($users as $value) {
		$objSc->create(new Score(null,'Campamento Base',1,5,'project',$id,$value->getUserId()));
	}
	
	Common::logg("Definición del Proyecto","Proyecto Creado:".$projectInfo->projectInfo());
	$message="Proyecto creado";
	
	$groupI=$objG->get($id);
	
	Common::logg("Nuevo Proyecto",$message."id:$id,nombre:$name,resumen:$summary,introduccion:$introduction,definicion:$definition,megas:$megas,justificacion:$justification,descripcion:$description,Obj General:$objective,Obj especificos:$objectiveOthers,fecha Inicio:$startDate,fecha terminacion:$endDate,metodologia:$methodology,resultados esperados:$expectedResults,ejecucion:$execution,resultados:$results,analisis:$analysis,entregables:$products,concluciones:$conclutions,bibliografia:$bibliography");
	$MSGdata=['USER'=>$_SESSION['loginNameCumbre'],'NAME'=>$name,'ID'=>''];
	Notify::send('NEWPROJECT', $groupI->getCoachId(), $MSGdata);
	//create MSg project
	echo $objPmsg->create(new ProjectMessage(null,$message."=> id:$id,nombre:$name,resumen:$summary,introduccion:$introduction,definicion:$definition,megas:$megas,justificacion:$justification,descripcion:$description,Obj General:$objective,Obj especificos:$objectiveOthers,fecha Inicio:$startDate,fecha terminacion:$endDate,metodologia:$methodology,resultados esperados:$expectedResults,ejecucion:$execution,resultados:$results,analisis:$analysis,entregables:$products,concluciones:$conclutions,bibliografia:$bibliography",$_SESSION['loginIdCumbre'],$id,date("Y-m-d H:i:s")));
}

function compareInfo(Project $obj1,Project $obj2){
	$res=$obj1->getName()!=$obj2->getName()?"Nombre".$obj2->getName().",":"";
	$res.=$obj1->getAnalysis()!=$obj2->getAnalysis()?"Analisis:".$obj2->getAnalysis().",":"";
	$res.=$obj1->getBibliography()!=$obj2->getBibliography()?"Bibliografia:".$obj2->getBibliography().",":"";
	$res.=$obj1->getConclutions()!=$obj2->getConclutions()?"Concluciones:".$obj2->getConclutions().",":"";
	$res.=$obj1->getDefinition()!=$obj2->getDefinition()?"Definición:".$obj2->getDefinition().",":"";
	$res.=$obj1->getDescription()!=$obj2->getDescription()?"Descripcion:".$obj2->getDescription().",":"";
	$res.=$obj1->getEndDate()!=$obj2->getEndDate()?"Fecha terminación:".$obj2->getEndDate().",":"";
	$res.=$obj1->getExecution()!=$obj2->getExecution()?"Ejecución:".$obj2->getExecution().",":"";
	$res.=$obj1->getExpectedResults()!=$obj2->getExpectedResults()?"Resultados esperados:".$obj2->getExpectedResults().",":"";
	$res.=$obj1->getIntroduction()!=$obj2->getIntroduction()?"Introducción:".$obj2->getIntroduction().",":"";
	$res.=$obj1->getJustification()!=$obj2->getJustification()?"Justificacion:".$obj2->getJustification().",":"";
	$res.=$obj1->getMegas()!=$obj2->getMegas()?"Megas:".$obj2->getMegas().",":"";
	$res.=$obj1->getMethodology()!=$obj2->getMethodology()?"Metodologia:".$obj2->getMethodology().",":"";
	$res.=$obj1->getObjective()!=$obj2->getObjective()?"Objetivo:".$obj2->getObjective().",":"";
	$res.=$obj1->getObjectiveOthers()!=$obj2->getObjectiveOthers()?"Obj Especificos:".$obj2->getObjectiveOthers().",":"";
	$res.=$obj1->getProducts()!=$obj2->getProducts()?"Entregables:".$obj2->getProducts().",":"";
	$res.=$obj1->getResults()!=$obj2->getResults()?"Resultados:".$obj2->getResults().",":"";
	$res.=$obj1->getSummary()!=$obj2->getSummary()?"Resumen:".$obj2->getSummary().",":"";
	$res.=$obj1->getStartDate()!=$obj2->getStartDate()?"Fecha Inicio:".$obj2->getStartDate().",":"";
	
	return rtrim($res,",");
}
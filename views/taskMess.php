<?php
include '../load.php';
$id= filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
if(empty($id)){
	return;
}
$text= filter_input(INPUT_GET, 'text',FILTER_SANITIZE_STRING);
$objMess=new TaskMessageModel();
if(!empty($text)){
	$objMess->create(new TaskMessage(null,$text,$_SESSION['loginIdCumbre'],$id,date("Y-m-d H:i:s")));
}
$messages=$objMess->searchFromTask($id);
$comments='<div class="coments-container" id="taskMessages">';
$obju=new UserModel();
foreach ($messages as $value) {
	$date=explode(" ",$value->getDate());
	$userI=$obju->get($value->getUserId());
	$type='coment animated fadeIn';
	if($userI->GetId()!=$_SESSION['loginRoleCumbre']){
		$type='coment user-loged animated fadeIn';
	}
	$comments.='
		<div class="'.$type.'"><div class="avatar"><img src="http://placehold.it/30x30" alt="Avatar" class="img-circle"></div>
			<div class="text">'.$userI->getName().": ".$value->getMsg().'<div class="date">
					<small>'.$date[0].'</small> | <small>'.$date[1].'</small>
				</div>
			</div>
		</div>';
}
echo $comments.'</div>';

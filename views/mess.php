<?php
include '../load.php';

//check if there is a process recently finished
$objMess=new MessageModel();
$pending=$objMess->searchFromUser($_SESSION['loginIdCumbre'],true);

$amount=0;
if(is_array($pending) && count($pending)>0){
	$amount=count($pending);
}
$mess='<a href="?content=messages" id="messages"><img src="img/notification.svg" alt="Menu">';
if($amount>0){
	$mess.='<span class="badge bg-red">'.$amount.'</span>';
}
echo $mess."</a>";


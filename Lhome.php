<?php
if($_SESSION['loginRoleCumbre']==1){
	require_once(__DIR__.'/../views/home1.php');
}elseif($_SESSION['loginRoleCumbre']==2){
	require_once(__DIR__.'/Ldashboard.php');
}elseif($_SESSION['loginRoleCumbre']==3){
	$includeOnly=1;
	require_once(__DIR__.'/Lcumbre.php');
	$scoreGroups= scorePerGroup();
	$teamsMeters=$itemsG="";
	$objU=new UserModel();
	$userI=$objU->get($_SESSION['loginIdCumbre']);
	$objG=new GroupModel();
	$groupI=$objG->get($userI->getGroupId());
	$montains= Config::get('montains');
	foreach ($scoreGroups as $key=>$value) {
		$meters=$value[0]+$value[3];
		$currentM="Base";
		$posMeters=(int)((930*$meters)/8848);
		Common::debug($posMeters."dsdffsd");
		foreach ($montains as $montain) {
			if($meters>=$montain['meters'] && $currentM=="Base"){
				$currentM=$montain['name'];
			}
		}
		$teamsMeters.='<div class="team">
				<div class="teamShield">
					<img src="img/svg/escudo.svg" alt="escudo">
					<span>'.$key.'</span>
					<span>'.$currentM.'</span>
				</div>
				<div class="teamBar" style="height: '.$posMeters.'px">
					<p>'.number_format($meters,0,",",".").' Metros</p>
				</div>
			</div>';

		//intems for current group
		if($key==$groupI->getName()){
			$listItems= explode(" ", $value[1]);
			foreach ($listItems as $item) {
				if(!empty($item)){
					$itemsG.='<div class="item">
						<img src="img/svg/'. strtolower($item).'.svg" alt="items por logro">
					</div>';
				}
			}
			$listItems= explode(" ", $value[2]);
			foreach ($listItems as $item) {
				if(!empty($item)){
					$itemsG.='<div class="item">
						<img src="img/svg/'. strtolower($item).'.svg" alt="items por excelencia">
					</div>';
				}
			}
		}
	}
	require_once(__DIR__.'/../views/home3.php');
}

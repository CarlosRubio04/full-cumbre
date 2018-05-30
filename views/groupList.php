<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="grupos u-color-contraste">
	<div class="content-wrapper">
		<div class="title">
			<h1 class="animated fadeInLeft">Grupos en cumbre</h1>
		</div>
		<div class="grupos-grid flex-row wrap">
			<?php require_once 'Libs/LgroupMembers.php';?>
		</div>
	</div>
</section>
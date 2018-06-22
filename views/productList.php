<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="u-color-contraste u-mount-back">
	<div class="content-wrapper">
		<div class="title">
			<a href="?content=groupList" class="btn btn-back">
				<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
			</a>
			<h1 class="animated fadeInLeft">Lista de entregables del grupo</h1>
		</div>
		<div class="grupos-grid entregables flex-row wrap">
			<?php require_once 'Libs/Lproducts.php';?>
		</div>
	</div>
</section>
<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="u-color-contraste u-mount-back">
	<div class="content-wrapper">
		<div class="title">
			<h1 class="animated fadeInLeft">Lista de entregables del grupo</h1>
		</div>
		<div class="grupos-grid entregables flex-row wrap">
			<?php require_once 'Libs/Lproducts.php';?>
		</div>
	</div>
</section>
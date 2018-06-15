<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="cursos u-color-contraste">
	<div class="container-flex">
		<div class="content-wrapper">
			<div class="title">
				<a href="." class="btn btn-back">
					<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
				</a>
				<h1 class="animated fadeIn">Cursos Creados</h1>
			</div>
			<div class="courses-grid">
				<?php require_once('Libs/Lcourses.php');?>
			</div>
		</div>	
	</div>
</section>
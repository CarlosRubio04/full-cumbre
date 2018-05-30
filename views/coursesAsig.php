<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="cursos u-color-contraste">
	<div class="container-flex">
		<div class="item">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="animated fadeInLeft">Cursos Asignados</h1>
				</div>
				<div class="courses-grid">
					<?php require_once('Libs/Lcourses.php');?>
				</div>
			</div>
		</div>	
	</div>
</section>
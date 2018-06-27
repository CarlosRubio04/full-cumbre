<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="cursos u-color-contraste u-mount-back">
	<div class="container-flex flex-center">
		<div class="item colum-80">
			<div class="content-wrapper">
				<div class="title">
					<a href="." class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInLeft">Cursos Asignados</h1>
				</div>
				<div class="courses-grid">
					<?php require_once('Libs/Lcourses.php');?>
				</div>
			</div>
		</div>	
	</div>
</section>
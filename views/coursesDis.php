<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="cursos u-color-contraste">
	<div class="container-flex">
		<div class="item colum-80">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="animated fadeInLeft">Cursos de tu interés</h1>
				</div>
				<div class="courses-grid">
					<?php require_once('Libs/Lcourses.php');?>
				</div>
			</div>
		</div>


		<div class="item colum-40">
			<div class="side-bar-cursos animated fadeInRight">
				<div class="title text-right">
					<h1>Mis cursos</h1>
				</div>

				<div class="courses-list">
					<?php echo $enrollHtml;?>
				</div>
			</div>
		</div>	
	</div>
</section>
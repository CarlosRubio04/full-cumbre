<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="cursos u-color-contraste u-mount-back">
	<div class="container-flex flex-center">
		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="title">
					<a href="?content=<?php echo $return?>" class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInLeft"><?php echo $name?></h1>
				</div>
				<form method="post">
					<div class="courseInfo">
						<div class="description">
							<h4>Descripción del Curso</h4>
							<p>
								 <?php echo $desc?>
							</p>
						</div>
						<div class="date">
							<h4>Fecha Inicio</h4>
							<p><?php echo $dateStart?></p>
						</div>
						<div class="date">
							<h4>Fecha Finalización</h4>
							<p><?php echo $dateEnd?></p>
						</div>
						<div class="hours">
							<h4>Número de Sesiones</h4>
							<p><?php echo $sessions?></p>
						</div>
						<div class="place">
							<h4>Horario</h4>
							<p><?php echo $schedule?></p>
						</div>
						<div class="place">
							<h4>Lugar</h4>
							<p><?php echo $place?></p>
						</div>

						<div class="coach">
							<h4>Coach</h4>
							<p><?php echo $coach?></p>
						</div>
						<h2><?php echo $message?></h2>
						<?php echo $button?>
					</div>
				</form>
			</div>
		</div>	
	</div>
</section>
<br>
<br>
<?php if($message!=""){
	echo "<script>window.scrollTo(0,document.body.scrollHeight);</script>";
}
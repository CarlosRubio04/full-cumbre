<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="cursos u-color-contraste u-mount-back">
	<div class="container-flex flex-center">
		<div class="item colum-80">
			<div class="content-wrapper">
				<div class="title">
					<a href="?content=<?php echo $return?>" class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInLeft"><?php echo $name?></h1>
				</div>
				<hr>
				<form method="post">
					<div class="courseInfo">
						<div class="description col-md-12">
							<h4>Descripción del Curso</h4>
							<p>
								<?php echo $desc?>
							</p>
						</div>
						
						<div class="date col-md-3">
							<h4>Fecha Inicio</h4>
							<p><i class="fa fa-calendar-o" aria-hidden="true"></i> | <?php echo $dateStart?></p>
						</div>
						<div class="date col-md-3">
							<h4>Fecha Finalización</h4>
							<p><i class="fa fa-calendar-o" aria-hidden="true"></i> | <?php echo $dateEnd?></p>
						</div>
						<div class="coach col-md-3">
							<h4>Coach Asignado</h4>
							<p><i class="fa fa-user" aria-hidden="true"></i> | <?php echo $coach?></p>
						</div>
						<div class="hours col-md-3">
							<h4>Número de Sesiones</h4>
							<p><i class="fa fa-tasks" aria-hidden="true"></i> | <?php echo $sessions?></p>
						</div>
						<div class="place col-md-6">
							<h4>Horario</h4>
							<p><i class="fa fa-clock-o" aria-hidden="true"></i> | <?php echo $schedule?></p>
						</div>
						<div class="place col-md-6">
							<h4>Lugar</h4>
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> | <?php echo $place?></p>
						</div>

						<h2><?php echo $message?></h2>
						<?php echo $button?>
					</div>
					<?php if($_SESSION['loginRoleCumbre']!==3){?>
					<div class="form-group flex-row space-btw">
						<a href="?content=sessionList&id=<?php echo $id."&return=$return"?>" class="btn-square">
							Calificar Asistencia <i class="fa fa-check" aria-hidden="true"></i>
						</a>
						<a href="?content=tests&id=<?php echo $id."&return=$return"?>" class="btn-square">
							Resultados Test <i class="fa fa-check" aria-hidden="true"></i>
						</a>
						<a href="?content=createTest&id=<?php echo $id."&return=$return"?>" class="btn-square">
							Crear/editar Test <i class="fa fa-pencil" aria-hidden="true"></i>
						</a>
					</div>
					<?php }?>
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
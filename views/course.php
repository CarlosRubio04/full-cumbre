<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="cursos u-color-contraste">
	<div class="container-flex">
		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="title">
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
							<h4>Fecha</h4>
							<p><?php echo $date?></p>
						</div>
						<div class="hours">
							<h4>Número de horas</h4>
							<p><?php echo $hours?></p>
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
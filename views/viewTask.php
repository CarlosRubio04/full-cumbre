<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="main addActivity u-color-contraste">
	<form method="post">
		<div class="content-wrapper">
			<div class="addActivityHeader animated fadeInDown">
				<div class="name">
					<h1 class="title">Editar Actividad</h1>
				</div>
			</div>
			<div class="addActivityBody animated fadeInUp">
				<div class="form-group">
					<label for="">
						Nombre de la actividad
					</label>
					<input type="text" name="nombre" class="form-control" placeholder="Ingresa el nombre de la actividad" value="<?php echo $name?>" readonly>
				</div>
				<div class="form-group">
					<label for="fechaIni">Fecha de inicio</label>
					<input type="date"  class="form-control" value="<?php echo $startDate?>" readonly>
				</div>
				<div class="form-group">
					<label for="fechaFin">Fecha de finalización</label>
					<input type="date"  class="form-control" value="<?php echo $endDate?>" readonly>
				</div>

				<div class="user form-group" title="Responsable">
					<label for="">Responsable de la actividad</label>
					<div class="dropdown">
							<input type="text" class="form-control" value="<?php echo $assignedHtmlSel?>" readonly>
					</div>
				</div>

				<div class="fase form-group">
					<label for="">fase de desarrollo</label>
					<input type="text" class="form-control" value="<?php echo $phaseSel?>" readonly>
				</div>
				<div class="form-group">
					<label for="">
						Descripción de la actividad
					</label>
					<textarea name="tarea" rows="5" class="form-control" placeholder="Descripción" readonly><?php echo $task?></textarea>
				</div>
				<h3><?php echo $message;?></h3>
			</div>
		</div>
	</form>
</section>

<?php if($message!=""){
	echo "<script>window.scrollTo(0,document.body.scrollHeight);</script>";
}
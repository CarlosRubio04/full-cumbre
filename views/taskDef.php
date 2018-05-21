<section class="addActivity" id="addActivity">
	<form method="post">
		<div class="content-wrapper  u-color-contraste animated fadeInUp">
			<button class="close" onclick="closeActivity()">
				<i class="fa fa-times" aria-hidden="true"></i>
			</button>
			<div class="addActivityHeader">
				<div class="name">
					<h1 class="title">Agregar Actividad</h1>
				</div>
			</div>
			<div class="addActivityBody">
				<div class="form-group">
					<label for="">
						Nombre de la Actividad
					</label>
					<input type="text" name="nombre" class="form-control" placeholder="Ingresa el nombre de la actividad" value="<?php echo $name?>" required>
				</div>
				<div class="form-group col-md-6">
					<label for="fechaIni">Fecha de inicio</label>
					<input type="date" title="Fecha Inicio" name="fechaIni" class="form-control" value="<?php echo $startDate?>" required>
				</div>
				<div class="form-group col-md-6">
					<label for="fechaFin">Fecha de finalización</label>
					<input type="date" title="Fecha Terminación" name="fechaFin" class="form-control" value="<?php echo $endDate?>" required>
				</div>

				<div class="user form-group col-md-6" title="Responsable">
					<label for="">Responsable de la actividad</label>
					<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<?php echo $assignedHtmlSel?>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<?php echo $assignedHtml?>
						</ul>
					</div>
				</div>

				<div class="fase form-group col-md-6">
					<label for="">Seleccione la fase de desarrollo</label>
					<div class="dropdown" title="Fase">
						<button class="btn btn-default dropdown-toggle" type="button" id="selectFase" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<?php echo $phaseSel?>
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="selectFase">
							<?php echo $phaseHtml?>
						</ul>
					</div>
					<input type="hidden" name="fase" id="fase" value="<?php echo$phaseSelId?>" >
				</div>
				<div class="form-group">
					<label for="">
						Descripción de la actividad
					</label>
					<textarea name="tarea" rows="5" class="form-control" placeholder="Descripción" required><?php echo $task?></textarea>
				</div>
				<!-- <div class="form-group">
					<label for="">
						Entregable de la actividad
					</label>
					<input type="text" name="entregable" value="<?php echo $product?>" class="form-control" placeholder="Ensayo escrito" required>
				</div> -->
				<h3><?php echo $message;?></h3>
				<div class="form-group">
					<button type="submit" name="createTask" value="1" class="btn btn-sub">ENVIAR</button>
				</div>
			</div>
		</div>
	</form>
</section>

<?php if($message!=""){
	echo "<script>window.scrollTo(0,document.body.scrollHeight);</script>";
}
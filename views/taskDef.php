<section class="main addActivity u-color-contraste">
	<form method="post">
		<div class="content-wrapper">
			<div class="addActivityHeader animated fadeInDown">
				<div class="name">
					<h1 class="title">Agregar Actividad</h1>
				</div>
				<div class="activityDate">
					<div class="user" title="Responsable">
						<div class="dropdown">
							<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<?php echo $assignedHtmlSel?>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<?php echo $assignedHtml?>
							</ul>
						</div>
					</div>
					<div class="fase">
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
				</div>
			</div>
			<div class="addActivityBody animated fadeInUp">
				<div class="form-group">
					<label for="">
						Ingresa el nombre de la actividad
					</label>
					<input type="text" name="nombre" class="form-control" placeholder="Ingresa el nombre de la actividad" value="<?php echo $name?>" required>
				</div>
				<div class="form-group">
					<label for="fechaIni">Fecha de inicio</label>
					<input type="date" title="Fecha Inicio" name="fechaIni" class="form-control" value="<?php echo $startDate?>" required>
				</div>
				<div class="form-group">
					<label for="fechaFin">Fecha de finalización</label>
					<input type="date" title="Fecha Terminación" name="fechaFin" class="form-control" value="<?php echo $endDate?>" required>
				</div>
				<div class="form-group">
					<label for="">
						Descripción de la actividad
					</label>
					<textarea name="tarea" rows="5" class="form-control" placeholder="Descripción" required><?php echo $task?></textarea>
				</div>
				<div class="form-group">
					<label for="">
						Entregable de la actividad
					</label>
					<input type="text" name="entregable" value="<?php echo $product?>" class="form-control" placeholder="Ensayo escrito" required>
				</div>
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
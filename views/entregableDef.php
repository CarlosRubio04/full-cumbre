<section class="addActivity" id="addEntregable">
	<form method="post">
		<div class="content-wrapper  u-color-contraste animated fadeInUp">
			<button class="close" onclick="closeEntregable()">
				<i class="fa fa-times" aria-hidden="true"></i>
			</button>
			<div class="addActivityHeader">
				<div class="name">
					<h1 class="title">Agregar Entregable</h1>
				</div>
			</div>
			<div class="addActivityBody">
				<div class="form-group">
					<label for="">
						Nombre del Entregable
					</label>
					<input type="text" name="nombre" class="form-control" placeholder="Ingresa el nombre de la actividad" value="<?php echo $name?>" required>
				</div>
				<div class="form-group">
					<label for="fechaIni">Fecha de entrega</label>
					<input type="date" title="Fecha Inicio" name="fechaIni" class="form-control" value="<?php echo $startDate?>" required>
				</div>

				<div class="user form-group" title="Responsable">
					<label for="">Responsable</label>
					<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<?php echo $assignedHtmlSel?>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<?php echo $assignedHtml?>
						</ul>
					</div>
				</div>

				<div class="form-group">
					<label for="">
						Descripción del entregable
					</label>
					<textarea name="tarea" rows="5" class="form-control" placeholder="Descripción" required><?php echo $task?></textarea>
				</div>

				<div class="form-group">
					<button type="submit" name="createTask" value="1" class="btn btn-sub">ENVIAR</button>
				</div>
			</div>
		</div>
	</form>
</section>
<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="agregar-curso">
	<div class="container-flex u-color-contraste">
		<div class="item colum-80">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="animated fadeInLeft">Agregar nuevo curso</h1>
				</div>
				<div class="formContainer animated fadeInUp">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<label for="nombre">Nombre del curso</label>
								<input type="text" name="nombre" id="nombre" value="<?php echo $name?>" class="form-control" placeholder="Ingresa el nombre del curso">
							</div>

							<div class="form-group">
								<label for="descripcion">Descripción del curso</label>
								<textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" placeholder="Ingresa la descripción del curso"><?php echo $desc?></textarea>
							</div>

							<div class="form-group">
								<label for="fecha">Fecha Inicio</label>
								<input type="date" name="fechaIni" id="fechaIni" value="<?php echo $dateStart?>" class="form-control">
							</div>
							<div class="form-group">
								<label for="fecha">Fecha Finalización</label>
								<input type="date" name="fechaFin" id="fechaFin" value="<?php echo $dateEnd?>" class="form-control">
							</div>

							<div class="form-group">
								<label for="horas">Sesiones</label>
								<input type="number" step="1" min="1" name="sessions" id="sessions" value="<?php echo $sessions?>" class="form-control" placeholder="Ingresa el número de sesiones">
							</div>

							<div class="form-group">
								<label for="descripcion">Horario</label>
								<textarea name="horario" id="horario" cols="30" rows="10" class="form-control" placeholder="Información del horario"><?php echo $schedule?></textarea>
							</div>
							
							<div class="form-group">
								<label for="lugar">Lugar</label>
								<input type="text" name="lugar" id="lugar" class="form-control" value="<?php echo $place?>" placeholder="Ingresa el lugar donde se realizará el curso">
							</div>

							<div class="form-group">
								<label for="coach">Coach Asignado</label>
								<div class="u-selectWraper">
									<select name="coach" class="form-control">
										<?php echo $htmlCoachList?>
									</select>
								</div>
							</div>
							<?php echo $message?>
							<div class="form-group">
								<button class="btn-square" name="createCourse" value="1" type="submit">Agregar Curso</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if($message!=""){
	echo "<script>window.scrollTo(0,document.body.scrollHeight);</script>";
}

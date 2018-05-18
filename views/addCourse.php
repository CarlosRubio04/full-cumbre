<section class="formulacion-de-proyecto">
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
								<label for="nombre-curso">Nombre del curso</label>
								<input type="text" name="nombre-curso" id="nombre-curso" class="form-control" placeholder="Ingresa el nombre del curso">
							</div>

							<div class="form-group">
								<label for="descripcion">Descripción del curso</label>
								<textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" placeholder="Ingresa la descripción del curso"></textarea>
							</div>

							<div class="form-group">
								<label for="fecha">Fecha</label>
								<input type="date" name="fecha" id="fecha" class="form-control">
							</div>

							<div class="form-group">
								<label for="horas">Horas</label>
								<input type="text" name="horas" id="horas" class="form-control" placeholder="Ingresa el número de horas">
							</div>

							<div class="form-group">
								<label for="lugar">Lugar</label>
								<input type="text" name="lugar" id="lugar" class="form-control" placeholder="Ingresa el lugar donde se realizará el curso">
							</div>

							<div class="form-group">
								<label for="coach">Coach Asignado</label>
								<input type="text" name="coach" id="coach" class="form-control" placeholder="Seleccione el coach que dictará el curso">
							</div>
							
							<div class="form-group">
								<button class="btn-square" type="submit">Agregar Curso</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


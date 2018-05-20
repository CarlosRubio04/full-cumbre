<section class="agregar-usuario">
	<div class="container-flex u-color-contraste">
		<div class="item colum-80">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="animated fadeInLeft">Agregar nuevo usuario</h1>
				</div>
				<div class="formContainer animated fadeInUp">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del usuario">
							</div>
							<div class="form-group">
								<label for="apellido">Apellido</label>
								<input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese el apellido del usuario">
							</div>
							<div class="form-group">
								<label for="cc">Documento de identidad (CC)</label>
								<input type="text" name="cc" id="cc" class="form-control" placeholder="Ingresa el número de cédula">
							</div>
							<div class="form-group">
								<label for="email">Correo electrónico</label>
								<input type="text" name="email" id="email" class="form-control" placeholder="Ingresa el correo electrónico ">
							</div>

							<div class="form-group">
								<label for="">Rol</label>
								<div class="u-selectWraper">
									<select name="rol" id="rol" class="form-control">
										<option value="">Seleccione el rol del usuario</option>
										<option value="Particitante">Paticipante</option>
										<option value="Coach">Coach</option>
										<option value="Admin">Administrador</option>
										<option value="Director">Director</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="pass">Contraseña</label>
								<input type="text" name="pass" id="pass" class="form-control" placeholder="Defina una Contraseña para el usuario">
							</div>

							<div class="form-group">
								<button class="btn-square" type="submit">
									Agregar Usuario
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="definir-fases u-color-contraste">
	<div class="container-flex">
		

		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="animated fadeInLeft">Cambiar Contraseña</h1>
				</div>
				<div class="formContainer animated fadeInDown">
					<form method="post" id="form2">
						<div class="form-group">
							<div class="input">
								<label for="pass">Contraseña Actual</label>
								<input type="password" name="pass0" id="pass0" class="form-control" placeholder="contraseña Actual">
							</div>
						</div>
						<div class="form-group">
							<div class="input">
								<label for="pass">Nueva Contraseña</label>
								<input type="password" name="pass" id="pass" class="form-control" placeholder="nueva contraseña">
							</div>
						</div>
						<div class="form-group">
							<div class="input">
								<label for="pass1">Confirmar Contraseña</label>
								<input type="password" name="pass1" id="pass1" class="form-control" placeholder="Confirmar contraseña">
							</div>
						</div>
						<div class="form-group">
							<div class="buton">
								<button class="btn-square" value="1" type="submit"  name="updatePass">Cambiar Contraseña</button>
							</div>
						</div>
						<hr>
						<samll><?php echo $message;?></samll>
					</form>
				</div>
			</div>
		</div>

		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="animated fadeInLeft">
						Recibir Notificaciones al Correo electronico
					</h1>
				</div>
				<hr>
				<p>
					A tu correo electrocnico el sistema estará notificando es estado de tus actividades, cambios y comentarios, si deseas desactivar las notificaciones haz click en el botón.
				</p>

				<div class="formContainer animated fadeInDown">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<div class="buton">
									<button class="btn-square" value="1" type="submit"  name="notif"><?php echo $btnText?></button>
								</div>
							</div>
							<hr>
							<samll><?php echo $message;?></samll>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

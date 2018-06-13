<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="login">
	<div class="loginContainer">
		<div class="u-logo">
			<img src="img/logo.png" alt="CUMBRE" class="img-responsive">
			<p>DIRECCIÓN DE GESTIÓN HUMANA</p>
		</div>
		<div class="loginContainerLogin">
			<h1>LOGIN</h1>
			<div class="u-form">
				<form method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="user" placeholder="Ingresa tu número de cedula" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="pass" placeholder="Ingresa tu contraseña" required>
					</div>
					<h3><?php echo $message?></h3>
					<div class="form-group">
						<button type="submit" name="loginBTN" class="btn btn-sub">
							INGRESAR
						</button>
					</div>
				</form>
			</div>
			<div class="loginMissedPass">
				<a href="?content=forgot">¿Olvidaste tu contraseña?</a>
			</div>
		</div>
		<div class="logos">
			<img src="img/logo_horizontal.png" alt="PUJ" class="img-responsive center-block">
		</div>
	</div>
</section>
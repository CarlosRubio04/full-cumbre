<section class="login">
	<div class="loginContainer">
		<div class="u-logo">
			<img src="img/logo.png" alt="CUMBRE" class="img-responsive">
		</div>
		<div class="loginContainerLogin">
			<h1>LOGIN</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex, perferendis fugiat reprehenderit accusantium quia repellat cupiditate dolorum</p>

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
		</div>
		<div class="loginMissedPass">
			<a href="#">¿Olvidaste tu contraseña?</a>
		</div>
	</div>
</section>
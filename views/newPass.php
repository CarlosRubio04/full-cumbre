<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="definir-fases u-color-contraste">
	<div class="content-wrapper">
		<div class="container-flex">
			<div class="item colum-80">
				<div class="title">
					<h1 class="animated fadeInLeft">Cambiar contraseña</h1>
				</div>
			</div>
		</div>
		
		<div class="container-flex space-btw">
			<div class="colum-30">
				<div class="formContainer animated fadeInDown">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<div class="input">
									<label for="pass">Nueva Contraseña</label>
									<input type="password" name="pass" id="pass" class="form-control" placeholder="nueva contraseña">
								</div>
								<div class="input">
									<label for="pass1">Confirmar Contraseña</label>
									<input type="password" name="pass1" id="pass1" class="form-control" placeholder="Confirmar contraseña">
								</div>
								<div class="buton">
									<button class="btn-square" value="1" type="submit"  name="updatePass">Cambiar Contraseña</button>
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

<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="definir-fases u-color-contraste">
	<div class="content-wrapper">
		<div class="container-flex">
			<div class="item colum-80">
				<div class="title">
					<h1 class="animated fadeInLeft">Recordar contraseña</h1>
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
									<label for="nombre">Correo Electronico</label>
									<input type="text" name="email" id="email" class="form-control" placeholder="Correo Electronico">
								</div>
								<div class="buton">
									<button class="btn-square" value="1" type="submit"  name="forgotPass">Enviar Contraseña Temporal</button>
								</div>
							</div>
							<hr>
							<samll><?php echo $message;?></samll>
							<samll><a href='<?php echo Config::get('siteUrl');?>'>Iniciar Sesion</a></samll>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

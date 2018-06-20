<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="definir-fases u-color-contraste u-mount-back">
	<div class="content-wrapper">
		<div class="container-flex flex-center">
			<div class="item colum-40">
				<div class="title">
					<a href="?content=<?php echo $return?>" class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeIn">Cambiar contraseña</h1>
				</div>
				<div class="formContainer animated fadeInDown">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<label for="pass">Nueva Contraseña</label>
								<input type="password" name="pass" id="pass" class="form-control" placeholder="nueva contraseña">
							</div>
							<div class="form-group">
								<label for="pass1">Confirmar Contraseña</label>
								<input type="password" name="pass1" id="pass1" class="form-control" placeholder="Confirmar contraseña">
							</div>
							<div class="form-group">
								<button class="btn-square btn-full" value="1" type="submit"  name="updatePass">Cambiar Contraseña</button>
							</div>
						</div>
						<hr>
						<samll><?php echo $message;?></samll>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

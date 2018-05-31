<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="u-color-contraste">
	<div class="container-flex flex-center u-color-contraste">
		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="animated fadeInLeft">Editar Fase</h1>
				</div>

				<div class="formContainer animated fadeInDown">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<div class="input">
									<label for="nombre">Nombre actual de la fase</label>
									<input type="text" name="nombre" value="<?php echo $name?>" id="nombre" class="form-control" placeholder="Nombre de la Fase">
								</div>
								<div class="buton">
									<button class="btn-square" value="1" type="submit"  name="editPhase">Modificar</button>
								</div><br>
								<div class="buton">
									<a href="?content=phaseDef" class="btn-square">Regresar</a>
								</div>
							</div>
							<h4><?php echo $message;?></h4>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


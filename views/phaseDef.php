<section class="definir-fases u-color-contraste">
	<div class="content-wrapper">
		<div class="title">
			<h1 class="animated fadeInLeft">Fases y Actividades del proyecto</h1>
		</div>
		<div class="container-flex space-btw">


			<div class="colum-30">
				<div class="formContainer animated fadeInDown">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<div class="input">
									<label for="nombre">Crear nueva fase</label>
									<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de la Fase">
								</div>
								<div class="buton">
									<button class="btn-square" value="1" type="submit"  name="createPhase">Crear Fase</button>
								</div>
							</div>
							<h4><?php echo $message;?></h4>
						</div>
					</form>
				</div>

				<div class="fasesContainer">
					<?php echo $phasesHmtl?>
				</div>
			</div>


			<div class="colum-30">
				<div class="formContainer animated fadeInDown">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<div class="input">
									<label for="">Agregar Actividad</label>
									<input type="text" name="" id="" class="form-control" placeholder="Nombre de la Actividad">
								</div>
								<div class="buton">
									<button class="btn-square" value="1" onclick="openActivity()">
										Agregar Actividad
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>


			<div class="colum-30">
				<div class="formContainer animated fadeInDown">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<div class="input">
									<label for="">Definir Entregable</label>
									<input type="text" name="" id="" class="form-control" placeholder="Definir un entregable">
								</div>
								<div class="buton">
									<button class="btn-square" value="1" onclick="openEntregable()">Agregar Entregable</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>


		</div>
	</div>
</section>


<?php
	require_once 'views/taskDef.php';
	require_once 'views/entregableDef.php';
?>


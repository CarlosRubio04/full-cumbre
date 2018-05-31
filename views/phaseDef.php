<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="definir-fases u-color-contraste">
	<div class="content-wrapper">
		<div class="container-flex">
			<div class="item colum-80">
				<div class="title">
					<a href="?content=projectDef" class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInLeft">Fases y Actividades del proyecto</h1>
				</div>
			</div>

			<div class="item">
				<div class="siguiente-campamento animated fadeIn">
					<a href="?content=baseTasks" class="btn btn-main">
						Ver cronograma
					</a>
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
									<label for="nombre">Crear nueva fase</label>
									<input type="text" pattern="[a-zA-Z0-9._%:()+-;, ]+$" required title="Caracteres validos (a-zA-Z0-9._%:()+-;, áéíóúÁÉÍÓÚ)" name="nombre" id="nombre" class="form-control" placeholder="Nombre de la Fase">
								</div>
								<div class="buton">
									<button class="btn-square" value="1" type="submit"  name="createPhase">Crear Fase</button>
								</div>
							</div>
							<hr>
							<samll><?php echo $message;?></samll>
						</div>
					</form>
				</div>

				<div class="fasesContainer">
					<?php echo $phasesHmtl?>
				</div>
				<br>
				<br>
			</div>


			<div class="colum-30">
				<div class="formContainer animated fadeInDown">
						<div class="inputs">
							<div class="form-group">
								<div class="input">
									<label for="">Agregar Actividad</label>
									<input type="text" pattern="[a-zA-Z0-9._%:()+-;, ]+$" title="Caracteres validos (a-zA-Z0-9._%:()+-;, áéíóúÁÉÍÓÚ)" name="" id="nombreTaskAux" class="form-control" placeholder="Nombre de la Actividad">
								</div>
								<div class="buton">
									<button type="button" class="btn-square" value="1" onclick="openActivity();document.getElementById('nombreTask').value=document.getElementById('nombreTaskAux').value;">
										Agregar Actividad
									</button>
								</div>
								<hr>
								<small id="resultTaskOk"></small>
							</div>
						</div>
				</div>
				<div class="fasesContainer">
					<?php echo $tasksHmtl?>
				</div>
			</div>


			<div class="colum-30">
				<div class="formContainer animated fadeInDown">
						<div class="inputs">
							<div class="form-group">
								<div class="input">
									<label for="">Definir Entregable</label>
									<input type="text" title="Caracteres validos (a-zA-Z0-9._%:()+-;, áéíóúÁÉÍÓÚ)" name="" id="nombreProductAux" class="form-control" placeholder="Definir un entregable">
								</div>
								<div class="buton">
									<button type="button" class="btn-square" value="1" onclick="openEntregable();document.getElementById('nombreProduct').value=document.getElementById('nombreProductAux').value;">Agregar Entregable</button>
								</div>
								<hr>
								<small id="resultProductOk"></small>
							</div>
						</div>
				</div>
				<div class="fasesContainer">
					<?php echo $productsHmtl?>
				</div>
			</div>


		</div>
	</div>
</section>


<?php
require_once 'Libs/LtaskDef.php';
require_once 'Libs/LproductDef.php';
?>


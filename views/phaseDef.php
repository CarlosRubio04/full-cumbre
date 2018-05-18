<!-- <section class="definir-fases">
	<div class="container-flex u-color-contraste">
		<div class="item colum-80">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="animated fadeInLeft">Fases del proyecto</h1>
				</div>
				<div class="formContainer animated fadeInDown">
					<form method="post">
						<div class="inputs">
							<div class="form-group container-flex">
								<div class="input colum-80">
									<label for="nombre">Crear nueva fase</label>
									<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
								</div>
								<div class="buton self-bottom colum-40">
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
		</div>


		<div class="item colum-40">
			<div class="content-wrapper">
				<div class="siguiente-campamento animated fadeIn">
					<a href="?content=taskDef" class="btn btn-main">
						Agregar Actividades
					</a>
				</div>
			</div>
		</div>
	</div>
</section> -->

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
									<button class="btn-square" value="1" type="submit"  name="createPhase">Agregar Actividad</button>
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
									<button class="btn-square" value="1" type="submit"  name="createPhase">Agregar Entregable</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>

<?php if($message!=""){
	echo "<script>window.scrollTo(0,document.body.scrollHeight);</script>";
}
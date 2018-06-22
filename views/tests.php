<section class="createTest">
	<div class="container-flex flex-center u-color-contraste u-mount-back">
		<div class="item colum-60">
			<div class="content-wrapper">
				<small><?php echo $courseName?></small>
				<hr>
				<div class="title">
					<a href="." class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInLeft">
						Cuestionario del conocimiento
					</h1>
				</div>
				<hr>
				<p>
					
					Las preguntas cuentan con un enunciado y 4 opciones de respuesta, marca con la X la respuesta correcta de cada pregunta
				</p>
				<div class="formContainer animated fadeInUp">
					<form method="post" id="form">
						<div class="inputs">
							
							<?php echo $questions?>
							<h3 id="result"><?php echo $message?></h3>
							<!-- //Boton Agregar Pregunta -->
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

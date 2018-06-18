<section class="assistence">
	<div class="container-flex flex-center u-color-contraste u-mount-back">
		<div class="item colum-60">
			<div class="content-wrapper">
				<small>Calificar Asistencia del curso <?php echo $name?></small>
				<hr>
				<div class="title">
					<a href="?content=<?php echo $return?>" class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInDown">
						Sesión <?php echo $numSess?>
					</h1>
				</div>
				<hr>
				<p class="text-center">
					Califica la asistencia de cada participante en esta sesión con una X.
				</p>
				<div class="formContainer animated fadeInUp">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<div class="question-body mt8">
									<div class="question-label big">
										Nombre del participante
									</div>	

									<div class="question-inputs">
										<div class="item five big">
											Si
										</div>
									</div>

									<div class="question-inputs">
										<div class="item five big">
											No
										</div>
									</div>
								</div>
								<?php echo $listUsers?>
							</div>
							<h3 id="resultPro"><?php echo $message?></h3>
							<!-- Boton Guardar Cuestionario -->
							<div class="form-group">
								<button class="btn-square btn-full" name="assistB" value="1">
									Calificar asistencia <i class="fa fa-check" aria-hidden="true"></i>
								</button>
							</div>
							<!-- //Boton Guardar Cuestionario -->

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
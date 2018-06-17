<section class="assistence">
	<div class="container-flex flex-center u-color-contraste u-mount-back">
		<div class="item colum-60">
			<div class="content-wrapper">
				<small>Lista de sesiones <?php echo $name?></small>
				<hr>
				<div class="title">
					<a href="?content=<?php echo $return?>" class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeIn">
						Sesiones
					</h1>
				</div>
				<hr>
				<p class="text-center">
					Este es el listado de sesiones del curso, entra por sesiones a calificar la <br/>asistencia de los estudiantes inscritos a este curso.
				</p>
				<hr>
				<div class="sesionContainer">
					<?php echo $sessions?>
				</div>
			</div>
		</div>
	</div>
</section>
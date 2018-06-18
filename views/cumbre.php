<section class="cumbre">
	<div class="container-flex flex-center u-color-contraste u-mount-back">
		<div class="item">
			<div class="content-wrapper">
				<div class="title">
					<a href="." class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInDown">
						Cumbre
					</h1>
				</div>
				<hr>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit et, fuga sed temporibus, commodi nostrum mollitia deleniti sit non eveniet nihil necessitatibus, hic aperiam magni iusto quis excepturi provident beatae?. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ipsa sint quibusdam tenetur, quidem voluptates neque minima deserunt facere. Aut eius, fugiat dolores repellendus fugit itaque quidem, mollitia cum perferendis.
				</p>
				Metros por usuario
				<?php echo $tabla?>

				<br>
				<br>
				Metros Usuario por Campamento
				<?php echo $tablaUC?>
				<br>
				<br>
				Metros por grupo
				<?php echo $tablaG?>

				<div class="row">
					<div class="col-md-6">
						<hr>
						<h4>Puntos por integrante de equipo</h4>
						<hr>
						<div class="x_content">
							<canvas id="mybarChart"></canvas>
						</div>
					</div>


					<div class="col-md-6">
						<hr>
						<h4>Consolidado de puntos del equipo</h4>
						<hr>
						<div class="x_content">
							<canvas id="canvasRadar"></canvas>
						</div>
					</div>

					<div class="col-md-6">
						<hr>
						<h4>Tus puntos por fases</h4>
						<hr>
						<div class="x_content">
							<canvas id="polarArea"></canvas>
						</div>
					</div>


					<div class="col-md-6">
						<hr>
						<h4>Comparativo de frente otros equipos</h4>
						<hr>
						<div class="x_content">
							<canvas id="canvasDoughnut"></canvas>
						</div>
					</div>


				</div>


			</div>
		</div>
	</div>
</section>

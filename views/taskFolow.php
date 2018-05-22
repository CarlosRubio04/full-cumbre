<section class="seguimiento-tarea u-color-contraste">
	<div class="container-flex">
		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="estados">
					<div class="fase">
						Nombre de la fase
					</div>
					<div class="estado">
						Estado de la actividad
					</div>
				</div>

				<div class="title">
					<h1>Nombre de la tarea</h1>
				</div>


				<div class="dates">
					<div class="date">
						<small>Fecha de inicio</small>
						<div>00 | 00 | 00</div>
					</div>
					<div class="date-icon">

					</div>
					<div class="date">
						<small>Fecha de fin</small>
						<div>00 | 00 | 00</div>
					</div>
				</div>


				<div class="form-group">
					<label for="">
						Descripción de la actividad
					</label>
					<textarea name="tarea" rows="5" class="form-control" placeholder="Descripción" required></textarea>
				</div>

				<div class="form-group">
					<label for="">
						Entregable Asignado
					</label>
					<textarea name="tarea" rows="5" class="form-control" placeholder="Descripción del entregable" required></textarea>
				</div>

				<button class="btn-square">
					SUBIR ENTREGABLE
				</button>
			</div>
		</div>

		<div class="item colum-40 contenedorComents">
			<?php
				require_once 'views/comentsSistem.php';
			?>
		</div>
	</div>
</section>



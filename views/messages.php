<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="mensajes">
	<div class="container-flex flex-center u-color-contraste u-mount-back">
		<div class="item colum-80">
			<div class="content-wrapper">

				<div class="title">
					<a href="?content=campTwo" class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInLeft">Estado de mis actividades</h1>

					<a href="?content=twoTasks" class="btn btn-main">
						Ver Cronograma
					</a>
				</div>
				<hr>
				<p class="text-center">
					Acá verás el estado de las actividades del este grupo, En rojo están las actividades que no cumplieron con la fecha de entrega, en amarillo estarán las actividades que se acerca la fecha de entrega y aun no hay evidencia y en verde verás las actividades que ya cumplieron con la evidencia.
				</p>
				<hr>
				<div class="activityFeed ">
					<div class="activityFeedContainer">
						<div class="activityFeedFase"><div class="state rojo">Vencidas</div><div class="activityFeedFaseContainer"><div class="item flex-colum space-btw">
							<div class="activity">
								<div class="data">
									<span>Entregable</span>
									<p>Documento Fase de Análisis 2</p>
									<small>Responsable</small>
									<p>Oscar D,Oscar</p>
									<small>Actividades</small>
									<p><a href="?content=editTask&amp;return=dashboard&amp;id=12">Documento de Analisis</a>   </p>
								</div>
								<div class="date">
									<div class="month">
										Mayo
									</div>
									<div class="day">
										31
									</div>
								</div>
							</div>
							<div class="cta">
								<a href="?content=taskFolow&amp;return=dashboard&amp;id=6" class="btn-square">
									Ver más
								</a>
							</div>
						</div></div></div><br><div class="activityFeedFase"><div class="state amarillo">Próximas a vencer</div><div class="activityFeedFaseContainer"><div class="item flex-colum space-btw">
							<div class="activity">
								<div class="data">
									<span>Entregable</span>
									<p>DOFA</p>
									<small>Responsable</small>
									<p>Oscar D</p>
									<small>Actividades</small>
									<p><a href="?content=editTask&amp;return=dashboard&amp;id=17">Analisis Competencia</a>   </p>
								</div>
								<div class="date">
									<div class="month">
										Junio
									</div>
									<div class="day">
										21
									</div>
								</div>
							</div>
							<div class="cta">
								<a href="?content=taskFolow&amp;return=dashboard&amp;id=8" class="btn-square">
									Ver más
								</a>
							</div>
						</div></div></div><br><div class="activityFeedFase"><div class="state verde">Entregadas</div><div class="activityFeedFaseContainer"><div class="item flex-colum space-btw">
							<div class="activity">
								<div class="data">
									<span>Entregable</span>
									<p>Prueba Entregable 1</p>
									<small>Responsable</small>
									<p>Oscar,Oscar D</p>
									<small>Actividades</small>
									<p><a href="?content=editTask&amp;return=dashboard&amp;id=2">Estudio de mercado (Target Group)</a>   </p>
								</div>
								<div class="date">
									<div class="month">
										Junio
									</div>
									<div class="day">
										30
									</div>
								</div>
							</div>
							<div class="cta">
								<a href="?content=taskFolow&amp;return=dashboard&amp;id=5" class="btn-square">
									Ver más
								</a>
							</div>
						</div>
					</div>
				</div>




			</div>
		</div>
	</div>
</section>

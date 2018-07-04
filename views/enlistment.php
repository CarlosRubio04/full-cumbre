<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>


<section class="campamento-base">
	<div class="container-base">
		<div class="title">
			<h1 class="animated fadeInLeft">Alistamiento</h1>
			<a href="?content=basecamp" class="btn btn-main">
				Campamento Base  <i class="fa fa-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
		<div class="content-text">

			<div class="item">
				<div class="campamentoIntro animated fadeInDown">
					<p>
						Hola Equipo, les vamos a contar que va a ocurrir en esta etapa. El alistamiento requiere que cada
						miembro del equipo de respuesta a una encuesta que permitirá identificar las fortalezas y áreas de
						mejora del equipo y de sus integrantes.
						Los invitamos a dar respuesta de manera sincera y objetiva a la misma para prepararnos a esta aventura
					</p>

					<a role="button" data-toggle="collapse" href="#objColapse" aria-expanded="false" aria-controls="objColapse">
						Ver Objetivos <i class="fa fa-chevron-down" aria-hidden="true"></i>
					</a>

					<div class="collapse" id="objColapse">
						<div>
							<p><span class="subtitle-objetives">General:</span>
								Fomentar al interior de los equipos prácticas de trabajo colaborativo, que impacten en los resultados de la organización y en las que se reflejen los valores de los individuos y la organización a fin de consolidar una cultura de excelencia en el desempeño y en la calidad humana.
							</p>
						</div>
						<div>
							<p class="subtitle-objetives" >Especìficos:<span class="subtitle-objetives"></span></p>
							<ul>
								<li>Promover y fortalecer el desarrollo de equipos a partir de proyectos que requieren trabajar de manera colaborativa.</li>
								<li>Generar espacios de aprendizaje y reflexión en torno a conceptos y herramientas para el mejoramiento continuo y la innovación.</li>
								<li>Fomentar la construcción de un entorno laboral favorable, caracterizado por el diálogo, la participación y la pluralidad (valorar la diversidad de destrezas, experiencia y conocimientos)</li>
							</ul>
						</div>
					</div>

					<a role="button" data-toggle="collapse" href="#descpColaps" aria-expanded="false" aria-controls="descpColaps">
						Ver Descripción de Alistamiento <i class="fa fa-chevron-down" aria-hidden="true"></i>
					</a>


					<div class="collapse" id="descpColaps">
						<div>
							<p><span class="subtitle-objetives">Objetivo:</span>
								Identificar el nivel de desarrollo de equipos y determinar en las dimensiones de evaluación cuáles son sus áreas de mejora y las fortalezas de equipo. 
							</p>
						</div>
						<div>
							<p><span class="subtitle-objetives">Proceso:</span></p>
							<ul>
								<li>Sensibilización al equipo.</li>
								<li>Aplicación de la prueba para  los equipos participantes.</li>
								<li>Entrega de resultados.</li>
							</ul>
						</div>
						<div>
							<p><span class="subtitle-objetives">Entregable:</span>
								Informe sobre nivel de desarrollo del equipo, dimensiones de mejora y plan de acción sugerido, particular a cada equipo. 
							</p>
						</div>
					</div>

				</div>

				<div class="campamentoCta animated fadeInUp">
					<a href="?content=enlistmentProfile" class="btn-square">
						ingresar
					</a> 	
				</div>
			</div>
		</div>
	</div>

	<div class="rutaVirtualBack">
		<div class="parallax-viewport" id="parallax">
			<div class="parallax-layer ruta-nubes" style="width:100vw; height:90vh;">
				<?php  require_once('views/clouds.php'); ?>
			</div>
			<!-- parallax layers -->
	<!-- 		<div class="parallax-layer" style="width:100vw; height:60vh;">
				<img src="img/parallax/04-cumbre.png" alt="" style="position:absolute; left:0px; bottom: -0px"/>
			</div> -->
			<div class="parallax-layer alis-cumbre">
				<img src="img/parallax/04-cumbre.png"/>
			</div>
			<div class="parallax-layer alis-mounts">
				<img src="img/parallax/08-falda.png" />
			</div>
			<div class="parallax-layer alis-falda">
				<img src="img/parallax/09-alistamiento.png"/>
			</div>
		</div>
	</div>
</section>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>


<script>
	jQuery(document).ready(function(){
		jQuery('#parallax .parallax-layer')
		.parallax({
			mouseport: jQuery('#parallax')
		});
	});
</script>
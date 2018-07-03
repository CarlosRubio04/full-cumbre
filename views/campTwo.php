<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>

<section class="campamento-base">
	<div class="container-base">
		<div class="title">
			<h1>Campamento Dos</h1>
			<a href="?content=cumbre" class="btn btn-main">
				Cumbre <i class="fa fa-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
		<div class="content-text">

			<div class="item">
				<div class="campamentoIntro">
					<p>
						Hola Equipo, les vamos a contar que va a ocurrir en esta etapa. Es el momento de la formación, es
						decir aquí recibirán las herramientas necesarias para que como equipo puedan ascender a la
						cumbre. Tendrán capacitaciones presenciales o virtuales en dos dimensiones: Resultados y
						Relaciones. Podrán seleccionar según sus necesidades de formación los cursos que requieren para
						avanzar.
						<br/>
						Por ello adelante y hacia la cumbre.
					</p>
					<a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						Ver Objetivo del Campamento Dos <i class="fa fa-chevron-down" aria-hidden="true"></i>
					</a>
					<div class="collapse" id="collapseExample">
						<div>
							<p>
								Brindar acompañamiento y seguimiento al equipo mediante un coach de equipo que será el acompañante en el desarrollo del proceso
							</p>
						</div>
						<div>
							<p><span class="subtitle-objetives">Estrategias:</span>Dos Componentes: Acompañamiento y lecciones aprendidas.
							</p>
							<ul>
								<li class="underline-text">Acompañamiento:</li>
								<li>	el coach dará apoyo en la dimensión del proyecto y en la dinámica del equipo según los avances y necesidades del mismo.</li><br>
								<li class="underline-text">	Lecciones aprendidas:</li>
								<li>	el equipo y el coach documentaran las lecciones del proceso que sean de aprendizaje para otros equipos mediante la bitácora de registro de lecciones aprendidas.</li>
							</ul><br>
							<p><span class="subtitle-objetives">Entregables:</span>
								La bitácora de avances de equipo.
							</div>
						</div>
					</div>

					<div class="campamentoCta">
						<a href="?content=messages" class="btn-square">
							ingresar
						</a> 	
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="rutaVirtualBack">
		<div class="parallax-viewport" id="parallax">
			<div class="parallax-layer" style="width:100vw; height:80vh;">
				<?php  require_once('views/clouds.php'); ?>
			</div>
			<div class="parallax-layer" style="width:100vw; height:60vh;">
				<img src="img/parallax/11-dos.png" alt="" style="position:absolute; bottom: -50px; right: 0px;" />
			</div>
			<div class="parallax-layer" style="width:100vw; height:70vh;">
				<img src="img/parallax/10-cumbre.png" alt="" style="position:absolute; bottom: 0px; right: 0px;" />
			</div>
			<div class="parallax-layer" style="width:100vw; height:80vh;">
				<img src="img/parallax/10-dos.png" alt="" style="position:absolute; bottom: -50px; left:0;"/>
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
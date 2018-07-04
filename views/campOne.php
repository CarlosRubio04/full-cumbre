<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>

<section class="campamento-base">
	<div class="container-base">
		<div class="title">
			<h1 class="animated fadeInLeft">Campamento Uno</h1>
			<a href="?content=campTwo" class="btn btn-main">
				Campamento Dos <i class="fa fa-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
		<div class="content-text">

			<div class="item">
				<div class="campamentoIntro animated fadeInDown">
					<p>
						Hola Equipo, les vamos a contar que va a ocurrir en esta etapa. Es el momento de la formación, es
						decir aquí recibirán las herramientas necesarias para que como equipo puedan ascender a la
						cumbre. Tendrán capacitaciones presenciales o virtuales en dos dimensiones: Resultados y
						Relaciones. Podrán seleccionar según sus necesidades de formación los cursos que requieren para
						avanzar.
						<br/>
						Por ello adelante y hacia la cumbre.
					</p>

					<a role="button" data-toggle="collapse" href="#objCamp1" aria-expanded="false" aria-controls="objCamp1">
						Ver Objetivo del Campamento Uno <i class="fa fa-chevron-down" aria-hidden="true"></i>
					</a>
					<div class="collapse" id="objCamp1">
						<div>
							<p>
								Brindar las estrategias, técnicas y herramientas de Resultados y/o Relación que le permita al equipo avanzar en el proyecto y en el clima laboral al interior del equipo.
							</p>
						</div>
						<div>
							<p><span class="subtitle-objetives">Estrategias:</span>Dos Componentes: Formación y Trabajo de Campo.
							</p>
							<ul>
								<li class="underline-text">Formación:</li>
								<li>Talleres y formación indoor y out door.</li><br>
								<li class="underline-text">	Trabajo de campo:</li>
								<li>Equipo vivirá una experiencia de impacto social.</li>
							</ul><br>
							<p><span class="subtitle-objetives">Entregables:</span>
								Formación, según la necesidad particular del equipo.
							</div>
						</div>
					</div>

					<div class="campamentoCta animated fadeInUp">
						<a href="?content=coursesDis" class="btn-square">
							ingresar
						</a> 	
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="rutaVirtualBack">
		<div class="parallax-viewport" id="parallax">
			<div class="parallax-layer ruta-nubes">
				<?php  require_once('views/clouds.php'); ?>
			</div>
			<div class="parallax-layer uno-cumbre">
				<img src="img/parallax/04-cumbre.png"/>
			</div>
			<div class="parallax-layer uno-camp">
				<img src="img/parallax/08-cam-uno.png"/>
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
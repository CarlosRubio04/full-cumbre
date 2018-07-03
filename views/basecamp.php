<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="campamento-base">
	<div class="container-base">
		<div class="title">
			<h1 class="animated fadeInLeft">Campamento base</h1>
			<a href="?content=campOne" class="btn btn-main">
				Campamento Uno <i class="fa fa-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
		<div class="content-text">

			<div class="item">
				<div class="campamentoIntro animated fadeInDown">
					<p>
						Hola Equipo, les vamos a contar que va a ocurrir en esta etapa. El campamento base, busca que se
						identifique un proyecto alineado a los objetivos de la organización, que les permita como equipo
						un logro conjunto y compartido. En esta fase además recibirán formación sobre como gestionar un proyecto.
						<br/>
						Por ello adelante, y sigan escalando hacia la cumbre.
					</p>

					<a role="button" data-toggle="collapse" href="#objBase2" aria-expanded="false" aria-controls="collapseExample">
						Ver Descripción de Campamento Base <i class="fa fa-chevron-down" aria-hidden="true"></i>
					</a>

					<div class="collapse" id="objBase2">
						<div>
							<p><span class="subtitle-objetives">Objetivo:</span>
								Identificar un proyecto que impacte en la dimensión Resultados del equipo que este alienado con OBJETIVOS ESTRATÉGICOS y se desarrolle en un tiempo aproximado de 6 meses. 
							</p>
						</div>
						<div>
							<p><span class="subtitle-objetives">	Estrategias:</span></p>
							<p>Dos Componentes: formación y acompañamiento.</p>
							<ul>
								<li><p><span class="subtitle-objetives" >Formación:</span> Taller de Formulación de proyectos.</p></li>
								<li><p><span class="subtitle-objetives" >Acompañamiento:</span> Tendrá la posibilidad de tener horas de asesoría en el proyecto, con el experto temático.</p></li>
							</ul>
						</div>
						<div>
							<p><span class="subtitle-objetives">Entregable:</span>
								<ul>
									<li>Proyecto de trabajo.</li>
								</ul>	 
							</p>
						</div>
					</div>
				</div>

				<div class="campamentoCta animated fadeInUp">
					<a href="?content=projectDef" class="btn-square">
						ingresar
					</a> 	
				</div>
			</div>
		</div>
	</div>

	<div class="rutaVirtualBack">
		<div class="parallax-viewport" id="parallax">
			<div class="parallax-layer" style="width:100vw; height:90vh;">
				<?php  require_once('views/clouds.php'); ?>
			</div>
			<!-- parallax layers -->
	<!-- 		<div class="parallax-layer" style="width:100vw; height:60vh;">
				<img src="img/parallax/04-cumbre.png" alt="" style="position:absolute; left:0px; bottom: -0px"/>
			</div> -->
			<div class="parallax-layer" style="width:85vw; height:60vh;">
				<img src="img/parallax/07-cumbre.png" alt="" style="position:absolute; left:0; bottom:0px; width: 90vw;"/>
			</div>
			<div class="parallax-layer" style="width:100vw; height:90vh;">
				<img src="img/parallax/05-carpa.png" alt="" style="position:absolute; bottom:-50px; right:0;" />
			</div>
			<div class="parallax-layer" style="width:100vw; height:90vh;">
				<img src="img/parallax/06-mesa.png" alt="" style="position:absolute; bottom: -100px; left:0;"/>
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
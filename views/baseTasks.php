<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="cronograma-base">
	<div class="u-color-contraste u-mount-back">
		<div class="content-wrapper">
			<div class="title">
				<a href="?content=phaseDef" class="btn btn-back">
					<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
				</a>
				<h1>Cronograma de actividades</h1>
				<a href="?content=campOne" class="btn btn-main">
					Campamento Uno
				</a>
			</div>
			
			<!-- Aparece si no hay actividades 
			<div class="noActivities">
				<div class="message">
					<p>Aún no tienes actividades en tu cronograma </p>
				</div>
				<div class="cta">
					<a href="?content=agregar-actividad" class="btn-square">AGREGAR ACTIVIDAD</a>
				</div>
			</div>
			///Aparece si no hay actividades -->

			
			<div class="cronograma-meses">
				
				<div class="cronograma-meses-container">
					
					<?php echo $tasksHtml;?>

				</div>

			</div>


		</div>
	</div>
</section>
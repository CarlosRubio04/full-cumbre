<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="cronograma-base">
	<div class="u-color-contraste">
		<div class="content-wrapper">
			<div class="title">
				<h1>Cronograma de actividades</h1>
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
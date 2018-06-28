<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="dashboard u-mount-back u-color-contraste ">
	<div class="container-flex flex-center">
		
		<div class="item colum-60">
			<div class="content-wrapper flex-colum">
				<div class="title">
					<h1>
						Dashboard de Actividades
					</h1>
				</div>
				<hr>
				<p class="text-center">
					Acá verás el estado de las actividades del este grupo, En rojo están las actividades que no cumplieron con la fecha de entrega, en amarillo estarán las actividades que se acerca la fecha de entrega y aun no hay evidencia y en verde verás las actividades que ya cumplieron con la evidencia.
				</p>
				<div class="activityFeed">
					<div class="activityFeedContainer">
						<?php echo $html3;
						 echo "<br>".$html2;
						 echo "<br>".$html1;
						 echo "<br>".$html0."<br><br>";?>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
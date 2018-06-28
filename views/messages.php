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
				<br>
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

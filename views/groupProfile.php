<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="alistamiento group-profile">
	<div class="container-flex">
		<div class="teamProfile item colum-40 u-color-contraste">
			<div class="content-wrapper">
				<div class="title">
					<a href="?content=groupList" class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1>
						<?php echo $name?>
					</h1>
				</div>
				<div class="teamList">
					<small>Coach</small>
					<div class="person">
						<div class="avatar">
							<img src="http://placehold.it/50x50" alt="Avatar">
						</div>
						<div class="info">
							<a href="<?php echo $coachId?>" class="name"><?php echo $coach?></a>
							<?php echo $coachAsign?>
						</div>
					</div>
				</div>
				<div class="teamList">
					<small>Integrantes del equipo</small>
					<?php echo $groupMenbers ?>
				</div>
			</div>
		</div>

		<div class="item colum-80 u-mount-back">
			<div class="content-wrapper flex-colum">
				<div class="title">
					<h1>
						Estado de actividades del grupo
					</h1>
				</div>
				<hr>
				<p class="text-center">
					Acá verás el estado de las actividades del este grupo, En rojo están las actividades que no cumplieron con la fecha de entrega, en amarillo estarán las actividades que se acerca la fecha de entrega y aun no hay evidencia y en verde verás las actividades que ya cumplieron con la evidencia.
				</p>
				<hr>
				<div class="activityFeed">
					<div class="activityFeedContainer">
						<?php echo $html3;
						 echo "<br>".$html2;
						 echo "<br>".$html1;?>
					</div>

				</div>
			</div>


		</div>
	</section>
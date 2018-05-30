<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="alistamiento group-profile u-color-contraste">
	<div class="container-flex">
		<div class="teamProfile item">
			<div class="content-wrapper">
				<h1 class="title">
					<?php echo $name?>
				</h1>

				<div class="teamList">
					<small>Coach</small>

					<div class="person">
						<div class="avatar">
							<img src="http://placehold.it/50x50" alt="Avatar">
						</div>
						<div class="info">
							<a href="?content=userProfile&id=<?php echo $coachId?>" class="name"><?php echo $coach?></a>
							<?php echo $coachAsign?>
						</div>
					</div>
				</div>
				<div class="teamList">
					<small>Integrantes del equipo</small>
					<?php echo $groupMenbers ?>
				</div>

				<div class="report">
					<div class="dataGroup">
						<small>Diagnostico Grupal</small>
						<div class="pdf">
							<div class="pdfIcon">
								<a href="#">
									<img src="img/pdf.svg" alt="PDF">
								</a>
							</div>
							<?php echo $pdfG?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
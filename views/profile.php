<section class="alistamiento">
	<div class="container-flex">
		<div class="profile item colum-40 u-color-contraste">
			<div class="content-wrapper">
				<h1 class="title">
					Mi perfil
				</h1>
				<div class="avatar">
					<h2 class="subTitle">
						Selecciona tu avatar
					</h2>
					<div class="avatarItems">
						<button>
							<img src="http://placehold.it/40x40" alt="Avatar">
						</button>
						<button>
							<img src="http://placehold.it/40x40" alt="Avatar">
						</button>
						<button>
							<img src="http://placehold.it/40x40" alt="Avatar">
						</button>
						<button>
							<img src="http://placehold.it/40x40" alt="Avatar">
						</button>
						<button>
							<img src="http://placehold.it/40x40" alt="Avatar">
						</button>
					</div>
				</div>

				<!-- Datos del usuario -->
				<div class="data-user">
					<div class="data-group">
						<div class="label">
							<small>Nombre</small>
						</div>
						<div class="input">
							<p><?php echo $userInfo->getName()?></p>
						</div>
					</div>

					<div class="data-group">
						<div class="label">
							<small>Apellido</small>
						</div>
						<div class="input">
							<p><?php echo $userInfo->getLastname()?></p>
						</div>
					</div>

					<div class="data-group">
						<div class="label">
							<small>E-mail</small>
						</div>
						<div class="input">
							<p><?php echo $userInfo->getEmail()?></p>
						</div>
					</div>
				</div>

				<div class="report">
					<div class="dataGroup">
						<small>Diagnostico personal</small>
						<?php if($pdfU!=""){?>
						<div class="pdf">
							<div class="pdfIcon">
								<a href="#">
									<img src="img/pdf.svg" alt="PDF">
								</a>
							</div>
							<div class="pdfInfo">
								<a href="?file=<?php echo $pdfU ?>">Ver Diagnostico</a>
							<span><?php echo $pdfU?></span>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>

		<div class="teamProfile item colum-60">
			<div class="content-wrapper">
				<h4 class="subTitle">
					Brand Media Team
				</h4>

				<div class="teamList">
					<small>Integrantes del equipo</small>
					<?php echo $groupHtml?>
				</div>

				<div class="report">
					<div class="dataGroup">
						<small>Diagnostico grupal </small>
						<?php if($pdfG!=""){?>
						<div class="pdf">
							<div class="pdfIcon">
								<a href="#">
									<img src="img/pdf.svg" alt="PDF">
								</a>
							</div>
							<div class="pdfInfo">
								<a href="?file=<?php echo $pdfG?>">Ver Diagnostico</a>
								<span><?php echo $pdfG?></span>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

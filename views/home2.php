<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="dashboard">
	<div class="container-flex">
		<div class="item colum-40">
			<div class="content-wrapper u-color-contraste flex-colum space-btw">
				<div class="profileData">
					<div class="title">
						<h1>Mi Perfil</h1>
					</div>

					<!-- Datos del usuario -->
					<div class="data-user">
						<div class="avatar">
							<?php echo $profileImg ?>
						</div>

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
				</div>

				<div class="lastestNotifications">
					<div class="subTitle">
						<h2>Últimas notificaciones</h2>
					</div>
				</div>
				
			</div>
		</div>
		<div class="item colum-80">
			<div class="content-wrapper flex-colum">

				<div class="activityFeed">
					<div class="activityFeedContainer">
						
						<?php require_once 'Libs/LtaskView.php';?>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<form method="post">
	<section class="alistamiento">
		<div class="container-flex">
			<div class="profile item colum-40 u-color-contraste">
				<div class="content-wrapper animated fadeInDown">
					<h1 class="title">
						Alistamiento
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
				</div>
			</div>

			<div class="teamProfile item colum-60 u-mount-back">
				<div class="content-wrapper animated fadeInUp">
					<div class="siguiente-campamento">
						<a href="?content=basecamp" class="btn btn-main">
							Campamento Base
						</a>
					</div>
					<h4 class="subTitle">
						Tu Equipo
					</h4>

					<div class="teamName">
							<input type="text"  pattern="[a-zA-Z0-9._%:()+-;, ]+$" name="groupName" style="text-transform:uppercase" class="form-control" value="<?php echo $groupNick?>">
							<button type="submit" class="btn" name="changeName">cambiar</button>
					</div>
					<hr/>
					<small><?php echo $message;?></small>
					<div class="teamList">
						<small>Coach</small>
						<?php echo $coachHtml?>
					</div>
					<div class="teamList">
						<small>Integrantes del equipo</small>
						<?php echo $groupHtml?>
					</div>
				</div>
			</div>
		</div>
	</section>
</form>
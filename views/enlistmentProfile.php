<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<form method="post">
	<section class="alistamiento">
		<div class="container-flex">
			<div class="profile item colum-40 u-color-contraste">
				<div class="content-wrapper animated fadeInDown">
					<h1 class="title">
						Alistamiento
					</h1>
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
						
						<div class="report">
							<div class="dataGroup">
								<small>Diagnostico personal</small>
								<?php echo $pdfU?>
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
					<div class="ava">
						<img src="img/escudos/<?php echo $avatar?>.svg" alt="Avatar" height="40px">
					</div>
					<h4 class="subTitle">
						Tu Equipo
					</h4>

					<div class="teamName">
						<input type="text"  pattern="[a-zA-Z0-9._%:()+-;, áéíóúñÁÉÍÓÚÑ&]+$" name="groupName" style="text-transform:uppercase" class="form-control" value="<?php echo $groupNick?>">
						<button type="submit" class="btn" name="changeName">cambiar</button>
					</div>
					<div class="avatar">
						<h2 class="subTitle">
							Selecciona el avatar del equipo
						</h2>
					</div>
					<div class="avatarItems">
						<button name="b1">
							<img src="img/escudos/001.svg" alt="Avatar" height="40px">
						</button>
						<button name="b2">
							<img src="img/escudos/002.svg" alt="Avatar" height="40px">
						</button>
						<button name="b3">
							<img src="img/escudos/003.svg" alt="Avatar" height="40px">
						</button>
						<button name="b4">
							<img src="img/escudos/004.svg" alt="Avatar" height="40px">
						</button>
						<button name="b5">
							<img src="img/escudos/005.svg" alt="Avatar" height="40px">
						</button>
						<button name="b6">
							<img src="img/escudos/006.svg" alt="Avatar" height="40px">
						</button>
						<button name="b7">
							<img src="img/escudos/007.svg" alt="Avatar" height="40px">
						</button>
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
					
					<div class="report">
						<div class="dataGroup">
							<small>Diagnostico grupal </small>
							<?php echo $pdfG?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</form>
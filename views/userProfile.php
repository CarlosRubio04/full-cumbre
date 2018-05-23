<section class="alistamiento">
	<div class="container-flex">
		<div class="profile item colum-40 u-color-contraste">
			<div class="content-wrapper">
				<h1 class="title">
					Perfil de Usuario
				</h1>
				<div class="avatar">
					<div class="avatarItems">
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
							<p><?php echo $name?></p>
						</div>
					</div>

					<div class="data-group">
						<div class="label">
							<small>Apellido</small>
						</div>
						<div class="input">
							<p><?php echo $lastname?></p>
						</div>
					</div>

					<div class="data-group">
						<div class="label">
							<small>E-mail</small>
						</div>
						<div class="input">
							<p><?php echo $email?></p>
						</div>
					</div>
					<div class="input">
							<h2><?php echo $status?></h2>
						</div>

					<div class="form-group">
						<div class="input">
							<a href="?content=editUser&id=<?php echo $id?>" class="btn-square" value="1" type="submit"  name="editUser">Editar</a>
							<a href="?content=userProfile&id=<?php echo $id?>&deactivate=1" class="btn-square" value="1" type="submit"  name="editUser">deshabilitar</a>
						</div>
					</div>
				</div>

				<div class="report">
					<div class="dataGroup">
						<small>Diagnostico personal</small>
						<div class="pdf">
							<div class="pdfIcon">
								<a href="#">
									<img src="img/pdf.svg" alt="PDF">
								</a>
							</div>
							<?php echo $pdfU?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="title">
					<h1>Estadisticas del usuario</h1>
				</div>
				<hr/>
				<div class="fasesContainer logs">
					<?php echo $usersHmtl?>
				</div>
			</div>
		</div>


	</div>
</section>
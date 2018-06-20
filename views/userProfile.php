<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="alistamiento">
	<div class="container-flex">
		<div class="profile item colum-40 u-color-contraste">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="title">
						Perfil de Usuario 
					</h1>
					<a href="?content=editUser&id=<?php echo $id?>" class="btn-edit" value="1" type="submit"  name="editUser" data-toggle="tooltip" data-placement="right" title="Editar">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</a>
				</div>
				<div class="avatar">
					<div class="avatarItems">
						<button>
							<?php echo $profileImg ?>
						</button>
					</div>
				</div>

				<!-- Datos del usuario -->
				<div class="data-user">
					<div class="data-group">
						<div class="label">
							<small>Nombre</small>
						</div>
						<div class="input input-flex">
							<p><?php echo $name?></p>
						</div>
					</div>

					<div class="data-group">
						<div class="label">
							<small>Apellido</small>
						</div>
						<div class="input input-flex">
							<p><?php echo $lastname?></p>
						</div>
					</div>

					<div class="data-group">
						<div class="label">
							<small>E-mail</small>
						</div>
						<div class="input input-flex">
							<p><?php echo $email?></p>
						</div>
					</div>
					
					<div class="data-group">
						<div class="label">
							<small>Documento</small>
						</div>
						<div class="input input-flex">
							<p><?php echo $idType." ".$idnum?></p>
						</div>
					</div>
					
					<div class="data-group">
						<div class="label">
							<small>nombre de usuario</small>
						</div>
						<div class="input input-flex">
							<p><?php echo $username?></p>
						</div>
					</div>
					
					<div class="data-group">
						<div class="label">
							<small>Rol</small>
						</div>
						<div class="input input-flex">
							<p><?php echo $role?></p>
						</div>
					</div>
					
					<div class="input">
						<h2><?php echo $status?></h2>
					</div>

					<div class="form-group">
						<a href="?content=newPass&id=<?php echo $id?>" class="btn-square" value="1" type="submit"  name="editUser">Cambiar Clave</a>

						<a href="?content=userProfile&id=<?php echo $id?>&deactivate=1" class="btn-square" value="1" type="submit"  name="editUser" data-toggle="tooltip" data-placement="bottom" title="Desactivar Usuario">
							<i class="fa fa-ban" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="title">
					<a href="?content=userList" class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1>Estadisticas del usuario</h1>
				</div>
				<hr/>
				<h5>Metros recorridos por fase</h5>
				<div class="x_content">
					<canvas id="DoughnutMyMetersChart"></canvas>
				</div>
				<hr/>
				<div class="title">
					<h1>Acciones del Usuario</h1>
				</div>
				<hr/>
				<div class="fasesContainer logs">
					<?php echo $usersHmtl?>
				</div>
			</div>
		</div>


	</div>
</section>
<script src="js/vendors/Chart.min.js"></script>
<script src="./js/cumbreCharts.js"></script>

<script>
	//Doughnut chart with my meters
	userCampMeters(<?php echo $dataChartC?>);
</script>
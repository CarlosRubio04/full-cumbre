<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="dashboard inicio">
	<div class="content-wrapper u-color-contraste u-mount-back">
		<div class="title">
			<h1>Bienvenido</h1>
		</div>
		<hr>
		<p class="text-center">
			Desde tu perfil administrador podrás controlar y llevar el registro de todo lo que pasa en CUMBRE. 
			<br/>
			Empieza subiendo tus equipos, luego crea los Coach y asígnalos a sus equipos.
		</p>
		<hr>
		<div class="flex-row wrap">

			<div class="item" onclick="window.location='?content=uploadTeams'">
				<div class="itemHeader">
					<a href="?content=uploadTeams">
						Agregar nuevos grupos
						<i class="fa fa-arrow-right" aria-hidden="true"></i>
					</a>

				</div>
				<div class="itemBody">
					<img src="img/svg/add-group.svg" alt="Lista de grupos">
				</div>
			</div>

			<div class="item" onclick="window.location='?content=addUser'">
				<div class="itemHeader">
					<a href="?content=addUser">
						Agregar nuevo usuario
						<i class="fa fa-arrow-right" aria-hidden="true"></i>
					</a>
				</div>
				<div class="itemBody">
					<img src="img/svg/user.svg" alt="Cursos">
				</div>
			</div>



			<div class="item" onclick="window.location='?content=addCourse'">
				<div class="itemHeader">
					<a href="?content=addCourse">
						Agregar nuevo curso
						<i class="fa fa-arrow-right" aria-hidden="true"></i>
					</a>
				</div>
				<div class="itemBody">
					<img src="img/svg/list.svg" alt="Lista de grupos">
				</div>
			</div>

			<div class="item" onclick="window.location='?content=groupList'">
				<div class="itemHeader">
					<a href="?content=groupList">
						Ver lista de grupos
						<i class="fa fa-arrow-right" aria-hidden="true"></i>
					</a>
				</div>
				<div class="itemBody">
					<img src="img/svg/group-users.svg" alt="Lista de grupos">
				</div>
			</div>

			<div class="item" onclick="window.location='?content=userList'">
				<div class="itemHeader">
					<a href="?content=userList">
						Ver lista de Usuarios
						<i class="fa fa-arrow-right" aria-hidden="true"></i>
					</a>
				</div>
				<div class="itemBody">
					<img src="img/svg/group.svg" alt="Cursos">
				</div>
			</div>

			<div class="item" onclick="window.location='?content=coursesList'">
				<div class="itemHeader">
					<a href="?content=coursesList">
						Ver lista de Cursos
						<i class="fa fa-arrow-right" aria-hidden="true"></i>
					</a>
				</div>
				<div class="itemBody">
					<img src="img/svg/course-list.svg" alt="Lista de grupos">
				</div>
			</div>


		</div>
	</div>
</section>

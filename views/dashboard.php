<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="dashboard">
	<div class="container-flex">
		<div class="item colum-40 u-color-contraste">
			<div class="content-wrapper flex-colum space-btw">
				<div class="profileData">
					<div class="title">
						<h1>Mi Perfil</h1>
					</div>

					<!-- Datos del usuario -->
					<div class="data-user">
						<div class="avatar">
							<img src="http://placehold.it/30x30" alt="Avatar" class="img-circle">
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
					
					<!-- Contenedor de las ultimas notificaciones -->
					<div class="lastestNotificationsContainer">

						<?php echo $newsHtml ?>

					</div>

				</div>
				
			</div>
		</div>
		<div class="item colum-80">
			<div class="content-wrapper flex-colum">

				<div class="activityFeed">

					<?php //require_once 'Libs/LtaskView.php';?>

					<!-- Contenedor para un estado -->
					<div class="activityFeedFase">
						<div class="state amarillo">
							En Desarrollo
						</div>
						<!-- Contendor para las tareas de esa estado -->

						<div class="activityFeedFaseContainer">
							
							<!-- Item -->
							<div class="item flex-colum space-btw">
								<div class="activity">
									<div class="data">
										<span>Actividad</span>
										<p>Nombre de la Actividad</p>
										<small>Responsable</small>
										<a href="#">Pepito</a>
									</div>
									<div class="date">
										<div class="month">
											Mayo
										</div>
										<div class="day">
											25
										</div>
									</div>
								</div>
								<div class="cta">
									<a href="?content=#" class="btn-square">
										Ver más
									</a>
								</div>
							</div>
							<!-- Item -->

							<!-- Item -->
							<div class="item flex-colum space-btw">
								<div class="activity">
									<div class="data">
										<span>Actividad</span>
										<p>Nombre de la Actividad</p>
										<small>Responsable</small>
										<a href="#">Pepito</a>
									</div>
									<div class="date">
										<div class="month">
											Mayo
										</div>
										<div class="day">
											25
										</div>
									</div>
								</div>
								<div class="cta">
									<a href="?content=#" class="btn-square">
										Ver más
									</a>
								</div>
							</div>
							<!-- Item -->

							<!-- Item -->
							<div class="item flex-colum space-btw">
								<div class="activity">
									<div class="data">
										<span>Actividad</span>
										<p>Nombre de la Actividad</p>
										<small>Responsable</small>
										<a href="#">Pepito</a>
									</div>
									<div class="date">
										<div class="month">
											Mayo
										</div>
										<div class="day">
											25
										</div>
									</div>
								</div>
								<div class="cta">
									<a href="?content=#" class="btn-square">
										Ver más
									</a>
								</div>
							</div>
							<!-- Item -->

							<!-- Item -->
							<div class="item flex-colum space-btw">
								<div class="activity">
									<div class="data">
										<span>Actividad</span>
										<p>Nombre de la Actividad</p>
										<small>Responsable</small>
										<a href="#">Pepito</a>
									</div>
									<div class="date">
										<div class="month">
											Mayo
										</div>
										<div class="day">
											25
										</div>
									</div>
								</div>
								<div class="cta">
									<a href="?content=#" class="btn-square">
										Ver más
									</a>
								</div>
							</div>
							<!-- Item -->

						</div>
						
						<!-- Contendor para las tareas de esa estado -->

					</div>
					<!-- Contenedor para Una fase -->


					<!-- Contenedor para un estado -->
					<div class="activityFeedFase">
						<div class="state verde">
							En Desarrollo
						</div>
						<!-- Contendor para las tareas de esa estado -->

						<div class="activityFeedFaseContainer">
							
							<!-- Item -->
							<div class="item flex-colum space-btw">
								<div class="activity">
									<div class="data">
										<span>Actividad</span>
										<p>Nombre de la Actividad</p>
										<small>Responsable</small>
										<a href="#">Pepito</a>
									</div>
									<div class="date">
										<div class="month">
											Mayo
										</div>
										<div class="day">
											25
										</div>
									</div>
								</div>
								<div class="cta">
									<a href="?content=#" class="btn-square">
										Ver más
									</a>
								</div>
							</div>
							<!-- Item -->

							<!-- Item -->
							<div class="item flex-colum space-btw">
								<div class="activity">
									<div class="data">
										<span>Actividad</span>
										<p>Nombre de la Actividad</p>
										<small>Responsable</small>
										<a href="#">Pepito</a>
									</div>
									<div class="date">
										<div class="month">
											Mayo
										</div>
										<div class="day">
											25
										</div>
									</div>
								</div>
								<div class="cta">
									<a href="?content=#" class="btn-square">
										Ver más
									</a>
								</div>
							</div>
							<!-- Item -->

							<!-- Item -->
							<div class="item flex-colum space-btw">
								<div class="activity">
									<div class="data">
										<span>Actividad</span>
										<p>Nombre de la Actividad</p>
										<small>Responsable</small>
										<a href="#">Pepito</a>
									</div>
									<div class="date">
										<div class="month">
											Mayo
										</div>
										<div class="day">
											25
										</div>
									</div>
								</div>
								<div class="cta">
									<a href="?content=#" class="btn-square">
										Ver más
									</a>
								</div>
							</div>
							<!-- Item -->

							<!-- Item -->
							<div class="item flex-colum space-btw">
								<div class="activity">
									<div class="data">
										<span>Actividad</span>
										<p>Nombre de la Actividad</p>
										<small>Responsable</small>
										<a href="#">Pepito</a>
									</div>
									<div class="date">
										<div class="month">
											Mayo
										</div>
										<div class="day">
											25
										</div>
									</div>
								</div>
								<div class="cta">
									<a href="?content=#" class="btn-square">
										Ver más
									</a>
								</div>
							</div>
							<!-- Item -->

						</div>
						
						<!-- Contendor para las tareas de esa estado -->

					</div>
					<!-- Contenedor para Una fase -->

				</div>

			</div>
		</div>
	</div>
</section>
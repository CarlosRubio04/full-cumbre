<section class="cumbre">
	<div class="content-wrapper u-mount-back">
		<div class="title">
			<a href="." class="btn btn-back">
				<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
			</a>
			<h1 class="animated fadeInDown">
				Cumbre
			</h1>
		</div>
		<p class="text-center">
			Esta es la cumbre de tu proyecto, acá verás las estadisticas de tu rendimiento personal y las de tu equipo.
		</p>

		<div class="container-flex">
			<div class="item colum-60">
				<h4 class="text-center">Estadisticas Personales</h4>

				<div class="User">
					<div class="UserMts">
						<h5>En total recorriste</h5>
						
					</div>

					<div class="item">

						<h5>Metros recorridos por campamento</h5>

						<div class="x_content">
							<canvas id="DoughnutMyMetersChart"></canvas>
						</div>
					</div>
					<div class="UserGoals">
						<h5>Estos son los item que lograste</h5>
						<div class="excelencia">
							<h3>Items logrados por excelencia</h3>
							<div class="itemContainer">
								<div class="item">
									<img src="img/svg/mapa.svg" alt="mapa">
									<h4>Mapa</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati aliquam doloribus quibusdam, reprehenderit</p>
								</div>
								<div class="item">
									<img src="img/svg/botas.svg" alt="mapa">
									<h4>Botas</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque consequatur nostrum doloremque </p>
								</div>
								<div class="item">
									<img src="img/svg/brujula.svg" alt="mapa">
									<h4>Brujula</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea vero, at sit ipsum et accusamus culpa </p>
								</div>
							</div>
						</div>
						<div class="logros">
							<h3>Items por cumplimiento</h3>
							<div class="itemContainer">
								<div class="item">
									<img src="img/svg/mapa.svg" alt="mapa">
									<h4>Mapa</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati aliquam doloribus quibusdam.</p>
								</div>
								<div class="item">
									<img src="img/svg/botas.svg" alt="mapa">
									<h4>Botas</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque consequatur nostrum doloremque </p>
								</div>
								<div class="item">
									<img src="img/svg/brujula.svg" alt="mapa">
									<h4>Brujula</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea vero, at sit ipsum et accusamus culpa </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item colum-60">
				<h4 class="text-center">Estadisticas Grupales</h4>
				
				<div class="item">
					<h5></h5>
				</div>

				<div class="item">

					<h5>Metros por integrante del equipo</h5>

					<div class="x_content">
						<canvas id="DoughnutGroupMembersChart"></canvas>
					</div>
				</div>

				<div class="item">

					<h5>Ranking de equipos en Cumbre</h5>

					<div class="x_content">
						<canvas id="barGroupsChart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="js/vendors/Chart.min.js"></script>
<script src="./js/cumbreCharts.js"></script>

<script>
	//Bar chart with users meters datails in this group
	groupMembersMeters(<?php echo $labelsChartU.",".$dataChartU?>);
	
	//Doughnut chart with total meters for each group
	groupsChart(<?php echo $labelsChartG.",".$dataChartG?>);
	//Doughnut chart with my meters
	userCampMeters(<?php echo $dataChartC?>);
</script>
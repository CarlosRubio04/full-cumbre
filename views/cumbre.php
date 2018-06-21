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
			<?php if($_SESSION['loginRoleCumbre']==3){?>
			<div class="item colum-60">
				<h4 class="text-center">Estadisticas Personales</h4>

				<div class="User">
					<div class="UserMts">
						<h5>En total recorriste <?php echo number_format($totalUser,2)?> Metros</h5>
						
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
								<?php echo $excelItems?>
							</div>
						</div>
						<div class="logros">
							<h3>Items por cumplimiento</h3>
							<div class="itemContainer">
								<?php echo $goalItems?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
			<div class="item colum-60">
				<h4 class="text-center">Estadisticas Grupales</h4>
				
				<div class="item">
					<h5></h5>
				</div>
<?php if($_SESSION['loginRoleCumbre']==3){?>
				<div class="item">

					<h5>Metros por integrante del equipo</h5>

					<div class="x_content">
						<canvas id="DoughnutGroupMembersChart"></canvas>
					</div>
				</div>
<?php }?>
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
<?php if($_SESSION['loginRoleCumbre']==3){?>
<script>
	//Bar chart with users meters datails in this group
	groupMembersMeters(<?php echo $labelsChartU.",".$dataChartU?>);
	//Doughnut chart with my meters
	userCampMeters(<?php echo $dataChartC?>);
</script>
<?php }?>
<script>
	//Doughnut chart with total meters for each group
	groupsChart(<?php echo $labelsChartG.",".$dataChartG?>);
</script>
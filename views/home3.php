<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>

<section class="rutaVirtual">

	<!-- <div class="welcome">
		<div class="title">
			<h1 class="text-center animated fadeInDown">Bienvenidos</h1>
		</div>
		<p class="text-center animated fadeInUp">
			Hola equipos, bienvenidos a esta aventura de subir a la cumbre del trabajo en equipo. <br/>
			En esta travesía vamos a llevarlos por diferentes etapas para consolidar su gestión como equipo de alto desempeño.<br/>
			Por ello, bienvenidos y disfruten el proceso.
		</p>
	</div> -->

	<div class="rutaVirtualElementos">
		<a href="?content=cumbre"><?php echo $itemsG?></a>
		<p>Items Ganados</p>
	</div>


	<div class="rutaVirtualTeams">

		<div class="teamsContainer">
			<?php echo $teamsMeters?>
		</div>


		<div class="rule">
			<img src="img/svg/regla.svg">
		</div>
	</div>

	<div class="rutaVirtualClouds">
		<?php  require_once('views/clouds.php'); ?>
	</div>

	<div class="rutaVirtualBack">
		<div class="cumbre animated fadeInUp">
			<img src="img/mountain.png" alt="Montaña">
		</div>
		<div class="rio">
			<img src="img/rio.png" alt="Rio">
		</div>
		<div class="falda">
			<img src="img/falda.png" alt="Falda">
		</div>
	</div>
</section>



<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<!-- <section class="ruta u-color-contraste">
	<div class="content-wrapper">
		<div class="title">
			<h1 class="text-center animated fadeInDown">Bienvenidos</h1>
		</div>
		<p class="text-center animated fadeInUp">
			Hola equipos, bienvenidos a esta aventura de subir a la cumbre del trabajo en equipo. <br/>
			En esta travesía vamos a llevarlos por diferentes etapas para consolidar su gestión como equipo de alto desempeño.<br/>
			Por ello, bienvenidos y disfruten el proceso.
		</p>
	</div>
</section> -->

<section class="rutaVirtual">

	<div class="rutaVirtualElementos">
		<?php echo $itemsG?>
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
		<img src="img/ruta-virtual.png" alt="Ruta Virtual">
	</div>
</section>



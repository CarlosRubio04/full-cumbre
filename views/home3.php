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

	<div class="rutaVirtualBack">
		<div class="parallax-viewport" id="parallax">
			<div class="parallax-layer ruta-nubes">
				<?php  require_once('views/clouds.php'); ?>
			</div>
			<!-- parallax layers -->
			<div class="parallax-layer ruta-cumbre">
				<img src="img/parallax/04-cumbre.png"/>
			</div>
			<div class="parallax-layer ruta-mounts">
				<img src="img/parallax/03-mounts.png"/>
			</div>
			<div class="parallax-layer ruta-rio">
				<img src="img/parallax/02-rio.png"/>
			</div>
			<div class="parallax-layer ruta-falda">
				<img src="img/parallax/01-falda.png"/>
			</div>
		</div>
	</div>
</section>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>


<script>
	jQuery(document).ready(function(){
		jQuery('#parallax .parallax-layer')
		.parallax({
			mouseport: jQuery('#parallax')
		});
	});
</script>


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
			<div class="parallax-layer" style="width:100vw; height:90vh;">
				<?php  require_once('views/clouds.php'); ?>
			</div>
			<!-- parallax layers -->
			<div class="parallax-layer" style="width:100vw; height:60vh;">
				<img src="img/parallax/04-cumbre.png" alt="" style="position:absolute; left:0px; bottom: -0px"/>
			</div>
			<div class="parallax-layer" style="width:100vw; height:70vh;">
				<img src="img/parallax/03-mounts.png" alt="" style="position:absolute; left:0px; bottom:-50px;"/>
			</div>
			<div class="parallax-layer" style="width:100vw; height:80vh;">
				<img src="img/parallax/02-rio.png" alt="" style="position:absolute; bottom:-50px; right:0;" />
			</div>
			<div class="parallax-layer" style="width:100vw; height:90vh;">
				<img src="img/parallax/01-falda.png" alt="" style="position:absolute; bottom: 0px; left:0;"/>
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


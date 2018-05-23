<header>
	<div class="nav">
		<div class="navLogo">
			<a href="?content=ruta-virtual">
				<img src="img/logo-blanco.svg" alt="CUMBRE">
			</a>
		</div>
		<div class="navItems">
			<?php echo $menuTop?>
		</div>
	</div>
</header>

<div class="menu" id="menu">
	<div class="menuContainer">
		<button class="close" onclick="closeMenu()">
			<i class="fa fa-times" aria-hidden="true"></i>
		</button>
		<h4>MENU</h4>
		<?php echo $menu?>
	</div>
</div>
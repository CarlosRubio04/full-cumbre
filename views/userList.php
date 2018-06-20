<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="definir-fases">
	<div class="container-flex flex-center u-color-contraste">
		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="title">
					<a href="." class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInLeft">Lista de usuarios</h1>
				</div>
				<div class="formContainer animated fadeInDown">
					<form method="post">
						<div class="inputs">
							<div class="form-group container-flex">
								<div class="input colum-80">
									<label for="nombre">Buscar usuario</label>
									<input type="text" name="nombre" value="<?php echo $name?>" id="nombre" class="form-control" placeholder="Buscar usuario">
								</div>
								<div class="buton self-bottom colum-40">
									<button class="btn-square" value="1" type="submit"  name="searchUser">Filtrar</button>
								</div>
							</div>
							<h4><?php echo $message;?></h4>
						</div>
					</form>
				</div>

				<div class="fasesContainer">
					<?php echo $usersHmtl?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if($message!=""){
	echo "<script>window.scrollTo(0,document.body.scrollHeight);</script>";
}
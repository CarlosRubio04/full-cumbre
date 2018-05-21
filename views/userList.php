<section class="definir-fases">
	<div class="container-flex u-color-contraste">
		<div class="item colum-80">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="animated fadeInLeft">Usuarios</h1>
				</div>
				<div class="formContainer animated fadeInDown">
					<form method="post">
						<div class="inputs">
							<div class="form-group container-flex">
								<div class="input colum-80">
									<label for="nombre">Ver Usuarios</label>
									<input type="text" name="nombre" value="<?php echo $name?>" id="nombre" class="form-control" placeholder="Nombre">
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
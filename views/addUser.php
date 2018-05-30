<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="agregar-usuario">
	<div class="container-flex u-color-contraste">
		<div class="item colum-80">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="animated fadeInLeft">Agregar nuevo usuario</h1>
				</div>
				<div class="formContainer animated fadeInUp">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" name="nombre" value="<?php echo $name?>" class="form-control" placeholder="Ingrese el nombre del usuario">
							</div>
							<div class="form-group">
								<label for="apellido">Apellido</label>
								<input type="text" name="apellido"  value="<?php echo $lastname?>" class="form-control" placeholder="Ingrese el apellido del usuario">
							</div>
							<div class="form-group">
								<label for="">Tipo de Documento</label>
								<div class="u-selectWraper">
									<select name="idType" class="form-control">
									<?php echo $htmlIdType?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="cc">Número de Documento</label>
								<input type="text" name="cc"  value="<?php echo $idN?>" class="form-control" placeholder="Ingresa el número de cédula">
							</div>
							<div class="form-group">
								<label for="email">Correo electrónico</label>
								<input type="text" name="email"  value="<?php echo $email?>" class="form-control" placeholder="Ingresa el correo electrónico ">
							</div>

							<div class="form-group">
								<label for="">Rol</label>
								<div class="u-selectWraper">
									<select name="rol" class="form-control" onchange="displayGroupList(this);">
									<?php echo $htmlRol?>
									</select>
								</div>
							</div>
							
							<div class="form-group" id="divG" <?php echo $displayG?>>
								<label for="">Grupo</label>
								<div class="u-selectWraper">
									<select name="groupId" class="form-control">
									<?php echo $htmlGroup?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="pass">Contraseña</label>
								<input type="password" name="pass" class="form-control" placeholder="Defina una Contraseña para el usuario">
							</div>
							<div class="form-group">
								<label for="pass">Confirmar Contraseña</label>
								<input type="password" name="pass1" class="form-control" placeholder="Defina una Contraseña para el usuario">
							</div>
							<h4><?php echo $message;?></h4>

							<div class="form-group">
								<button class="btn-square" type="submit" name="addUser" value="1">
									Agregar Usuario
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	function displayGroupList(obj){
		if(obj.selectedIndex===2){
			document.getElementById('divG').style.visibility="visible";
		}else{
			document.getElementById('divG').style.visibility="hidden";
		}
	}
</script>
<?php if($message!=""){
	echo "<script>window.scrollTo(0,document.body.scrollHeight);</script>";
}
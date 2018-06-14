<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="cargar-grupos">
	<form method="post"  enctype="multipart/form-data">
		<div class="u-color-contraste">
			<div class="content-wrapper flex-colum flex-center">
				<div class="title">
					<a href="." class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1>Cargar archivo masivo de grupos</h1>
				</div>
				
				<div class="file">
					<p class="text-center">
						Acá puedes cargar un archivo Excel con todos los grupos que deseas cargar. <br/> 
						Si no tienes el archivo base para cargar usuarios pedes descargarlo aquí 
						<br/><a href="files/templateLoad.xlsx" class="link">Descargar Archivo</a>
					</p>
					<div class="file-input">
						<input type="file" name="fileUpload" class="form-control">
						<span>BUSCAR ARCHIVO EN EL ORDENADOR</span>
					</div>
					<button type="submit" name="load" class="btn-square btn-full">CARGAR ARCHIVO</button>
					<hr/>
					<h3 class="text-center"><?php echo $message;?></h3>
				</div>
			</div>
		</div>
	</form>
</section>

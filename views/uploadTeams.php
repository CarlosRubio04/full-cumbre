<?php Common::logg("Nuevo Grupo","Visualizar información");?>
<section class="cargar-grupos">
	<form method="post"  enctype="multipart/form-data">|
		<div class="u-color-contraste">
			<div class="content-wrapper flex-colum flex-center">
				<div class="title">
					<h1>Cargar archivo masivo de grupos</h1>
				</div>
				
				<div class="file">
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates cumque eius minima recusandae fuga architecto error, rem obcaecati magnam ducimus dolorem voluptatum numquam cupiditate, consequatur, repellat quo vero praesentium a.</p>
					<div class="file-input">
						<input type="file" name="fileUpload" class="form-control">
						<span>BUSCAR ARCHIVO EN EL ORDENADOR</span>
					</div>
					<button type="submit" name="load" class="btn btn-sub">Cargar</button>
					<hr/>
					<h3 class="text-center"><?php echo $message;?></h3>
				</div>

			</div>
		</div>
	</form>
</section>
<?php Common::logg("Nuevo Grupo","Visualizar información");?>
<section class="cargar-grupos">
	<form method="post"  enctype="multipart/form-data">|
		<div class="u-color-contraste">
			<div class="content-wrapper flex-colum flex-center">
				<div class="title">
					<h1>Cargar archivo masivo de grupos</h1>
				</div>
				<h3><?php echo $message;?></h3>
				<div class="file">
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates cumque eius minima recusandae fuga architecto error, rem obcaecati magnam ducimus dolorem voluptatum numquam cupiditate, consequatur, repellat quo vero praesentium a.</p>
					<input type="file" name="fileUpload" class="form-control" placeholder="CARGAR ARCHIVO">
					<button type="submit" name="load" class="btn btn-sub">Cargar</button>
				</div>

			</div>
		</div>
	</form>
</section>
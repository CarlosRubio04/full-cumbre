<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section>
	<form method="post" id="formTask">
		<div class="content-wrapper  u-color-contraste animated fadeInUp">
			<div class="addActivityHeader">
				<div class="name">
					<h1 class="title">Calificar Entregable</h1>
				</div>
			</div>
			<div class="addActivityBody">
				<div class="form-group">
					<label for="">
						Nombre del Entregable
					</label>
					<h3><?php echo $name?></h3>
				</div>
				<div class="form-group">
					<label for="fechaIni">Fecha de entrega</label>
					<h3><?php echo $startDate?></h3>
				</div>

				<div class="user form-group" title="Responsable">
					<label for="">Tareas</label>
					<div class="form-group">
						<h3><?php echo $taskHtmlSel?></h3>
					</div>
				</div>
				
				<div class="user form-group" title="Responsable">
					<label for="">Responsable</label>
					<div class="form-group">
						<h3><?php echo $assignedHtmlSel?></h3>
					</div>
				</div>

				<div class="form-group">
					<label for="">
						Descripción del entregable
					</label>
					<h3><?php echo $descProduct?></h3>
				</div>
				<div class="form-group">
					<label for="">
						Entregable Guardado:
					</label>
					<?php echo $filesHtml?>
				</div>
				<div class="form-group">
					<label for="">
						Calificación del entregable
					</label>
					<input type="number" title="Nota para el Entregable" name="grade" step="0.01" min="0" max="5" class="form-control" required>
				</div>
				<h3><?php echo $message?></h3>
				<div class="form-group">
					<button type="submit" name="productGrade"  value="1" class="btn btn-sub">Calificar</button>
				</div>
			</div>
		</div>
	</form>
</section>
<?php if($message!=""){
	echo "<script>window.scrollTo(0,document.body.scrollHeight);</script>";
}
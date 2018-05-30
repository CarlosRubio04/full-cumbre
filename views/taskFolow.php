<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="seguimiento-tarea u-color-contraste">
	<form method="post"  enctype="multipart/form-data">
		<div class="container-flex">
				<div class="item colum-60">
					<div class="content-wrapper">
						<div class="estados">
							<div class="fase">
								<?php echo $phase?>
							</div>
							<div class="estado" <?php echo $color?>>
								<?php echo $status?>
							</div>
						</div>

						<div class="title">
							<h1><?php echo $name?></h1>
						</div>


						<div class="dates">
							<div class="date">
								<small>Fecha de inicio</small>
								<div><?php echo $startDate1?></div>
							</div>
							<div class="date-icon">

							</div>
							<div class="date">
								<small>Fecha de fin</small>
								<div><?php echo $endDate1?></div>
							</div>
						</div>


						<div class="form-group">
							<label for="">
								Descripción de la actividad
							</label>
							<textarea name="tarea" rows="5" class="form-control" placeholder="Descripción" readonly><?php echo $task?></textarea>
						</div>

						<div class="form-group">
							<label for="">
								Entregables Asignados
							</label><br>
							<?php echo $productsList?>
						</div>
						<div class="form-group">
							<label for="">
								Entregables Guardados:
							</label>
							<?php echo $filesHtml?>
						</div>
						<h4><?php echo $message;?></h4>
						<div class="file-input">
							<input type="file" name="fileUpload" class="form-control">
						</div>
						<button type="submit" class="btn-square" name="uploadProduct" value='1'>
							SUBIR ENTREGABLE
						</button>
					</div>
				</div>
			<div class="item colum-40 contenedorComents">
				<?php
					require_once 'views/comentsSistem.php';
				?>
			</div>
		</div>
	</form>
</section>



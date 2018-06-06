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
						<a href="." class="btn btn-back">
							<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
						</a>
						<h1><?php echo $name?></h1>
					</div>
					<div class="dates">
						<div class="date">
							<small>Fecha de entrega</small>
							<div><?php echo $date1?></div>
						</div>
					</div>


					<div class="form-group">
						<label for="">
							Descripción del Entregable
						</label>
						<textarea name="tarea" rows="5" class="form-control" placeholder="Descripción" readonly><?php echo $task?></textarea>
					</div>

					<div class="form-group">
						<label for="">
							Actividades Asignadas
						</label><br>
						<!-- <?php echo $taskList?> -->

						<div class="question-body mt8">
							<div class="question-label big">
								Nombre de la tarea relacionada
							</div>	
						</div>

						<div class="question-body mt8">
							<div class="question-label big">
								Nombre de la tarea relacionada
							</div>	
						</div>

					</div>
					<div class="form-group">
						<label for="">
							Archivos Guardados:
						</label>
						<!-- <?php echo $filesHtml?> -->
						<div class="question-body mt8">
							<div class="question-label big">
								<i class="fa fa-file-pdf-o" aria-hidden="true"></i> | Nombre del Archivo
							</div>	

							<div class="question-inputs">
								<div class="item five big">
									<input type="checkbox" name="twelve" value="5">
									<span class="checkMark"></span>
								</div>
							</div>
						</div>
					</div>
					<h4><?php echo $message;?></h4>

					<div class="file">
						<div class="file-input">
							<input type="file" name="fileUpload" class="form-control">
							<span>BUSCAR ARCHIVO EN EL ORDENADOR</span>
						</div>
						<button type="submit" class="btn-square" name="uploadProduct" value='1'>
							SUBIR ENTREGABLE
						</button>
					</div>
					<hr>
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



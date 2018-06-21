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
						<a href="?content=<?php echo $return?>" class="btn btn-back">
							<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
						</a>
						<h1><?php echo $note!==""?"$name | Nota: $note":$name ?></h1>
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
						<?php echo $taskList?>

					</div>
					<div class="form-group">
						<label for="">
							Archivos Guardados:
						</label>
						<?php echo $filesHtml?> 
					</div>
					<h4><?php echo $message;?></h4>
					<?php if($_SESSION['loginRoleCumbre']==3 && !$locked){?>
					<div class="file">
						<div class="file-input">
							<input type="file" name="fileUpload" class="form-control">
							<span>BUSCAR ARCHIVO EN EL ORDENADOR</span>
						</div>
						<button type="submit" class="btn-square" name="uploadProduct" value='1'>
							SUBIR ENTREGABLE
						</button>
					</div>
					<?php }elseif($_SESSION['loginRoleCumbre']==2 && $filesHtml!=""){?>
					<div class="form-group">
						<label for="">
							Calificación del entregable
						</label>
						<div class="input">
							<input type="number" title="Nota para el Entregable" value="<?php echo $note?>" name="grade" placeholder="Nota para el Entregable" step="0.01" min="0" max="5" class="form-control" required>
							<button type="submit" name="productGrade"  value="1" class="btn btn-sub">Calificar</button>
						</div>
					</div>
					<?php }?>
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



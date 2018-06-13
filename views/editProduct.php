<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="main addActivity u-color-contraste u-mount-back">
	<form method="post">
		<div class="content-wrapper animated fadeInUp">
			<div class="addActivityHeader">
				<div class="name title">
					<a href="?content=<?php echo $return?>" class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1>Editar Entregable</h1>
				</div>
			</div>
			<div class="addActivityBody">
				<div class="form-group">
					<label for="">
						Nombre del Entregable
					</label>
					<input type="text" name="nombre" id="nombreProduct" class="form-control" placeholder="Ingresa el nombre de la actividad" value="<?php echo $name?>" required>
				</div>
				<div class="form-group">
					<label for="fechaIni">Fecha de entrega</label>
					<input type="date" title="Fecha Entrega" name="fecha" id="fechaProduct" class="form-control" value="<?php echo $startDate?>" required>
				</div>

				<div class="user form-group" title="Responsable">
					<label for="">Tareas</label>
					<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<?php echo $taskHtmlSel?>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<?php echo $taskHtml?>
						</ul>
					</div>
				</div>
				
				<div class="user form-group" title="Responsable">
					<label for="">Responsable</label>
					<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<?php echo $assignedHtmlSel?>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<?php echo $assignedHtml?>
						</ul>
					</div>
				</div>

				<div class="form-group">
					<label for="">
						Descripción del entregable
					</label>
					<textarea name="desc" id="desc" rows="5" class="form-control" placeholder="Descripción" required><?php echo $descProduct?></textarea>
				</div>
				<h3><?php echo $message?></h3>
				<div class="form-group">
					<button type="submit" name="editProduct" value="1" class="btn btn-sub">Modificar</button>
				</div>
			</div>
		</div>
	</form>
</section>
<script>
	function updateSel(){
		var all = document.getElementsByTagName("input");
		var sel='Ninguno seleccionado';
		var cc=0;
		for (var i=0, max=all.length; i < max; i++) {
			if(all[i].type==='checkbox' && all[i].checked && all[i].name.substr(0,12)==='assignedTask'){
				cc++;
				if(all[i].value==='Group'){
					sel='Todo el Grupo';
					break;
				}else if (cc>1){
					sel='Varios Usuarios';
				}else{
					var name=document.getElementById('assignedTaskL'+all[i].value).innerHTML;
					sel=name;
				}
			}
		}
		document.getElementById('dropdownMenu1').innerHTML=sel;
	}
	function updateSelT(){
		var all = document.getElementsByTagName("input");
		var sel='Ninguno seleccionado';
		var cc=0;
		for (var i=0, max=all.length; i < max; i++) {
			if(all[i].type==='checkbox' && all[i].checked && all[i].name.substr(0,8)==='listTask'){
				cc++;
				if (cc>1){
					sel='Varias Tareas';
				}else{
					sel=document.getElementById('listTaskL'+all[i].value).innerHTML;
				}
			}
		}
		document.getElementById('dropdownMenu2').innerHTML=sel;
	}
</script>
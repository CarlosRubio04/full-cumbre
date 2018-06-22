<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="addActivity" id="addActivity">
	<form method="post" id="formTask" onsubmit="saveTask();">
		<div class="content-wrapper  u-color-contraste animated fadeInUp">
			<button class="close" onclick="closeActivity()">
				<i class="fa fa-times" aria-hidden="true"></i>
			</button>
			<div class="addActivityHeader">
				<div class="name">
					<h1 class="title">Agregar Actividad</h1>
				</div>
			</div>
			<div class="addActivityBody">
				<div class="form-group">
					<label for="">
						Nombre de la Actividad *
					</label>
					<input type="text" name="nombreTask" id="nombreTask" class="form-control" placeholder="Ingresa el nombre de la actividad" value="<?php echo $name?>" required>
				</div>
				<div class="form-group col-md-6">
					<label for="fechaIniTask">Fecha de inicio *</label>
					<!-- <input type="date" title="Fecha Inicio" name="fechaIniTask" id="fechaIniTask" class="form-control" value="<?php echo $startDate?>" required> -->
					 <input placeholder="Seleccione" title="Fecha Inicio" name="fechaIniTask" type="date" id="fechaIniTask" class="form-control" value="<?php echo $startDate?>" required>
				</div>
				<div class="form-group col-md-6">
					<label for="fechaFinTask">Fecha de finalización *</label>
					<!-- <input type="date" title="Fecha Terminación" name="fechaFinTask" id="fechaFinTask" class="form-control" value="<?php echo $endDate?>" required> -->
					<input placeholder="Seleccione" title="Fecha Terminación" name="fechaFinTask" type="date" id="fechaFinTask" class="form-control" value="<?php echo $endDate?>" required>
				</div>

				<div class="user form-group col-md-6" title="Responsable">
					<label for="">Responsable de la actividad *</label>
					<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<?php echo $assignedHtmlSel?>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<?php echo $assignedHtml?>
						</ul>
					</div>
				</div>

				<div class="fase form-group col-md-6">
					<label for="">Seleccione la fase de desarrollo *</label>
					<div class="dropdown" title="Fase">
						<button class="btn btn-default dropdown-toggle" type="button" id="selectFase" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<?php echo $phaseSel?>
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="selectFase">
							<?php echo $phaseHtml?>
						</ul>
					</div>
					<input type="hidden" name="faseTask" id="faseTask" value="<?php echo$phaseSelId?>" >
				</div>
				<div class="form-group">
					<label for="">
						Descripción de la actividad *
					</label>
					<textarea name="tareaTask" id="tareaTask" rows="5" class="form-control" placeholder="Descripción" required><?php echo $task?></textarea>
				</div>
				<h3 id="result"></h3>
				<div class="form-group">
					<button type="button" name="createTask" onclick="saveTask();" value="1" class="btn btn-sub">ENVIAR</button>
				</div>
			</div>
		</div>
	</form>
</section>

<script>
	
	function saveTask(){
		document.getElementById('result').innerHTML  = "";
		var dataPost="createTask=1&";
		var all = document.getElementsByTagName("input");
		for (var i=0, max=all.length; i < max; i++) {
			if(all[i].type==='checkbox' && all[i].checked && all[i].name.substr(0,8)==='assigned'  && all[i].name.substr(0,13)!=='assignedTaskP'){
				dataPost+=all[i].name+"="+all[i].value+"&";
			}
		}
		dataPost+="fase="+document.getElementById('faseTask').value;
		dataPost+="&nombre="+document.getElementById('nombreTask').value;
		dataPost+="&fechaIni="+document.getElementById('fechaIniTask').value;
		dataPost+="&fechaFin="+document.getElementById('fechaFinTask').value;
		dataPost+="&tarea="+document.getElementById('tareaTask').value;
		
		var regex = /^[a-zA-Z0-9._%:()+-;, áéíóúñÁÉÍÓÚÑ]+$/;
		if (document.getElementById('nombreTask').value!=='' && !regex.test(document.getElementById('nombreTask').value)) {
			alert("Caracter no valido en campo nombre");
			return false;
		}
		if (document.getElementById('tareaTask').value!=='' && !regex.test(document.getElementById('tareaTask').value)) {
			alert("Caracter no valido en campo actividad");
			return false;
		}
		if(new Date(document.getElementById('fechaFinTask').value)<new Date(document.getElementById('fechaIniTask').value)){
			alert("Fecha Final debe ser antes de fecha Inicial");
			return false;
		}
		if(document.getElementById('fechaFinTask').value==='' || document.getElementById('fechaFinTask').value==='1970-01-01'){
			alert("Fecha Final no es un valor valido");
			return false;
		}
		if(document.getElementById('fechaIniTask').value==='' || document.getElementById('fechaIniTask').value==='1970-01-01'){
			alert("Fecha Inicial no es un valor valido");
			return false;
		}
		
		if(document.getElementById('nombreTask').value===''){
			alert("debes ingresar el nombre de la actividad");
			return false;
		}
		if(document.getElementById('tareaTask').value===''){
			alert("debes ingresar la descripcion de la actividad");
			return false;
		}
		
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp1 = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp1.onreadystatechange = function() {
			if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
				if(xmlhttp1.responseText=="Tarea Creada"){
					document.getElementById('formTask').submit();
				}else{
					document.getElementById('result').innerHTML  = xmlhttp1.responseText;
				}
			}
		};
		xmlhttp1.open("POST","views/saveTask.php",true);
		xmlhttp1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp1.send(dataPost);
		return false;
	}
	
	function updateSel(){
		var all = document.getElementsByTagName("input");
		var sel='Ninguno seleccionado';
		var cc=0;
		for (var i=0, max=all.length; i < max; i++) {
			if(all[i].type==='checkbox' && all[i].checked && all[i].name.substr(0,8)==='assigned' && all[i].name.substr(0,13)!=='assignedTaskP'){
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
</script>

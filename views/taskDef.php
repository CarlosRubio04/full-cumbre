<section class="addActivity" id="addActivity">
	<form method="post">
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
						Nombre de la Actividad
					</label>
					<input type="text" name="nombreTask" id="nombreTask" class="form-control" placeholder="Ingresa el nombre de la actividad" value="<?php echo $name?>" required>
				</div>
				<div class="form-group col-md-6">
					<label for="fechaIniTask">Fecha de inicio</label>
					<input type="date" title="Fecha Inicio" name="fechaIniTask" id="fechaIniTask" class="form-control" value="<?php echo $startDate?>" required>
				</div>
				<div class="form-group col-md-6">
					<label for="fechaFinTask">Fecha de finalización</label>
					<input type="date" title="Fecha Terminación" name="fechaFinTask" id="fechaFinTask" class="form-control" value="<?php echo $endDate?>" required>
				</div>

				<div class="user form-group col-md-6" title="Responsable">
					<label for="">Responsable de la actividad</label>
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
					<label for="">Seleccione la fase de desarrollo</label>
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
						Descripción de la actividad
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
			if(all[i].type==='checkbox' && all[i].checked){
				dataPost+=all[i].name+"="+all[i].value+"&";
			}
		}
		dataPost+="fase="+document.getElementById('faseTask').value;
		dataPost+="&nombre="+document.getElementById('nombreTask').value;
		dataPost+="&fechaIni="+document.getElementById('fechaIniTask').value;
		dataPost+="&fechaFin="+document.getElementById('fechaFinTask').value;
		dataPost+="&tarea="+document.getElementById('tareaTask').value;
		
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
					document.getElementById('resultTaskOk').innerHTML  = xmlhttp1.responseText;
					closeActivity();
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
</script>

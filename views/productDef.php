<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="addActivity" id="addEntregable">
	<form method="post" id="formTask">
		<div class="content-wrapper  u-color-contraste animated fadeInUp">
			<button class="close" onclick="closeEntregable()">
				<i class="fa fa-times" aria-hidden="true"></i>
			</button>
			<div class="addActivityHeader">
				<div class="name">
					<h1 class="title">Agregar Entregable</h1>
				</div>
			</div>
			<div class="addActivityBody">
				<div class="form-group">
					<label for="">
						Nombre del Entregable *
					</label>
					<input type="text" name="nombreProduct" id="nombreProduct" class="form-control" placeholder="Ingresa el nombre de la actividad" value="<?php echo $name?>" required>
				</div>
				<div class="form-group">
					<label for="fechaIni">Fecha de entrega *</label>
					<input type="date" title="Fecha Entrega" name="fechaProduct" id="fechaProduct" class="form-control" value="<?php echo $startDate?>" required>
				</div>

				<div class="user form-group" title="tareas">
					<label for="">Tareas *</label>
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
					<label for="">Responsable *</label>
					<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" id="dropdownMenu1P" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<?php echo $assignedHtmlSel?>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1P">
							<?php echo $assignedHtml?>
						</ul>
					</div>
				</div>

				<div class="form-group">
					<label for="">
						Descripción del entregable *
					</label>
					<textarea name="desc" id="desc" rows="5" class="form-control" placeholder="Descripción" required><?php echo $descProduct?></textarea>
				</div>
				<h3 id="resultPro"></h3>
				<div class="form-group">
					<button type="button" name="createProduct" onclick="saveProduct();" value="1" class="btn btn-sub">ENVIAR</button>
				</div>
			</div>
		</div>
	</form>
</section>
<script>
	function saveProduct(){
		document.getElementById('resultPro').innerHTML  = "";
		var dataPost="createPro=1&";
		var all = document.getElementsByTagName("input");
		for (var i=0, max=all.length; i < max; i++) {
			if(all[i].type==='checkbox' && all[i].checked && (all[i].name.substr(0,13)==='assignedTaskP' || all[i].name.substr(0,8)==='listTask')){
				dataPost+=all[i].name+"="+all[i].value+"&";
			}
		}
		dataPost+="desc="+document.getElementById('desc').value;
		dataPost+="&nombre="+document.getElementById('nombreProduct').value;
		dataPost+="&fecha="+document.getElementById('fechaProduct').value;
		
		var regex = /^[a-zA-Z0-9._%:()+-;, áéíóúÁÉÍÓÚ]+$/;
		if (document.getElementById('nombreProduct').value!=='' && !regex.test(document.getElementById('nombreProduct').value)) {
			alert("Caracter no valido en campo nombre");
			return false;
		}
		if (document.getElementById('desc').value!=='' && !regex.test(document.getElementById('desc').value)) {
			alert("Caracter no valido en campo Descripcion");
			return false;
		}

		if(document.getElementById('fechaProduct').value==='' || document.getElementById('fechaProduct').value==='1970-01-01'){
			alert("Fecha no es un valor valido");
			return false;
		}
		
		if(document.getElementById('nombreProduct').value===''){
			alert("debes ingresar el nombre del entregable");
			return false;
		}
		if(document.getElementById('desc').value===''){
			alert("debes ingresar la descripcion del entregable");
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
				if(xmlhttp1.responseText=="Entregable Creado"){
					document.getElementById('formTask').submit();
				}else{
					document.getElementById('resultPro').innerHTML  = xmlhttp1.responseText;
				}
			}
		};
		xmlhttp1.open("POST","views/saveProduct.php",true);
		xmlhttp1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp1.send(dataPost);
		return false;
	}
	
	function updateSel1(){
		var all = document.getElementsByTagName("input");
		var sel='Ninguno seleccionado';
		var cc=0;
		for (var i=0, max=all.length; i < max; i++) {
			if(all[i].type==='checkbox' && all[i].checked && all[i].name.substr(0,13)==='assignedTaskP'){
				cc++;
				if(all[i].value==='Group'){
					sel='Todo el Grupo';
					break;
				}else if (cc>1){
					sel='Varios Usuarios';
				}else{
					var name=document.getElementById('assignedTaskPL'+all[i].value).innerHTML;
					sel=name;
				}
			}
		}
		document.getElementById('dropdownMenu1P').innerHTML=sel;
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
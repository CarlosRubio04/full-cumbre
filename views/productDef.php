<section class="addActivity" id="addEntregable">
	<form method="post">
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
						Nombre del Entregable
					</label>
					<input type="text" name="nombreProduct" id="nombreProduct" class="form-control" placeholder="Ingresa el nombre de la actividad" value="<?php echo $name?>" required>
				</div>
				<div class="form-group">
					<label for="fechaIni">Fecha de entrega</label>
					<input type="date" title="Fecha Entrega" name="fechaProduct" id="fechaProduct" class="form-control" value="<?php echo $startDate?>" required>
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
			if(all[i].type==='checkbox' && all[i].checked){
				dataPost+=all[i].name+"="+all[i].value+"&";
			}
		}
		dataPost+="desc="+document.getElementById('desc').value;
		dataPost+="&nombre="+document.getElementById('nombreProduct').value;
		dataPost+="&fecha="+document.getElementById('fechaProduct').value;
		
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
					document.getElementById('resultProductOk').innerHTML  = xmlhttp1.responseText;
					closeEntregable();
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
</script>
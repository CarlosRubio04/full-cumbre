<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="formulacion-de-proyecto">
	<div class="container-flex u-color-contraste u-mount-back">
		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="title">
					<a href="?content=basecamp" class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInLeft">Definición del Proyecto</h1>
				</div>
				<div class="formContainer animated fadeInUp">
					<form method="post">
						<div class="inputs">
							<hr>
							<h4 class="subTitle">Generalidades</h4>
							<div class="form-group">
								<label for="nombre">Nombre del proyecto *</label>
								<input type="text" name="nombre" <?php echo $enable?> maxlength="100" id="nombre" value="<?php echo $name;?>" class="form-control" placeholder="Nombre">
							</div>
							<div class="form-group">
								<label for="resumen">Resumen</label>
								<textarea name="resumen" id="resumen" <?php echo $enable?> rows="5" maxlength="960" class="form-control" placeholder="Resumen"><?php echo $summary;?></textarea>
							</div>

							<!-- <div class="form-group">
								<label for="intro">Introducción</label>
								<textarea name="intro" id="intro" rows="5"  class="form-control" placeholder="Introducción"><?php echo $introduction;?></textarea>
							</div> -->

							<h4 class="subTitle">Problematica</h4>
							<div class="form-group">
								<label for="definicion">Definición de problemática</label>
								<textarea name="definicion" <?php echo $enable?> id="definicion" rows="5" maxlength="400" class="form-control" placeholder="Definición de problemática"><?php echo $definition;?></textarea>
							</div>
							<div class="form-group">
								<label for="">Objetivos estratégicos que impactan la organización</label>
								<div class="u-selectWraper">
									<select name="impacto" <?php echo $enable?> id="impacto" class="form-control">
										<?php echo $htmlMegas?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="justificacion">Justificación del proyecto</label>
								<textarea name="justificacion" <?php echo $enable?> id="justificacion" maxlength="960" rows="5" class="form-control" placeholder="Justificación del proyecto."><?php echo $justification;?></textarea>
							</div>

							<!-- <div class="form-group">
								<label for="">Descripción del proyecto</label>
								<textarea name="descripcion" id="descripcion" rows="5" class="form-control" placeholder="Descripción del proyecto."><?php echo $description;?></textarea>
							</div> -->

							<div class="form-group">
								<label for="">Objetivo general</label>
								<textarea name="objetivo" <?php echo $enable?> id="objetivo" rows="5" maxlength="250" class="form-control" placeholder="Objetivo general"><?php echo $objective;?></textarea>
							</div>
							<div class="form-group">
								<label for="">Objetivos específicos</label>
								<textarea name="objetivos" <?php echo $enable?> id="objetivos" maxlength="250" rows="5" class="form-control" placeholder="Objetivos especificos"><?php echo $objectiveOthers;?></textarea>
							</div>

							<h4 class="subTitle">Tiempo</h4>

							<div class="form-group">
								<label for="">Fecha de inicio *</label>
								<input type="date" <?php echo $enable?> name="fechaIni" id="fechaIni" value="<?php echo $startDate;?>" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Fecha de finalización *</label>
								<input type="date" <?php echo $enable?> name="fechaFin" id="fechaFin" value="<?php echo $endDate;?>" class="form-control">
							</div>

							<!-- <div class="form-group">
								<label for="">Metodología</label>
								<input type="text" name="metodologia" id="metodologia" value="<?php echo $methodology;?>" class="form-control" placeholder="Metodología">
							</div> -->

							<div class="form-group">
								<label for="">Resultados esperados</label>
								<!-- <input type="text" <?php echo $enable?> name="resultados" maxlength="960" id="resultados" value="<?php echo $expectedResults;?>" class="form-control" placeholder="Resultados esperados"> -->
								<textarea name="objetivos" <?php echo $enable?> name="resultados" maxlength="960" id="resultados" class="form-control"><?php echo $expectedResults;?></textarea>

							</div>

							<!-- <div class="form-group">
								<label for="">Ejecución del proyecto</label>
								<input type="text" name="ejecucion" id="ejecucion" value="<?php echo $execution;?>" class="form-control" placeholder="Ejecución del proyecto">
							</div> -->

							<!-- <div class="form-group">
								<label for="">Resultados</label>
								<input type="text" name="resultados2" value="<?php echo $results;?>" id="resultados2" class="form-control" placeholder="Resultados">
							</div> -->

							<div class="form-group">
								<label for="">Análisis de resultados</label>
								<input type="text" <?php echo $enable?> name="analisis" maxlength="960" value="<?php echo $analysis;?>" id="analisis" class="form-control" placeholder="Análisis de resultados">
							</div>

							<!-- <div class="form-group">
								<label for="">Productos</label>
								<input type="text" name="productos" id="productos" value="<?php echo $products;?>" class="form-control" placeholder="Productos">
							</div> -->

							<!-- <div class="form-group">
								<label for="">Conclusiones</label>
								<textarea name="concluciones" id="concluciones" rows="5" class="form-control" placeholder="Conclusiones"><?php echo $conclutions;?></textarea>
							</div>
							<div class="form-group">
								<label for="">Bibliografía</label>
								<textarea name="bibliografia" id="bibliografia" rows="5" class="form-control" placeholder="Bibliografía"><?php echo $bibliography;?></textarea>
							</div> -->
							
							<div id="saveText"></div>
							<div class="form-group">
								<button class="btn-square" type="submit" onclick="autoSave(<?php echo $infoUser->getGroupId()?>,1);return false;" name="saveProject" id="saveProject" value="<?php echo $btnText?>"> <?php echo $btnText?></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>


		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="siguiente-campamento animated fadeIn">
					<a href="?content=phaseDef" class="btn btn-main">
						Fases del proyecto
					</a>
				</div>
				<hr>
				<div class="history">
					<h4 class="subTitle">
						Historial de cambios
					</h4>
					<?php echo $htmlMsgP?>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	function autoSave(groupId,manual){
		if(document.getElementById('saveProject').value==="Modificar Proyecto"){
			document.getElementById('saveProject').innerHTML='Guardar';
			document.getElementById('saveProject').value='Guardar';
			document.getElementById('nombre').readOnly=false;
			document.getElementById('resumen').readOnly=false;
			document.getElementById('definicion').readOnly=false;
			document.getElementById('impacto').readOnly=false;
			document.getElementById('justificacion').readOnly=false;
			document.getElementById('objetivo').readOnly=false;
			document.getElementById('objetivos').readOnly=false;
			document.getElementById('fechaIni').readOnly=false;
			document.getElementById('fechaFin').readOnly=false;
			document.getElementById('resultados').readOnly=false;
			document.getElementById('analisis').readOnly=false;
			return false;
		}
		//document.getElementById('saveText').innerHTML  ='';
		var postData='id='+groupId;
		postData+='&name='+document.getElementById('nombre').value;
		postData+='&summary='+document.getElementById('resumen').value;
		//postData+='&introduction='+document.getElementById('intro').value;
		postData+='&definition='+document.getElementById('definicion').value;
		postData+='&megas='+document.getElementById('impacto').value;
		postData+='&justification='+document.getElementById('justificacion').value;
		//postData+='&description='+document.getElementById('descripcion').value;
		postData+='&objective='+document.getElementById('objetivo').value;
		postData+='&objectiveOthers='+document.getElementById('objetivos').value;
		postData+='&startDate='+document.getElementById('fechaIni').value;
		postData+='&endDate='+document.getElementById('fechaFin').value;
		//postData+='&methodology='+document.getElementById('metodologia').value;
		postData+='&expectedResults='+document.getElementById('resultados').value;
		//postData+='&execution='+document.getElementById('ejecucion').value;
		//postData+='&results='+document.getElementById('resultados2').value;
		postData+='&analysis='+document.getElementById('analisis').value;
		//postData+='&products='+document.getElementById('productos').value;
		//postData+='&conclutions='+document.getElementById('concluciones').value;
		//postData+='&bibliography='+document.getElementById('bibliografia').value;
		var regex = /^[a-zA-Z0-9._%:()+-;, áéíóúñÁÉÍÓÚÑ\n]+$/;
		if (document.getElementById('nombre').value!=='' && !regex.test(document.getElementById('nombre').value)) {
			if(manual===1){
				alert("Caracter no valido en campo nombre");
			}
			return false;
		}
		if (document.getElementById('resumen').value!=='' && !regex.test(document.getElementById('resumen').value)) {
			if(manual===1){
				alert("Caracter no valido en campo resumen");
			}
			return false;
		}
		if (document.getElementById('definicion').value!=='' && !regex.test(document.getElementById('definicion').value)) {
			if(manual===1){
				alert("Caracter no valido en campo definicion");
			}
			return false;
		}
		if (document.getElementById('impacto').value!=='' && !regex.test(document.getElementById('impacto').value)) {
			if(manual===1){
				alert("Caracter no valido en campo impacto");
			}
			return false;
		}
		if (document.getElementById('justificacion').value!=='' && !regex.test(document.getElementById('justificacion').value)) {
			if(manual===1){
				alert("Caracter no valido en campo justificacion");
			}
			return false;
		}
		if (document.getElementById('objetivo').value!=='' && !regex.test(document.getElementById('objetivo').value)) {
			if(manual===1){
				alert("Caracter no valido en campo objetivo");
			}
			return false;
		}
		if (document.getElementById('objetivos').value!=='' && !regex.test(document.getElementById('objetivos').value)) {
			if(manual===1){
				alert("Caracter no valido en campo objetivos");
			}
			return false;
		}
		if (document.getElementById('resultados').value!=='' && !regex.test(document.getElementById('resultados').value)) {
			if(manual===1){
				alert("Caracter no valido en campo resultados");
			}
			return false;
		}
		if (document.getElementById('analisis').value!=='' && !regex.test(document.getElementById('analisis').value)) {
			if(manual===1){
				alert("Caracter no valido en campo analisis");
			}
			return false;
		}
		
		
		if(new Date(document.getElementById('fechaFin').value)<new Date(document.getElementById('fechaIni').value)){
			if(manual===1){
				alert("Fecha Final debe ser antes de fecha Inicial");
			}
			return false;
		}
		if(document.getElementById('fechaFin').value==='' || document.getElementById('fechaFin').value==='1970-01-01'){
			if(manual===1){
				alert("Fecha Final no es un valor valido");
			}
			return false;
		}
		if(document.getElementById('fechaIni').value==='' || document.getElementById('fechaIni').value==='1970-01-01'){
			if(manual===1){
				alert("Fecha Inicial no es un valor valido");
			}
			return false;
		}
		if(document.getElementById('nombre').value===''){
			if(manual===1){
				alert("debes ingresar el nombre del proyecto");
			}
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
			if (xmlhttp1.readyState === 4 && xmlhttp1.status === 200) {
				if(manual===1){
					document.getElementById('saveProject').innerHTML='Modificar Proyecto';
					document.getElementById('saveProject').value='Modificar Proyecto';
					document.getElementById('nombre').readOnly=true;
					document.getElementById('resumen').readOnly=true;
					document.getElementById('definicion').readOnly=true;
					document.getElementById('impacto').readOnly=true;
					document.getElementById('justificacion').readOnly=true;
					document.getElementById('objetivo').readOnly=true;
					document.getElementById('objetivos').readOnly=true;
					document.getElementById('fechaIni').readOnly=true;
					document.getElementById('fechaFin').readOnly=true;
					document.getElementById('resultados').readOnly=true;
					document.getElementById('analisis').readOnly=true;
					alert('Datos guardados');
				}else if(xmlhttp1.responseText==='datos guardados'){
					var d = new Date();
					document.getElementById('saveText').innerHTML  = "Autoguardado a las "+(d.getHours()<10?'0':'')+ d.getHours()+":"+(d.getMinutes()<10?'0':'')+d.getMinutes()+":"+(d.getSeconds()<10?'0':'')+d.getSeconds();
				}
			}
		};
		xmlhttp1.open("POST","?content=autosave",true);
		xmlhttp1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp1.send(postData);
		return false;
	}
	setInterval(function () {autoSave(<?php echo $infoUser->getGroupId();?>,0)}, 60000);
</script>


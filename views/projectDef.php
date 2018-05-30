<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="formulacion-de-proyecto">
	<div class="container-flex u-color-contraste">
		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="animated fadeInLeft">Definición del Proyecto</h1>
				</div>
				<div class="formContainer animated fadeInUp">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<label for="nombre">Nombre del proyecto</label>
								<input type="text" name="nombre" maxlength="100" id="nombre" value="<?php echo $name;?>" class="form-control" placeholder="Nombre">
							</div>
							<div class="form-group">
								<label for="resumen">Resumen</label>
								<input type="text" name="resumen" id="resumen" maxlength="960" value="<?php echo $summary;?>" class="form-control" placeholder="Resumen">
							</div>

							<!-- <div class="form-group">
								<label for="intro">Introducción</label>
								<textarea name="intro" id="intro" rows="5"  class="form-control" placeholder="Introducción"><?php echo $introduction;?></textarea>
							</div> -->

							<h4 class="subTitle">Problematica</h4>
							<div class="form-group">
								<label for="definicion">Definición de problemática</label>
								<textarea name="definicion" id="definicion" rows="5" maxlength="400" class="form-control" placeholder="Definición de problemática"><?php echo $definition;?></textarea>
							</div>
							<div class="form-group">
								<label for="">¿Qué Megas de la universidad impacta?</label>
								<div class="u-selectWraper">
									<select name="impacto" id="impacto" class="form-control">
										<option value="Reconciliación del país" <?php echo $sel1;?>>
											Reconciliación del país
										</option>
										<option value="Interculturalidad, internacionalización y cuidado de la casa común" <?php echo $sel2;?>>
											Interculturalidad, internacionalización y cuidado de la casa común
										</option>
										<option value="Desarrollo sostenible integral" <?php echo $sel3;?>>
											Desarrollo sostenible integral
										</option>
										<option value="Transformar el sistema de toma de decisiones" <?php echo $sel4;?>>
											Transformar el sistema de toma de decisiones
										</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="justificacion">Justificación del proyecto</label>
								<textarea name="justificacion" id="justificacion" maxlength="960" rows="5" class="form-control" placeholder="Justificación del proyecto."><?php echo $justification;?></textarea>
							</div>

							<!-- <div class="form-group">
								<label for="">Descripción del proyecto</label>
								<textarea name="descripcion" id="descripcion" rows="5" class="form-control" placeholder="Descripción del proyecto."><?php echo $description;?></textarea>
							</div> -->

							<div class="form-group">
								<label for="">Objetivo general</label>
								<textarea name="objetivo" id="objetivo" rows="5" maxlength="250" class="form-control" placeholder="Objetivo general"><?php echo $objective;?></textarea>
							</div>
							<div class="form-group">
								<label for="">Objetivos especificos</label>
								<textarea name="objetivos" id="objetivos" maxlength="250" rows="5" class="form-control" placeholder="Objetivos especificos"><?php echo $objectiveOthers;?></textarea>
							</div>

							<h4 class="subTitle">Tiempo</h4>

							<div class="form-group">
								<label for="">Fecha de inicio</label>
								<input type="date" name="fechaIni" id="fechaIni" value="<?php echo $startDate;?>" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Fecha de finalización</label>
								<input type="date" name="fechaFin" id="fechaFin" value="<?php echo $endDate;?>" class="form-control">
							</div>

							<!-- <div class="form-group">
								<label for="">Metodología</label>
								<input type="text" name="metodologia" id="metodologia" value="<?php echo $methodology;?>" class="form-control" placeholder="Metodología">
							</div> -->

							<div class="form-group">
								<label for="">Resultados esperados</label>
								<input type="text" name="resultados" maxlength="960" id="resultados" value="<?php echo $expectedResults;?>" class="form-control" placeholder="Resultados esperados">
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
								<input type="text" name="analisis" maxlength="960" value="<?php echo $analysis;?>" id="analisis" class="form-control" placeholder="Análisis de resultados">
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
								<button class="btn-square" type="submit" onclick="autoSave(<?php echo $infoUser->getGroupId()?>);alert('Proyecto grabado correctamente');return false;" name="saveProject">Guardar</button>
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
			</div>
		</div>
	</div>
</section>
<script>
	function autoSave(groupId){
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
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp1 = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp1.onreadystatechange = function() {
			if (xmlhttp1.readyState === 4 && xmlhttp1.status === 200) {
				var d = new Date();
				document.getElementById('saveText').innerHTML  = "Autoguardado a las "+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();
			}
		};
		xmlhttp1.open("POST","?content=autosave",true);
		xmlhttp1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp1.send(postData);
		return false;
	}
	setInterval(function () {autoSave(<?php echo $infoUser->getGroupId();?>)}, 60000);
</script>


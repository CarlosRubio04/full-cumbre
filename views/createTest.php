<section class="createTest">
	<div class="container-flex flex-center u-color-contraste u-mount-back">
		<div class="item colum-60">
			<div class="content-wrapper">
				<small>Nombre del curso al que pertenece la prueba</small>
				<hr>
				<div class="title">
					<a href="." class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInLeft">
						Cuestionario del conocimiento
					</h1>
				</div>
				<hr>
				<p>
					Crea el test de conocimiento para el curso, las preguntas deben contar con un enunciado y 4 opciones de respuesta, recuerda dejar marcado con la X la respuesta correcta de cada pregunta, despues habilita la fecha en la que el test estará disponible y hasta que fecha se podrá responder.
				</p>
				<div class="formContainer animated fadeInUp">
					<form method="post" id="form">
						<div class="inputs">
							<!-- Fechas para el curso -->
							<!-- // Fechas para el curso -->
							<!-- Agregar Pregunta -->
							<div class="form-group">
								<label for="">Agregar  pregunta</label>
								<textarea name="question" id="question" class="form-control" cols="30" rows="10" placeholder="Enunciado de la pregunta"></textarea>
								
								
								<div class="question-body mt8">
									<div class="question-label big">
										<input type="text" class="form-control" name="opc1" id="opc1" placeholder="Primera Opción">
									</div>	

									<div class="question-inputs">
										<div class="item five big">
											<input type="radio" name="answer" id="answer1" value="">
											<span class="checkMark"></span>
										</div>
									</div>
								</div>

								<div class="question-body mt8">
									<div class="question-label big">
										<input type="text" class="form-control" name="opc2" id="opc2" placeholder="Segunda Opción">
									</div>	

									<div class="question-inputs">
										<div class="item five big">
											<input type="radio" name="answer" id="answer2" value="">
											<span class="checkMark"></span>
										</div>
									</div>
								</div>

								<div class="question-body mt8">
									<div class="question-label big">
										<input type="text" class="form-control" name="opc3" id="opc3" placeholder="Tercera Opción">
									</div>	

									<div class="question-inputs">
										<div class="item five big">
											<input type="radio" name="answer" id="answer3" value="">
											<span class="checkMark"></span>
										</div>
									</div>
								</div>

								<div class="question-body mt8">
									<div class="question-label big">
										<input type="text" class="form-control" name="opc4" id="opc4" placeholder="Cuarta Opción">
									</div>	

									<div class="question-inputs">
										<div class="item five big">
											<input type="radio" name="answer" id="answer4" value="">
											<span class="checkMark"></span>
										</div>
									</div>
								</div>
							</div>
							<!-- // Agregar Pregunta -->

							<!-- Boton Agregar Pregunta -->
							<div class="form-group">
								<button class="btn-square" id="createTest" value="1" name="createTest" onclick="saveQuestion();">
									Agregar pregunta <i class="fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="form-group col-md-6">
									<label for="fecha">Fecha limite de responder el Test</label>
									<input placeholder="Seleccione una fecha" title="" name="fecha" type="date" class="form-control" value="<?php echo $tomorrow?>" required>
							</div>
							<div class="form-group col-md-6">
								<label for="fecha">Hora</label>
									<input placeholder="Seleccione una hora" title="" name="hora" type="time" class="form-control" value="15:00:00" required>
							</div>
							<div class="form-group">
								<button class="btn-square btn-full" id="publishTest" value="1" name="publishTest" >
									Publicar Test <i class="fa fa-book" aria-hidden="true"></i>
								</button>
							</div>

							<input type="hidden" id="id" value="<?php echo $id?>" >

							<h3 id="result"><?php echo $message?></h3>

							<?php echo $currentQ?>
							<!-- //Boton Agregar Pregunta -->
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	function saveQuestion(){
		var dataPost="createTest=1&id="+document.getElementById('id').value;
		dataPost+="&question="+document.getElementById('question').value;
		dataPost+="&opc1="+document.getElementById('opc1').value;
		dataPost+="&opc2="+document.getElementById('opc2').value;
		dataPost+="&opc3="+document.getElementById('opc3').value;
		dataPost+="&opc4="+document.getElementById('opc4').value;
		if(document.getElementById('answer1').checked){
			dataPost+="&answer=1";
		}else if(document.getElementById('answer2').checked){
			dataPost+="&answer=2";
		}else if(document.getElementById('answer3').checked){
			dataPost+="&answer=3";
		}else if(document.getElementById('answer4').checked){
			dataPost+="&answer=4";
		}else{
			alert("No se ha seleccionado la respuesta a la pregunta");
			return false;
		}
		
		var regex = /^[a-zA-Z0-9._%:()+-;, áéíóúÁÉÍÓÚ]+$/;
		if (document.getElementById('question').value==='' || !regex.test(document.getElementById('question').value)) {
			alert("Caracter no valido en campo pregunta");
			return false;
		}
		if (document.getElementById('opc1').value==='' && !regex.test(document.getElementById('opc1').value)) {
			alert("Caracter no valido en campo Opcion 1");
			return false;
		}
		
		if (document.getElementById('opc2').value==='' && !regex.test(document.getElementById('opc2').value)) {
			alert("Caracter no valido en campo Opcion 2");
			return false;
		}
		
		if (document.getElementById('opc3').value==='' && !regex.test(document.getElementById('opc3').value)) {
			alert("Caracter no valido en campo Opcion 3");
			return false;
		}
		
		if (document.getElementById('opc4').value==='' && !regex.test(document.getElementById('opc4').value)) {
			alert("Caracter no valido en campo Opcion 4");
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
				document.getElementById('form').submit();
			}
		};
		xmlhttp1.open("POST","views/saveTest.php",true);
		xmlhttp1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp1.send(dataPost);
	}
</script>
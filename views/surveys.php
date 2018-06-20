<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="survey">
	<div class="container-flex u-color-contraste">
		<div class="item colum-80">
			<div class="content-wrapper">
				<div class="title">
					<a href="?content=<?php echo $return?>" class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInLeft">Encuesta de percepción</h1>
				</div>
				<div class="formContainer animated fadeInUp">
					<form method="post">
						<div class="question">
							<div id="fullSurvey">
							<div class="question-group">
								
								<div class="question-header">
									<div class="question-title">
										Conferencistas
									</div>
									<div class="question-values">
										<div class="item five">
											<i class="fa fa-bar-chart" aria-hidden="true"></i>
										</div>
									</div>
								</div>

								<div class="question-body">
									<div class="question-label">
										Conocimiento y dominio del tema
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo (int)$t1?></p>
										</div>
									</div>
								</div>

								<div class="question-body">
									<div class="question-label">
										Estimula la participación de los asistentes
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo (int)$t2?></p>
										</div>
									</div>
								</div>

								<div class="question-body">
									<div class="question-label">
										Capacidad para comunicar las ideas de forma efectiva
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo (int)$t3?></p>
										</div>
									</div>
								</div>

							</div>


							<div class="question-group">
								
								<div class="question-header">
									<div class="question-title">
										Desarrollo de la temática
									</div>
									<div class="question-values">
										<div class="item five">
											<i class="fa fa-bar-chart" aria-hidden="true"></i>
										</div>
									</div>
								</div>

								<div class="question-body">
									<div class="question-label">
										Los temas tratados contribuyen al objetivo general del módulo
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo (int)$th1?></p>
										</div>
									</div>
								</div>

								<div class="question-body">
									<div class="question-label">
										Si recibió material de apoyo, éste fue de utilidad para el módulo
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo (int)$th2?></p>
										</div>
									</div>
								</div>

								<div class="question-body">
									<div class="question-label">
										Metodología utilizada por el docente/conferencista
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo (int)$th3?></p>
										</div>
									</div>
								</div>

							</div>


							<div class="question-group">
								
								<div class="question-header">
									<div class="question-title">
										Logística
									</div>
									<div class="question-values">
										<div class="item five">
											<i class="fa fa-bar-chart" aria-hidden="true"></i>
										</div>
									</div>
								</div>

								<div class="question-body">
									<div class="question-label">
										Atención recibida por parte del personal de logística
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo (int)$l1?></p>
										</div>
									</div>
								</div>

								<div class="question-body">
									<div class="question-label">
										Disponibilidad y funcionalidad de los equipos audiovisuales y cómputo
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo (int)$l2?></p>
										</div>
									</div>
								</div>

								<div class="question-body">
									<div class="question-label">
										Orden y aseo del salón
									</div>

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo (int)$l3?></p>
										</div>
									</div>
								</div>

							</div>

							<div class="question-group">
								
								<div class="question-header">
									<div class="question-title">
										Monitoría
									</div>
									<div class="question-values">
										<div class="item five">
											<i class="fa fa-bar-chart" aria-hidden="true"></i>
										</div>
									</div>
								</div>

								<div class="question-body">
									<div class="question-label">
										Acompañamiento - Respuesta efectiva y atención a  los participantes
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo (int)$m1?></p>
										</div>
									</div>
								</div>

								<div class="question-body">
									<div class="question-label">
										Actitud de servicio
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo (int)$m2?></p>
										</div>
									</div>
								</div>

							</div>

							<div class="title">
								<h4>Generalidades:</h4>
							</div>
							
							<div class="question-group">
								<div class="question-header">
									<div class="question-title big">
										De acuerdo con esta experiencia y en relación con otras personas que deseen afianzar sus conocimientos sobre este tema:
									</div>
								</div>
								<div class="question-body">
									<div class="question-label big">
										Recomendaría este programa
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo $g1?></p>
										</div>
									</div>
								</div>
								<div class="question-body">
									<div class="question-label big">
										Sería indiferente en recomendarlo
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo $g2?></p>
										</div>
									</div>
								</div>
								<div class="question-body">
									<div class="question-label big">
										No lo recomendaría
									</div>	

									<div class="question-inputs">
										<div class="item five">
											<p><?php echo $g3?></p>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="thirteen">Aspectos positivos</label>
								<textarea name="thirteen" id="thirteen"  rows="5" class="form-control" placeholder="Aspectos positivos"><?php echo $p?></textarea>
							</div>

							<div class="form-group">
								<label for="fourteen">Aspectos por mejorar</label>
								<textarea name="fourteen" id="fourteen"  rows="5" class="form-control" placeholder="Aspectos por mejorar"><?php echo $n?></textarea>
							</div>

							<div class="form-group">
								<label for="fiveteen">Otros temas temas de interés (Que le gustaría encontrar en nuestra programación)</label>
								<textarea name="fiveteen" id="fiveteen"  rows="5" class="form-control" placeholder="Otros temas temas de interés (Que le gustaría encontrar en nuestra programación)"><?php echo $o?></textarea>
							</div>
						</div>
							<div class="form-group">
								<h2><?php echo $message?></h2>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if($message!=""){
	echo "<script>window.scrollTo(0,document.body.scrollHeight);</script>";
}
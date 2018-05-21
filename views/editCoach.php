<section class="u-color-contraste">
	<div class="content-wrapper">
		<div class="title">
			<h1 class="animated fadeInLeft">Asignar Coach</h1>
		</div>
		<div class="container-flex space-btw">
			<div class="colum-30">
				<div class="formContainer animated fadeInDown">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<div class="input">
									<label for="nombre">Seleccione el coach para el Proyecto <?php echo $project?></label>
									<select name="coach">
										<?php echo $coachList?>
									</select>
								</div>
								<div class="buton">
									<button class="btn-square" value="1" type="submit"  name="setCoach">Asignar</button>
								</div>
							</div>
							<h4><?php echo $message;?></h4>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

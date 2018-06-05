<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="u-color-contraste u-mount-back">
	<div class="container-flex flex-center u-color-contraste">
		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="title">
					<h1 class="animated fadeInLeft">Asignar Coach</h1>
				</div>

				<div class="formContainer animated fadeInDown">
					<form method="post">
						<div class="inputs">
							<div class="form-group">
								<label for="nombre">Seleccione el coach para el Proyecto <?php echo $project?></label>
								<div class="u-selectWraper">
									<select name="coach" class="form-control">
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

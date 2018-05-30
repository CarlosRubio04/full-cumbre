<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="cronograma-dos">
	<div class="u-color-contraste">
		<div class="content-wrapper">
			<div class="title">
				<h1>Cronograma de actividades</h1>
			</div>
			

			<div class="cronograma-fases">
				<div class="cronograma-fases-container">

					<div class="colum fases">
						<div class="item header">
							Fases del Proyecto
						</div>
						<?php echo $phases?>
					</div>
					<?php echo $tasksHmtl?>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- 

	<div class="item '.$nn[$c].'">
		<div class="task">
			<a href="?content=taskFolow&id='.$taskI->getId().'" class="task-title">'.$taskI->getName().'</a>
			<span>Entregables: <span>'.$products.'<div class="user-avatar">
				<p> '.$assignedS.'  </p>
			</div>
		</div>
	</div>
 -->
<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="dashboard">
	<div class="container-flex flex-center">
		
		<div class="item colum-60">
			<div class="content-wrapper flex-colum">
				<div class="title">
					<h1>
						Dashboard de Actividades
					</h1>
				</div>
				<hr>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, ipsam non deleniti quae est. In consectetur voluptate exercitationem. Quibusdam culpa omnis voluptatibus non, eligendi quas possimus, ratione deserunt ducimus impedit.
				</p>
				<div class="activityFeed">
					<div class="activityFeedContainer">
						<?php echo $htmlPendiente;
						 echo $htmlIntermedio;
						 echo $htmlDesarrollo;?>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<section class="notificaciones">
	<div class="container-flex flex-center u-color-contraste u-mount-back">
		<div class="item colum-60">
			<div class="content-wrapper">
				<div class="title">
					<a href="." class="btn btn-back">
						<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
					</a>
					<h1 class="animated fadeInLeft">
						Centro de notificaciones
					</h1>
				</div>

				<div class="notifications">
					<?php echo $messagesHmtl?>
				</div>
			</div>
		</div>
	</div>
</section>

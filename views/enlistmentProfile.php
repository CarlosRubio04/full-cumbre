<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<form method="post">
	<section class="alistamiento">
		<div class="container-flex">
			<div class="teamProfile item colum-60">
				<div class="content-wrapper animated fadeInUp">
					<div class="siguiente-campamento">
						<a href="?content=basecamp" class="btn btn-main">
							Campamento Base
						</a>
					</div>
					<h4 class="subTitle">
						Tu Equipo
					</h4>

					<div class="teamName">
							<input type="text" name="groupName" style="text-transform:uppercase" class="form-control" value="<?php echo $groupNick?>">
							<button type="submit" class="btn" name="changeName">cambiar</button>
					</div>
					<hr/>
					<small><?php echo $message;?></small>
					<div class="teamList">
						<small>Integrantes del equipo</small>
						<?php echo $groupHtml?>
					</div>
				</div>
			</div>
		</div>
	</section>
</form>
<?php if(!defined('directAccess')){ header('location: ../?content=404');}?>
<div class="coments">
	<div class="title">
		<h1 class="text-center">
			Sistema se seguimiento
		</h1>
	</div>
	<div class="coments-container" id="taskMessages">
	</div>
	<div class="coments-input">
		<textarea name="comment" id="comment"  class="form-control" placeholder="Escribe un comentario"></textarea>
		<button type="button" name="sendComment" id="sendComment" onclick="sendMessage();">
			Enviar
		</button>
	</div>
</div>
<script>
	function sendMessage(){
		var text=document.getElementById('comment').value;
		document.getElementById('comment').value='';
		$("#taskMessages").load("views/taskMess.php?id=<?php echo $id?>&text="+encodeURI(text)+" #taskMessages");
		return false;
	}
</script>
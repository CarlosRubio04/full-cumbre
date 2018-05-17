<footer class="footer">
	<nav>
		<ul>
			<li>
				<a href="?content=enlistment">
					<img src="img/alistamiento.svg" alt="Alistamiento">
				</a>
			</li>
			<li>
				<a href="?content=basecamp">
					<img src="img/base.svg" alt="Base">
				</a>
			</li>
			<li>
				<a href="?content=campOne">
					<img src="img/uno.svg" alt="campamento uno">
				</a>
			</li>
			<li>
				<a href="?content=camp-Two">
					<img src="img/dos.svg" alt="campamento dos">
				</a>
			</li>
			<li>
				<a href="?content=cumbre">
					<img src="img/cumbre.svg" alt="Cumbre">
				</a>
			</li>
		</ul>
	</nav>
</footer>
<?php
//redirect to avoid form resubmit
$idx='resProcess'.$request;
if(filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW)!==null && count(filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW))>0){
	$_SESSION[$idx]=$message;
	$get="";
	foreach (filter_input_array(INPUT_GET) as $key=>$value) {
		$get.="$key=$value&";
	}
	$get=rtrim($get,"&");
		?><script>window.location.replace('?<?php echo $get?>');</script><?php
}elseif(isset($_SESSION[$idx])){
	$message=$_SESSION[$idx];
	unset($_SESSION[$idx]);
}
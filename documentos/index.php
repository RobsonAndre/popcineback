<?php
	include("../config/headers.php");
	include("../config/defines.php");
	include("../config/connect.php");
	include("../config/query.php");
	include("../config/token.php");
	include("../config/mensagens.php");
	include("../config/vars.php");
	
	if($action==3){
		include("./select.php");
	}else{
		$output = $msg[904];
	}
	
	echo json_encode($output,true);
?>
<?php
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	//fazer insert no comentario
	$s = "INSERT INTO papiroweb.".PFIX."comentario_denuncia( uid, social, fid, cid, denuncia, time ) VALUES ( '$uid', '$social', '$fid', '$cid', '$denuncia', '$time' )";
	if($r = $Qry->query($s)){
		//insert com sucesso
		$output = $msg[935];
	}else{
		//erro ao tentar fazer o insert
		$output = $msg[936];
	}	
?>
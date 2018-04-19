<?php
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	//Verificando se o usuário ja avaliou o comentario
	$s = "INSERT INTO papiroweb.".PFIX."comentario_leitura (uid, social, fid, cid, time) VALUES ('$uid', '$social', '$fid', '$cid', '$time') ";
	if($r = $Qry->query($s)){
		//insert com sucesso
		$output = $msg[929];
	}else{
		//erro ao tentar fazer o insert
		$output = $msg[928];
	}
?>
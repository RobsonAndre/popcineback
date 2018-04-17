<?php
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	//Verificando se o usuário ja avaliou o comentario
	$s = "SELECT indice FROM papiroweb.".PFIX."comentario_avaliacao WHERE uid='$uid' AND social='$social' AND fid='$fid' AND cid='$cid' ";
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	if($l){
		//fazer update no comentario
		$s = "UPDATE papiroweb.".PFIX."comentario_avaliacao SET nota = '$nota', time = '$time' WHERE uid='$uid' AND social='$social' AND fid='$fid' AND cid='$cid' ";
		if($r = $Qry->query($s)){
			//insert com sucesso
			$output = $msg[929];
		}else{
			//erro ao tentar fazer o insert
			$output = $msg[928];
		}	
	}else{
		//fazer insert no comentario
		$s = "INSERT INTO papiroweb.".PFIX."comentario_avaliacao ( uid, social, fid, cid, nota, time ) VALUES ( '$uid', '$social', '$fid', '$cid', '$nota', '$time' )";
		if($r = $Qry->query($s)){
			//insert com sucesso
			$output = $msg[930];
		}else{
			//erro ao tentar fazer o insert
			$output = $msg[928];
		}
	}
	
?>
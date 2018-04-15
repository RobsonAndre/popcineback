<?php
	//verificando a quantidade de caracters do comentario
	if(strlen($comentario)>3){
		$time = time();
		$Conn = new Conn;
		$Qry  = new Qry; 
		$c = $Conn->connect(HOST,USER,PASS,DB);
		//Verificando se o usuário ja comentou este filme
		$s = "SELECT indice FROM papiroweb.".PFIX."comentario WHERE uid='$uid' AND social='$social' AND fid='$fid'";
		$r = $Qry->query($s);
		$l = $Qry->rows($r);
		if($l){
			$output = $msg[922];	
		}else{
			$s = "INSERT INTO papiroweb.".PFIX."comentario( uid, social, fid, cid, comentario, spoiler, time ) VALUES ( '$uid', '$social', '$fid', '$cid', '$comentario', '$spoiler', '$time' )";
			if($r = $Qry->query($s)){
				$output = $msg[923];
			}else{
				$output = $msg[924];
			}
		}
	}else{
		$output = $msg[927];	
	}
?>
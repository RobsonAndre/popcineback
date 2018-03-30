<?php
	//Verificando se o filme ja nao foi adcionado como assisti por este usuário
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	$s = "SELECT indice FROM papiroweb.".PFIX."gostei WHERE uid='$uid' AND social='$social' AND fid='$fid'";
	$r = $Qry->query($s);
	$l   = $Qry->rows($r);
	if($l){
		$output = $msg[910];	
	}else{
		$s = "INSERT INTO papiroweb.".PFIX."gostei( uid, social, fid, nota, time ) VALUES ( '$uid', '$social', '$fid', '$nota', '$time' )";
		if($r = $Qry->query($s)){
			$output = $msg[909];
		}else{
			$output = $msg[903];
		}
	}
?>
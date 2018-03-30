<?php
	//Verificando se o filme ja nao foi adcionado como assisti por este usuário
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	$s = "SELECT indice FROM papiroweb.".PFIX."recomendo WHERE uid='$uid' AND social='$social' AND fid='$fid'";
	$r = $Qry->query($s);
	$l   = $Qry->rows($r);
	if($l){
		$output = $msg[913];	
	}else{
		$s = "INSERT INTO papiroweb.".PFIX."recomendo( uid, social, fid, time ) VALUES ( '$uid', '$social', '$fid', '$time' )";
		if($r = $Qry->query($s)){
			$output = $msg[912];
		}else{
			$output = $msg[903];
		}
	}
?>
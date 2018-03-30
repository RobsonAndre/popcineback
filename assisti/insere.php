<?php
	//Verificando se o filme ja nao foi adcionado como assisti por este usuário
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	$s = "SELECT indice FROM papiroweb.".PFIX."assisti WHERE uid='$uid' AND social='$social' AND fid='$fid'";
	$r = $Qry->query($s);
	$l   = $Qry->rows($r);
	if($l){
		$output = $msg[907];	
	}else{
		$s = "INSERT INTO papiroweb.".PFIX."assisti( uid, social, fid, time ) VALUES ( '$uid', '$social', '$fid', '$time' )";
		if($r = $Qry->query($s)){
			$output = $msg[906];
		}else{
			$output = $msg[903];
		}
	}
?>
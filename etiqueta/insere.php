<?php
	//Verificando de a etiqueta ja nao foi adicionada
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	$s = "SELECT indice FROM papiroweb.".PFIX."etiqueta WHERE uid='$uid' AND social='$social' AND fid='$fid' AND etiqueta='$etiqueta'";
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	if($l){
		$output = $msg[901];	
	}else{
		$s = "INSERT INTO papiroweb.".PFIX."etiqueta ( uid, social, fid, etiqueta, time ) VALUES ( '$uid', '$social', '$fid', '$etiqueta', '$time' )";
		if($r = $Qry->query($s)){
			$output = $msg[902];
		}else{
			$output = $msg[903];
		}
	}
?>
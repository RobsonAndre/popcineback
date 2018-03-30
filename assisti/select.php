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
		$output = $msg[915];	
	}else{
		$output = $msg[916];
	}
?>